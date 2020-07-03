@extends('layout.master')

@section('content')
  <div class="col-sm-6 ml-3 mt-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Pertanyaan</h3>
        </div>
        <form action="{{ url('/questions/'.$question->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$question->title}}" placeholder="Judul">
                </div>
                <div class="form-group">
                <label for="centent">Pertanyaan</label>
                <input type="text" class="form-control" name="content" id="content" value="{{$question->content}}" placeholder="Isi pertanyaan">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>            
            </div>
        </form>
    </div>
  </div>

@endsection