@extends('layouts.adminLayout')
@section ('events')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">Edit Siaran Pers </h3>
<h4 align="center" class="mt-5">{{ $siaranPers->judul }}</h4>
<hr>
<div class="container">
    <form action="/admin/siaran/{{$siaranPers->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 col-8">
            <label for="exampleInputText" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" value="{{$siaranPers->judul}}" required>
        </div>
        <div class="mb-3 col-10">
            <label for="exampleInputText" class="form-label">Ringkasan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ringkasan"
                required>{{$siaranPers->ringkasan}}</textarea>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputText" class="form-label">Gambar</label>
            @if(!empty($siaranPers->gambar))
            <img src="{{ asset('Template/images/'.$siaranPers->gambar) }}" alt="{{ $siaranPers->judul }}"
                class="image-thumbnail">
            @endif
            <input type="file" class="form-control mt-2" name="gambar">
        </div>
        <div class="mb-3 col-10">
            <label for="exampleInputText" class="form-label">Artikel</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="artikel"
                required>{{$siaranPers->artikel}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary ml-4">Submit</button>
    </form>
</div>
@endsection