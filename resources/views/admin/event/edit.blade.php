@extends('layouts.adminLayout')
@section ('events')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">Edit Event {{$event->nama}}</h3>
<hr>
<div class="container">
    <form action="/admin/event/{{$event->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 col-7">
            <label for="exampleInputText" class="form-label">Nama</label>
            <input type="text" class="form-control " name="nama" value="{{$event->nama}}" required>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputText" class="form-label">Gambar</label>
            @if(!empty($event->gambar))
            <img src="{{asset('/template/images/'.$event->gambar)}}" alt="{{$event->nama}}" class="image-thumbnail">
            @endif
            <input type="file" class="form-control " name="gambar" value="{{$event->gambar}}">
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputText" class="form-label">Dimulai</label>
            <input type="date" class="form-control col-4" name="dimulai" value="{{$event->dimulai}}" required>
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputText" class="form-label">Selesai</label>
            <input type="date" class="form-control col-4" name="selesai" value="{{$event->selesai}}" required>
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputText" class="form-label">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                placeholder="{{$event->keterangan}}" name="keterangan" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary ml-4">Submit</button>
    </form>
</div>
@endsection