
<html>
<body>

<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<font size=4px color=DarkCyan ><div><p><b>Research & Development:</b></p></div></font>
	        		<font size=3px color=gray><div align="justify">
						Research and development is the essence of any successful organization and our .  Group gives the highest priority &consider it be the most important and beneficial activity both in terms of improvement in existing product range as well as development of new innovative products,incorporating latest Technology and specification. Very close and continuous contact and watch with development in other advanced countries in the world is kept which help us to keep abreast with the latest development standards of the field Participation in the Exhibitions/Trade fairs, Seminars, Training Courses are never missed which help in expanding interactions with the leading consultants,companies and Technocrats of the industries, capital equipment manufacturers etc.</p></div></font>
					
					<font size=4px color=DarkCyan ><div><p><b>Quality Control:</b></p></div></font>
	        		<font size=3px color=gray><div align="justify">
						Each and every heater is rigidly tested under supervision of highly qualified and experienced engineers and supervisors on a well equiped relavent Test-Bed as per customers drawings / specifications and latest international standards wherever applicable. However the best quality control is self imposed stringent checks at every stage which is a practice on shop-floor of TMI Most of our products are tailor made to customers drawings / specifications of core sector / power industries, big OEMs who follow ISO standards Our quality control almost become self regulated and these are normally subjected to independent inspection agencies like Lloyds Register, Bureau Veritas, RITES, RDSO, BHEL, HAL BARC CPRI Defence establishments, Atomic Energy, KIT, PDIL Railway, NTPC etc Naturally, to get through all inspectionstages from organizations mentioned above, one has to have latest testing labs with latest calibrated instruments other testing facilities, which the factory is fully equipped.</p></div></font>

					<font size=4px color=DarkCyan ><div><p><b>Marketing & Sales Promotion:</b></p></div></font>
	        		<font size=3px color=gray><div align="justify">
						This is the nerve center or backbone of any industry, hence Our company has developed over the period, well established sales network throughout the country through their financially and technically sound associates, dealers and sales engineers qualified representatives, their own offices / branches, associated companies within the group After Sales Service.</p></div></font>

						<font size=4px color=DarkCyan ><div><p><b>After Sales Service:</b></p></div></font>
	        		<font size=3px color=gray><div align="justify">
						Utmost importance of any other department is customer services and TMI believes into ensure right solutions to help / improve customers operations close customer contacts / communications  backed by two and a half decades experience of team of technocrats of only one joint family, stationed at various big centers like, Ahmedabad, Bangalore, Mumbai, New Delhi, Vadodara with a view to render effective customer services primarily in the mind Nothing has helped more than this in multiplying our sales by heaps and bounds since establishment of the group and this is the essence of our philosophy.</p></div>	</font> 
	        	</div>
	        	<div class="col-sm-3">
	        		
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>

