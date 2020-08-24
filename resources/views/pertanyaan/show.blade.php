@extends('template.master')

@section('content')
<div class="row d-flex justify-content-between align-items-center">
<h1 class="text-center font-weight-bold">Pertanyaan</h1>

@if (isset(Auth::user()->id))
<a href="{{'/pertanyaan/create'}}" class="btn btn-success">tanya</a>
@endif

</div>
<div class="card border-primary">
  <img class="card-img-top" src="holder.js/100px180/" alt="">
  <div class="card-body">
    <h4 class="card-title">{{$data->judul}}</h4>
    <p class="card-text">{{$data->isi_pertanyaan}}</p>
    <a href="">{{$data->tag}}</a>
  </div>
</div>
<h2 class="font-weight-bold mt-4 mb-3">Jawaban</h2>
<div class="card border-primary">
  <img class="card-img-top" src="holder.js/100px180/" alt="">
  <div class="card-body">
    <p class="card-text">Sepertinya itu kurang di titik koma</p>
  </div>
</div>
<br>
@endsection
