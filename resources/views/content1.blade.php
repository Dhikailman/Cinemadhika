<div class="container mx-auto mt-5">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Bagian Popular Movies -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold font-poppins mb-3">Trending Movies This Week</h2>

                @foreach($movies as $index => $movie)
                    <div class="mb-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-semibold font-poppins mb-1">{{ $index + 1 }}. {{ $movie['title'] }}</h3>
                            <span class="text-gray-500">{{ \Carbon\Carbon::parse($movie['release_date'])->format('F d, Y') }}</span>
                        </div>
                        <img src="{{ $imageBaseUrl }}/w500{{ $movie['backdrop_path'] }}" alt="{{ $movie['title'] }}" class="w-full h-64 object-cover rounded-lg mb-2">
                        <p class="text-gray-700">{{ \Illuminate\Support\Str::limit($movie['overview'], 200) }}</p>
                    </div>
                @endforeach
        </div>

        </div>
    </div>
</div>