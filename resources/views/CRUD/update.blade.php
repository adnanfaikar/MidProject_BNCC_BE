@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Book') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('FormUpdate',$buku->id) }}">
                        @csrf
                        @method('patch');
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Buku') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" value="{{$buku->nama}}"class="form-control " name="nama" placeholder="Nama Buku">

                                @error('nama')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="penulis" class="col-md-4 col-form-label text-md-right">{{ __('Penulis Buku') }}</label>

                            <div class="col-md-6">
                                <input id="penulis" type="text"value="{{$buku->penulis}}" class="form-control"  name="penulis" placeholder="Penulis Buku">

                                @error('penulis')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Halaman" class="col-md-4 col-form-label text-md-right">{{ __('Halaman') }}</label>

                            <div class="col-md-6">
                                <input id="halamana" type="number"value="{{$buku->halaman}}" class="form-control" name="halaman" placeholder="Halaman Buku" >

                                @error('halaman')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tahun_terbit" class="col-md-4 col-form-label text-md-right">{{ __('Tahun Terbit Buku') }}</label>

                            <div class="col-md-6">
                                <input id="tahun_terbit" type="number" value="{{$buku->tahun_terbit}}"class="form-control" name="tahun_terbit"placeholder="Tahun Terbit Buku" >
                                @error('tahun_terbit')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
