@extends('layout.emails')

@section('preheader')
{!! trans('cachet.subscriber.email.verify.html-preheader', ['app_name' => Setting::get('app_name')]) !!}
@stop

@section('content')
    <div style="text-align: center; border-bottom: 1px solid black; height: 100%;">
        <h2>
            <a href="http://status.clouda.ca/" style="color: #2a92e5;text-decoration: none;hover: initial;">{!! trans('cachet.subscriber.email.incident.html-preheader', ['app_name' => Setting::get('app_name')]) !!}</a>
        </h2>
    </div>

    <h3>
        Status Subscription
    </h3>

    {!! trans('cachet.subscriber.email.verify.html', ['app_name' => Setting::get('app_name'), 'link' => $link]) !!}
@stop
