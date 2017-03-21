var canvas = document.querySelector('#paint');
var ctx = canvas.getContext('2d');

// Functie om te tekenen op Canvas
(function() {
    var canvas = document.querySelector('#paint');
    var ctx = canvas.getContext('2d');

    var sketch = document.querySelector('#sketch');
    var sketch_style = getComputedStyle(sketch);
    canvas.width = parseInt(sketch_style.getPropertyValue('width'));
    canvas.height = parseInt(sketch_style.getPropertyValue('height'));

    var mouse = {x: 0, y: 0};

    // Pakt de muispositie
    canvas.addEventListener('mousemove', function(e) {
        mouse.x = e.pageX - this.offsetLeft;
        mouse.y = e.pageY - this.offsetTop;
    }, false);

    // Settings voor het tekenen
    ctx.lineWidth = 2;
    ctx.lineJoin = 'round';
    ctx.lineCap = 'round';
    ctx.strokeStyle = '#307DFF';


    // als muis ingeklikt word ga dan tekenen
    canvas.addEventListener('mousedown', function(e) {
        ctx.beginPath();
        ctx.moveTo(mouse.x, mouse.y);

        canvas.addEventListener('mousemove', onPaint, false);
    }, false);

    canvas.addEventListener('mouseup', function() {
        canvas.removeEventListener('mousemove', onPaint, false);
    }, false);

    var onPaint = function() {
        ctx.lineTo(mouse.x, mouse.y);
        ctx.stroke();
    };

}());


// Canvas schoonmaken
function clear_canvas_rectangle()
{
    var canvas =  document.querySelector('#paint');
    var ctx = canvas.getContext('2d');


    ctx.clearRect (0, 0, canvas.width, canvas.height);
}

// Canvas kleuren
function redColor(){
    ctx.strokeStyle = 'red';
    ctx.globalCompositeOperation="source-over";
}
function yellowColor(){
    ctx.strokeStyle = 'yellow';
    ctx.globalCompositeOperation="source-over";
}
function greenColor(){
    ctx.strokeStyle = 'green';
    ctx.globalCompositeOperation="source-over";
}
function blueColor(){
    ctx.strokeStyle = 'blue';
    ctx.globalCompositeOperation="source-over";
}
function purpleColor(){
    ctx.strokeStyle = 'purple';
    ctx.globalCompositeOperation="source-over";
}
function blackColor(){
    ctx.strokeStyle = 'black';
    ctx.globalCompositeOperation="source-over";
}
function whiteColor(){
    ctx.strokeStyle = 'white';
    ctx.globalCompositeOperation="source-over";
}

// Eraser/Gum
function eraser(){
    ctx.globalCompositeOperation="destination-out";
    ctx.arc(lastX,lastY,8,0,Math.PI*2,false);
    ctx.fill();
}

//Lijn grootte
function size01(){
    ctx.lineWidth = 2;
}
function size02(){
    ctx.lineWidth = 3;
}
function size03(){
    ctx.lineWidth = 4;
}
function size04(){
    ctx.lineWidth = 5;
}
function size05(){
    ctx.lineWidth = 6;
}
function size06(){
    ctx.lineWidth = 7;
}
function size07(){
    ctx.lineWidth = 8;
}
function size08(){
    ctx.lineWidth = 9;
}
function size09(){
    ctx.lineWidth = 10;
}
function size10(){
    ctx.lineWidth = 11;
}

// Canvas opslaan -> Word verstuurd naar saveCanvas.php
function saveCanvas(){
    var canvasSaved = canvas.toDataURL();

    $.ajax(
    {
        url: "php/saveCanvas.php",
        method: "POST",
        data: { img : canvasSaved}
    }).done(function(msg)
    {
        // Na opslaan, ga dan naar link
        alert(msg);
        window.location.replace("http://stud.hosted.hro.nl/0881520/websites/armeni/gallery.php");
    });



}