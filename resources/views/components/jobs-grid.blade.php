@props(['jobs'])



<div class="space-y-4">
        @foreach ($jobs as $job)
            <x-job
                :job="$job"
            />
        @endforeach
    </div>
