<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commentaire;
use DB;

class CommentairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function findByPublicationId($publication_id)
    {
        $commentaires = DB::table('commentaires')
                            ->join('blogueurs', function ($join) {
                                $join->on('commentaires.blogueur_id', '=', 'blogueurs.id');
                            })
                            ->get()->where('publication_id', $publication_id);
        return response()->json($commentaires);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
            'publication_id' => 'required',
            'blogueur_id' => 'required',
            ]);

        $create = Commentaire::create($request->all());

        return response()->json($create);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function affichage()
    {
        $commentaires = Commentaire::get();
        return view('commentaires.affichage',compact('commentaires'));
    }

    public function supprimer($id)
    {
        DB::table('Commentaires')->where('id', '=', $id)
            ->delete();
    
        return $this->affichage();
    }
}
