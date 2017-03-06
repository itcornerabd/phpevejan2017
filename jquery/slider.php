<!DOCTYPE html>
<html>
<head>
	<title>Slider</title>

	<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="jquery.bxslider.css" rel="stylesheet" />



</head>
<body>

<div style="width: 400px;height: 400px">
<ul class="bxslider">
  <li><img src="./images/Koala.jpg" /></li>
  <li><img src="./images/Lighthouse.jpg" /></li>
  <li><img src="./images/Penguins.jpg" /></li>
  <li><img src="./images/Tulips.jpg" /></li>
</ul>
</div>

</body>
</html>

<script type="text/javascript">
	
	$(document).ready(function(){
	  $('.bxslider').bxSlider({
	  		'mode':'fade',
	  		'speed':1000
	  });
	});


</script>