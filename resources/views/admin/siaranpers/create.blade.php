@extends('layouts.adminLayout')
@section ('siaran')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">Add Siaran Pers</h3>
<hr>
<div class="container">
    <form action="/admin/siaran" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 col-8">
            <label for="exampleInputText" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" required>
        </div>
        <div class="mb-3 col-10">
            <label for="exampleInputText" class="form-label">Ringkasan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ringkasan"
                required></textarea>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputText" class="form-label">Gambar</label>
            <input type="file" class="form-control" name="gambar" required>
        </div>
        <div class="mb-3 col-10">
            <label for="exampleInputText" class="form-label">Artikel</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="artikel" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary ml-4">Submit</button>
    </form>
</div>
@endsection