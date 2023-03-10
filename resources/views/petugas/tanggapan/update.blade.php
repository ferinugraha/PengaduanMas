@extends('layouts.petugas')

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
                    <h3>Approve Pengaduan</h3>
                    <p class="text-subtitle text-muted">Approve pengaduan User</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Approve Pengaduan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data User</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" action="{{ route('petugasupdatetanggapan',$datapengaduan->id) }}" method="Post" enctype="multipart/form-data">
                                    @csrf

                                    @method('GET')

                                    <div class="row">
                                        <?php
                                            $user = DB::table('users')->where('id',$datapengaduan->id_user)->get();
                                            $tanggapan = DB::table('tanggapan')->where('id_pengaduan',$datapengaduan->id)->get();
                                        ?>

                                        @foreach($user as $item)
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Name</label>
                                                    <input type="text" id="first-name-column" class="form-control"
                                                        placeholder="Name" value="{{ $item->name }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">NIK</label>
                                                    <input type="text" id="last-name-column" class="form-control"
                                                        placeholder="Nik" value="{{ $item->nik }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Email</label>
                                                    <input type="text" id="city-column" class="form-control"
                                                        placeholder="Email" value="{{ $item->email }}" readonly>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="country-floating">Tgl Pengaduan</label>
                                                <input type="date" id="country-floating" value="{{ $datapengaduan->tgl_pengaduan }}" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Pesan Pengaduan</label>
                                                <textarea class="form-control" cols="30" rows="11" disabled>{{ $datapengaduan->isi_laporan }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="email-id-column"></label>
                                                <img src="{{ asset('uploads/'.$datapengaduan->foto) }}" alt="" height="275" width="400" class="form-control">
                                            </div>
                                        </div>
                                    
                                    </div>


                                    <h4 class="card-title mt-5 mb-3">Berikan Tanggapan</h4>

                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Status</label>
                                                <select class="form-control" name="status" id="validationCustom05">
                                                    <option data-display="Select">Please select</option>
                                                    <option value="Pending" @if ($datapengaduan->status == 'Pending')selected @endif>Pending</option>
                                                    <option value="Proses" @if ($datapengaduan->status == 'Proses')selected @endif>Proses</option>
                                                    <option value="Selesai" @if ($datapengaduan->status == 'Selesai')selected @endif>Selesai</option>
                                                </select>
                                            </div>
                                        </div>
                                        @foreach($tanggapan as $row)

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Tgl Tanggapan</label>
                                                    <input type="date" id="country-floating" class="form-control" name="tgl_tanggapan" value="{{ $row->tgl_tanggapan }}">
                                                    <input type="text" value="{{ $datapengaduan->id }}" style="display:none;" id="country-floating" class="form-control" name="id_pengaduan" >
                                                    <input type="text" value="<?= Auth::user()->id ?>" style="display:none;" id="country-floating" class="form-control" name="id_petugas" >
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="company-column">Tanggapan</label>
                                                    <textarea class="form-control" cols="30" rows="5" name="tanggapan">{{ $row->tanggapan }}</textarea>
                                                </div>
                                            </div>
                                        @endforeach
                                    
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit"
                                                class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>

@endsection