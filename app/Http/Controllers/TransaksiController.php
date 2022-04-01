<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\Barang;
use App\Pelanggan;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('transaksi.index',[
            'transaksis' => $transaksis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggans= Pelanggan::all();
        $barangs= Barang::all();
        
        return view('transaksi.create',[
            'barangs' => $barangs,
            'pelanggans' => $pelanggans
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

        $validatedData = validator($request->all(),[
            'id_barang' => 'required|integer',
            'id_pelanggan' => 'required|string',
            'total_pesanan' => 'required|integer',
            'tanggal' => 'required|date',
            'jumlah' => 'required|integer',
        ])->validate();

        $transaksi = new Transaksi($validatedData);
        $transaksi->save();
        

        return redirect(route('daftarTransaksi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        return view('transaksi.edit',[
            'transaksi' => $transaksi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $validatedData = validator($request->all(),[
            'nama' => 'required|string',
            'jenis' => 'required|string',
            'harga' => 'required|integer',
        ])->validate();

        $transaksi->nama = $validatedData['nama'];
        $transaksi->jenis =$validatedData['jenis'];
        $transaksi->harga =$validatedData['harga'];
        $transaksi->save();

        return redirect(route('daftarTransaksi'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect(route('daftarTransaksi'));
    }
}
