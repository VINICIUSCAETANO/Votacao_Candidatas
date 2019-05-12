@extends('modeloAreaRestrita') 
@section('conteudo')

<div class="row">
  <div class="col-sm-10">
     <h3>Votos Cadastrados</h3>
  </div>   
</div>

@if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif

<table class="table table-hover">
  <thead>
    <tr>
      <th>Nº</th>
      <th>Nome Voter</th>
      <th>Email Voter</th>
      <th>Nome Candidata</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($linhas as $linha)
    <tr>
      <td> {{ $linha->idVoter }} </td>
      <td> {{ $linha->nomeVoter }} </td>
      <td> {{ $linha->emailVoter }} </td>
      <td> {{ $linha->candidata->nome}} </td>
          
        </form>
      </td>
    </tr>

    @endforeach

  </tbody>
</table>
@endsection