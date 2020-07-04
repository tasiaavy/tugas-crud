@extends('master')

@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Judul</th>
            <th>Isi Pertanyaan</th>
            <th>Link Jawaban</th>
            <th>Opsi</th>
        </tr>
        </thead>
        <tbody>
            @foreach($pertanyaan as $key => $pertanyaan)
            <tr>
                <td> {{ $pertanyaan->id }} </td>
                <td> {{ $pertanyaan->judul }} </td>
                <td> {{ $pertanyaan->isi }} </td>
                <td><a href="/jawaban/{{ $pertanyaan->id }}">Jawaban</a></td>
                <td><a href="/pertanyaan/{{ $pertanyaan->id }}">SHOW</a> | <a href="/pertanyaan/{{ $pertanyaan->id }}/edit">EDIT</a> | <a href="">HAPUS</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/pertanyaan/create"><button class="btn btn-info">Pertanyaan Baru</button></a>
@endsection