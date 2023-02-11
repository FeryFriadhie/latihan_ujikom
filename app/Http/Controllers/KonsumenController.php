<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konsumen = User::role('konsumen')->get();
        return view('konsumen.index', compact('konsumen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode = 'KOSM' . str_pad(User::orderBy('id', 'desc')->first()->id ??  + 1, 4, '0', STR_PAD_LEFT);
        return view('konsumen.create', compact('kode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            // nu ka satu ngambil dari database kode_user
            // nu ka dua dari name form anu di view kode_konsumen
            'kode_user' => $request->kode_konsumen,
            'name' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'password' => 'NOTASSIGN',
        ]);
        $user->assignRole('konsumen');
        return redirect()->route('konsumen.index');
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
        $konsumen = User::findOrFail($id);
        return view('konsumen.edit', compact('konsumen'));
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
        $konsumen= User::findOrFail($id);
        $konsumen->update([
            'name' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('konsumen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 1. cari dulu user dengan id yang dikirim
        $user = User::find($id);
        // 2. delete user yang sudah di cari
        $user->delete();
        // 3. balik lagi ke tabel
        return redirect()->route('konsumen.index');
    }
}
