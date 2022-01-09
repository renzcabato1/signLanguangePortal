<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('images/logo.png')}}" rel="icon">
  <link href="{{asset('images/logo.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<body >
  <!-- <img id="img" src="hand.jpg"/>  -->
  <div class="d-flex justify-content-center">
    <div class="row pt-5">
        <div class="col-md-12 text-center">
            <button id='command' onclick="toggleVideo()" id="trackbutton" class="btn btn-block btn-info" type="button">
            Start Video
            </button>
        </div>
        <Br>
        {{-- <div class="col-lg-3 pb-3"> --}}
            <div id="updatenote" class="btn btn-block btn-warning " style='display:none;' > loading model ..</div><br>
        {{-- </div> --}}
        <video class="videobox canvasbox" autoplay="autoplay" style='display:none;' id="myvideo"></video>
        
            <canvas id="canvas" class="border canvasbox bg-dark" width="640" height="480"></canvas><Br>
        
        {{-- <span id="data" class="text-center">data</span> --}}
    </div>
  </div>

  <script src="https://unpkg.com/carbon-components@latest/scripts/carbon-components.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/handtrackjs/dist/handtrack.min.js"> </script>
  {{-- <script src="{{ asset('bootstrap/js/jquery-3.1.1.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script> --}}
  <script src="{{ asset('bootstrap/track.js') }}"></script>
</body>

</html>