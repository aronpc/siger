@extends('adminlte::page')

@section('title', 'SIGER- Sistema Gerenciador de Reservas')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<p>You are logged in!</p>
<hr>
<p><b>Atenção</b></p>
<p>A edição pode influenciar em todos os cadastros, porém o processo pode ser reversível</p>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">



  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('estados.update', $estados->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="nomeuf">Nome da UF:</label>
          <input type="text" class="form-control" name="nomeuf" value={{ $estados->nomeuf }} />
        </div>
        <div class="form-group">
          <label for="uf">UF:</label>
          <input type="text" class="form-control" name="uf" value={{ $estados->uf }} />
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection