@extends('layout.master')

@section('content')
    <form action="/answers/{question_id}" method="post">
        @csrf
        <div class="form-group">
          <label for="content">Judul</label>
          <input type="text" class="form-control" name="content" id="content" placeholder="Jawaban">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection