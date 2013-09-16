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
          $('div#slideshow img').css({'width' : '200px' , 'height' : '200px%'});
          $('.slideshow').cycle({
              fx:     'shuffle',      // shuffle effect -- like a card deck
              easing: 'easeOutBack',  
              delay:  -3000,          // change image every 3 seconds
              before:  function() {
                         $('#caption').html(this.alt);
                      }
	              });
      });
      </script>
   </head>
   <body>
      <table style="text-align:center">
         <tr style="text-align:left">
            <td>
               <table border="1">
                  <tr><td style='font-family:"Times New Roman", Times, serif'>Name</td><td style='font-style:italic'>Lakshman Parameswaran</td></tr>
                  <tr><td style='font-family:"Times New Roman", Times, serif'>Experience</td><td style='font-style:italic'>21+ years in the Software Industry, mostly Server Side.</td></tr>
                  <tr><td style='font-family:"Times New Roman", Times, serif'>Editor of Choice</td><td style='font-style:italic'>Eclipse, but most of the time - the plain old vi</td></tr>
                  <tr><td style='font-family:"Times New Roman", Times, serif'>Hobbies</td><td style='font-style:italic'>Robotics; Sports like Soccer, Football, Basketball, Baseball, Ping-Pong etc</td></tr>
               </table>
            </td>
        </tr>
        <tr><td><p style="text-align:left" id="caption"></p></td></tr>
        <tr>
           <td>
    	      <div class="slideshow">
		<img src="images/self.jpg" alt="Calm and Composed" />
		<img src="images/selfAndWife.jpg" alt="With Wife - Enjoying a meal" />
		<img src="images/wifePullingEars.jpg" alt="Some happy moments"/>
		<img src="images/selfAndKids.jpg" alt="With wonderful kids" />
		<img src="images/kids.jpg" alt="The kids" />
		<img src="images/kidsWithADog.jpg" alt="They like dogs" />
		<img src="images/posing.jpg" alt="This one for the camera" />
		<img src="images/youngerOne.jpg" alt="Future Scientist" />
		<img src="images/familyAtFireplace.jpg" alt="Enjoying a weekend" />
		<img src="images/familyParty.jpg" alt="At a party" />
		<img src="images/familyFormal.jpg" alt="Getting ready for a party" />
	      </div>
            </td>
         </tr>
         <p>
           <a href="http://validator.w3.org/check?uri=http://p1.twclak.biz;ss=1;st=1;outline=1;No200=1;verbose=1">
               <img style="border:0;width:88px;height:31px"
                    src="images/w3c_html5.png"
                    alt="Valid HTML5!" />
           </a>
           <a href="http://jigsaw.w3.org/css-validator/check/referer">
               <img style="border:0;width:88px;height:31px"
                    src="http://jigsaw.w3.org/css-validator/images/vcss"
                    alt="Valid CSS!" />
           </a>
         </p>
      </table>
   </body>
</html>

