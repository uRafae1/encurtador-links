@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 150px !important;">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Link padrão</th>
                <th scope="col">Link encurtado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>www.google.com</td>
                <td>www.g.com</td>
            </tr>
            <tr>
                <td>www.youtube.com</td>
                <td>www.yt.com</td>
            </tr>
            <tr>
                <td>www.whatsapp.com</td>
                <td>www.wp.com</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection