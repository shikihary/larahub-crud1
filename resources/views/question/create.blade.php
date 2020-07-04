@extends('layout.master')

@section('content')
  <div class="col-sm-6 ml-3 mt-3">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Pertanyaan Baru</h3>
      </div>
      <form action="{{ url('/questions') }}" method="post">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Judul">
          </div>
          <div class="form-group">
            <label for="centent">Pertanyaan</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Isi pertanyaan">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>

@endsection