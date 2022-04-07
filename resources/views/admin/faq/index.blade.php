@extends('layouts.adminLayout')
@section ('faq')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">FAQ List </h3>
<p align="center">( Total : {{ $jumlah }} )</p>
<hr>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="container">
            <a href="/admin/faq/create" class="btn btn-primary">Add FAQ</a>

            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Penjelasan</th>
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
                @foreach($faq as $key)
                <tr>
                <th scope="row">{{ $i}}</th>
                <td>{{ $key->judul }}</td>
                <td>{{ $key->penjelasan }}</td>
                <td>
                    <div class="d-flex flex-row bd-highlight">
                        <a href="/admin/faq/{{$key->id}}/edit" class="btn btn-warning">Edit</a>
                        <form action="/admin/faq/{{$key->id}}/delete" method="POST">
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