<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static function index()
    {
        //
        $pelanggan = DB::table('pelanggan')->get();

        return view('pelanggan.index', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([
            'namaPelanggan'=>'required',
            'alamat'=>'required',
            'noTelepon'=>'required'
        ]);

        DB::table('pelanggan')->insert([
            'NamaPelanggan' => $request->get('namaPelanggan'),
            'Alamat' => $request->get('alamat'),
            "NoTelepon" => $request->get('noTelepon')
        ]);
        return redirect('/pelanggan')->with('success', 'Member saved!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $pelanggan = DB::table('pelanggan')->where('IdPelanggan', $id)->first();
        // die(json_encode($pelanggan));
        return view('pelanggan.edit', compact('pelanggan'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        DB::table('pelanggan')->where('IdPelanggan', $id)->update([
            'NamaPelanggan' => $request->get('namaPelanggan'),
            'Alamat' => $request->get('alamat')
        ]);
        return redirect('/pelanggan')->with('success', 'Member updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        DB::table('pelanggan')->where('IdPelanggan', $id)->delete();

        return redirect('/pelanggan')-> with('danger', 'Member deleted');
    }
}
