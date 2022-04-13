@extends('layouts.adminLayout')
@section ('competition')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">Edit Competition {{ $competition->nama }} </h3>
<hr>
<div class="container">
    <form action="/admin/competition/{{$competition->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 col-7">
            <label for="exampleInputText" class="form-label">Nama</label>
            <input type="text" class="form-control " name="nama" value="{{$competition->nama}}" required>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputText" class="form-label">Gambar</label>
            @if (!empty($competition->gambar))
            <img src="{{ asset('/template/images/'.$competition->gambar) }}" alt="{{$competition->nama}}"
                class="image-thumbnail">
            @endif
            <input type="file" class="form-control " name="gambar" value="{{$competition->gambar}}">
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputText" class="form-label">Dimulai</label>
            <input type="date" class="form-control col-4" name="dimulai" value="{{$competition->dimulai}}" required>
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputText" class="form-label">Selesai</label>
            <input type="date" class="form-control col-4" name="selesai" value="{{$competition->selesai}}" required>
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputText" class="form-label">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                placeholder="{{$competition->keterangan}}" name="keterangan" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary ml-4">Submit</button>
    </form>
</div>
@endsection