@extends('layout.master')
@section('title')
Tambah Cuti
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
                            <h4 class="card-title">Tambah Data Cuti</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" action="{{ route('cuti.store') }}" method="POST">
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
                                                            name="no_induk" value="{{old('no_induk')}}" placeholder="Masukan Nomor Induk">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Tanggal Cuti</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="date" class="form-control"
                                                            name="tgl_cuti" value="{{old('tgl_lahir')}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Lama Cuti</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="number" min="0" id="first-name" class="form-control"
                                                            name="lama_cuti" value="{{old('lama_cuti')}}" placeholder="Masukan Lama Cuti">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Keterangan</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <fieldset class="form-group">
                                                            <textarea class="form-control" name="keterangan" id="basicTextarea" rows="3" placeholder="Masukan Keterangan"></textarea>
                                                        </fieldset>
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
