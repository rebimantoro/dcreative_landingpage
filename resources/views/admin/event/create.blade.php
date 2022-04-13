@extends('layouts.adminLayout')
@section ('events')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">Tambah Event </h3>
<hr>
<div class="container">
    <form action="/admin/event" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 col-7">
            <label for="exampleInputText" class="form-label">Nama Event</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputText" class="form-label">Gambar</label>
            <input type="file" class="form-control" name="gambar" required>
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputText" class="form-label">Dimulai</label>
            <input type="date" class="form-control col-4" name="dimulai" required>
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputText" class="form-label">Selesai</label>
            <input type="date" class="form-control col-4" name="selesai" required>
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputText" class="form-label">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"
                required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection