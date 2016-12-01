@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Gestion des blogueurs</div>

                        <div class="panel-body">
                            <a href="/blogueurs/affichage">Blogueurs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Gestions des publications</div>

                        <div class="panel-body">
                            <a href="/publications/affichage">Publications</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Gestions des commentaires</div>

                        <div class="panel-body">
                            <a href="/commentaires/affichage">Commentaires</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
