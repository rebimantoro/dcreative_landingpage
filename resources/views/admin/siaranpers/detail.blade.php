@extends('layouts.adminLayout')
@section ('siaran')
active
@endsection
@section('konten')
<h3 align="center">Detail Siaran Pers</h3>
<h4 align="center">{{$siaranpers->judul}}</h4>
<hr>

<div class="d-flex m-4">
    <button class="btn btn-success" onclick="window.location.href='{{url('/admin/siaran')}}'">Kembali</button>
    <button class="btn btn-primary ml-auto"
        onclick="window.location.href='{{url('/admin/siaran/'.$siaranpers->id).'/edit'}}'">Edit</button>
    <form action="/admin/siaran/{{$siaranpers->id}}/delete" method="POST">
        @csrf
        <button class="btn btn-danger ml-auto" type="submit">Delete</button>
    </form>
    <button class="btn btn-warning ml-auto"
        onclick="window.location.href='{{url('/admin/siaran/create')}}'">Tambah</button>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" value="{{$siaranpers->judul}}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ringkasan</label>
                            <textarea class="form-control" rows="5" readonly>{{$siaranpers->ringkasan}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Gambar</label>
                            <img src="{{asset('Template/images/'.$siaranpers->gambar)}}" alt="{{$siaranpers->judul}}"
                                width="100%">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Artikel</label>
                            <textarea class="form-control" rows="5" readonly>{{$siaranpers->artikel}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection