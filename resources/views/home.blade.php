@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enviar Mensaje</div>
                <form method="POST" action="{{ route('message.store') }}">
                    {{ csrf_field() }}
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <select name="recipient_id" class="form-control">
                                <option value="">Selecciona un usuario</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="panel-body">
                            <div class="form-group">
                                <textarea name="user_message" class="form-control" placeholder="Escribe aqui tu mensaje"></textarea>    
                            </div>
                            
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
