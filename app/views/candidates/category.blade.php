<!--@extends('layout')-->

@section('content')

<div class="container">
    <h1>{{ $category->name }}</h1>

    <table class="table table-striped">
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Ver</th>
        </tr>
        @foreach ($category_candidates as $candidate)
        <tr>
            <td>{{ $candidate->user->full_name }}</td>
            <td>{{ $candidate->job_type_title }}</td>
            <td>{{ $candidate->description }}</td>
            <td width="50">
                <a href="" class="btn btn-info">
                    Ver
                </a>
            </td>
        </tr>
        @endforeach


    </table>

    

</div> <!-- /container -->

@endsection