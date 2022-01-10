const video = document.getElementById("myvideo");
const canvas = document.getElementById("canvas");
const context = canvas.getContext("2d");
let trackButton = document.getElementById("trackbutton");
let updateNote = document.getElementById("updatenote");
let command = document.getElementById("command");


let isVideo = false;
let model = null;

const modelParams = {
    flipHorizontal: true,   // flip e.g for video  
    maxNumBoxes: 20,        // maximum number of boxes to detect
    iouThreshold: 0.5,      // ioU threshold for non-max suppression
    scoreThreshold: 0.6,    // confidence threshold for predictions.
}
var data = [];
function startVideo() {
    handTrack.startVideo(video).then(function (status) {
        console.log("video started", status);
        if (status) {
            updateNote.innerText = "Video started. Now tracking"
           
            isVideo = true
            // console.log(signs);
            for (let i = 0; i < signs.length; i++) {
              
                runImage(signs[i].id,signs[i].text);
              }
            console.log(data);  
            runDetection()
            
        } else {
            updateNote.innerText = "Please enable video"
        }
    });
    
}

function toggleVideo() {
    if (!isVideo) {
        command.innerText = "Stop Video";
        updateNote.innerText = "Starting video";
        
        startVideo();
    } else {
        updateNote.innerText = "Stopping video"
        command.innerText = "Start Video";
        handTrack.stopVideo(video)
        isVideo = false;
        updateNote.innerText = "Video stopped"
    }
}



function runDetection() {
    // console.log(data);
    model.detect(video).then(predictions => {

        console.log(predictions);
        for (let a = 0; a < predictions.length; a++) {
            if(predictions[a].label != "face")
            {
                // console.log("Predictions: ", predictions);
                for(let c = 0; c<data.length;c++)
                {
                    if(parseFloat(predictions[a].bbox[0]).toFixed(2) == parseFloat(data[c].coordinated[0]).toFixed(2))
                    {
                        document.getElementById("data").innerText = signs[c].title;
                        break;
                    }
                }
            }
          }

        model.renderPredictions(predictions, canvas, context, video);
        if (isVideo) {
            requestAnimationFrame(runDetection);
        }
    });
}

function runImage(id,title) {

    var d = {};
        d.title = title;
        d.id = id;
       
    var image = document.getElementById("image"+id);
    model.detect(image).then(predictions => {
        for (var aa = 0; aa < predictions.length; aa++) {
            if(predictions[aa].label != "face")
            {
                d.coordinated = predictions[aa].bbox;
                data.push(d);
                break;
            }
          }
       
        // model.renderPredictions(predictions, canvas, context, image);
        // if (isVideo) {
        //     requestAnimationFrame(runDetection);
        // }
    });
}

// Load the model.
handTrack.load(modelParams).then(lmodel => {
    // detect objects in the image.
    model = lmodel
    updateNote.innerText = "Loaded Model!"
    trackButton.disabled = false
});
