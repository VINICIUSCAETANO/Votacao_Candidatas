@extends('modelo')
@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('votos.store') }}" enctype="multipart/form-data">

{{ csrf_field() }}
  <div class="col-sm-10">
     <h3>Candidatas Cadastradas</h3>
  </div>   
    <div class="row">
      <div class="col-sm-8">
        <div class="form-group">
          <label for="nome">Nome da Candidata:</label>
            <input type="text" class="form-control" id="nome" name="nome" 
                  value="{{$reg->nome or old('nome')}}" readonly="readonly"> 
                 
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="clube">Clube:</label>
                <input type="text" class="form-control" id="clube" name="clube"
                      value="{{$reg->clube or old('clube')}}"  readonly="readonly">
              </div>
            </div>
          </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="foto">Foto:</label>
               <img src ='storage/{{$reg->foto}}' alt="foto">
              </div>
            </div>
          
           <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <label for="nomeVoter">Nome:</label>
                <input type="text" class="form-control" id="nomeVoter" name="nomeVoter"
                      value="{{$reg->nomeVoter or old('nomeVoter')}}" 
                >
              </div>
            
            </div>
           </div>

   <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <label for="emaiVoter">Email:</label>
                <input type="text" class="form-control" id="emailVoter" name="emailVoter"
                      value="{{$reg->emailVoter or old('emailVoter')}}" 
                >
              </div>
            </div>
          </div>

          <div style="display: none"  class="row">
              <div class="col-sm-8">
                <div class="form-group">
                  <label for="candidata_id">id:</label>
                  <input type="text" class="form-control" id="candidata_id" name="candidata_id"
                        value="{{$reg->id or old('id')}}" 
                  readonly= "readonly" >
                </div>
              </div>
  
            </div>
            <div>
<input type="submit" value="Enviar" class="btn btn-success">
      </div>
  
    </div>
    
    <!-- arquivos js ficam em public/js -->
    <script src="{{ URL::asset('js/foto.js') }}"></script>

@endsection