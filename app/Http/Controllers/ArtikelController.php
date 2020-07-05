<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModels;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $art = ArtikelModels::get_all();

        return view('artikelindex', ['art' => $art]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //Str::slug($request->judul);
        $new_ask = ArtikelModels::save([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'slug' => Str::slug($request->judul),
            'tag' => $request->tag,
            'id_penulis' => 1,
        ]);


        return redirect('/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($a)
    {
        $art = ArtikelModels::find_by_id($a);
        $art1 = "aku cinta dia";
        $art_arr = explode(" ", $art1);

        return view('artdetail', compact('art', 'art_arr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($a)
    {
        $art = ArtikelModels::find_by_id($a);

        return view('artedit', compact('art'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $a)
    {
        $artup = ArtikelModels::update($a, $request->all());
        return redirect('/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($a)
    {
        $deleteat = ArtikelModels::deleteat($a);
        return redirect('/items');
    }
}
