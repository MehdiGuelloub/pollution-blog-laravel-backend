@extends('layouts.app')
@section('content')

<div class="container">
  <h2>Liste des Blogueurs</h2>
  <hr>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>image</th>
        <th>etat </th>

        
      </tr>
    </thead>
    
    <tbody>
    @foreach($blogueurs as $blogueur)
      <tr>
        <td>{!! $blogueur->name  !!}</td>
        <td>{!! $blogueur->email  !!}</td>
        <td> <img src='{{$blogueur->image}} ' style="width:60px;height:60px;" > </td>
        @if ($blogueur->active == 1)
      	  <td><a href="{{ url('/blogueurs/bannir/'.$blogueur->email) }}"  class="btn btn-danger"> bannir</a>		
			@else
    		 <td><a href="{{ url('/blogueurs/debannir/'.$blogueur->email) }}"  class="btn btn-success"> activer</a>	
			@endif
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection