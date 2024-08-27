@props(['job'])

<article
    {{ $attributes->merge(['class' => 'bg-white border border-gray-300 rounded-lg shadow-lg p-6 my-8 ']) }}>
    <div class="lg:w-full lg:pr-6 mb-8 lg:mb-0">


    <!-- Job Details -->
        <div class="flex-1 lg:mr-6">
            <div class="text-sm text-gray-500 mb-3">
                Posted {{ $job->created_at->diffForHumans() }}
            </div>
            <h3 class="text-3xl font-bold text-gray-900 mb-3">
                {{ $job->title }}
            </h3>
            <p class="text-sm text-gray-600 mb-3">
                <i class="fas fa-map-marker-alt mr-2 text-gray-400"></i>{{ $job->location }}
            </p>
            <p class="text-sm font-semibold text-gray-800 mb-3">
                Requirements:
            </p>
            <p class="text-sm text-gray-700 mb-4">
                {{ $job->requirements }}
            </p>
            <p class="text-sm text-gray-700 mb-4">
                {{ $job->description }}
            </p>
            <!-- Tags and Details Link -->
            <div class="flex items-center justify-between mb-4">
                <div class="flex flex-wrap gap-2">
                    @foreach ($job->tags as $tag)
                        <x-tag-button :tag="$tag" class="bg-blue-100 text-blue-600" />
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- Back to All Jobs Button -->
    <div class="mt-4 text-right">
        <a href="{{ route('home') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200">
            <i class="fas fa-arrow-left mr-2"></i> Back to All Jobs
        </a>
    </div>
</article>
