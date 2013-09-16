<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>Lakshman Parameswaran - A short intro</title>
      <link href="basicStyle.css" rel="stylesheet" type="text/css">
      <!-- include jQuery library -->
      <script type="text/javascript" src="jquery-2.0.3.min.js"></script>
      <!-- include Cycle plugin -->
      <script type="text/javascript" src="jquery.cycle.all.js"></script>
      <script type="text/javascript" src="jquery.easing.1.3.js"></script>
      <script type="text/javascript" src="jquery.easing.compatibility.js"></script>
      <script type="text/javascript">
      $(document).ready(function() {
          $('div#slideshow img').css({'width' : '640px' , 'height' : '640px'});
          $('.slideshow').cycle({
              fx:     'shuffle',      // shuffle effect -- like a card deck
              easing: 'easeOutBack',  
              delay:  -4000           // change image every 4 seconds
	});
      });
      </script>
   </head>
   <body>
	<div class="slideshow">
		<img src="images/self.jpg" />
		<img src="images/selfAndWife.jpg" />
		<img src="images/wifePullingEars.jpg" />
		<img src="images/selfAndKids.jpg" />
		<img src="images/kids.jpg" />
		<img src="images/kidsWithADog.jpg" />
		<img src="images/posing.jpg" />
		<img src="images/youngerOne.jpg" />
		<img src="images/familyAtFireplace.jpg" />
		<img src="images/familyParty.jpg" />
		<img src="images/familyFormal.jpg" />
	</div>
   </body>
</html>

