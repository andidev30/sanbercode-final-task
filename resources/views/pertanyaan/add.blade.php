@extends('template.master')

@section('content')
<div class="card border-primary p-4">
    <h2>Tambah Pertanyaan</h2>
    <div class="card-body">
        <form action="/pertanyaan" method="post">
        @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                    placeholder="Title">
                <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
            </div>
            <div class="form-group">
              <label for="isi">Isi</label>
              <textarea class="form-control" name="isi" id="isi" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="tag">Tag</label>
              <input type="text" name="tag" id="tag" class="form-control" placeholder="tag" aria-describedby="helpId">
              <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary float-right">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
