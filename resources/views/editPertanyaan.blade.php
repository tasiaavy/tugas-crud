@extends('master')

@section('content')
    @foreach($pertanyaan as $key => $pertanyaan)
    <form action="/pertanyaan/update" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $pertanyaan->id }}">
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" value="{{ $pertanyaan->judul }}" name="judul">
        </div>
        <div class="form-group">
            <label for="isi">Pertanyaan:</label>
            <input type="text" class="form-control" id="isi" rows="3" value="{{ $pertanyaan->isi }}" name="isi">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/pertanyaan"><button type="button" class="btn btn-light">Balik ke List Pertanyaan</button></a>
    </form>
    @endforeach
@endsection