@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('profile.user_information')</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/user/profile">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ $user->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ $user->email }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-home"></i>
                                        </span>
                                    <input id="address" type="text" class="form-control" name="address"
                                           value="{{ $user->address }}" required>
                                    </div>
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label" for="phone_number">Phone Number</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-phone"></i>
                                        </span>
                                        <input id="phone_number" maxlength="11" name="phone_number" placeholder="090xxxxxxx"
                                               class="form-control input-md ac_mobile" value="{{$user->phone_number}}" type="number" required>
                                    </div>
                                    @if ($errors->has('phone_number'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('phone_number') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                                <label for="birthday" class="col-md-4 control-label">BOD</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                        </span>
                                        <input id="birthday" type="date" class="form-control" name="birthday"
                                               value="{{ $user->birthday }}" required>
                                    </div>
                                    @if ($errors->has('birthday'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                                <label for="height" class="col-md-4 control-label">Height (cm)</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-grain"></i>
                                        </span>
                                        <input id="height" max="250" min="140" type="number" class="form-control" name="height"
                                               value="{{ $user->height }}" required>
                                    </div>
                                    @if ($errors->has('height'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                                <label for="weight" class="col-md-4 control-label">Weight (kg)</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-scale"></i>
                                        </span>
                                        <input id="weight" max="150" min="30" type="number" step="0.1" class="form-control" name="weight"
                                               value="{{ $user->weight }}" required>
                                    </div>
                                    @if ($errors->has('weight'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('expected_weight') ? ' has-error' : '' }}">
                                <label for="expected_weight" class="col-md-4 control-label">Expected Weight (kg)</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-scale text-primary"></i>
                                        </span>
                                        <input id="expected_weight" max="150" min="30" type="number" step="0.1" class="form-control" name="expected_weight"
                                               value="{{ $user->expected_weight }}" required>
                                    </div>
                                    @if ($errors->has('expected_weight'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('expected_weight') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            @lang('profile.update')
                                        </button>
                                        <a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-default">
                                            @lang('profile.cancel')
                                        </a>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
