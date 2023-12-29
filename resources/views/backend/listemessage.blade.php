@extends('layouts.body')

@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <h3>LISTE DES MESSAGES</h3>
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
                                    <th>ID</th>
                                    <th>NOM & PRENOM</th>
                                    <th>EMAIL</th>
                                    <th>TELEPHONE</th>
                                    <th>SUJET</th>
                                    <th>MESSAGE</th>
                                    <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                    <tr>
                                        <th class="text-bold-500">ZAA</th>
                                        <td>{{ $contact->nomprenom }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->contact }}</td>
                                        <td>{{ $contact->sujet }}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td>
                                            <a href="{{ url('/view_contact',$contact->id) }}"><i
                                                class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="eye"></i></a>
                                            <a href="{{ url('/supprimer_contact',$contact->id) }}"><i
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
