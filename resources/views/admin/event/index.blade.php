@extends('layouts.adminLayout')
@section ('events')
active
@endsection
@section('konten')

<h3 align="center" class=" mt-5"> Event List</h3>
<p align="center">( Total : {{ $jumlah }} )</p>
<hr>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="container">
            <a href="/admin/event/create" class="btn btn-primary">Add Event</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Dimulai</th>
                        <th scope="col">Selesai</th>
                        <th scope="col">Keterangan</th>
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
                    @foreach($event as $key)
                    <tr>
                        <th scope="row">{{ $i}}</th>
                        <td>{{ $key->nama }}</td>
                        <td>{{ $key->dimulai }}</td>
                        <td>{{ $key->selesai }}</td>
                        <td>{{ $key->keterangan }}</td>
                        <td>
                            <div class="d-flex flex-row bd-highlight">
                                <a href="/admin/event/{{$key->id}}/edit" class="btn btn-warning">Edit</a>
                                <form action="/admin/event/{{$key->id}}/delete" method="POST">
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
</div>


@endsection