<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href={{ asset('assets/images/favicon.ico') }}>

		<!-- App css -->
		<link href={{ asset('assets/css/bootstrap-purple.min.css') }} rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href={{ asset('assets/css/app-purple.min.css') }} rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href={{ asset('assets/css/bootstrap-purple-dark.min.css') }} rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
		<link href={{ asset('assets/css/app-purple-dark.min.css') }} rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />

		<!-- icons -->
		<link href={{ asset('assets/css/icons.min.css') }} rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                                </div>
                                @endif
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="/" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src={{ asset('assets/images/logo.png') }} alt="" height="26">
                                            </span>
                                        </a>
                    
                                        <a href="/" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src={{ asset('assets/images/logo.png') }} alt="" height="26">
                                            </span>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-4 mt-3">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                                </div>

                                <form method="POST" action="{{ route('password.email') }}">

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Reset Password </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                
                                </a></p>
                                @if (Route::has('login'))
                                <li class="nav-item">
                                    <p class="text-white-50">Back to <a href="auth-login.html" class="">
                                    <a class="text-white ml-1" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            <script>document.write(new Date().getFullYear())</script> &copy; <a href="" class="text-white-50">Excitel PNT Team</a> 
        </footer>

        <!-- Vendor js -->
        <script src={{ asset('assets/js/vendor.min.js') }}></script>

        <!-- App js -->
        <script src={{ asset('assets/js/app.min.js') }}></script>
        
    </body>
</html>