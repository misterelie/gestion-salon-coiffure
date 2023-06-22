{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
@csrf

<!-- Password Reset Token -->
<input type="hidden" name="token" value="{{ $request->route('token') }}">

<!-- Email Address -->
<div>
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)"
        required autofocus autocomplete="username" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<!-- Password -->
<div class="mt-4">
    <x-input-label for="password" :value="__('Password')" />
    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="new-password" />
    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Confirm Password -->
<div class="mt-4">
    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
        required autocomplete="new-password" />

    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>

<div class="flex items-center justify-end mt-4">
    <x-primary-button>
        {{ __('Reset Password') }}
    </x-primary-button>
</div>
</form>
</x-guest-layout> --}}


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>Créer un nouveau mot de passe | Les Main d'or</title>
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
    .auth-bg-cover {
        background-image: url("../asset-backend-admin/modele-afro-americaine-studio.jpg");
       background-size: cover;
        background-position: left center
    }
</style>

</head>

<body>
    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="container-fluid">
            <div class="row g-0 justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="card mb-0 border-0 shadow-none">
                        <div class="card-body p-4 p-sm-5 m-lg-2">
                            <div class="text-center">
                                <h5 class="text-primary fs-20">Créer un nouveau mot de passe</h5>
                                <p class="text-muted mb-3">Votre nouveau mot de passe doit être différent du mot de passe utilisé précédemment.</p>
                            </div>

                            <div class="p-2">
                                <form method="POST" action="{{ route('password.store') }}">
                                    @csrf

                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <div class="mb-3">
                                        <x-input-label class="form-label" for="email" :value="__('Email')" />
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ri-user-3-line"></i>
                                            </span>

                                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)"
                                                required autofocus autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                        </div>
                                    </div>

                                    <div class="mb-3">
                                    <x-input-label class="form-label" for="password-input" :value="__('Mot de passe')" />
                                            <div class="position-relative auth-pass-inputgroup overflow-hidden">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ri-lock-2-line"></i></span>
                                                    <input type="password" name="password" required autocomplete="new-password"
                                                    class="form-control pe-5 password-input  @error('password') is-invalid @enderror" placeholder="Entrez le mot de passe" id="password-input">
                                                </div>
                                                @error('password')
                                                    <span class="text-danger">Veuillez saisir le mot de passe</span>
                                                 @enderror
                                                 
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                    </div>

                                    <!-- Confirm Password -->
                                    <x-input-label class="form-label" for="password_confirmation" :value="__('Confirmer le mot de passe')" />
                                    <div class="position-relative auth-pass-inputgroup overflow-hidden">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ri-lock-2-line"></i></span>
                                            <input type="password" name="password_confirmation" required autocomplete="new-password"
                                            class="form-control pe-5 password-input  @error('password') is-invalid @enderror" placeholder="Entrez le mot de passe" id="password-input">
                                        </div>
                                        @error('password_confirmation')
                                            <span class="text-danger">Veuillez Confirmer le mot de passe</span>
                                         @enderror
                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-primary w-100" type="submit">Réinitialiser le mot de passe</button>
                                    </div>

                                </form>
                            </div>
                            <div class="mt-4 text-center">
                                <p class="mb-0">Attendez, je me souviens de mon mot de passe... Cliquez ici... <a href="{{route('login')}}" class="fw-semibold text-primary text-decoration-underline">Cliquez ici </a> </p>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                    <div class="text-white text-center mt-4">
                        <p class="mb-0">&copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Les Mains d'Or.  Créér par <a href=" https://alloservice.ci/">alloservice.ci</a>
                        </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end conatiner-->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{asset('asset-backend-admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('asset-backend-admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('asset-backend-admin/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('asset-backend-admin/assets/js/plugins.js')}}"></script>

    <!-- password-addon init -->
    <script src="{{asset('asset-backend-admin/assets/js/pages/passowrd-create.init.js')}}"></script>
</body>
</html>
