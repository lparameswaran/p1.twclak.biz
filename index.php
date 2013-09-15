<!DOCTYPE html>
<html>
   <head>
      <title>Lakshman Parameswaran - A short intro</title>
      <style type="text/css" src="basicStyle.css"></style>
      <!-- include jQuery library -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
      <!-- include Cycle plugin -->
      <script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
      <script type="text/javascript">
      $(document).ready(function() {
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
		<img src="images/self.jpg" width="200" height="200" />
		<img src="images/selfAndWife.jpg" width="200" height="200" />
		<img src="images/wifePullingEars.jpg" width="200" height="200" />
		<img src="images/selfAndKids.jpg" width="200" height="200" />
		<img src="images/kids.jpg" width="200" height="200" />
		<img src="images/kidsWithADog.jpg" width="200" height="200" />
		<img src="images/posing.jpg" width="200" height="200" />
		<img src="images/youngerOne.jpg" width="200" height="200" />
		<img src="images/familyAtFireplace.jpg" width="200" height="200" />
		<img src="images/familyParty.jpg" width="200" height="200" />
		<img src="images/familyFormal.jpg" width="200" height="200" />
	</div>
</body>
</html>

