@extends('layouts.body')

@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12 order-md-1 order-last">
                <h3>Modifier un poste</h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
                <div class="col-12 col-md-12 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Modifier Post</li>
                        </ol>
                    </nav>
                </div>

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
            </div>

        </div>

    </div>


    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="{{ url('/modifier_traitement_post') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <input type="text" name="id" style="display:none" value="{{ $post->id }}">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Titre du post</label>
                                            <input type="text"  class="form-control" placeholder="Entrer le titre du poste"
                                            name="titre" value="{{ $post->title }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="">Image</label>
                                            <input type="file" id="" class="form-control" name="image" value="{{ $post->image }} ">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Categorie du post</label>
                                            <select name="id_category" id="" class="form-select">
                                                <option value="">Selectionner une option</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Description</label>
                                            <textarea class="form-control" name="description" id="" cols="30" rows="5" placeholder="Entrez ici le message ...">{{ $post->description}}</textarea>

                                        </div>
                                    </div>

                                    <div class="form-group col-12"></div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Valider</button>
                                        <a href="{{ asset('/posts') }}" class="btn btn-success mr-1 mb-1">Liste des Postes</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Snow Editor</h4>
            </div>
            <div class="card-body">
                <p>Snow is a clean editor theme</p>
                <div id="snow">
                    <p>Hello World!</p>
                    <p>Some initial <strong>bold</strong> text</p>
                    <p><br></p>

                </div>
            </div>
        </div>
    </section>
</div>

@endsection
