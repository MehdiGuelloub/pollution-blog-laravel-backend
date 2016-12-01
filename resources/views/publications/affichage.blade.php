@extends('layouts.app')

@section('content')
	<div class="container">
  <h2>Liste des Publications</h2>
  <hr>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Titre</th>
        <th>Blogueur</th>
        <th>Crée le</th>
        <th>Likes</th>
        <th>Dislikes</th>
        <th>Nombre commentaires</th>
        <th>Image </th>
        <th></th>

        
      </tr>
    </thead>

    <tbody>
    @foreach($publications as $publication)
      <tr>
        <td>{!! $publication->title  !!}</td>
        <td>{!! $publication->Blogueur->name  !!}</td>
        <td>{!! $publication->created_at  !!}</td>
        <td>{!! $publication->nb_likes  !!}</td>
        <td>{!! $publication->nb_dislikes  !!}</td>
        <td>{!! $publication->nb_comments  !!}</td>
        
        <td> <img src='{{$publication->image}} ' style="width:60px;height:60px;" > </td>
      	<td><a href="{{ url('/publications/supprimer/'.$publication->id) }}"  class="btn btn-danger"> supprimer</a>		

      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection