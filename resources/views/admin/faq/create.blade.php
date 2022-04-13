@extends('layouts.adminLayout')
@section ('faq')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">Tambah FAQ </h3>
<hr>
<div class="container">
  <form action="/admin/faq" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputText" class="form-label">Judul FAQ</label>
      <input type="text" class="form-control" name="judul" required>
    </div>
    <div class="mb-3">
      <label for="exampleInputText" class="form-label">Penjelasan</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="penjelasan" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection