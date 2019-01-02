function draw() {
  var canvas = document.getElementById('lienzo');
  if (canvas.getContext) {
    var ctx = canvas.getContext('2d');
	ctx.fillStyle="rgb(0,0,0,0.8)"
	ctx.fillRect(25,25,100,100);
    ctx.clearRect(45,45,60,60);
    ctx.strokeRect(50,50,50,50);
  }
}

function iniciar2(){
  var elemento=document.getElementById('lienzo');
  lienzo=elemento.getContext('2d');
  
  var gradiente=lienzo.createLinearGradient(0,0,100,250);
  gradiente.addColorStop(0.5, '#0000FF');
  gradiente.addColorStop(1, '#000000');
  lienzo.fillStyle=gradiente;

  lienzo.fillRect(150,120,100,100);
  lienzo.fillRect(150,10,200,100);
}

function iniciar(){
  var elemento=document.getElementById('lienzo2');
  lienzo=elemento.getContext('2d');
  lienzo.beginPath();
  lienzo.moveTo(100,100);
  lienzo.lineTo(200,200);
  lienzo.lineTo(100,200);
  lienzo.stroke();
}


function iniciar3(){
  var elemento=document.getElementById('lienzo2');
  lienzo=elemento.getContext('2d');
  lienzo.beginPath();
  lienzo.moveTo(100,100);
  lienzo.lineTo(200,200);
  lienzo.lineTo(100,200);
  lienzo.closePath();
  lienzo.stroke();
}


 
function iniciar4(){
  var elemento=document.getElementById('lienzo2');
  lienzo=elemento.getContext('2d');
  lienzo.beginPath();
  lienzo.moveTo(100,100);
  lienzo.lineTo(200,200);
  lienzo.lineTo(100,200);
  lienzo.fill();
}


function circulo(){
  var elemento=document.getElementById('lienzo2');
  lienzo=elemento.getContext('2d');
  lienzo.beginPath();
  lienzo.arc(100,100,50,0,Math.PI*2, false);
  lienzo.stroke();
}


function texto(){
  var elemento=document.getElementById('lienzo2'); 
  lienzo=elemento.getContext('2d');
  lienzo.font="bold 20px verdana, sans-serif";
  lienzo.fillText("PRUEBA",50,20);
  lienzo.translate(50,70);
  lienzo.rotate(Math.PI/180*45);
  lienzo.fillText("PRUEBA",0,0);
  lienzo.rotate(-Math.PI/180*45);
  lienzo.translate(0,100);
  lienzo.scale(2,2);
  lienzo.fillText("PRUEBA",0,0);
}


function efectotexto(){
  var elemento=document.getElementById('lienzo2');
  lienzo=elemento.getContext('2d');
  lienzo.transform(3,0,0,1,0,0);
  lienzo.font="bold 20px verdana, sans-serif";
  lienzo.fillText("PRUEBA",20,20);
  lienzo.transform(1,0,0,10,0,0);
  lienzo.font="bold 20px verdana, sans-serif";
  lienzo.fillText("PRUEBA",100,20);
}


window.addEventListener("load", draw, false);
//window.addEventListener("load", iniciar, false); 
window.addEventListener("load", efectotexto, false); 