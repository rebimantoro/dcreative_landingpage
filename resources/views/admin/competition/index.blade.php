@extends('layouts.adminLayout')
@section ('competition')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">Competition List </h3>
<p align="center">( Total : {{ $jumlah }} )</p>
<hr>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="container">
            <a href="/admin/competition/create" class="btn btn-primary">Add Competition</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Dimulai</th>
                        <th scope="col">Selesai</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @if($jumlah == 0)
                    <tr>
                        <td colspan="7" align="center"><b>No Data</b></td>
                    </tr>
                    @else
                    <?php $i = 1?>
                    @foreach($competition as $key)
                    <tr>
                        <th scope="row">{{ $i}}</th>
                        <td>{{ $key->nama }}</td>
                        <td>{{ $key->dimulai }}</td>
                        <td>{{ $key->selesai }}</td>
                        <td>{{ $key->keterangan }}</td>
                        <td>
                            <div class="d-flex flex-row bd-highlight">
                                <a href="/admin/competition/{{$key->id}}/edit" class="btn btn-warning">Edit</a>
                                <form action="/admin/competition/{{$key->id}}/delete" method="POST">
                                    @csrf
                                    <button class="btn btn-danger ms-2" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php $i = $i+ 1?>
                    @endforeach
                    @endif
                </tbody>
        </div>
    </div>

    @endsection