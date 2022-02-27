@extends('layouts.app')

@section('content')
@if($datas->count() > 0)
<div class="container" style="margin-top: 15px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            <div class="card">
                <table class="table table-hover table-dark">
                <thead>
                    <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Nama Penulis</th>
                    <th scope="col">Halaman</th>
                    <th scope="col">Tahun Terbit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $book)
                    <tr>
                    <th>{{$book->id}}</th>
                    <td>{{$book->nama}}</td>
                    <td>{{$book->penulis}}</td>
                    <td>{{$book->halaman}}</td>
                    <td>{{$book->tahun_terbit}}</td>
                    <td><a href="{{ route('updateForm',$book->id)}}"class="btn-danger btn">UPDATE</a></td>
                    <td>
                        <form action="{{route('DeleteBuku', $book->id)}}" method="POST">
                            @csrf
                            @method('Delete')
                            <button type="sumbit"class="btn-danger btn">DELETE</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@else
    <h1 style="text-align : center">Tidak ada buku yang tersedia</h1>
@endif
@endsection