<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl text-blue-500">
        Job Board
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <i class="fas fa-search mr-2"></i>

            <form method="GET" action="/">
                @if (request('tag'))
                    <input type="hidden" name="tag" value="{{ request('tag') }}">
                @endif

                <input type="text"
                       name="search"
                       placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                       value="{{ request('search') }}"
                >
            </form>
        </div>
    </div>
</header>
