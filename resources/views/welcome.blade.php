@extends('layouts.app')

@section('content')
    <div class="content content-bg">
        <div class="banner-content">
            <h2>@lang('home.banner_content_title')</h2>
            <p>@lang('home.banner_content_quote')</p>
            <p>
                <a href="{{route('register')}}" class="btn btn-primary">@lang('home.signup')</a>
            </p>
            <p>
                <span>@lang('home.had_account')</span>
                <a href="{{ route('login') }}">@lang('home.login')</a>
            </p>
        </div>
    </div>
@endsection
