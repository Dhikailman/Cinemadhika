{{-- Banner Start --}}
<div class="relative h-screen mb-8">
    @foreach ($banner as $bannerItem)
        <div class="flex flex-row items-center w-full h-full relative slide">
            <img src="{{ $imageBaseURL }}/original{{ $bannerItem->backdrop_path }}" class="absolute w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative z-10 flex items-center justify-center h-full text-center text-white px-4">
                <div>
                    <h1 class="text-5xl font-bold mb-4">{{ $bannerItem->title }}</h1>
                    <p class="text-lg mb-6 ml-3 mr-10">{{ $bannerItem->overview }}</p>
                    <div>
                        @if ($bannerItem->trailer_url)
                            <button class="btn btn-light text-black font-semibold py-2 px-4 rounded-full mr-4" data-toggle="modal" data-target="#trailerModal{{ $bannerItem->id }}">Putar</button>
                        @endif
                        <a href="https://en.wikipedia.org/wiki/{{ urlencode($bannerItem->title) }}">
                            <button class="btn btn-dark text-white font-semibold py-2 px-4 rounded-full">Selengkapnya</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

        
</div>
{{-- Banner End --}}

{{-- Modals Trailers --}}
@foreach ($banner as $bannerItem)
    @if ($bannerItem->trailer_url)
        <div class="modal fade" id="trailerModal{{ $bannerItem->id }}" tabindex="-1" role="dialog" aria-labelledby="trailerModalLabel{{ $bannerItem->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="trailerModalLabel{{ $bannerItem->id }}">{{ $bannerItem->title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe width="100%" height="315" src="{{ $bannerItem->trailer_url }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
