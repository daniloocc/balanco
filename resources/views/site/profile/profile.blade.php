@extends('adminlte::page')

@section('title', 'Editar Perfil')

@section('content_header')
    <h1>Editar Perfil</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Perfil</a></li>
        <li><a href="">Editar</a></li>
    </ol>
@stop

@section('content')

    @include('admin.includes.alerts')

    <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data" >
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="name">Nome: </label>
            <input type="text" value="{{auth()->user()->name }}" name="name" placeholder="Nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" value="{{auth()->user()->email }}" name="email" placeholder="E-mail" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Senha: </label>
            <input type="password" name="password" placeholder="Senha" class="form-control">
        </div>
        <div class="form-group row">

            @if(auth()->user()->image != null)
            <div class="col-xs-2">
                    <img src="{{url('storage/users/'.auth()->user()->image)}}" alt="{{auth()->user()->name}}" class="img-thumbnail" style="height: 80px" >
            </div>
            @endif

            <div class="col-xs-10">
                <label for="image">Imagem: </label>
                <input type="file" name="image" class="form-control-file">
            </div>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info">Atualizar Perfil</button>
        </div>
    </form>


@endsection