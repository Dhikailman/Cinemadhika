<!DOCTYPE html>
<html lang="en">
<head>
  <title>CINEMA XXI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  @vite('resources/css/app.css')    
</head>
<body class="bg-dark text-white">

{{-- Header Start --}}
@include('header')
{{-- Header End --}}

{{-- Banner Start --}}
@include('banner')
{{-- Banner End --}}

{{-- Content Start --}}
@include('content')
{{-- Content End --}}

{{-- Footer Start --}}
@include('footer')
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
