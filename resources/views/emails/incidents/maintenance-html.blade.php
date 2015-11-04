@extends('layout.emails')

@section('content')
    <div style="text-align: center; border-bottom: 1px solid black; height: 100%;">
        <h2>
            <a href="http://status.clouda.ca/" style="color: #2a92e5;text-decoration: none;hover: initial;">{!! trans('cachet.subscriber.email.maintenance.html', ['app_name' => Setting::get('app_name')]) !!}</a>
        </h2>
    </div>

    <h3>
        {!! $status !!}
    </h3>

    <p>
        {!! $htmlContent !!}
    </p>
    <p>
        <small><a href="{{ $unsubscribeLink }}">{!! trans('cachet.subscriber.email.unsubscribe') !!}</a></small>
    </p>
@stop
