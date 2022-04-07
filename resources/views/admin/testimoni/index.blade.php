@extends('layouts.adminLayout')
@section ('testimoni')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">Testimoni List </h3>
<p align="center">( Total : {{ $jumlah }} )</p>
<hr>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="container">
            <a href="/admin/testimoni/create" class="btn btn-primary">Add testimoni</a>

            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Judul testimoni</th>
                <th scope="col">Gambar</th>
                <th scope="col">UMKKM</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($jumlah == 0)
                <tr>
                    <td colspan="7" align="center"><b>No Data</b></td> 
                </tr>
                @else
                <?php $i = 1?>
                @foreach($testimoni as $key)
                <tr>
                <th scope="row">{{ $i}}</th>
                <td>{{ $key->nama }}</td>
                <td><img src="{{asset('Template/images/'.$key->gambar.'')}}" width="150px"></td>
                <td>{{ $key->umkm }}</td>
                <td>{{ $key->keterangan }}</td>
                <td>
                    <div class="d-flex flex-row bd-highlight">
                        <a href="/admin/testimoni/{{$key->id}}/edit" class="btn btn-warning">Edit</a>
                        <form action="/admin/testimoni/{{$key->id}}/delete" method="POST">
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
            </table>
        
        </div>
        </div>
    </div>
    <div class="col-1"></div>
</div>


@endsection