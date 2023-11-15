<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-image1" style="background-image: url({{ asset('images/bg.jpg') }});">
        <div class="container register">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="section-heading">
                    <h3>Register</h3>
                </div>
                <div class="mb-3">
                        <label for="name" class="text-white">Name</label>
                        <input type="text" name="name" class="form-control">
                        <span class="text-danger">
                            @error('name')
                                {{$message}}
                            @enderror
                          </span>
                </div>
                <div class="mb-3">
                    <label for="email" class="text-white">Email</label>
                    <input type="email" name="email" class="form-control">
                    <span class="text-danger">
                        @error('email')
                            {{$message}}
                        @enderror
                      </span>
            </div>
            <div class="mb-3">
                <label for="name" class="text-white">Password</label>
                <input type="password" name="password" class="form-control">
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                  </span>
        </div>
        <div class="mb-3">
            <label for="name" class="text-white">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control">
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
              </span>
        </div>
        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary">REGISTER</button>
        </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
