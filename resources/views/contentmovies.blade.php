<div class="container mx-auto mt-5 max-w-full xl:max-w-screen-2xl">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Bagian Trending Movies (first five movies) -->
        <div class="bg-white p-12 rounded-lg shadow-md w-full mb-10">
            @foreach($movies->take(5) as $index => $movie)
                <div class="mb-12">
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-semibold font-poppins mb-2">{{ $index + 1 }}. {{ $movie['title'] }}</h3>
                        <span class="text-gray-500 text-lg">{{ \Carbon\Carbon::parse($movie['release_date'])->format('F d, Y') }}</span>
                    </div>
                    <img src="{{ $imageBaseUrl }}/original{{ $movie['backdrop_path'] }}" alt="{{ $movie['title'] }}" class="w-full h-[20rem] object-cover rounded-lg mb-4">
                    <p class="text-gray-700 text-lg">{{ \Illuminate\Support\Str::limit($movie['overview'], 135) }}</p>
                </div>
            @endforeach
        </div>

        <!-- Bagian lainnya -->
        <div class="bg-white p-12 rounded-lg shadow-md w-full mb-10">
            @foreach($movies->skip(5)->take(5) as $index => $movie)
                <div class="mb-10">
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-semibold font-poppins mb-2 ">{{ $index + 1 }}. {{ $movie['title'] }}</h3>
                        <span class="text-gray-500 text-lg">{{ \Carbon\Carbon::parse($movie['release_date'])->format('F d, Y') }}</span>
                    </div>
                    <img src="{{ $imageBaseUrl }}/original{{ $movie['backdrop_path'] }}" alt="{{ $movie['title'] }}" class="w-full h-[20rem] object-cover rounded-lg mb-4">
                    <p class="text-gray-700 text-lg">{{ \Illuminate\Support\Str::limit($movie['overview'], 135) }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>