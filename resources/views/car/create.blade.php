@extends('car.app')

@section('content')
    <div class="container">
        {!! form_start($form) !!}

        {!! form_row($form->Marke) !!}
        {!! form_row($form->Gamybos_metai) !!}

        {!! form_rest($form) !!}
        {!! form_end($form) !!}
    </div>
@endsection