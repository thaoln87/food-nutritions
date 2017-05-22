@extends('layouts.app')
@section('stylesheets')
    <link href="{{ asset('css/food.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
    {!! Form::open(['url' => '/food']) !!}
    {{ Html::tag('h1','Enter Nutrition Information')}}
    <!-- Brand Form Input -->
        <div class='form-group row'>
            <div class="col-md-2">
                {!! Form::label('brand', 'Brand / Restaurant:') !!}
            </div>
            <div class="col-md-8">
                {!! Form::text('brand', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <!-- Name Form Input -->
        <div class='form-group row {{$errors->has('name') ? "has-error" : ""}}'>
            <div class="col-md-2">
                {!! Form::label('name', 'Food Name:') !!}
            </div>
            <div class="col-md-8">
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-md-2 required">(*)</div>
            @if ($errors->has('name'))
                <div class="col-md-8 col-md-offset-2 help-block">{{ $errors->first('name') }}</div>
            @endif
        </div>
        <!-- Description Form Input -->
        <div class='form-group row'>
            <div class="col-md-2">
                {!! Form::label('description', 'Food Description:') !!}
            </div>
            <div class="col-md-8">
                {!! Form::textarea('description', null, ['placeholder' => 'Chicken Soup', 'class' => 'form-control', 'rows' => 3]) !!}
            </div>
        </div>

        {!! Html::tag('h2', 'Nutrition Facts') !!}

        <div>
            <!-- Serving size Form Input -->
            <div class='form-group row {{$errors->has('serving') ? "has-error" : ""}}'>
                <div class='col-md-2'>{!!Form::label('serving', 'Serving size:') !!}</div>
                <div class='col-md-8'>{!! Form::text('serving', null, ['placeholder' => 'e.g. 1/2 cup cooked', 'class' => 'form-control']) !!}</div>
                <div class="col-md-2 required">(*)</div>
                @if ($errors->has('serving'))
                    <div class="col-md-8 col-md-offset-2 help-block">{{ $errors->first('serving') }}</div>
                @endif
            </div>

            <!-- Serving per container Form Input -->
            <div class='form-group row {{$errors->has('serving_per_container') ? "has-error" : ""}}'>
                <div class='col-md-2'>{!!Form::label('serving_per_container', 'Serving per container:') !!}</div>
                <div class='col-md-8'>{!! Form::text('serving_per_container', null, ['class' => 'form-control']) !!}</div>
                <div class="col-md-2 required">(*)</div>
                @if ($errors->has('serving_per_container'))
                    <div class="col-md-8 col-md-offset-2 help-block">{{ $errors->first('serving_per_container') }}</div>
                @endif
            </div>

            <div>
                {!! Html::tag('h3', 'Amount per serving') !!}</div>
            <div>
                <!-- Calories Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('calories', 'Calories:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('calories', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                </div>

                <!-- Total Fat Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('total_fat', 'Total Fat:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('total_fat', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                    <div class='col-md-2 food_unit'>g</div>
                </div>

                <!-- Saturated Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('saturated', 'Saturated:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('saturated', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                    <div class='col-md-2 food_unit'>g</div>
                </div>

                <!-- Polyunsaturated Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('polyunsaturated', 'Polyunsaturated:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('polyunsaturated', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                    <div class='col-md-2 food_unit'>g</div>
                </div>

                <!-- Monounsaturated Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('monounsaturated', 'Monounsaturated:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('monounsaturated', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                    <div class='col-md-2 food_unit'>g</div>
                </div>

                <!-- Trans Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('trans', 'Trans:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('trans', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                    <div class='col-md-2 food_unit'>g</div>
                </div>

                <!-- Cholesterol Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('cholesterol', 'Cholesterol:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('cholesterol', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                </div>


                <!-- Sodium Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('sodium', 'Sodium:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('sodium', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                    <div class='col-md-2 food_unit'>mg</div>
                </div>

                <!-- Potassium Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('potassium', 'Potassium:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('potassium', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                    <div class='col-md-2 food_unit'>mg</div>
                </div>

                <!-- Total Carbs Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('total_carbs', 'Total Carbs:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('total_carbs', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                    <div class='col-md-2 food_unit'>g</div>
                </div>

                <!-- Dietary Fiber Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('dietary_fiber', 'Dietary Fiber:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('dietary_fiber', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                    <div class='col-md-2 food_unit'>g</div>
                </div>

                <!-- Sugars Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('sugar', 'Sugars:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('sugar', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                    <div class='col-md-2 food_unit'>g</div>
                </div>

                <!-- Protein Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('protein', 'Protein:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('protein', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                    <div class='col-md-2 food_unit'>g</div>
                </div>
            </div>

            <div>
                <!-- Vitamin A Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('vitamin_a', 'Vitamin A:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('vitamin_a', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                    <div class='col-md-2 food_unit'>%</div>
                </div>

                <!-- Vitamin C Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('vitamin_c', 'Vitamin C:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('vitamin_c', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                    <div class='col-md-2 food_unit'>%</div>
                </div>

                <!-- Calcium Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('calcium', 'Calcium:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('calcium', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                    <div class='col-md-2 food_unit'>%</div>
                </div>

                <!-- Iron Form Input -->
                <div class='form-group row'>
                    <div class='col-md-2'>{!!Form::label('iron', 'Iron:') !!}</div>
                    <div class='col-md-8'>{!! Form::text('iron', null, ['placeholder' => '0', 'class' => 'form-control']) !!}</div>
                    <div class='col-md-2 food_unit'>%</div>
                </div>


            </div>
        </div>
        <div class='form-group row'>
            <div class="col-md-8 col-md-offset-2">
            {!! Html::tag('div', 'Percent Daily Value are based on a 2000 calorie diet. Your daily value may be higher or lower depending on your calorie needs') !!}

            Help us to grow our food database
            {!! Form::checkbox('published', 0, false, ['text' => 'Yes, let other members use this food']) !!}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::submit('Save') !!}
                {!! Form::submit('Save And Create Another') !!}
                {!! Form::button('Cancel') !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection