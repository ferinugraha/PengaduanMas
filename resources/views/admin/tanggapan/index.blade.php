@extends('layouts.admin')

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
                    <h3>Pengaduan Siswa</h3>
                    <p class="text-subtitle text-muted">For pengaduan to check they list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pengaduan Siswa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
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
                                <th>Tanggapan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                            ?>
                            @foreach($pengaduan as $item)
                                <?php
                                    $user = DB::table('users')->where('id',$item->id_user)->get();
                                    $tanggapan = DB::table('tanggapan')->where('id_pengaduan',$item->id)->get();
                                ?>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{ asset('uploads/'.$item->foto) }}" width="100" height="100" alt=""></td>
                                    <td>{{ $item->tgl_pengaduan }}</td>
                                    @foreach($user as $value)
                                        <td>{{ $value->nik }}</td>
                                        <td>{{ $value->name }}</td>
                                    @endforeach
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->isi_laporan }}</td>
                                    <td>
                                        @foreach($tanggapan as $row)
                                            <?php if($row->tanggapan == ''){ ?> 
                                                <span>Kosong</span>
                                            <?php }else{ ?>
                                                <span>{{ $row->tanggapan }}</span>
                                            <?php } ?>
                                        @endforeach 
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <?php if($item->status == 'Pending'){ ?> 
                                                <a class="btn btn-primary" style="margin-right: 2px;" href="{{ route('admintanggapan.edit',$item->id) }}">Approve</a>
                                            <?php } else {?>
                                                <a class="btn btn-primary" href="{{ route('adminupdate',$item->id) }}">Update</a>
                                            <?php } ?>
                                        </div>	
                                    </td>
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
