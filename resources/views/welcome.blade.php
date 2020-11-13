@extends('layout.site')

@section('Titulo','Consulta Apps')

@section('conteudo') 
    <meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.5/examples/sign-in/signin.css">

</head>


<body class="text-center">
    <div class="container">
        <div class="form-signin">
            
            <h2>Consultas Apps Br24</h2><br>
            <form class="form-signin" method="post" action="/">
                {{ csrf_field() }}
                @include('consulta._form')
                <br><br>
                
                <div>
                    <input type="submit" name="btnCadUsuario" value="Consultar" class="btn btn-primary">
                </div>
        </div>
@endsection