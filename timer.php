<html>
<head>
	<title></title>
</head>
<body>

<button onclick="foo()">Start</button>
<button onclick="stop()">stop</button>

<div id="timer">100</div>

</body>
</html>

<script type="text/javascript">
		
var i = 87500;
var t,hr,min,sec,day ;
var temp;
	function foo() 
	{
		// setTimeout(function(){
		// 	alert('hello')
		// } , 3000 )
		t=setInterval( function() {	

			// i = document.getElementById('timer').innerHTML;
			// i  = parseInt(i);
			 i--;
			day = parseInt(i/86400);
			temp =i-(day*86400);
			hr=parseInt(temp/3600);
			temp = temp - (hr*3600)  
			 min = parseInt(temp /60);
			 
			 sec = i%60;

			document.getElementById('timer').innerHTML= day+" day " +  hr + "hr :"  + min + " min :"+ sec + " sec remaining" ;

			if(i==0)
				stop();

		} ,1000 )



	}	

	function stop() 
	{
		clearInterval(t);
	}	

</script>
