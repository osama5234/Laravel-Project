<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\inquiry;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;
use App\Page;
use Image;

class HomeController extends Controller
{
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;

    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();

        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first();

        View()->share('logo',$logo);
        View()->share('favicon',$favicon);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $page = DB::table('pages')->where('id', 1)->first();
       $banners =  DB::table('banners')->get();
       $categories = DB::table('categories')->get();
       $section = DB::table('section')->where('page_id', 1)->get();
       $products = DB::table('products')->get();
       $rent_products = DB::table('products')->where('is_rental',1)->get();
       $instagram = DB::table('instagram_photos')->get();


       return view('welcome', compact('page','banners','categories','section','products','rent_products','instagram'));
    }
    public function contact_index()
    {
        $page = DB::table('pages')->where('id', 6)->first();
        $instagram = DB::table('instagram_photos')->get();
        return view('contact',compact('page','instagram'));
    }
    public function about_index()
    {
        $page = DB::table('pages')->where('id', 2)->first();
        $section = DB::table('section')->where('page_id', 2)->get();
        $instagram = DB::table('instagram_photos')->get();
        return view('about',compact('page','section','instagram'));
    }
    public function product_index()
    {
        $page = DB::table('pages')->where('id', 3)->first();
        $instagram = DB::table('instagram_photos')->get();
        $products = DB::table('products')->get();
        return view('product',compact('page','instagram','products'));
    }
    public function blog_index()
    {
        $page = DB::table('pages')->where('id', 4)->first();
        $instagram = DB::table('instagram_photos')->get();
        $blog = DB::table('blogs')->get();
        return view('blog',compact('page','instagram','blog'));
    }




    public function careerSubmit(Request $request)
    {


        inquiry::create($request->all());


        return response()->json(['message'=>'Thank you for contacting us. We will get back to you asap', 'status' => true]);
        return back();
    }

    public function newsletterSubmit(Request $request){

        $is_email = newsletter::where('newsletter_email',$request->newsletter_email)->count();
        if($is_email == 0) {
            $inquiry = new newsletter;
            $inquiry->newsletter_email = $request->newsletter_email;
            $inquiry->save();
            return response()->json(['message'=>'Thank you for contacting us. We will get back to you asap', 'status' => true]);

        }else{
            return response()->json(['message'=>'Email already exists', 'status' => false]);
        }

    }

    public function updateContent(Request $request){
        $id = $request->input('id');
        $keyword = $request->input('keyword');
        $htmlContent = $request->input('htmlContent');
        if($keyword == 'page'){
            $update = DB::table('pages')
                        ->where('id', $id)
                        ->update(array('content' => $htmlContent));

            if($update){
                return response()->json(['message'=>'Content Updated Successfully', 'status' => true]);
            }else{
                return response()->json(['message'=>'Error Occurred', 'status' => false]);
            }
        }else if($keyword == 'section'){
            $update = DB::table('section')
                        ->where('id', $id)
                        ->update(array('value' => $htmlContent));
            if($update){
                return response()->json(['message'=>'Content Updated Successfully', 'status' => true]);
            }else{
                return response()->json(['message'=>'Error Occurred', 'status' => false]);
            }
        }
    }

}
