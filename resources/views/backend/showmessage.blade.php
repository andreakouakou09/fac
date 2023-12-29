@extends('layouts.body')

@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <h3>LISTE DES MESSAGES</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>

        <!-- Hoverable rows start -->
        <p>nom et prenom:      {{ $contact->nomprenom }}</p>
        <p>Email: {{ $contact->email }}</p>
        <p>Telephone: {{ $contact->contact }}</p>
        <p>Sujet: {{ $contact->sujet }}</p>
        <p>Message: {{ $contact->message }}</p>
    </div>
</div>

@endsection
