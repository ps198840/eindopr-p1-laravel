<?php

namespace App\Http\Controllers;

use App\Models\BandModel;
use Illuminate\Http\Request;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bands = BandModel::all();
        return view('bands.bands', ['bands' => $bands]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('bands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $genre = $request->input('genre');
        $founded = $request->input('founded');
        $active_till = $request->input('active_till');
        $validated = $request->validate([
            'name' => 'required',
        ]);
        BandModel::create($request->only(['name', 'genre', 'founded', 'active_till']));

        return redirect()->route('bands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $band = BandModel::find($id);
        return view('bands.show', ['band' => $band]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $band = BandModel::find($id);
        return view('bands.edit', ['band' => $band]);
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
        $validated = $request->validate([
            'name' => ['required'],
        ]);
        BandModel::find($id)->update($request -> only('name', 'genre', 'founded', 'active_till'));
        return redirect()->route('show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $band = BandModel::destroy('id', $id);
        $bands = BandModel::all();
        return view('bands.bands', ['bands' => $bands]);
    }
}
