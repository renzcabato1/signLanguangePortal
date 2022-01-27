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
  <script src="https://cdn.jsdelivr.net/npm/@mediapipe/camera_utils/camera_utils.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@mediapipe/control_utils/control_utils.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@mediapipe/drawing_utils/drawing_utils.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@mediapipe/hands/hands.js" crossorigin="anonymous"></script>
  
  <style>
    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url("{{ asset('/images/3.gif')}}") 50% 50% no-repeat rgb(249,249,249) ;
        opacity: .8;
        background-size:200px 120px;
    }
</style>
<body >
  <div id = "myDiv" style="display:none;" class="loader">
  </div>
  
  <!-- <img id="img" src="hand.jpg"/>  -->
  <div class='text-center pt-5' > <h3>Filipino Sign Language Web Application </h3> </div>
  <div class="d-flex justify-content-center ">
    <div class="row pt-5">
     
      <video class="input_video" style='display:none;'></video>
      {{-- <video class="input_video"  height="640" width="480" poster='{{asset("/images/1641794477_i_love_you.jpg")}}'> --}}
      <canvas class="output_canvas border border-dark" width="640" height="480"></canvas>
      <Br>
      {{-- <span class='text-center'> Result :</span> --}}
    </div>
  </div>
  <div class='text-center pt-5' > <h3>Result : <span id='result'> </span> </h3> </div>
  <script type="module">
    function random_item(items)
    {
      
    return items[Math.floor(Math.random()*items.length)];
        
    }
    var signs = {!! json_encode($signs->toArray()) !!};
   
    var dataRandom = random_item(signs);
   
    show();
    const videoElement = document.getElementsByClassName('input_video')[0];
    const renz = document.getElementsByClassName('renz')[0];
    const canvasElement = document.getElementsByClassName('output_canvas')[0];
    const canvasCtx = canvasElement.getContext('2d');
    document.getElementById("result").innerHTML = "No Gesture Found";
    

    function onResults(results) {
      canvasCtx.save();
      canvasCtx.clearRect(0, 0, canvasElement.width, canvasElement.height);
      canvasCtx.drawImage(results.image, 0, 0, canvasElement.width, canvasElement.height);
        var  multiHandWorldLandmarks = results.multiHandWorldLandmarks;
      
      if (multiHandWorldLandmarks.length >0) {
         
      // console.log(results.multiHandWorldLandmarks);
      document.getElementById("result").innerHTML = dataRandom.text;
        for (const landmarks of results.multiHandLandmarks) {
          drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS,
                         {color: '#00FF00', lineWidth: 2});
          drawLandmarks(canvasCtx, landmarks, {color: '#FF0000', lineWidth: 1});
        }
      }
      canvasCtx.restore();
    }
    
    const hands = new Hands({locateFile: (file) => {
      return `https://cdn.jsdelivr.net/npm/@mediapipe/hands/${file}`;
    }});
    hands.setOptions({
      maxNumHands: 1,
      modelComplexity: 1,
      minDetectionConfidence: 0.5,
      minTrackingConfidence: 0.5
    });
    hands.onResults(onResults);
    
    const camera = new Camera(videoElement, {
      onFrame: async () => {
        await hands.send({image: videoElement});
        document.getElementById("myDiv").style.display="none";
      },
      width: 1280,
      height: 720
    });
    camera.start();
    function show() {
                document.getElementById("myDiv").style.display="block";
            }
    </script>
 
</body>

</html>