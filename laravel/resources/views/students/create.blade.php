@extends('layout/main')

@section('title' ,'Form Tambah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
            <form method="post" action="students">
            @method('post')
            @csrf

           
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}" placeholder="Masukan nama">
                @error('nama')
                    <div class="invalid-feedback"> {{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nrp">nrp</label>
                <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" value="{{old('nrp')}}" placeholder="Masukan nrp">
                @error('nrp')
                    <div class="invalid-feedback"> {{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}" placeholder="Masukan email">
                @error('email')
                    <div class="invalid-feedback"> {{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jurusan">jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{old('jurusan')}}" placeholder="Masukan jurusan">
                @error('jurusan')
                    <div class="invalid-feedback"> {{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Tambah Data Mahasiswa</button>
        


            </form>
        </div>
    </div>
</div>
@endsection
