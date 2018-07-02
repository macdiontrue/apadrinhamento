@extends('layouts.app')

@section('conteudo')
<div class="container" style="margin-top:100px">
 <div class="row col-md-6 col-md-offset-2 custyle">
 <table class="table table-striped custab">
 <thead> 
    <a href="/centro" class="btn btn-primary btn-xs pull-right"><b>+</b>Novo apadrinhamento</a>
     <tr>
         {{-- <th>ID</th> --}}
         <th>Padrinho</th>
         <th>Crianca</th>
         <th class="text-center">Accao</th>
     </tr>
 </thead>
     <tbody>
         @foreach($padrinhoCriancas as $pc)
         <tr>
             <td>{{$pc->padrinho->nome}}</td>
             <td>{{$pc->crianca->nome}}</td>
             {{-- <tefone}}</td> --}}
             <td class="text-center">
              <a href="/padrinho_crianca_remove/{{$pc->padrinho->id}}/{{$pc->crianca->id}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Desapadrinhar</a>
              </td>
         </tr>
         @endforeach
     </tbody>
 </table>
 </div>
</div>

@endsection




