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
                    <h3>Add</h3>
                    <p class="text-subtitle text-muted">Add Akun</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Akun</li>
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
                            <h4 class="card-title">Add Akun</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                    <form class="needs-validation" action="{{ route('akun.create') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
        
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Name</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    placeholder="Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Email</label>
                                                <input type="text" id="last-name-column" class="form-control"
                                                    placeholder="Email"  name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="country-floating">Role</label>
                                                <select class="form-control" name="role" id="validationCustom05">
                                                    <option data-display="Select">Please select</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Petugas">Petugas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Password</label>
                                                <input type="password" id="city-column" class="form-control"
                                                    placeholder="******" name="password">
                                            </div>
                                        </div>
                                        
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