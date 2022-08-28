<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PenginapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penginapan::paginate(10);

        return view('admin.penginapan.dataPenginapan',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penginapan.tambahPenginapan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute tidak boleh kosong.',
            'mimes' => ':attribute harus berformat :values.',
        ];

        $request->validate([
            'nama' => 'required',
            'link' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'harga' => 'required',
            'fasilitas' => 'required',
            'ulasan' => 'required',
            'foto' => 'required |image|mimes:jepg,png,jpg|max:2048'
        ], $messages);

        if ($request->hasfile('foto')) {
            $file = $request->file('foto');
            $ext = $file->extension();
            $fileName = Str::slug($request->nama, "-") . '-' . uniqid();

            $urlName = 'assets/media/penginapan/' . $fileName . '.' . $ext;
        }

        $save = Penginapan::create([
            'foto' => $urlName,
            'nama' => $request->nama,
            'link' => $request->link,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'harga' => $request->harga,
            'fasilitas' => $request->fasilitas,
            'ulasan' => $request->ulasan,
        ]);

        if ($save) {
            if ($request->hasfile('foto')) {
                $file->storeAs('public/assets/media/penginapan', $fileName . '.' . $ext);
            }
            return redirect()->route('admin.penginapan');
        } else {
            return redirect()->back();
        }
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
    public function destroy(Penginapan $model, $id)
    {
        \DB::beginTransaction();
        try {
            $data = $model->findOrFail($id);

            if (Storage::exists('public/'.$data->foto)) {
                Storage::delete('public/'.$data->foto);
            }

            $data->delete();
        } catch (\Exception $exception) {
            \DB::rollback();
            return redirect()->back();
        }
        \DB::commit();
        return redirect()->back();
    }
}
