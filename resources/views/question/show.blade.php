@extends('layout.master')

@section('content')
  <div class="col-sm-6 ml-3 mt-3">
    <div class="card card-primary">
        <div class="card-header">
            <p>Pertanyaan</p><hr>
            <h4 class="card-title">{{ $question->title }}</h4><br>
            <p>{{ $question->content }}</p>
            <p><span class="float-left">Dibuat: <i>{{ $question->created_at }}</i></span><span class="float-right">Diupdate: <i>{{ $question->updated_at }}</i></span></p>
        </div>
        <div class="card-body">
            <table class="table">
            <thead>
                <th>Jawaban</th>
                <th>Dipilih</th>
            </thead>
            <tbody>
                @foreach($answers as $key => $answer)
                <tr>
                    <td>{{ $answer->content }}</td>
                    <td><input type="checkbox" id="{{ 'check'.$answer->id }}"></td>
                </tr>
                @endforeach
            </tbody>
            </table>
            <hr>
            <a class="btn btn-sm btn-primary" href="{{ url('/questions/'.$question->id.'/edit') }}"><i class="fa fa-edit"></i></a>
            <form action="{{ url('/questions/'.$question->id) }}" method="post" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger ml-2"><i class="fa fa-trash"></i></button>
            </form>
        </div>
    </div>
  </div>

@endsection

@push('scripts')
    document.getElementById('terms').onclick = function() {
        // access properties using this keyword
        if ( this.checked ) {
            // if checked ...
            alert( this.value );
        } else {
            // if not checked ...
        }
    };
@endpush