@extends('modelo') 
@section('conteudo')

<div class="row">
  <div class="col-sm-10">
     <h3 style="margin-top: 5%;">Candidatas Cadastradas</h3>
  </div>    
</div>

@if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif
 <input class="form-control" id="myInput" type="text" placeholder="Search..">
<div class="container" style="margin-top: 5%;">
<div class="row" id="myCard">
 
  @foreach ($linhas as $linha)
 
  <div class="col-sm-6">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src='storage/{{ $linha->foto }}' alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{ $linha->nome }}</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"> {{ $linha->clube }}</li>
      </ul>
      <div class="card-body">
       <a href="{{ route('Candidata.votar', $linha->id) }}" class="btn btn-primary btn-sm" role="button">Votar</a>
      </div>
    </div>
  </div>
  
  @endforeach
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myCard .card").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
  </div>
    </div>

@endsection