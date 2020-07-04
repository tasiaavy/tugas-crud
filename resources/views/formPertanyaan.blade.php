@extends('master')

@section('content')
    <form action="/pertanyaan" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" placeholder="Tulis Judul Pertanyaan" name="judul">
        </div>
        <div class="form-group">
            <label for="isi">Pertanyaan:</label>
            <textarea class="form-control" id="isi" rows="3" name="isi"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endsection