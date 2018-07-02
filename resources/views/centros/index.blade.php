@extends('layouts.app')

@section('conteudo')
<div class="container" style="margin-top:100px">
 <div class="row col-md-6 col-md-offset-2 custyle">
 <table class="table table-striped custab">
 <thead>
 <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Adicionar Padrinho</a>
     <tr>
         <th>ID</th>
         <th>Nome</th>
         <th>Telefone</th>
         <th class="text-center">Accao</th>
     </tr>
 </thead>
     <tbody>
         @foreach($padrinhos as $padrinho)
         <tr>
             <td>{{$padrinho->id}}</td>
             <td>{{$padrinho->nome}}</td>
             <td>{{$padrinho->telefone}}</td>
             <td class="text-center"><a class='btn btn-info btn-xs' href="/padrinho/{{$padrinho->id}}">
              <span class="glyphicon glyphicon-edit"></span>Apadrinhar</a>
              </td>
         </tr>
         @endforeach
     </tbody>
 </table>
 </div>
</div>

@endsection




