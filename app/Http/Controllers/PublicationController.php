<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Publication;
use DB;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function findAll()
    {
        $publications = DB::table('publications')
                            ->join('blogueurs', function ($join) {
                                $join->on('publications.blogueur_id', '=', 'blogueurs.id');
                            })
                            ->select('publications.id as pubid', 'blogueurs.id', 'publications.title', 'publications.image as pic', 'publications.latitude', 'publications.longitude', 'blogueurs.name', 'blogueurs.image')
                            ->orderBy('publications.created_at', 'desc')
                            ->get();
        return response()->json($publications);
    }

    public function findById($blogueur_id)
    {
        $publications = Publication::find($blogueur_id);
        return response()->json($publications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'blogueur_id' => 'required',
            ]);

        $create = Publication::create($request->all());

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
        $publications = Publication::get();
        return view('publications.affichage',compact('publications'));
    }

    public function supprimer($id)
    {
        DB::table('publications')->where('id', '=', $id)
            ->delete();
    
        return $this->affichage();
    }
}
