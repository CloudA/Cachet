@extends('layout.emails')

@section('preheader')
{!! trans('cachet.subscriber.email.incident.html-preheader', ['app_name' => Setting::get('app_name')]) !!}
@stop

@section('content')
	<h2>
		{!! trans('cachet.subscriber.email.incident.html-preheader', ['app_name' => Setting::get('app_name')]) !!}
	</h2>

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
