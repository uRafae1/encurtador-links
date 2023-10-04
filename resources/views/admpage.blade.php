@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 150px !important;">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Histórico</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Rafael Sousa</td>
                <td>rafael@email</td>
                <td>
                    <button class="btn btn-primary" style="padding: 7px !important;">Histórico</button>
                </td>
                <td>
                    <button class="btn btn-success" style="padding: 7px !important;">Atualizar</button>
                    <button class="btn btn-danger" style="padding: 7px !important;">Excluir</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Roger Santos Ferreira</td>
                <td>roger@email</td>
                <td>
                    <button class="btn btn-primary" style="padding: 7px !important;">Histórico</button>
                </td>
                <td>
                    <button class="btn btn-success" style="padding: 7px !important;">Atualizar</button>
                    <button class="btn btn-danger" style="padding: 7px !important;">Excluir</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Carinha bacanudo</td>
                <td>carbac@email</td>
                <td>
                    <button class="btn btn-primary" style="padding: 7px !important;">Histórico</button>
                </td>
                <td>
                    <button class="btn btn-success" style="padding: 7px !important;">Atualizar</button>
                    <button class="btn btn-danger" style="padding: 7px !important;">Excluir</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection