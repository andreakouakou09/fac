<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter Categorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>AJOUTER UNE CATEGORIE</h1>
        <hr>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <ul>
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
        <form action="{{ url('/ajouter_traitement_categorie') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="titre" class="form-label">Nom de la categorie</label>
              <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description de la categorie</label>
                <textarea name="description" id="" class="form-control" cols="5" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </form>
          <br>
          <a href="{{ asset('/categories') }}" class="btn btn-danger">Revenir a la liste des categories</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
