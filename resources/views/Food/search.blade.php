@extends('layouts.app')
@section('stylesheets')
    <link href="{{ asset('css/food.css') }}" rel="stylesheet">
@endsection
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

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <!-- Search matchings -->
                    <div class='form-group'>
                        {!! Form::label('matching', __('food.matching')) !!}
                    </div>
                    <div class="list-group pre-scrollable">
                        @foreach ($matchings as $matching)
                            <a href="javascript:void(0);" class="list-group-item food-item" id="{{$matching->id}}">
                                <span class="text-primary">{{$matching->name}}</span>
                                @if($matching->guaranteed)
                                    <span class="glyphicon glyphicon-ok-sign"></span>
                                @endif
                                <br/>
                                {{$matching->serving . ', ' . $matching->calories . ' calories'}}
                            </a>
                        @endforeach
                    </div>

                </div>
                <div class="col-md-6">
                    <!-- View food nutritions -->
                    <div class='form-group'>
                        {!! Form::label('facts', __('food.nutrition_facts')) !!}
                    </div>
                    <div class="form-group">
                        <span id="food_name" class="text-success"> </span>
                        <span class="glyphicon glyphicon-ok-sign" id="food_guaranteed" style="display:none;"></span>
                    </div>
                    <hr class="thick-3" />
                    <div class="form-group row">
                        <div class="col-xs-2">
                            @lang('food.servings_field')
                        </div>
                        <div class="col-xs-4">
                            {!! Form::text('food_serving', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="col-xs-6">
                            {!! Form::select('food_servings_options', ['100 g', '1 g'], 0, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <!-- Food nutrition facts -->
                    <hr class="thick-3" />
                    <div class="row">
                        <div class="col-xs-4">
                            <b>@lang('food.calories')</b>
                        </div>
                        <div class="col-xs-2">
                            <span id="food_calories"> </span>
                        </div>
                        <div class="col-xs-4">
                            <b>@lang('food.sodium')</b>
                        </div>
                        <div class="col-xs-2">
                            <span id="food_sodium"> </span> mg
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <b>@lang('food.total_fat')</b>
                        </div>
                        <div class="col-xs-2">
                            <span id="food_total_fat"> </span> g
                        </div>
                        <div class="col-xs-4">
                            <b>@lang('food.potassium')</b>
                        </div>
                        <div class="col-xs-2">
                            <span id="food_potassium"> </span> mg
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            @lang('food.saturated')
                        </div>
                        <div class="col-xs-2">
                            <span id="food_saturated"> </span> g
                        </div>
                        <div class="col-xs-4">
                            <b>@lang('food.total_carbs')</b>
                        </div>
                        <div class="col-xs-2">
                            <span id="food_total_carbs"> </span> g
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            @lang('food.polyunsaturated')
                        </div>
                        <div class="col-xs-2">
                            <span id="food_polyunsaturated"> </span> g
                        </div>
                        <div class="col-xs-4">
                            <b>@lang('food.dietary_fiber')</b>
                        </div>
                        <div class="col-xs-2">
                            <span id="food_dietary_fiber"> </span> g
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            @lang('food.monounsaturated')
                        </div>
                        <div class="col-xs-2">
                            <span id="food_monounsaturated"> </span> g
                        </div>
                        <div class="col-xs-4">
                            <b>@lang('food.sugar')</b>
                        </div>
                        <div class="col-xs-2">
                            <span id="food_sugar"> </span> g
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            @lang('food.trans')
                        </div>
                        <div class="col-xs-2">
                            <span id="food_trans"> </span> g
                        </div>
                        <div class="col-xs-4">
                            <b>@lang('food.protein')</b>
                        </div>
                        <div class="col-xs-2">
                            <span id="food_protein"> </span> g
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <b>@lang('food.cholesterol')</b>
                        </div>
                        <div class="col-xs-2">
                            <span id="food_cholesterol"> </span> mg
                        </div>
                    </div>
                    <!-- vitamin -->
                    <hr class="thick-3" />
                    <div class="row">
                        <div class="col-xs-4">
                            <b>@lang('food.vitamin_a')</b>
                        </div>
                        <div class="col-xs-2">
                            <span id="food_vitamin_a"> </span> %
                        </div>
                        <div class="col-xs-4">
                            <b>@lang('food.calcium')</b>
                        </div>
                        <div class="col-xs-2">
                            <span id="food_calcium"> </span> %
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <b>@lang('food.vitamin_c')</b>
                        </div>
                        <div class="col-xs-2">
                            <span id="food_vitamin_c"> </span> %
                        </div>
                        <div class="col-xs-4">
                            <b>@lang('food.iron')</b>
                        </div>
                        <div class="col-xs-2">
                            <span id="food_iron"> </span> %
                        </div>
                    </div>
                </div>
            </div>


        </div>

        {!! Form::close() !!}
    </div>
    <script>
        $(document).ready(function(){
            $('.food-item').click(function(e){
                e.preventDefault();
                var id = this.id;
                $.get('/food/search/' + id )
                    .done(function(data) {
                        loadFood(data);
                    })
                    .fail(function(){
                        console.log("error!!!!");
                    });
            });
        });

        function loadFood(food) {
            $('#food_name').text(food.name);
            if (food.guaranteed) {
                $('#food_guaranteed').show();
            } else {
                $('#food_guaranteed').hide();
            }
            $('input[name="food_serving"]').val(food.serving);
            $('#food_calories').text(food.calories);
            $('#food_sodium').text(food.sodium);
            $('#food_total_fat').text(food.total_fat);
            $('#food_potassium').text(food.potassium);
            $('#food_saturated').text(food.saturated);
            $('#food_total_carbs').text(food.total_carbs);
            $('#food_polyunsaturated').text(food.polyunsaturated);
            $('#food_dietary_fiber').text(food.dietary_fiber);
            $('#food_monounsaturated').text(food.monounsaturated);
            $('#food_sugar').text(food.sugar);
            $('#food_trans').text(food.trans);
            $('#food_protein').text(food.protein);
            $('#food_cholesterol').text(food.cholesterol);
            $('#food_vitamin_a').text(food.vitamin_a);
            $('#food_calcium').text(food.calcium);
            $('#food_vitamin_c').text(food.vitamin_c);
            $('#food_iron').text(food.iron);
        }

    </script>
@endsection