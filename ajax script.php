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
      ctx.lineTo(01,10);
      ctx.lineTo(19,84);
      ctx.lineTo(145,017);
      ctx.stroke();

var myMouse=false;

   $('#myCanvas')
   .mousemove(function(){
      if ( myMouse === true ) {
   	  console.log([event.offsetX, event.offsetY])
         coordinates = [event.offsetX, event.offsetY];
         path.push(coordinates);
      }
      	 // ou drawPath()
		 
})
   .mousedown(function(){
   	       // ou path = [];
   	console.log([event.offsetX, event.offsetY])
      myMouse = true
   
   })
   .mouseup(function(){
   	 // myMouse = 'up';
   	
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
// $.ajax({
// 	url: 'http://draw.api.niamor.com/paths',
//    method: 'post'
//    path: [
//    {
//       "id":~方,
//       "createdAt":"2017-11-07 13:59:01",
//       "path":[
//          [124,279],
//          [123,280],
//          [123,287],
//          ...
//       ],
//       "strokeColor":"#000000",
//       "lineWidth":1
//    },
//    ...
// ]

// }) //.done(function (paths){
	// for(i=0;i < paths.length ; i++){
	// monChemin.path[i]
	// monChemin.path.length ; j++


	</script>
</body>
</html>