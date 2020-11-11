@extends('layout.site')

@section('Titulo','Resultado da consulta')

@section('conteudo')
    <h2>Resultado da consulta</h2><br><br><br>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Periodo de Trial do Cliente</th>
        </tr>

        <tr> 
            <td> blabla </td>
        </tr>
    </table>
    
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Números cadastrados pelo cliente</th>
        </tr>

        <tr>
            <td>blabla</td>
        </tr>
    </table>
    
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Últimas 15 mensagens trocadas pelo cliente</th>
        </tr>

        <tr>
            <td>oi oi oi</td>
        </tr>
    </table>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Total de mensagens trocadas no mês atual</th>
        </tr>

        <tr>
            <td>blabla</td>
        </tr>
    </table>


    <br><br><br>

    <a class="btn btn-primary" href="/" role="button">Voltar</a>
@endsection