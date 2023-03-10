<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.pengaduan');
    }

    public function history()
    {
        return view('user.history');
    }

    public function adminhistory(){
        $pengaduan = DB::table('pengaduan')->where('status','Selesai')->get();
        return view('admin.tanggapan.history', compact('pengaduan'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengaduan = new Pengaduan;
        if($request->hasfile('foto'))
        {
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extention;
            $file->move('uploads/', $filename);
            $pengaduan->foto = $filename;
        }
        $pengaduan->tgl_pengaduan = $request->input('tgl_pengaduan');
        $pengaduan->isi_laporan = $request->input('isi_laporan');
        $pengaduan->id_user = $request->input('id_user');
        $pengaduan->status = 'Pending';
        $pengaduan->save();

        return redirect()->route('pengaduan.index')->with('pesan','Data Berhasil di Kirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }
}
