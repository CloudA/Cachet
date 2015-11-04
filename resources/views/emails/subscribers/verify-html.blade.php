@extends('layout.emails')

@section('content')
    <h3>
        Status Subscription
    </h3>

    {!! trans('cachet.subscriber.email.verify.html', ['app_name' => Setting::get('app_name'), 'link' => $link]) !!}
@stop
