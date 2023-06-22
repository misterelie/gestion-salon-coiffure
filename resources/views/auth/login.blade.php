{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

        <meta charset="utf-8" />
        <title>Se connecter | Accédez à votre compte Administration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Minimal Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('asset-backend-admin/assets/images/modele-afro-americaine-studio.jpg')}}">

        <!-- Layout config Js -->
        <script src="{{asset('asset-backend-admin/assets/js/layout.js')}}"></script>
        <!-- Bootstrap Css -->
        <link href="{{asset('asset-backend-admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('asset-backend-admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('asset-backend-admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{asset('asset-backend-admin/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />


        <style>
            .bg-primary{
               background-image: url("../asset-backend-admin/femme-styliste.jpg");
               background-size: cover;
            }
        </style>
    </head>

    <body>

        <section class="auth-page-wrapper-2 py-4 position-relative d-flex align-items-center justify-content-center min-vh-100 bg-light">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <div class="auth-card card bg-primary h-100 rounded-0 rounded-start border-0 d-flex align-items-center justify-content-center overflow-hidden p-4">
                            <div class="auth-image">
                                <img src="assets/images/logo-light-full.png" alt="" height="42" />
                                <img src="assets/images/effect-pattern/auth-effect-2.png" alt="" class="auth-effect-2" />
                                <img src="assets/images/effect-pattern/auth-effect.png" alt="" class="auth-effect" />
                                <img src="assets/images/effect-pattern/auth-effect.png" alt="" class="auth-effect" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card mb-0 rounded-0 rounded-end border-0">
                            <div class="card-body p-4 p-sm-5 m-lg-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary fs-22">Bienvenue au salon 
                                        <span style="color: #1b9c1e !important; font-weigth: bold; font-family: 'Roboto', sans-serif;">'Les Mains d'Or'</span></h5>
                                    <p class="text-muted">Connectez-vous avance de continuer!</p>
                                </div>
                                <div class="p-2 mt-5">
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i class="ri-user-3-line"></i></span>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" :value="old('email')" name="email" id="email" placeholder="Entrer votre email">
                                            </div>
                                            @error('email')
                                                <span class="text-danger">Cet email est incorrect</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            @if (Route::has('password.request'))
                                                <div class="float-end">
                                                    <a href="{{ route('password.request') }}" class="text-muted">
                                                        <span style="color: #1b9c1e; font-weight:bold">Mot de passe oublié?</span>
                                                    </a>
                                                </div>
                                            @endif

                                            <label class="form-label" for="password-input">Mot de passe</label>
                                            <div class="position-relative auth-pass-inputgroup overflow-hidden">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ri-lock-2-line"></i></span>
                                                    <input type="password" name="password" 
                                                    class="form-control pe-5 password-input  @error('password') is-invalid @enderror" placeholder="Entrez le mot de passe" id="password-input">
                                                @error('password')
                                                    <span class="text-danger">Veuillez saisir le mot de passe</span>
                                                 @enderror
                                                </div>
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" value="" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">
                                                Souvenez-vous de moi
                                            </label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Se connecter</button>
                                        </div>
                                    </form>

                                    <div class="text-center mt-4">
                                        <p class="mb-0">Vous n'avez pas de compte ? <a href="{{route('register')}}" class="fw-semibold text-secondary text-decoration-underline"> S'inscrire</a> </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
            </div>
        </section>

        <!-- JAVASCRIPT -->
        <script src="{{asset('asset-backend-admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('asset-backend-admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('asset-backend-admin/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
        <script src="{{asset('asset-backend-admin/assets/js/plugins.js')}}"></script>
        <script src="{{asset('asset-backend-admin/assets/js/pages/password-addon.init.js')}}"></script>

    </body>
</html>
