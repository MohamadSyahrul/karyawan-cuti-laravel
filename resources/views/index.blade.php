@extends('layout.master')

@section('title')
Dashboard
@endsection

@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- Dashboard Analytics Start -->
        <section id="dashboard-analytics">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card bg-analytics text-white">
                        <div class="card-content">
                            <div class="card-body text-center">
                                <img src="{{asset('template/app-assets/images/elements/decore-left.png')}}" class="img-left"
                                    alt=" card-img-left">
                                <img src="{{asset('template/app-assets/images/elements/decore-right.png')}}" class="img-right"
                                    alt="card-img-right">
                                <div class="avatar avatar-xl bg-primary shadow mt-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-award white font-large-1"></i>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h1 class="mb-2 text-white">Selamat Datang Di Dashboard MCeasy</h1>
                                    <p class="m-auto w-75">Selamat Bekerja Dan Merai Masa depan dengan <strong>MCeasy</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-sm-7 col-12">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-check-square text-primary font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1">{{$krw}}</h2>
                            <p class="mb-0">Karyawan</p>
                        </div>
                        <div class="card-content">
                            <div id="line-area-chart-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-7 col-12">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-success p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-credit-card text-success font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1">{{$cuti}}</h2>
                            <p class="mb-0">Cuti</p>
                        </div>
                        <div class="card-content">
                            <div id="line-area-chart-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Dashboard Analytics end -->

    </div>
</div>

@endsection('content')
