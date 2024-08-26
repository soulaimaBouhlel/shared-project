@props(['job'])

<article
    {{ $attributes->merge(['class' => 'border border-gray-300 rounded-lg p-4 hover:shadow-lg transition-shadow duration-300 bg-white']) }}>
    <div class="flex items-center">



        <div class="flex-2">
            <div class="text-xs text-gray-500 mb-5">
                Posted {{ $job->created_at->diffForHumans() }}
                <h3 class="text-xl font-semibold text-gray-800 hover:text-blue-500 ">{{ $job->title }}</h3>
            </div>


            <div class="ml-6 space-y-2 ">
            <p class="text-xs text-gray-400">
                <i class="fas fa-map-marker-alt mr-2 text-gray-400"></i>{{ $job->location }}
            </p>
            <h2 class="text-sm font-semibold text-gray-700">Requirements : {{ $job->requirements }}</h2>
            <p class="text-sm text-gray-600">{{ $job->description }}</p>



            </div>
        </div>
    </div>
    <div class="mt-4 flex justify-between items-center">
        <div class="space-x-2">

            @foreach ($job->tags as $tag)
            <x-tag-button
                    :tag="$tag"
                />
            @endforeach

        </div>
        <a href="#" class="text-blue-500 hover:text-blue-700 text-sm font-semibold">View Details</a>
    </div>
</article>
