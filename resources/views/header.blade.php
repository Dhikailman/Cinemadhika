{{-- Header Start --}}
        {{-- banner section --}}
        <div class="w-full h-[700px] flex flex-col relative bg-black">
          @foreach ($banner as $bannerItem)
              {{-- banner image section --}}
              <div class="flex flex-row items-center w-full h-full relative slide ">
                  <img src="{{ $imageBaseURL }}/original{{ $bannerItem->backdrop_path }}"
                      class="absolute w-full h-full object-cover">
                  <div class="w-full h-full absolute bg-black bg-opacity-40"></div>

                  {{-- title movie --}}
                  <div class="w-10/12 flex flex-col ml-28 z-10">
                      <span class="font-bold font-inter text-4xl text-white">{{ $bannerItem->title }}</span>
                      <span
                          class="font-inter text-xl text-white w-1/2 line-clamp-2">{{ $bannerItem->overview }}</span>
                      <a href="/movie/{{ $bannerItem->id }}"
                          class="bg-develobe-100 text-white pl-2 py-2 mt-5 font-inter pr-4 text-sm flex flex-row rounded-full items-center hover:drop-shadow-lg duration-200 w-fit">
                          <svg width='24' height='24' role="img" viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <title>VLC media player</title>
                              <path
                                  d="M12.0319 0c-.8823 0-1.0545.136-1.0545.136-.1738.056-.3556.255-.4105.43L9.683 3.3808c.4729.1729 1.3222.4266 2.2337.4266 1.0987 0 2.017-.3494 2.3763-.5075L13.4352.566c-.055-.1755-.237-.3707-.4067-.4374 0 0-.1142-.1286-.9966-.1286zm3.5645 7.455c-.3601.34-1.3276.9373-3.6797.9373-2.2929 0-3.189-.5678-3.5213-.9113l-1.3887 4.4227c.2272.3614 1.2539 1.5594 4.8847 1.5594 3.7569 0 4.8539-1.3467 5.0649-1.6737zm-8.5897 4.4487l-1.0025 3.1922H4.3428c-.2486 0-.5097.1932-.5826.4315l-2.334 7.6317a.3962.3962 0 0 0-.0169.1537c-.0008.0053-.002 0.0099-.002 0.016 0 0.0839.0233 0.226.0233 0.226.0322.2456.2612.4452.5098.4452h20.1192c.2487 0 .4768-.1994.5098-.4453 0 0 .0234-.142.0234-.226a.0245.0245 0 0 0-.0025-.01.3201.3201 0 0 0 .0024-.0313.4096.4096 0 0 0-.019-.1282l-2.3339-7.6318c-.0729-.2383-.334-.4314-.5826-.4314h-1.6636l.2005.6391c-.2407.4854-1.4886 2.38-6.3027 2.38-4.6003 0-5.8288-1.73-6.1107-2.3072z" />
                          </svg>
                          <span>Detail Movie</span>
                      </a>
                  </div>
                  {{-- end title --}}
              </div>
              {{-- end image section --}}
          @endforeach
          {{-- //prevandnextbutton --}}
          @if (count($banner) > 1)
              {{-- prev button --}}
              <div class="absolute left-0 top-1/2 -translate-y-1/2 w-1/12 flex justify-center"
                  onclick="moveSlide(-1)">
                  <button class="bg-white p-3 rounded-full opacity-20 hover:opacity-100 duration-200"
                      onclick="plusSlides(-1)">
                      <svg width="8px" height="12px" viewBox="0 0 8 12" version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>navigate_previous</title>
                          <desc>Created with Sketch.</desc>
                          <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g id="Two-Tone" transform="translate(-516.000000, -2862.000000)">
                                  <g id="Image" transform="translate(100.000000, 2626.000000)">
                                      <g id="Two-Tone-/-Image-/-navigate_previous"
                                          transform="translate(408.000000, 230.000000)">
                                          <g>
                                              <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
                                              <polygon id="🔹-Primary-Color" fill="#1D1D1D"
                                                  points="14.41 7.41 13 6 7 12 13 18 14.41 16.59 9.83 12"></polygon>
                                          </g>
                                      </g>
                                  </g>
                              </g>
                          </g>
                      </svg>
                  </button>
              </div>
              {{-- end prev button --}}
              {{-- next Button --}}
              <div class="absolute right-0 top-1/2 -translate-y-1/2 w-1/12 flex justify-center"
                  onclick="moveSlide(1)">
                  <button class="bg-white p-3 rounded-full opacity-20 hover:opacity-100 duration-200"
                      onclick="plusSlides(1)">
                      <svg width="8px" height="12px" viewBox="0 0 8 12" version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <!-- Generator: Sketch 52.5 (67469) - http://www.bohemiancoding.com/sketch -->
                          <title>navigate_next</title>
                          <desc>Created with Sketch.</desc>
                          <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g id="Two-Tone" transform="translate(-516.000000, -2862.000000)">
                                  <g id="Image" transform="translate(100.000000, 2626.000000)">
                                      <g id="Two-Tone-/-Image-/-navigate_next"
                                          transform="translate(408.000000, 230.000000)">
                                          <g>
                                              <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
                                              <polygon id="🔹-Primary-Color" fill="#1D1D1D"
                                                  points="10.02 18 16.02 12 10.02 6 8.61 7.41 13.19 12 8.61 16.59">
                                              </polygon>
                                          </g>
                                      </g>
                                  </g>
                              </g>
                          </g>
                      </svg>
                  </button>
              </div>
              {{-- End next button --}}
          @endif
<div class="p-5 bg-gradient-to-r from-gray-500 to-blue-500 text-white    text-center">
    <a href="" class=" text-4xl font-poppins text-develobe-900  hover:text-gray-200 duration-200 font-bold ">CINEMA XXI</a>

  </div>

  
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
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