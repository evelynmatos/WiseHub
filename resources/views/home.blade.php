<style>

  a.btn-floating{
    background-color:red;
    position:absolute; 
    top:83%;
    left:82%;
  }
</style>


@extends('layout.site')

@section('titulo','Vagas')

@section('conteudo')
    <div class="container">
        <br>
        <div class="row">
            @foreach($cursos as $curso)
            <div class="col s4">
                <div style="width:90%;" class="card">
                    <div class="card-image">
                      <img class="activator" style="height:170px;width:100%;" src="{{asset($curso->imagem)}}">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">{{$curso->titulo}}<i class="material-icons right">more_vert</i></span>
                      <a class="btn-floating"><i class="material-icons">add</i></a>
                        <p><a href="#">Ver mais...</a></p>
                      </div>
                      <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>{{$curso->titulo}}</span>
                      <p>{{$curso->descricao}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      <div class="row" align="center">
        {{$cursos->links()}}
      </div>
    </div>

@endsection





