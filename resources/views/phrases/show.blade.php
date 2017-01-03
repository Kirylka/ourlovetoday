@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Phrase {{ $phrase->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('phrases/' . $phrase->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Phrase"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['phrases', $phrase->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Phrase',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $phrase->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $phrase->title }} </td></tr><tr><th> Content </th><td> {{ $phrase->content }} </td></tr><tr><th> From </th><td> {{ $phrase->from }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection