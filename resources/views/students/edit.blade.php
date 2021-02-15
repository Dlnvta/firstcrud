@extends('main')

@section('title', 'Form Ubah Data Siswa')

@section('container')

<div class="container">
  <div class="row">
    <div class="col-8">
        <h1 class="mt-3">Form Ubah Data Siswa</h1>

        <form method="post" action="/students/{{ $student->id }}">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error ('nama') is-invalid @enderror" 
                id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $student->Nama }}">
                @error ('nama') <div class="invalid-feedback"> {{ $message }}</div> @enderror
            </div>
            
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" class="form-control @error ('nisn') is-invalid @enderror"
                id="nisn" placeholder="Masukkan NISN" name="nisn" value="{{ $student->NISN }}">
                @error ('nisn') <div class="invalid-feedback"> {{ $message }}</div> @enderror
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error ('email') is-invalid @enderror"
                id="email" placeholder="Masukkan Email" name="email" value="{{$student->Email }}">
                @error ('email') <div class="invalid-feedback"> {{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control @error ('jurusan') is-invalid @enderror"
                id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ $student->Jurusan }}">
                @error ('jurusan') <div class="invalid-feedback"> {{ $message }}</div> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ubah Data!</button>
        </form>

    </div>
  </div>
</div>
@endsection
    
