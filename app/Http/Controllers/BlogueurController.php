<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogueur;
use DB;


class BlogueurController extends Controller
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


    public function findAll()
    {
        $blogueur = Blogueur::get();
        return response()->json($blogueur);
    }

    public function findById($blogueur_id)
    {
        $blogueur = Blogueur::find($blogueur_id);
        return response()->json($blogueur);
    }

    public function findByMail($blogueur_email)
    {
        $blogueur = Blogueur::where('email', $blogueur_email)->firstOrFail();
        return response()->json($blogueur);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'image' => 'required',
            ]);

        $create = Blogueur::create($request->all());

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
        $blogueurs = Blogueur::get();
        return view('blogueurs.affichage',compact('blogueurs'));
    }

    public function bannir($id)
    {
        DB::table('blogueurs')->where('email', '=', $id)
            ->update(array('active' => 0));
    
        return $this->affichage();
    }

    public function debannir($id)
    {
        DB::table('blogueurs')->where('email', '=', $id)
            ->update(array('active' => 1));
    
        return $this->affichage();
    }
}
