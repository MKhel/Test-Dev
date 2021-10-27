@foreach($allApp as $app)
        {{ $app->job_application_status}}
@endforeach

        {{ count($app->job_application_status === 'Signed JOL')}}