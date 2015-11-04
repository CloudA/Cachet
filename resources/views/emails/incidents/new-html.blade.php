@extends('layout.emails')

@section('content')
    <div style="text-align: center; border-bottom: 1px solid black; height: 100%;">
        <h2>
            <a href="http://status.clouda.ca/" style="color: #2a92e5;text-decoration: none;hover: initial;">{!! trans('cachet.subscriber.email.incident.html-preheader', ['app_name' => Setting::get('app_name')]) !!}</a>
        </h2>
    </div>

    <h3>
        {!! $status !!}
    </h3>

    <p>
        {!! $htmlContent !!}
    </p>

<table class="body-sub" align="center">
    <tr>
        <td align="center">
            <p class="sub"><a href="{{ $unsubscribe_link }}">{!! trans('cachet.subscriber.email.unsubscribe') !!}</a></p>
        </td>
    </tr>
</table>
@stop
