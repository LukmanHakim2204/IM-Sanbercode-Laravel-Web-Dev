<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casts = DB::table('cast')->get();
        return view('pages.cast.index', compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|min:3|max:50',
                'age' => 'required|integer',
                'bio' => 'required'
            ],
            [
                'required' => 'inputan :attribute harus di isi',
                'integer' => 'inputan :attribute harus berupa angka'
            ]
        );
        DB::table('cast')->insert([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'bio' => $request->input('bio')
        ]);
        return redirect()->route('cast');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cast = DB::table('cast')->find($id);
        return view('pages.cast.detail', compact('cast'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cast = DB::table('cast')->find($id);
        return view('pages.cast.update', compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'age' => 'required|integer',
            'bio' => 'required'
        ]);
        DB::table('cast')->where('id', $id)->update([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'bio' => $request->input('bio')
        ]);
        return redirect()->route('cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('cast')->where('id', $id)->delete();
        return redirect()->route('cast');
    }
}