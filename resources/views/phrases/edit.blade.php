@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Редактировать слова любви № {{ $phrase->id }}</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($phrase, [
                            'method' => 'PATCH',
                            'url' => ['/phrases', $phrase->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('phrases.form', ['submitButtonText' => 'Обновить'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection