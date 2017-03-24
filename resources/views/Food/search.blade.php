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
                    <span id="selected_name" class="text-success">
                    </span>
                    <span class="glyphicon glyphicon-ok-sign" id="selected_guaranteed" style="display:none;"></span>

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
                        $('#selected_name').text(data.name);
                        if (data.guaranteed) {
                            $('#selected_guaranteed').show();
                        } else {
                            $('#selected_guaranteed').hide();
                        }
                    })
                    .fail(function(){
                        console.log("error!!!!");
                    });
            });
        });

    </script>
@endsection