var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');

var dino = new Image();
var background = new Image();
var obstacle = new Image();

document.addEventListener("keydown", moveUp);
function moveUp(){
	yPos-=150;
}

background.src = "bg.png";
dino.src = "dino12.png";
obstacle.src = "pipe.png";

var pipe = [];
pipe[0]={
	x: canvas.width,
	y: 0
}

var xPos = 50;
var yPos = 310;
var grav = 2.5;
function draw(){
	ctx.drawImage(background, 0, 0, 800, 500);
	for (var i = 0; i < pipe.length; i++) {
		ctx.drawImage(obstacle, pipe[i].x, pipe[i].y + 350, 20, 60);
		pipe[i].x = pipe[i].x -2.5;

		if(pipe[i].x == 400){
			pipe.push({
				x: canvas.width,
				y: 0
			});
		}
		
	}

	ctx.drawImage(dino, xPos, yPos, 100,100);
	
	
	requestAnimationFrame(draw);
	yPos+=grav;
	if(yPos >= 310){
		grav = 0;
	}
	else{
		grav = 2;
	}
}
dino.onload = draw;