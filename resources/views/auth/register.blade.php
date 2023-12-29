<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'enregistrer - Tableau de bord</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.css') }}">

    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/app.css') }}">
</head>

<body>
    <div id="auth">

<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="{{ asset('backend/assets/images/favicon.svg') }}" height="48" class='mb-4'>
                        <h3>S'enregister</h3>
                        <p>Veuillez remplir le formulaire pour vous inscrire.</p>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Nom d'utilisateur</label>
                                    <input type="text" class="form-control"  name="name" required autofocus autocomplete="name">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Email</label>
                                    <input type="email" class="form-control" name="email" required autocomplete="username">
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">Mot de passe</label>
                                    <input type="password" name="password" required autocomplete="new-password"  class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="company-column">Confirmation de mot de passe</label>
                                    <input type="password" name="password_confirmation" required autocomplete="new-password" class="form-control">
                                </div>
                            </div>

                        </diV>

                                <a href="{{ route('login') }}">Avez-vous un compte? Se connecter</a>
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
