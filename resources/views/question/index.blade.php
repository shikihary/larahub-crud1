@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Daftar Pertanyaan</h2>
        </div>
        <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($questions as $key => $question)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $question->title }}</td>
                    <td>{{ $question->content }}</td>
                    <td><a class="btn btn-primary" href="{{ url('/answers/create/'.$question->id) }}">Jawab</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    
@endsection