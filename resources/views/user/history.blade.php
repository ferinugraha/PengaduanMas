@extends('layouts.user')

@section('content')
    
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>History Pengaduan</h3>
                    <p class="text-subtitle text-muted">For history to check they list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">History Pengaduan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <?php
                        $id = Auth::user()->id;
                        $history = DB::table('pengaduan')->where('id_user', $id)->get();
                    ?>

                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Tgl Pengaduan</th>
                                <th>NIK</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Isi Laporan</th>
                                <th>Petugas</th>
                                <th>Tanggapan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                            ?>
                            @foreach ($history as $item)
                            <?php
                                $user = DB::table('users')->where('id', $item->id_user)->get();
                                $data_tanggapan = DB::table('tanggapan')->where('id_pengaduan', $item->id )->get();
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <?php if ($item->foto == '') { ?>
                                        <td style="color:red">Kosong</td>
                                    <?php } else {?>
                                        <td><img src="{{ asset('uploads/'.$item->foto) }}" width="100" height="100" alt=""></td>
                                    <?php } ?>

                                    <?php if ($item->tgl_pengaduan == '') { ?>
                                        <td style="color:red">Kosong</td>
                                    <?php } else {?>
                                        <td>{{ $item->tgl_pengaduan }}</td>
                                    <?php } ?>

                                    @foreach($user as $row)
                                        <?php if ($row->nik == '') { ?>
                                            <td style="color:red">Kosong</td>
                                        <?php } else {?>
                                            <td>{{ $row->nik }}</td>
                                        <?php } ?>

                                        <?php if ($row->name == '') { ?>
                                            <td style="color:red">Kosong</td>
                                        <?php } else {?>
                                            <td>{{ $row->name }}</td>
                                        <?php } ?>
                                    @endforeach

                                    <?php if ($item->status == '') { ?>
                                        <td style="color:red">Kosong</td>
                                    <?php } else {?>
                                        <td>{{ $item->status }}</td>
                                    <?php } ?>

                                    <?php if ($item->isi_laporan == '') { ?>
                                        <td style="color:red">Kosong</td>
                                    <?php } else {?>
                                        <td>{{ $item->isi_laporan }}</td>
                                    <?php } ?>

                                    @foreach($data_tanggapan as $value)
                                        <?php
                                            $petugas = DB::table('users')->where('id', $value->id_petugas)->get();
                                        ?>

                                        @foreach($petugas as $value2)
                                            <td>{{ $value2->name }}</td>
                                        @endforeach

                                        <?php if ($value->tanggapan == '') { ?>
                                            <td style="color:red">Kosong</td>
                                        <?php } else {?>
                                            <td>{{ $value->tanggapan }}</td>
                                        <?php } ?>

                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

</div>

@endsection