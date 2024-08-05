<!DOCTYPE html>
<html lang="en">
<head>
  <title>Netflix</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
  @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b  from-zinc-900 via-zinc-300  ">


{{-- Header Start --}}
@include('headershows')
{{-- Header End --}}

{{-- Content Start --}}
@include('contentshows')
{{-- Content End --}}

<!-- footer Start -->
 @include('footer')
<!-- footer End -->


    

</body>
</html>