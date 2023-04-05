<?php
	include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title><?php echo $lang['title']?></title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="css/style.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>
	<body>
		<div class="container" style="color:#000;">
		<!--<select id="Languages" onchange="location = this.value;" style="color:#000;right:0; position: fixed;">
			   <option value = "<?php echo $lang['chooselang']?>"><?php echo $lang['chooselang']?></option>
               <option value = "termsandconditions.php?lang=en">English</option>
			   <option value = "termsandconditions.php?lang=hn">हिंदी</option>
               <option value = "termsandconditions.php?lang=ta">தமிழ்</option>
             </select>-->
			<?php echo $lang['tnc']?>
			
			
		</div>	
	</body>
</html>	