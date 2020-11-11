@extends('layout.site')

@section('Titulo','Consulta Apps')

@section('conteudo')
<div class="form-signin">
    
    <h2>Consultas Apps Br24</h2><br>
    <form class="form-signin" method="post" action="/">
        {{ csrf_field() }}
        @include('consulta._form')
        <br><br>

        <div>
            <input type="submit" name="consulta" value="Consultar" class="btn btn-primary">
        </div>    
    </form>
</div>
@endsection