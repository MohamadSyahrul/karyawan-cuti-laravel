@extends('layout.master')
@section('title')
Edit Karyawan
@endsection
@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-body">
        <!-- Basic Horizontal form layout section start -->
        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data Karyawan</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" action="{{ route('karyawan.update',$karyawan->id) }}" method="POST">
                                    @method('put')
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Nomor Induk</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control"
                                                            name="no_induk" value="{{$karyawan->no_induk}}" placeholder="Masukan Nomor Induk">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Nama</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control"
                                                            name="nama" value="{{$karyawan->nama}}" placeholder="Masukan Nama Karyawan">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Alamat</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <fieldset class="form-group">
                                                            <textarea class="form-control" name="alamat" id="basicTextarea">
                                                                {{$karyawan->alamat}}
                                                            </textarea>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Tanggal Lahir</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="date" class="form-control"
                                                            name="tgl_lahir" value="{{$karyawan->tgl_lahir}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Tanggal Gabung</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="date" class="form-control"
                                                            name="tgl_gabung" value="{{$karyawan->tgl_gabung}}">
                                                    </div>
                                                </div>
                                            </div>

                                            

                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                <button type="reset"
                                                    class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic Horizontal form layout section end -->
    </div>
</div>
@endsection
