<!DOCTYPE html>
<html lang="en">
<head>
  <title>CINEMA XXI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @vite('resources/css/app.css')
</head>
<body class="bg-dark text-white">

{{-- Header Start --}}
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CINEMA XXI</a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TV Shows</a>
        </li>
      </ul>
    </div>
</nav>
{{-- Header End --}}

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
                      <button class="btn btn-light text-black font-semibold py-2 px-4 rounded-full mr-4">Putar</button>
                      <button class="btn btn-dark text-white font-semibold py-2 px-4 rounded-full">Selengkapnya</button>
                  </div>
              </div>
          </div>
      </div>
  @endforeach

  @if (count($banner) > 1)
      <div class="absolute left-0 top-1/2 -translate-y-1/2 w-1/12 flex justify-center" onclick="moveSlide(-1)">
          <button class="bg-white p-3 rounded-full opacity-20 hover:opacity-100 duration-200" onclick="plusSlides(-1)">
              <svg width="8px" height="12px" viewBox="0 0 8 12">
                  <polygon points="14.41 7.41 13 6 7 12 13 18 14.41 16.59 9.83 12"></polygon>
              </svg>
          </button>
      </div>
      <div class="absolute right-0 top-1/2 -translate-y-1/2 w-1/12 flex justify-center" onclick="moveSlide(1)">
          <button class="bg-white p-3 rounded-full opacity-20 hover:opacity-100 duration-200" onclick="plusSlides(1)">
              <svg width="8px" height="12px" viewBox="0 0 8 12">
                  <polygon points="10.02 18 16.02 12 10.02 6 8.61 7.41 13.19 12 8.61 16.59"></polygon>
              </svg>
          </button>
      </div>
  @endif
</div>
{{-- Banner End --}}

{{-- Top 10 Movies Start --}}
<div class="mt-12">
    <span class="font-inter font-bold text-xl ml-20">Top 10 Movies</span>
    <div class="w-auto flex flex-row overflow-x-auto pl-28 pt-6 pb-10">
        @foreach ($movies->take(4) as $movieItem)
            @php
                $original_date = $movieItem->release_date;
                $timestamp = strtotime($original_date);
                $movieYear = date("Y", $timestamp);

                $movieID = $movieItem->id;
                $movieTitle = $movieItem->title;
                $movieRating = $movieItem->vote_average;
                $movieImage = "{$imageBaseURL}/w400{$movieItem->poster_path}";
            @endphp
            <a href="movie/{{$movieID}}" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-xl
                    group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px]
                     p-5 flex flex-col mr-8 duration-100">
                    <div class="rounded-[32px] overflow-hidden">
                        <img src="{{$movieImage}}" alt=""
                            class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200">
                    </div>
                    <span class="font-inter font-bold text-xl mt-5 line-clamp-1 group-hover:line-clamp-none">{{$movieTitle}}</span>
                    <span class="font-inter font-bold text-sm mt-1 ">{{$movieYear}}</span>
                    <div class="item-center flex flex-row mt-1">
                        <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" width="24" height="24">
                            <style type="text/css">
                                .st0{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                                .st1{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;}
                                .st2{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:5.2066,0;}
                            </style>
                            <path class="st0" d="M11,24V14H5v12h6v-2.4l0,0c1.5,1.6,4.1,2.4,6.2,2.4h6.5c1.1,0,2.1-0.8,2.3-2l1.5-8.6c0.3-1.5-0.9-2.4-2.3-2.4
                                H20V6.4C20,5.1,18.7,4,17.4,4h0C16.1,4,15,5.1,15,6.4v0c0,1.6-0.5,3.1-1.4,4.4L11,13.8"></path>
                        </svg>
                        <span class="font-inter text-sm mt-1">{{$movieRating}}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="/movies" class="btn btn-primary">Show More</a>
    </div>
</div>
{{-- Top 10 Movies End --}}

{{-- Top 10 TV Shows Start --}}
<div class="mt-12">
    <span class="font-inter font-bold text-xl ml-20">Top 10 TV Shows</span>
    <div class="w-auto flex flex-row overflow-x-auto pl-28 pt-6 pb-10">
        @foreach ($tvShows->take(4) as $showItem)
            @php
                $original_date = $showItem->first_air_date;
                $timestamp = strtotime($original_date);
                $showYear = date("Y", $timestamp);

                $showID = $showItem->id;
                $showTitle = $showItem->name;
                $showRating = $showItem->vote_average;
                $showImage = "{$imageBaseURL}/w400{$showItem->poster_path}";
            @endphp
            <a href="show/{{$showID}}" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-black drop-shadow-xl
                    group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px]
                     p-5 flex flex-col mr-8 duration-100">
                    <div class="rounded-[32px] overflow-hidden">
                        <img src="{{$showImage}}" alt=""
                            class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200">
                    </div>
                    <span class="font-inter font-bold text-xl mt-5 line-clamp-1 group-hover:line-clamp-none">{{$showTitle}}</span>
                    <span class="font-inter font-bold text-sm mt-1 ">{{$showYear}}</span>
                    <div class="item-center flex flex-row mt-1">
                        <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" width="24" height="24">
                            <style type="text/css">
                                .st0{fill:none;stroke:#ffffff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                                .st1{fill:none;stroke:#ffffff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;}
                                .st2{fill:none;stroke:#ffffff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:5.2066,0;}
                            </style>
                            <path class="st0" d="M11,24V14H5v12h6v-2.4l0,0c1.5,1.6,4.1,2.4,6.2,2.4h6.5c1.1,0,2.1-0.8,2.3-2l1.5-8.6c0.3-1.5-0.9-2.4-2.3-2.4
                                H20V6.4C20,5.1,18.7,4,17.4,4h0C16.1,4,15,5.1,15,6.4v0c0,1.6-0.5,3.1-1.4,4.4L11,13.8"></path>
                        </svg>
                        <span class="font-inter text-sm mt-1">{{$showRating}}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="/shows" class="btn btn-primary">Show More</a>
    </div>
</div>
{{-- Top 10 TV Shows End --}}

  <div class="text-center p-3 bg-dark text-white">
    &copy; 2024 CINEMA XXI. All Rights Reserved.
  </div>
</footer>
{{-- Footer End --}}

<script>
    // JavaScript untuk mengontrol slideshow
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let slides = document.querySelectorAll(".slide");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 5000); // Mengubah slide setiap 5 detik
    }

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function moveSlide(n) {
        plusSlides(n);
    }
</script>

</body>
</html>
