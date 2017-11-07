<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;"></canvas>
	<script>

// src="jquery-3.2.1.min.js"

	var path = [];



    var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      ctx.moveTo(0,0);
      ctx.lineTo(200,100);
      ctx.stroke();

   $('myCanvas')
   .mousemove(function(){

   		coordinates = [event.offsetX, event.offsetY];
		path.push(coordinates); // ou drawPath()
		//if (myMouse === true) 
})
   .mousedown(function(){
   	console.log('down'); // ou path = [];
   	myMouse = true
   })
   .mouseup(function(){
   	console.log('up'); // myMouse = 'up';
   	myMouse = false

   	var data= {
   		path:path
      }
   	var query = {
   		url: 'http://draw.api.niamor.com/paths/add'
   	}
   	
   })
   .css('boarder-color', 'blue');

$('showPath').click(function(){
	console.log(path);

	
})
$.ajax({
	url: 'http://draw.api.niamor.com/paths',
   method: 'post'
   path: []

   
}) //.done(function (paths){
	// for(i=0;i < paths.length ; i++){
	// monChemin.path[i]
	// monChemin.path.length ; j++


	</script>
</body>
</html>