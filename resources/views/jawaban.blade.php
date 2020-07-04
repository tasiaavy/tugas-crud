@extends('master')

@section('content')
    <h2>Jawaban:</h2>
    <ol>
    @foreach($jawaban as $key => $jawaban)
        <li> {{ $jawaban->isi }} </li>
    @endforeach
    </ol>
    <h2>Jawaban baru: </h2>
    <form action="/jawaban/{{ $jawaban->pertanyaan_id }}" method="POST">
        @csrf
        <input type="hidden" class="form-control" id="pertanyaan_id" value="{{ $jawaban->pertanyaan_id }}" name="pertanyaan_id">
        <div class="form-group">
            <label for="isi">Jawaban:</label>
            <input type="text" class="form-control" id="isi" placeholder="Tulis Jawaban" name="isi">
        </div>
        <button type="submit" class="btn btn-primary">Jawab</button>
        <a href="/pertanyaan/{{ $jawaban->pertanyaan_id }}"><button type="button" class="btn btn-info">Balik ke Pertanyaan Ini</button></a>
        <a href="/pertanyaan"><button type="button" class="btn btn-light">Balik ke List Pertanyaan</button></a>
    </form>
@endsection