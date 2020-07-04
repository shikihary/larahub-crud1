@extends('layout.master')

@section('content')
  <div class="col-sm-6 ml-3 mt-3">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Jawaban Baru</h3>
      </div>
      <form action="{{ url('/answers/'.$question->id) }}" method="post">
        @csrf
        <div class="card-body">
          <b>Pertanyaan</b>
          <p>{{ $question->content }}</p><hr>
          <div class="form-group">
            <label for="centent">Jawaban</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Isi jawaban">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection