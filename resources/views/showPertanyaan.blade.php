@extends('master')

@section('content')
    @foreach($pertanyaan as $key => $pertanyaan)
    <h4>Judul: {{ $pertanyaan->judul }}</h4>
    <h4>Pertanyaan:</h4>
    <h2>{{ $pertanyaan->isi }}</h2>
    <p>Di buat: {{ $pertanyaan->created_at }}</p>
    <p>Di edit: {{ $pertanyaan->updated_at }}</p>
    @endforeach

    <br>

    <h2>Jawaban:</h2>
    <ol>
        @foreach($jawaban as $key => $jawaban)
        <li>{{ $jawaban->isi }}</li>
        @endforeach
    </ol>
    <a href="/jawaban/{{ $pertanyaan->id }}"><button class="btn btn-info">Tambah Jawaban</button></a>
    <a href="/pertanyaan"><button type="button" class="btn btn-light">Balik ke List Pertanyaan</button></a>
@endsection