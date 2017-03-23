@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['url' => '/food/search']) !!}
        <h1>@lang('food.search_header')</h1>
        <hr/>

        <!-- Search Input -->
        <div class='form-group'>
            {!! Form::label('search_text', __('food.search_message')) !!}
            <div class="input-group">
                {!! Form::text('search_text', null, ['placeholder' => __('food.search_example'), 'class' => 'form-control']) !!}
                <span class="input-group-btn">
                    {!! Form::submit(__('food.search'), ['class' => 'btn btn-default']) !!}
                </span>
            </div>
        </div>

        <!-- Search matchings -->
        <div class='form-group'>
            {!! Form::label('matching', __('food.matching')) !!}
        </div>

        <div class="list-group pre-scrollable">
            @foreach ($matchings as $matching)
            <a href="#" class="list-group-item">
                <span class="text-primary">{{$matching->name}}</span>
                @if($matching->guaranteed)
                    <span class="glyphicon glyphicon-ok-sign"></span>
                @endif
                <br/>
                {{$matching->serving . ', ' . $matching->calories . ' calories'}}
            </a>
            @endforeach
        </div>

        {!! Form::close() !!}
    </div>
@endsection