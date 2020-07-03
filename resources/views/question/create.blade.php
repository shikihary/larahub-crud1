@extends('layout.master')

@section('content')
  <div class="col-sm-6 p-4">
    <form action="/questions" method="post">
        @csrf
        <div class="form-group">
          <label for="title">Judul</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Judul">
        </div>
        <div class="form-group">
          <label for="centent">Pertanyaan</label>
          <input type="text" class="form-control" name="content" id="content" placeholder="Isi pertanyaan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection