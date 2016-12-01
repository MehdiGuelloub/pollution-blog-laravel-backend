@extends('layouts.app')
@section('content')
<div class="container">
  <h2>Liste des Commentaires</h2>
  <hr>
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th>Commentaires</th>
        <th>crée le</th>
        <th>Titre du publication</th>
        <th>Blogueur</th>
        <th></th>
       
        
      </tr>
    </thead>

    <tbody>
    @foreach($commentaires as $commentaire)
      <tr>
        <td>{!! $commentaire->body  !!}</td>
        <td>{!! $commentaire->created_at  !!}</td>
        <td>{!! $commentaire->Publication->title  !!}</td>      
        <td>{!! $commentaire->blogueur_id  !!}</td>      
        <td><a href="{{ url('/commentaires/supprimer/'.$commentaire->id) }}"  class="btn btn-danger"> supprimer</a>   

      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection