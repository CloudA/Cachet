@extends('layout.emails')

@section('preheader')
{!! trans('cachet.subscriber.email.verify.html-preheader', ['app_name' => Setting::get('app_name')]) !!}
@stop

@section('content')
    <h3>
        Status Subscription
    </h3>

    {!! trans('cachet.subscriber.email.verify.html', ['app_name' => Setting::get('app_name'), 'link' => $link]) !!}
@stop
