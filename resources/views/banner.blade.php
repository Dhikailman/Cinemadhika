{{-- Banner Start --}}
<div class="relative h-screen mb-8">
    @foreach ($banner as $bannerItem)
        <div class="flex flex-row items-center w-full h-full relative slide">
            <img src="{{ $imageBaseURL }}/original{{ $bannerItem->backdrop_path }}" class="absolute w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative z-10 flex items-center justify-center h-full text-center text-white px-4">
                <div>
                    <h1 class="text-5xl font-bold mb-4">{{ $bannerItem->title }}</h1>
                    <p class="text-lg mb-6">{{ $bannerItem->overview }}</p>
                    <div>
                        <a href="https://www.youtube.com/watch?v=73_1biulkYk">
                        <button class="btn btn-light text-black font-semibold py-2 px-4 rounded-full mr-4">Putar</button></a>
                        <a href="https://en.wikipedia.org/wiki/Deadpool_%26_Wolverine">
                        <button class="btn btn-dark text-white font-semibold py-2 px-4 rounded-full">Selengkapnya</button></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
  
  
  </div>
  {{-- Banner End --}}