<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login - Tableau de bord</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.css') }}">

    <link rel="shortcut icon" href="{{ asset('backend//assets/images/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/app.css') }}">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="{{ asset('backend/assets/images/favicon.svg') }}" height="48" class='mb-4'>
                                <h3>Connexion</h3>
                                <p>Veuillez vous connecter pour continuer sur FAC.</p>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Email</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="" type="email" name="email" required autofocus autocomplete="username">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password">Mot de passe</label>
                                        @if (Route::has('password.request'))
                                            {{-- <a href="{{ route('password.request') }}">Avez-vous un compte?</a> --}}
                                            <a href="{{ route('password.request') }}" class='float-right'>
                                                <small>Mot de passe oublié ?</small>
                                            </a>
                                        @endif

                                    </div>
                                    <div class="position-relative">
                                        <input class="form-control" id="password" type="password" name="password" required autocomplete="current-password">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class='form-check clearfix my-4'>
                                    <div class="checkbox float-left">
                                        <input type="checkbox" id="checkbox1" class='form-check-input' >
                                        <label for="checkbox1" name="remember">Se souvenir de moi</label>
                                    </div>
                                    <div class="float-right">
                                        <a href="{{ route('register') }}">Avez-vous un compte?</a>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <button class="btn btn-primary float-right">Soumettre</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('backend/assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
</body>

</html>

