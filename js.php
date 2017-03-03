<!DOCTYPE html>
<html>
<head>
	<title>Javascript</title>

	<script type="text/javascript">
		console.log("Hello world");
		//alert('hello world');
		var i=10;
		var s= "hello world";
		var j="20";
		console.log(i+j);

	</script>
</head>
<body>
<input type="text" name="" id="txt1">
<input type="text" name="" id="txt2">
<input type="text" name="" id="txt3">

<button onclick="foo()"  >click me </button>

<!-- 
	onload 
	onclick
	onhover /onmouserover
	mouseout 
	onblur 
	onfocus
	change
	keyup
	keydown
	keypress
 -->

<div id="div1"></div>

</body>
</html>
<script type="text/javascript">
	function foo()
	{
		var txt1= document.getElementById('txt1').value;
		var txt2= document.getElementById('txt2').value; 
		var txt3 = parseInt(txt1)+ parseInt(txt2)
		document.getElementById('txt3').value=txt3
		document.getElementById('div1').innerHTML = '<h1>' +  txt3 + '</h1>';
		console.log(txt1);	
	}

</script>





