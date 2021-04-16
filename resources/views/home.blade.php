@extends('layouts.app')
@section('title', 'home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! client
                </div>
                <div class="card-body">
                <h2>List des vehicules disponibles</h2>
                    <ul class="list-group">    
                        @foreach($vehicules as $vehicule)
                            <li class="list-group-item">{{$vehicule->marque}}<span class="badge">12</span></li>
                        @endforeach
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
