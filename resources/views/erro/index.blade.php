@extends('layout.site')

@section('Titulo','Dominio não encontrado')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        div {
        margin-top: 50px;
        margin-bottom: 50px;
        margin-right: 80px;
        margin-left: 80px;
        }
        
    </style>
</head>
@section('conteudo') 



<body class="text-center">
    <div class="container">
        <div>            
            <h2>Consultas Apps Br24</h2>
        </div>
        <div class="alert alert-danger" role="alert">
            Domínio: <br> {{ $Dominio ?? ''}} <br> não encontrado 
        </div>

        <div>
            <a class="btn btn-primary" href="consultas_apps/public/" role="button">Voltar</a>
        </div>
        </div>
@endsection