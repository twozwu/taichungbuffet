<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>林肯運動鞋專賣店-電子商店</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="website01.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	body {
    padding: 0px;
    margin: 0px;
    height: 3000px;
}
    #mainmenu {
    position: relative;
    width: 100%;
    height: 3000px;
    background-image: url(images/pic86.jpg);
    background-attachment: fixed;
}
    </style>
  </head>
  <body>
  	<!-- body code goes here -->
  <section id="mainmenu">
  </section>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.0.0.js"></script>
	<script language="javascript">
	$(document).ready(function(){
		$( window ).scroll(function() {
			var scroll_position=$(window).scrollTop()/2;
			$('#mainmenu').css({
				'background-position-x' : - scroll_position +'px',
			});
		});
	});
	</script>	
  </body>
</html>