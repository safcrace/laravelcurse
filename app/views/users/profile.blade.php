@extends('layout')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-6">

            <h1>Edita tu Perfil</h1>

            {{ Form::model($candidate, ['route' => 'update_profile', 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}

            {{ Field::url('website_rul') }}

            {{ Field::textarea('description') }}          

            {{ Field::select('job_type') }} 

            {{ Field::select('category_id', $job_types) }}   

            {{ Field::checkbox('available', $categories) }}

           <p><input type="submit" value="Register" class="btn btn-success"></p>

            {{ Form::close() }}                

        </div>

    </div>

</div>

@endsection
