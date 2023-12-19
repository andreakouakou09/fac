<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>MODIFIER LE POST</h1>
        <hr>

        <ul>
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
        <form action="{{ url('/modifier_traitement_post') }}" method="POST">
            @csrf
            <input type="text" name="id" style="display:none" value="{{ $post->id }}">
            <div class="mb-3">
              <label for="titre" class="form-label">Titre du post</label>
              <input type="text" class="form-control" name="titre" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="titre" class="form-label">Categorie du post</label>
                <select class="form-control" name="id_category">
                    <option value="">Selectionner une option</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->nom }}</option>
                    @endforeach
                </select>
              </div>
            <div class="mb-3">
              <label for="imagp" class="form-label">Image du post</label>
              <input type="file" class="form-control" name="image" value="{{ $post->image }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description du post</label>
                <textarea name="description" id="" class="form-control" cols="5" rows="5">{{ $post->description}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </form>
          <br>
          <a href="{{ asset('/posts') }}" class="btn btn-danger">Revenir a la liste des posts</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
