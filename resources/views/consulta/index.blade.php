@extends('layout.site')

@section('Titulo','Resultado da consulta')
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
            <div margin-top= "100px">   
                <h2 >Resultado da consulta</h2>
            </div>
            <div>
                <table class="table" >
                    <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Periodo de Trial do Cliente: {{ $Dominio ?? '' }}</th>
                    </tr>

                    <tr class="text-center"> 
                        <td>Periodo do Trial: {{ $Data_Inicio ?? '' }} a {{ $Data_Final ?? '' }}</td>
                    </tr>
                </table>
            </div>

            <div>
                <table class="table" >
                    <thead class="thead-dark">
                    <tr>
                        <th>Apelido</th>
                        <th>Números cadastrados pelo cliente</th>
                        <th>API</th>
                    </tr>

                    @for ($i = 0; $i < count($Clients_channel); $i++)
                        <tr>
                            <td>{{ $Clients_channel[$i]['name'] ?? '' }}</td>
                            <td>{{ $Clients_channel[$i]['number'] ?? '' }}</td>
                            <td>{{ $Clients_channel[$i]['api'] ?? '' }}</td>
                        </tr>
                    @endfor
                </table>
            </div>

            <div>
                <table class="table">
                    <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Últimas 15 mensagens trocadas pelo cliente</th>
                    </tr>
                </table>
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Type</th>
                        <th>Data</th>
                    </tr>
                    <tr>
                    @for ($i = count($Clients_message); $i > count($Clients_message)-15; $i--)
                        <tr>
                            <td>{{ $Clients_message[$i-1]['from'] ?? '' }}</td>
                            <td>{{ $Clients_message[$i-1]['to'] ?? '' }}</td>
                            <td>{{ $Clients_message[$i-1]['type'] ?? '' }}</td>
                            <td>{{ $Clients_message[$i-1]['date'] ?? '' }}</td>
                        </tr>
                    @endfor
                    </tr>

                </table>
            </div>
        
            <div>
                <table class="table">
                    <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Total de mensagens trocadas no mês atual</th>
                    </tr>

                    <tr class="text-center">
                        <td>Foram enviadas: {{ $Total_message_mes['dados']['total'] ?? '0' }} mensagens este mês</td>
                    </tr>
                </table>
            </div>
        
            <div>
                <a class="btn btn-primary" href="{{ url('home') }}" role="button">Voltar</a>
            </div>
        </div>
@endsection