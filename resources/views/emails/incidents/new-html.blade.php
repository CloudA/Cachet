@extends('layout.emails')

@section('preheader')
{!! trans('cachet.subscriber.email.incident.html-preheader', ['app_name' => Setting::get('app_name')]) !!}
@stop

@section('content')
	<h2>
		{!! trans('cachet.subscriber.email.incident.html-preheader', ['app_name' => Setting::get('app_name')]) !!}
	</h2>

    <div style="text-align: center; border-bottom: 1px solid black; height: 100%;">
        <h2>
            <a href="http://status.clouda.ca/" style="color: #2a92e5;text-decoration: none;hover: initial;">New incident has been reported on Cloud-A Status Page</a>
        </h2>
    </div>

    <p>
        {!! $htmlContent !!}
    </p>

    <p>
        <small><a href="{{ $unsubscribeLink }}">{!! trans('cachet.subscriber.email.unsubscribe') !!}</a></small>
    </p>
@stop
