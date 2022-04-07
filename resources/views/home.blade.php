@extends('layouts.adminLayout')
@section ('home')
active
@endsection
@section('konten')
<div class="container">
    <h3 align="center" class="mt-5">Rangkuman Isi Konten Landing Page</h3> <br>
    <hr>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                    <div class="col">
                        <div class="numbers">
                            <h5 align="center">Jumlah Team</h5>
                            <p class="text-success" align="center"> <b>0</b></p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                    <div class="col">
                        <div class="numbers">
                            <h5 align="center">Jumlah Kebijakan dan Aturan</h5>
                            <p align="center" class="text-danger"> <b>0</b> </p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                </div>
                </div>
            </div>

        </div>
        <hr>
        <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                        <div class="col">
                            <div class="numbers">
                                <h5 align="center">Jumlah Layanan</h5>
                                <p class="text-success" align="center"> <b>{{ $jumlah_layanan }}</b></p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                        <div class="col">
                            <div class="numbers">
                                <h5 align="center">Jumlah Testimoni</h5>
                                <p align="center" class="text-danger"> <b>{{ $jumlah_testimoni }}</b> </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                        <div class="col">
                            <div class="numbers">
                            <h5 align="center">Jumlah FAQ</h5>
                            <p align="center" class="text-primary"> <b>{{ $jumlah_faq }}</b> </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                    </div>
                    </div>
                </div>
        </div> 
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                    <div class="col">
                        <div class="numbers">
                            <h5 align="center">Jumlah Competition and Event</h5>
                            <p class="text-success" align="center"> <b>0</b></p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                    <div class="col">
                        <div class="numbers">
                            <h5 align="center">Jumlah Siaran dan Pers</h5>
                            <p align="center" class="text-danger"> <b>0</b> </p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                    <div class="col">
                        <div class="numbers">
                        <h5 align="center">Jumlah Portofolio</h5>
                        <p align="center" class="text-primary"> <b>0</b> </p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                </div>
                </div>
            </div>
        </div>

    </div>        
</div>
@endsection