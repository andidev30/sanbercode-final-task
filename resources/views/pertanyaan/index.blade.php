@extends('template.master')

@section('content')
<div class="row d-flex justify-content-between align-items-center">
<h1 class="text-center font-weight-bold">Pertanyaan</h1>

@if (isset(Auth::user()->id))
<a href="{{'/pertanyaan/create'}}" class="btn btn-success">tanya</a>
@endif

</div>
@foreach($data as $td)
<div class="card border-primary">
  <img class="card-img-top" src="holder.js/100px180/" alt="">
  <div class="card-body">
    <h4 class="card-title">{{$td->judul}}</h4>
    <p class="card-text">{{$td->isi_pertanyaan}}</p>
    <a href="">{{$td->tag}}</a>
  </div>
</div>
<br>
@endforeach
@endsection
