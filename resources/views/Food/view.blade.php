@extends('layouts.app')
@section('stylesheets')
    <link href="{{ asset('css/food.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>Calories in <b>{{$food->name}}</b></h1>
            </div>
            <div class="panel-body">
                <!-- View food nutritions -->
                <div class="row">
                    <div class="col-md-9">
                        <div class='form-group'>
                            {!! Form::label('facts', __('food.nutrition_facts')) !!}
                        </div>
                        <div class="form-group">
                            <h2><span id="food_name" class="text-primary">{{$food->name}} </span></h2>
                            <span class="glyphicon glyphicon-ok-sign" id="food_guaranteed" style="{{ $food->guaranteed ? 'display:none' : ''}}"></span>
                        </div>
                        <hr class="thick-3"/>
                        <div class="form-group row">
                            <div class="col-xs-2">
                                @lang('food.servings_field')
                            </div>
                            <div class="col-xs-4">
                                {!! Form::text('food_serving', $food->serving, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-xs-6">
                                {!! Form::select('food_servings_options', ['100 g', '1 g'], 0, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img id="food_image" class="pull-right img-responsive" src="/storage/{{$food->image == null ? 'resources/food_default.jpg' : 'images/foods/' . $food->image}}" />
                    </div>
                </div>
                <!-- Food nutrition facts -->
                <hr class="thick-3"/>
                <div class="row">
                    <div class="col-xs-4">
                        <b>@lang('food.calories')</b>
                    </div>
                    <div class="col-xs-2">
                        <span id="food_calories">{{$food->calories}}</span>
                    </div>
                    <div class="col-xs-4">
                        <b>@lang('food.sodium')</b>
                    </div>
                    <div class="col-xs-2">
                        <span id="food_sodium">{{$food->sodium}} </span> mg
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <b>@lang('food.total_fat')</b>
                    </div>
                    <div class="col-xs-2">
                        <span id="food_total_fat">{{$food->total_fat}} </span> g
                    </div>
                    <div class="col-xs-4">
                        <b>@lang('food.potassium')</b>
                    </div>
                    <div class="col-xs-2">
                        <span id="food_potassium">{{$food->potassium}} </span> mg
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        @lang('food.saturated')
                    </div>
                    <div class="col-xs-2">
                        <span id="food_saturated">{{$food->saturated}} </span> g
                    </div>
                    <div class="col-xs-4">
                        <b>@lang('food.total_carbs')</b>
                    </div>
                    <div class="col-xs-2">
                        <span id="food_total_carbs">{{$food->total_carbs}} </span> g
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        @lang('food.polyunsaturated')
                    </div>
                    <div class="col-xs-2">
                        <span id="food_polyunsaturated">{{$food->polyunsaturated}} </span> g
                    </div>
                    <div class="col-xs-4">
                        <b>@lang('food.dietary_fiber')</b>
                    </div>
                    <div class="col-xs-2">
                        <span id="food_dietary_fiber">{{$food->dietary_fiber}} </span> g
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        @lang('food.monounsaturated')
                    </div>
                    <div class="col-xs-2">
                        <span id="food_monounsaturated">{{$food->monounsaturated}} </span> g
                    </div>
                    <div class="col-xs-4">
                        <b>@lang('food.sugar')</b>
                    </div>
                    <div class="col-xs-2">
                        <span id="food_sugar">{{$food->sugar}} </span> g
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        @lang('food.trans')
                    </div>
                    <div class="col-xs-2">
                        <span id="food_trans">{{$food->trans}} </span> g
                    </div>
                    <div class="col-xs-4">
                        <b>@lang('food.protein')</b>
                    </div>
                    <div class="col-xs-2">
                        <span id="food_protein">{{$food->protein}} </span> g
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <b>@lang('food.cholesterol')</b>
                    </div>
                    <div class="col-xs-2">
                        <span id="food_cholesterol">{{$food->cholesterol}} </span> mg
                    </div>
                </div>
                <!-- vitamin -->
                <hr class="thick-3"/>
                <div class="row">
                    <div class="col-xs-4">
                        <b>@lang('food.vitamin_a')</b>
                    </div>
                    <div class="col-xs-2">
                        <span id="food_vitamin_a">{{$food->vitamin_a}} </span> %
                    </div>
                    <div class="col-xs-4">
                        <b>@lang('food.calcium')</b>
                    </div>
                    <div class="col-xs-2">
                        <span id="food_calcium">{{$food->calcium}} </span> %
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <b>@lang('food.vitamin_c')</b>
                    </div>
                    <div class="col-xs-2">
                        <span id="food_vitamin_c">{{$food->vitamin_c}} </span> %
                    </div>
                    <div class="col-xs-4">
                        <b>@lang('food.iron')</b>
                    </div>
                    <div class="col-xs-2">
                        <span id="food_iron">{{$food->iron}} </span> %
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.food-item').click(function (e) {
                e.preventDefault();
                var id = this.id;
                $.get('/food/search/' + id)
                    .done(function (data) {
                        loadFood(data);
                    })
                    .fail(function () {
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
            if (food.image != null && food.image != '') {
                $('#food_image').attr('src', '/storage/images/' + food.image);
                $('#food_image').show();
            } else {
                $('#food_image').attr('src', '/storage/resources/food_default.jpg');
                $('#food_image').show();
            }
            $('#food_calories').text(food.calories);
            localStorage
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