const canvas = document.getElementById('myCanvas');
const ctx = canvas.getContext('2d');

let x = canvas.width / 2;
let y = canvas.height - 30;
let dx = 2;
let dy = -2;
const ballRadius = 10;

function drawBall() {
    ctx.beginPath();
    ctx.arc(x, y, ballRadius, 0, Math.PI * 2);
   let r= getRandomNumber(100,255);
   let b= getRandomNumber(10,105);
   let g= getRandomNumber(200,255);
   if(r)
   {
    // Do thing
   }else
   {
    r=0;
   }

   if(g)
   {
    // Do thing
   }else
   {
    g=0;
   }

   if(b)
   {
    // Do thing
   }else
   {
    b=0;
   }

  let color="rgb("+r+","+g+","+b+")";
  console.log(color);
   ctx.fillStyle = color;
    ctx.fill();
    ctx.closePath();
}

function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawBall();

    if (x + dx > canvas.width - ballRadius || x + dx < ballRadius) {
        dx = -dx;
    }
    if (y + dy > canvas.height - ballRadius || y + dy < ballRadius) {
        dy = -dy;
    }

    x += dx;
    y += dy;

    requestAnimationFrame(draw);
}

function getRandomNumber(start, end){
  
     givennumber=parseInt(Math.random()*1000);

while(isInRange(givennumber,start,end))
{
 return givennumber;
 break;

}
   }

 function isInRange(number, start, end){
result=false;

if(number>=start && number<=end)
{
 result=true;
}


return result;
 }



draw();