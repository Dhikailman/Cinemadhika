{{-- Trending Movies Start --}}
<div class="mt-12 flex flex-col items-center">
    <span class="font-inter font-bold text-3xl mb-4">Trending Movies This Week</span>
    <div class="w-full flex justify-center">
        <div class="w-auto flex flex-row overflow-x-auto pt-6 pb-10">
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
                    <div class="min-w-[232px] min-h-[428px] bg-black drop-shadow-xl
                        group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px]
                         p-5 flex flex-col mr-8 duration-100">
                        <div class="rounded-[32px] overflow-hidden">
                            <img src="{{$movieImage}}" alt=""
                                class="w-full h-[300px] rounded-[32px] group-hover:scale-110 duration-200">
                        </div>
                        <span class="font-inter font-bold text-xl mt-5 line-clamp-1 group-hover:line-clamp-none">{{$movieTitle}}</span>
                        <span class="font-inter font-bold text-sm mt-1 ">{{$movieYear}}</span>
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
                            <span class="font-inter text-sm mt-1">{{$movieRating}}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div class="text-center mt-2 mb-3">
        <a href="/movies" class="btn btn-light font-poppins">Show More</a>
    </div>
</div>
{{-- Trending Movies End --}}

{{-- Trending TV Shows Start --}}
<div class="mt-20 flex flex-col items-center">
    <span class="font-inter font-bold text-3xl mb-4">Trending TV Shows This Week</span>
    <div class="w-full flex justify-center">
        <div class="w-auto flex flex-row overflow-x-auto pt-6 pb-10">
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
                                class="w-full h-[300px] rounded-[32px] group-hover:scale-110 duration-200">
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
    </div>
    <div class="text-center mt-2 mb-5">
        <a href="/detail" class="btn btn-light font-poppins">Show More</a>
    </div>
</div>
{{-- Trending TV Shows End --}}
