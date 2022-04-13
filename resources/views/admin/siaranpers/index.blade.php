@extends('layouts.adminLayout')
@section ('siaran')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">Siaran Pers List</h3>
<p align="center">( Total : {{ $jumlah }} )</p>
<hr>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="container">
            <a href="/admin/siaran/create" class="btn btn-primary">Add Siaran Pers</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Ringkasan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($jumlah == 0)
                    <tr>
                        <td colspan="7" align="center"><b>No Data</b></td>
                    </tr>
                    @else
                    <?php $i = 1?>
                    @foreach($siaranPers as $key)
                    <tr>
                        <th scope="row">{{ $i}}</th>
                        <td scpoe="row">{{ $key->judul }}</td>
                        <td>{{ $key->ringkasan }}</td>
                        <td style="width: 20%">
                            <div class="float-start">
                                <a href="/admin/siaran/{{$key->id}}/edit" class="btn btn-warning">Edit</a>
                                <a href="/admin/siaran/{{$key->id}}" class="btn btn-success">Detail</a>
                                <form action="/admin/siaran/{{$key->id}}/delete" method="POST">
                                    @csrf
                                    <button class="btn btn-danger mt-2" type="submit">Delete</button>
                                </form>


                        </td>
                    </tr>
                    <?php $i = $i+ 1?>
                    @endforeach
                    @endif
                </tbody>
        </div>
    </div>
    @endsection