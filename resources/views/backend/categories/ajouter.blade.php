@extends('layouts.body')

@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Ajouter une categorie</h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ajouter une categorie</li>
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


    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ url('/ajouter_traitement_categorie') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="">titre de la categorie</label>
                                            <input type="text" id="" class="form-control" placeholder="Entrez le titre de la categorie"
                                            name="nom">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Entrez la description de la categorie"></textarea>
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
