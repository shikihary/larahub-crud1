@extends('layout.master')

@section('content')
    <div class="card m-5 p-2">
        <div class="card-header">
            <h2>Daftar Pertanyaan</h2>
            <div class="card-tools">
                <a class="btn btn-primary" href="{{ url('/questions/create') }}">Buat Pertanyaan</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach($questions as $key => $question)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $question->title }}</td>
                    <td>{{ $question->content }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ url('/answers/create/'.$question->id) }}">Jawab</a>
                        <a class="btn btn-sm btn-secondary ml-2" href="{{ url('/questions/'.$question->id.'/edit') }}">Edit</a>
                        <form action="{{ url('/questions/'.$question->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger ml-2"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                    <td><a class="btn btn-sm btn-info" href="{{ url('/questions/'.$question->id) }}">Show</a></td>
                </tr>
                @php $no++; @endphp
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    
@endsection