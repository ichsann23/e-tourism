<?php

namespace App\Http\Controllers;

use App\Models\penginapan;
use Illuminate\Http\Request;

class PenginapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dataPenginapan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahPenginapan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        // $request->validate([
        //     'nama' => 'required',
        //     'link' => 'required',
        //     'alamat' => 'required',
        //     'nohp' => 'required',
        //     'harga' => 'required',
        //     'fasilitas' => 'required',
        //     'ulasan' => 'required',
        //     'foto' => 'required |image|mimes:jepg,png,jpg|max:2048'
        // ]);

        // $image = $request->file('foto');
        // $new_image = rand() . '.' . $image->getClientOriginalExtension();

        // $dataPenginapan = array(
        //     'nama' => $request->nama,
        //     'nama' => $request->link,
        //     'alamat' => $request->alamat,
        //     'mohp' => $request->mohp,
        //     'harga' => $request->harga,
        //     'fasilitas' => $request->fasilitas,
        //     'ulasan' => $request->ulasan,
        //     'foto' => $request->$new_image
        // );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penginapan  $penginapan
     * @return \Illuminate\Http\Response
     */
    public function show(penginapan $penginapan)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penginapan  $penginapan
     * @return \Illuminate\Http\Response
     */
    public function edit(penginapan $penginapan)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penginapan  $penginapan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penginapan $penginapan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penginapan  $penginapan
     * @return \Illuminate\Http\Response
     */
    public function destroy(penginapan $penginapan)
    {
        //
    }
}
