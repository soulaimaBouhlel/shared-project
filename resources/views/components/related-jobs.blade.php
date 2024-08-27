@props(['job'])
    <article
        {{ $attributes->merge(['class' => 'border border-gray-200 rounded-lg bg-gray-50 p-4 shadow-sm hover:shadow-lg relative overflow-hidden max-h-60 ']) }}>

        <!-- Job Title -->
        <h3 class="text-base font-semibold text-gray-700 truncate">{{ $job->title }}</h3>

        <!-- Location -->
        <p class="text-sm text-gray-500 mt-1 truncate">{{ $job->location }}</p>


        <div class="mt-2 relative">
            <p class="text-sm text-gray-400">
                {{ Str::limit($job->description, 100) }}
            </p>
            <div class="absolute inset-x-0 bottom-0 h-8 bg-gradient-to-t from-gray-50 to-transparent"></div>
        </div>


</article>

