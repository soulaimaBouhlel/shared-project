<x-layout>
    @include ('jobs._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($jobs->count())
            @foreach ($jobs as $job)
                <x-job
                    :job="$job"
                />
            @endforeach

        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
