@extends('layout.site')

@section('titulo','Vagas Inscritas')

@section('conteudo')
  <div class="container">
    <div class="row s12">
    <br>
    <br>
      <table class="bordered striped">
          <thead>
            <tr>
              <th>Título</th>
              <th>Descrição</th>
              <th>Valor</th>
            </tr>
          </thead>
          <tbody>
            @foreach($registros as $registro)
              <tr>
                <td>{{ $registro->titulo }}</td>
                <td>{{ $registro->descricao }}</td>
                <td>R$ {{ $registro->valor }},00</td>
              </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  </div>
@endsection
