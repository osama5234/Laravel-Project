<?php

namespace App\Http\Controllers\instagramphoto;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\InstagramPhoto;
use Illuminate\Http\Request;
use Image;
use File;

class InstagramPhotoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('instagramphoto','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $instagramphoto = InstagramPhoto::where('name', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $instagramphoto = InstagramPhoto::paginate($perPage);
            }

            return view('instagramphoto.instagram-photo.index', compact('instagramphoto'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('instagramphoto','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('instagramphoto.instagram-photo.create');
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $model = str_slug('instagramphoto','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'name' => 'required',
			'image' => 'required'
		]);

            $instagramphoto = new InstagramPhoto($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $instagramphoto_path = 'uploads/instagramphotos/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($instagramphoto_path) . DIRECTORY_SEPARATOR. $profileImage);

                $instagramphoto->image = $instagramphoto_path.$profileImage;
            }
            
            $instagramphoto->save();
            return redirect()->back()->with('message', 'InstagramPhoto added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('instagramphoto','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $instagramphoto = InstagramPhoto::findOrFail($id);
            return view('instagramphoto.instagram-photo.show', compact('instagramphoto'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('instagramphoto','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $instagramphoto = InstagramPhoto::findOrFail($id);
            return view('instagramphoto.instagram-photo.edit', compact('instagramphoto'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('instagramphoto','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'name' => 'required',
			'image' => 'required'
		]);
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $instagramphoto = InstagramPhoto::where('id', $id)->first();
            $image_path = public_path($instagramphoto->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/instagramphotos/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/instagramphotos/'.$fileNameToStore;               
        }


            $instagramphoto = InstagramPhoto::findOrFail($id);
            $instagramphoto->update($requestData);
            return redirect()->back()->with('message', 'InstagramPhoto updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('instagramphoto','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            InstagramPhoto::destroy($id);
            return redirect()->back()->with('message', 'InstagramPhoto deleted!');
        }
        return response(view('403'), 403);

    }
}
