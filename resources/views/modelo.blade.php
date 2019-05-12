<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Fenadoce 2019</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('concurso.index')}}">Fenadoce2019</a>
      </li>
    </ul>
  </div>
    <ul class="navbar-nav navbar-right">
      <li class="nav-item"><a class="nav-link" href="{{ route('candidatas.index') }}">Login</a></li>

      </ul>
  </nav>
    
  </div>
</nav>
  
<div class="container">

@yield('conteudo')  

</div>
<script>
$('#search').keyup(function (){
    $('.card').removeClass('d-none');
    var filter = $(this).val(); // get the value of the input, which we filter on
    $('.card-deck').find('.card .card-body h4:not(:contains("'+filter+'"))').parent().parent().addClass('d-none');
})

</script>
</body>
</html>
