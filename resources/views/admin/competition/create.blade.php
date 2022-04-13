@extends('layouts.adminLayout')
@section ('competition')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">Add Competition </h3>
<hr>
<div class="container">
    <form action="/admin/competition" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 col-7">
            <label for="exampleInputText" class="form-label">Nama</label>
            <input type="text" class="form-control " name="nama" required>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputText" class="form-label">Gambar</label>
            <input type="file" class="form-control " name="gambar" required>
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
        <button type="submit" class="btn btn-primary ml-4">Submit</button>
    </form>
</div>
@endsection