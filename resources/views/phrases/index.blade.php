@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Слова любви</div>
                    <div class="panel-body">

                        <a href="{{ url('/phrases/create') }}" class="btn btn-primary btn-xs" title="Add New Phrase"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th> Название </th><th> Текст </th><th> От кого </th><th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($phrases as $item)
                                    <tr>
                                        <td>{{ $item->title }}</td><td>{{ $item->content }}</td><td>{{ $item->from }}</td>
                                        <td>
                                            <a href="{{ url('/phrases/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Phrase"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/phrases', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Phrase" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Phrase',
                                                        'onclick'=>'return confirm("Удалить слова любви?! Как же так?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $phrases->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection