@extends('layout.master')

@section('content')
  <div class="col-sm-6 p-4">
    <b>Pertanyaan : </b>
    <p>{{ $question->content }}</p>
    <form action="{{ url('/answers/'.$question->id) }}" method="post">
        @csrf
        <div class="form-group">
          <label for="content">Jawaban</label>
          <input type="text" class="form-control" name="content" id="content" placeholder="Isi jawaban">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection