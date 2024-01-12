@extends('layout.app')

@section('title', 'Dashboard')

@section('conten')


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
        </header>
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Dashboard Counts Section-->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card-box widget-box-two widget-two-primary">
                            <i class="mdi  mdi mdi-account-multiple widget-two-icon"></i>
                            <div class="wigdet-two-content text-white">
                                <p style="font-size: 150%" class="m-0 text-uppercase font-600 font-secondary text-overflow"
                                    title="ORDER READY">PTIT</p>
                                <h1 class="text-white counter" data-count="{{ $totalptit }}">0</span></h1>
                                <p style="font-size: 100%" class="m-0"><b>Siswa</b></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card-box widget-box-two widget-two-primary">
                            <i class="mdi  mdi mdi-account-multiple widget-two-icon"></i>
                            <div class="wigdet-two-content text-white">
                                <p style="font-size: 150%" class="m-0 text-uppercase font-600 font-secondary text-overflow"
                                    title="Statistics">SMA</p>
                                <h1 class="text-white counter" data-count="{{ $totalsma }}">0</span></h1>
                                <p style="font-size: 100%" class="m-0"><b>Siswa</b></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card-box widget-box-two widget-two-primary">
                            <i class="mdi  mdi mdi-account-multiple widget-two-icon"></i>
                            <div class="wigdet-two-content text-white">
                                <p style="font-size: 150%" class="m-0 text-uppercase font-600 font-secondary text-overflow"
                                    title="Statistics">SMP</p>
                                <h1 class="text-white counter" data-count="{{ $totalsmp }}">0</span></h1>
                                <p style="font-size: 100%" class="m-0"><b>Siswa</b></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card-box widget-box-two widget-two-primary">
                            <i class="mdi  mdi mdi-account-multiple widget-two-icon"></i>
                            <div class="wigdet-two-content text-white">
                                <p style="font-size: 150%" class="m-0 text-uppercase font-600 font-secondary text-overflow"
                                    title="Statistics">SD</p>
                                <h1 class="text-white counter" data-count="{{ $totalsd }}">0</span></h1>
                                <p style="font-size: 100%" class="m-0"><b>Siswa</b></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card-box widget-box-two widget-two-danger" style="height: 155px">
                            <i class="mdi mdi-briefcase-download widget-two-icon"></i>
                            <div class="wigdet-two-content text-white">
                                <p style="font-size: 150%" class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">
                                    payment DUE</p>
                                <h2 class="text-white counter" data-count="{{ $totalsd + $totalsmp + $totalsma + $totalptit }}">0</span></h2>
                                <p style="font-size: 100%" class="m-0"><b>Total</b></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card-box widget-box-two widget-two-info" style="height: 155px">
                            <i class="mdi mdi-account-convert widget-two-icon"></i>
                            <div class="wigdet-two-content text-white">
                                <p style="font-size: 150%" class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Total Guru
                                </p>
                                <h2 class="text-white counter" data-count="{{ $totalguru }}">0</span></h2>
                                <p style="font-size: 100%" class="m-0"><b>Total</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Count section end -->

                <!-- Updates Section -->
                <!-- <div class="row">
                                        <div class="col-lg-6 col-md-10">
                                            <div class="card-box">
                                                
                                            </div>
                                         </div>
                                        <div class="col-lg-6 col-md-10">
                                            <div class="card-box">
                                                

                                            </div>
                                         </div>

                                    </div>     -->



                
            </div> <!-- container -->

        </div> <!-- content -->



    </div>

@endsection
