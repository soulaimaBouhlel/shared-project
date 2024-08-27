@props(['job', 'relatedJobs'])
<div class="px-4 py-8">
    <div class="flex flex-col lg:flex-row">
        <div class="lg:w-2/3 pr-4">
            <x-job-featured-card :job="$job" />
        </div>
        <div class="lg:w-1/3">
        @if($relatedJobs->count())
            <h2 class="text-xl font-bold text-gray-900 mb-4">Related Jobs</h2>
            <div class="space-y-4">
                @foreach($relatedJobs as $relatedJob)
                    <a href="{{url('/jobs/'.$relatedJob->slug)}}"><x-related-jobs :job="$relatedJob" /></a>

                @endforeach
            </div>
        @else
            <p class="text-gray-600">No related jobs found.</p>
        @endif
    </div>
    </div>
</div>
