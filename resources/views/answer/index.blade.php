@extends('layout.master')

@section('content')
    <div class="card m-5 p-2">
        <div class="card-header">
            <h2>Daftar Jawaban</h2><br>
            <h3>Pertanyaan : </h3>
            <p>{{ $questions->content }}</p>
        </div>
        <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jawaban</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach($answers as $key => $answer)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $answer->content }}</td>
                </tr>
                @php $no++; @endphp
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    
@endsection