<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Liste des Posts</h1>
        <hr>
        <a href="{{ asset('/ajouter_post') }}" class="btn btn-primary">Ajouter un post</a>
        <a href="{{ asset('/ajouter_categorie') }}" class="btn btn-info">Ajouter une categorie</a>
        <hr>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <br>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>

            </tr>
            </thead>
            <tbody>
                @php
                    $ide = 1;
                @endphp
                @foreach ($posts as $post)
                   <tr>
                        <th>{{ $ide }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->image }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            <a href="{{ url('/modifier_post',$post->id) }}" class="btn btn-success">Modifier</a>
                            <a href="{{ url('/supprimer_post',$post->id) }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                    @php
                        $ide=+1;
                    @endphp
                @endforeach

            </tr>
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
