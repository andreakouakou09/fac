@extends('layouts.body')

@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Liste des Postes</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>

        <!-- Hoverable rows start -->
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">

                    <div class="card-content">
                        <!-- table hover -->
                        <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th>IMAGE</th>
                                <th>TITRE</th>
                                <th>CATEGORIE</th>
                                <th>DESCRIPTION</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                   <tr>
                                        <td>{{ $post->image }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->category->nom }}</td>
                                        <td>{{ $post->description }}</td>
                                        <td>
                                            <a href="{{ url('/modifier_post',$post->id) }}"><i
                                                class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="edit"></i></a>
                                            <a href="{{ url('/supprimer_post',$post->id) }}"><i
                                                class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="delete"></i></a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hoverable rows end -->

    </div>

</div>
@endsection
