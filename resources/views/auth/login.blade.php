<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/login.css')
</head>

<body>

    <div class="container-sm mt-5 col-md-6">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">

                    <div class="mb-5 text-center">
                        <i class="bi-hexagon-fill"></i>
                        <h4>Employee Data Master</h4>
                    </div>
                    <hr>
                    <div class="row justify-content-center">

                        <div class="col-md-11 mb-3 ">
                            <div class="col-md-12">
                                <input placeholder="Enter Your Email" id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-11 mb-1">
                            <div class="col-md-12">
                                <input placeholder="Enter Your Password" id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-md-11 d-grid">
                            <button type="submit" class="btn btn-dark"><i class="bi-arrow-right-circle me-2"></i>
                                {{ __('Log In') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @vite('resources/js/app.js')

</body>

</html>

{{-- <div class="row justify-content-center">
    <div class="col-md-11 d-grid">
        <a href="{{ route('home') }}" class="btn btn-primary btn-lg mt-3"><i
                class="bi-arrow-right-circle me-2"></i> Log In</a>
    </div>
</div> --}}
