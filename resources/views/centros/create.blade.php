@extends('layouts.app')

@section('conteudo')
<div></div>
<div style="margin-top:100px">
<h1>Padrinho</h1>
<p>{{$padrinho->nome}}</p>
</div>

<div>
<h1>Criança</h1>
<p>{{$crianca->nome}}</p>
</div>

<a class='btn btn-info btn-xs' href="/padrinho_crianca/{{$padrinho->id}}/{{$crianca->id}}">
      <span class="glyphicon glyphicon-save"></span>Apadrinhar</a>
@endsection