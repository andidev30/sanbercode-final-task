@extends('template.master')

@section('content')
<div class="card border-primary p-4">
    <h2>Tambah Pertanyaan</h2>
    <div class="card-body">
    <form action="/my-questions/{{$data->id}}" method="post">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                    placeholder="Title" value="{{old('title', $data->judul)}}" >
                <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
            </div>
            <div class="form-group">
              <label for="isi">Isi</label>
              <textarea class="form-control" name="isi" id="isi" rows="3">{{old('isi', $data->isi_pertanyaan)}}</textarea>
            </div>
            <div class="form-group">
              <label for="tag">Tag</label>
              <input type="text" name="tag" id="tag" class="form-control" placeholder="tag" aria-describedby="helpId" value="{{old('tag', $data->tag)}}" >
              <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary float-right">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
