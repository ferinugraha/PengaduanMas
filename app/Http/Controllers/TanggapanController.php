<?php

namespace App\Http\Controllers;

use App\Models\Tanggapan;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = DB::table('pengaduan')->wherein('status',['Proses','Pending'])->get();
        return view('admin.tanggapan.index',compact('pengaduan'));
    }

    public function petugas()
    {
        $pengaduan = DB::table('pengaduan')->wherein('status',['Proses','Pending'])->get();
        return view('petugas.tanggapan.index',compact('pengaduan'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function show(Tanggapan $tanggapan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tanggapan $tanggapan, $id)
    {
        $datapengaduan = Pengaduan::find($id);

        return view('admin.tanggapan.edit',compact('datapengaduan'));
    }

    public function petugasedit(Tanggapan $tanggapan, $id)
    {
        $datapengaduan = Pengaduan::find($id);

        return view('petugas.tanggapan.edit',compact('datapengaduan'));
    }

    public function updatetanggapan(Tanggapan $tanggapan, $id)
    {
        $datapengaduan = Pengaduan::find($id);

        return view('petugas.tanggapan.update',compact('datapengaduan'));
    }

    public function admintanggapan(Tanggapan $tanggapan, $id)
    {
        $datapengaduan = Pengaduan::find($id);

        return view('admin.tanggapan.update',compact('datapengaduan'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tanggapan $tanggapan, $id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->status = $request->input('status');
        $pengaduan->update();

        $tanggapan = new Tanggapan;
        $tanggapan->tgl_tanggapan = $request->input('tgl_tanggapan');
        $tanggapan->id_pengaduan = $request->input('id_pengaduan');
        $tanggapan->id_petugas = $request->input('id_petugas');
        $tanggapan->tanggapan = $request->input('tanggapan');
        $tanggapan->save();

        return redirect()->route('admintanggapan.index')->with('pesan', 'Data Berhasil Di Approve');
    }

    public function adminupdatetanggapan(Request $request, Tanggapan $tanggapan, $id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->status = $request->input('status');
        $pengaduan->update();

        $tanggapan = Tanggapan::find($id);
        $tanggapan->tgl_tanggapan = $request->input('tgl_tanggapan');
        $tanggapan->id_pengaduan = $request->input('id_pengaduan');
        $tanggapan->id_petugas = $request->input('id_petugas');
        $tanggapan->tanggapan = $request->input('tanggapan');
        $tanggapan->update();

        return redirect()->route('admintanggapan.index')->with('pesan', 'Data Berhasil Di Approve');
    }

    public function petugasupdate(Request $request, Tanggapan $tanggapan, $id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->status = $request->input('status');
        $pengaduan->update();

        $tanggapan = new Tanggapan;
        $tanggapan->tgl_tanggapan = $request->input('tgl_tanggapan');
        $tanggapan->id_pengaduan = $request->input('id_pengaduan');
        $tanggapan->id_petugas = $request->input('id_petugas');
        $tanggapan->tanggapan = $request->input('tanggapan');
        $tanggapan->save();

        return redirect()->route('tanggapan.index')->with('pesan', 'Data Berhasil Di Approve');
    }

    public function petugasupdatetanggapan(Request $request, Tanggapan $tanggapan, $id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->status = $request->input('status');
        $pengaduan->update();

        $tanggapan = Tanggapan::find($id);
        $tanggapan->tgl_tanggapan = $request->input('tgl_tanggapan');
        $tanggapan->id_pengaduan = $request->input('id_pengaduan');
        $tanggapan->id_petugas = $request->input('id_petugas');
        $tanggapan->tanggapan = $request->input('tanggapan');
        $tanggapan->update();

        return redirect()->route('tanggapan.index')->with('pesan', 'Data Berhasil Di Approve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tanggapan $tanggapan)
    {
        //
    }
}
