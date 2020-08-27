<style>
  form{
    margin: 0 auto;
	  border: 15px outset;
    border-color:  #ccc black #24499c #ccc ;
	  border-radius: 10px 5% / 20px 30px;
	  width: 400px;
	  padding: 1em;
 }
</style> 

@extends('layout.site')

@section('titulo','Login')

@section('conteudo')
  <div class="container">
  <br>
    <div class="row s12">
      <form class="" action="{{route('site.login.entrar')}}" method="post">
         <h5 class="center">Login</h5>
          <fieldset>
            {{ csrf_field() }}

        <div class="input-field col s11">
          <input type="text" name="email">
          <label>E-mail</label>
        </div>
        <br><br><br><br>
        <div class="input-field col s11">
          <input type="password" name="senha">
          <label>Senha</label>
        </div>

        <br><br><br><br><br>
        <div align=center>
        <button class="btn" style="background-color: #24499c">Entrar</button>
        </div>
        </fieldset>
      </form>
    </div>
  </div>

@endsection
