@props(['posts'])


@if ($jobs->count() > 1)
    <div class="lg:grid lg:grid-cols-6">
        @foreach ($jobs as $job)
            <x-post-card
                :post="$post"
                class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
            />
        @endforeach
    </div>
@endif
