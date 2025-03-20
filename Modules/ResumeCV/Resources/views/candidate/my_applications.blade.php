@extends('themes::default.layout')

@section('content')
<div class="container">
    <h2 class="mb-4">@lang('Jobs I Applied For')</h2>

    @if($applications->isEmpty())
        <p>@lang('You have not applied to any jobs yet.')</p>
    @else
        <div class="list-group">
            @foreach($applications as $application)
                <a href="{{ route('job', ['slug' => $application->job->slug]) }}" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">{{ $application->job->title }}</h5>
                    <p class="mb-1">{{ $application->job->company->company_name }}</p>
                    <small>@lang('Applied on'): {{ \Carbon\Carbon::parse($application->created_at)->toFormattedDateString() }}</small>
                </a>
            @endforeach
        </div>
    @endif
</div>
@endsection
