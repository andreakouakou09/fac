@extends('layouts.body')

@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>MODIFIER LA CATEGORIE</h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modifier une categorie</li>
                    </ol>
                </nav>
            </div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>


    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ url('/modifier_traitement_category') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <input type="text" name="id" style="display:none" value="{{ $category->id }}">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="">titre de la categorie</label>
                                            <input type="text" id="" class="form-control" name="nom" value="{{ $category->nom }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea name="description" id="" cols="30" rows="5" class="form-control" >{{ $category->description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-12"></div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Valider</button>
                                        <a href="{{ asset('/categories') }}" class="btn btn-light-secondary mr-1 mb-1">Liste des categories</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- // Basic multiple Column Form section end -->
</div>

@endsection

{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>MODIFIER LA CATEGORIE</h1>
        <hr>

        <ul>
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
        <form action="{{ url('/modifier_traitement_category') }}" method="POST">
            @csrf
            <input type="text" name="id" style="display:none" value="{{ $category->id }}">
            <div class="mb-3">
              <label for="titre" class="form-label">Titre de la categorie</label>
              <input type="text" class="form-control" name="nom" value="{{ $category->nom }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description du categorie</label>
                <textarea name="description" id="" class="form-control" cols="5" rows="5">{{ $category->description}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </form>
          <br>
          <a href="{{ asset('/posts') }}" class="btn btn-danger">Revenir a la liste des categories</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html> --}}
