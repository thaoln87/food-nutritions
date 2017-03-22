<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <title>Food Nutrition - Create Food</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
<body>
    {!! Form::open(['action' => 'FoodController@store']) !!}
    {{ Html::tag('div','Enter Nutrition Information')}}

    <!-- Brand Form Input -->
    <div class='form-group'>
        {!! Form::label('brand', 'Brand / Restaurant:') !!}
        {!! Form::text('brand', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Food Description Form Input -->
    <div class='form-group'>
        {!! Form::label('foodDescription', 'Food Description:') !!}
        {!! Form::text('foodDescription', null, ['placeholder' => 'Chicken Soup', 'class' => 'form-control']) !!}
    </div>

    {!! Html::tag('h2', 'Nutrition Facts') !!}

    <div>
        <!-- Serving size Form Input -->
        <div class='form-group'>
            {!! Form::label('servingSize', 'Serving size:') !!}
            {!! Form::text('servingSize', null, ['placehodler' => 'e.g. 1/2 cup cooked', 'class' => 'form-control']) !!}
        </div>

        <!-- Serving per container Form Input -->
        <div class='form-group'>
            {!! Form::label('servingPerContainer', 'Serving per container: (about)') !!}
            {!! Form::text('servingPerContainer', null, ['class' => 'form-control']) !!}
        </div>

        <div>
            {!! Html::tag('h3', 'Amount per serving') !!}
            <div>
                <!-- Calories Form Input -->
                <div class='form-group'>
                    {!! Form::label('calories', 'Calories:') !!}
                    {!! Form::text('calories', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Total Fat Form Input -->
                <div class='form-group'>
                    {!! Form::label('totalFat', 'Total Fat:') !!}
                    {!! Form::text('totalFat', null, ['class' => 'form-control']) !!} g
                </div>

                <!-- Saturated Form Input -->
                <div class='form-group'>
                    {!! Form::label('saturated', 'Saturated:') !!}
                    {!! Form::text('saturated', null, ['class' => 'form-control']) !!} g
                </div>

                <!-- Polyunsaturated Form Input -->
                <div class='form-group'>
                    {!! Form::label('polyunsaturated', 'Polyunsaturated:') !!}
                    {!! Form::text('polyunsaturated', null, ['class' => 'form-control']) !!} g
                </div>

                <!-- Monounsaturated Form Input -->
                <div class='form-group'>
                    {!! Form::label('monounsaturated', 'Monounsaturated:') !!}
                    {!! Form::text('monounsaturated', null, ['class' => 'form-control']) !!} g
                </div>

                <!-- Trans Form Input -->
                <div class='form-group'>
                    {!! Form::label('trans', 'Trans:') !!}
                    {!! Form::text('trans', null, ['class' => 'form-control']) !!} g
                </div>

                <!-- Sodium Form Input -->
                <div class='form-group'>
                    {!! Form::label('sodium', 'Sodium:') !!}
                    {!! Form::text('sodium', null, ['class' => 'form-control']) !!} mg
                </div>

                <!-- Potassium Form Input -->
                <div class='form-group'>
                    {!! Form::label('potassium', 'Potassium:') !!}
                    {!! Form::text('potassium', null, ['class' => 'form-control']) !!} mg
                </div>

                <!-- Total Carbs Form Input -->
                <div class='form-group'>
                    {!! Form::label('totalCarbs', 'Total Carbs:') !!}
                    {!! Form::text('totalCarbs', null, ['class' => 'form-control']) !!} g
                </div>

                <!-- Dietary Fiber Form Input -->
                <div class='form-group'>
                    {!! Form::label('dietaryFiber', 'Dietary Fiber:') !!}
                    {!! Form::text('dietaryFiber', null, ['class' => 'form-control']) !!} g
                </div>

                <!-- Sugars Form Input -->
                <div class='form-group'>
                    {!! Form::label('sugars', 'Sugars:') !!}
                    {!! Form::text('sugars', null, ['class' => 'form-control']) !!} g
                </div>

                <!-- Protein Form Input -->
                <div class='form-group'>
                    {!! Form::label('protein', 'Protein:') !!}
                    {!! Form::text('protein', null, ['class' => 'form-control']) !!} g
                </div>
            </div>

            <div>
                <!-- Vitamin A Form Input -->
                <div class='form-group'>
                    {!! Form::label('vitaminA', 'Vitamin A:') !!}
                    {!! Form::text('vitaminA', null, ['class' => 'form-control']) !!} %
                </div>

                <!-- Vitamin C Form Input -->
                <div class='form-group'>
                    {!! Form::label('vitaminC', 'Vitamin C:') !!}
                    {!! Form::text('vitaminC', null, ['class' => 'form-control']) !!} %
                </div>

                <!-- Calcium Form Input -->
                <div class='form-group'>
                    {!! Form::label('calcium', 'Calcium:') !!}
                    {!! Form::text('calcium', null, ['class' => 'form-control']) !!} %
                </div>

                <!-- Iron Form Input -->
                <div class='form-group'>
                    {!! Form::label('iron', 'Iron:') !!}
                    {!! Form::text('iron', null, ['class' => 'form-control']) !!} %
                </div>


            </div>
        </div>
    </div>
    {!! Html::tag('div', 'Percent Daily Value are based on a 2000 calorie diet. Your daily value may be higher or lower depending on your calorie needs') !!}

    Help us to grow our food database
    {!! Form::checkbox('published', 'Yes, let other members use this food') !!}

    <div>
        {!! Form::submit('Save') !!}
        {!! Form::submit('Save And Create Another') !!}
        {!! Form::button('Cancel') !!}
    </div>

    {!! Form::close() !!}
</body>
</html>