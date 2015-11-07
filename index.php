<?php
$current_year = date('Y');
$experience = array(
	array(
		'type' => 'HTML/CSS',
		'year' => 2002
	),
	array(
		'type' => 'Javascript/jQuery',
		'year' => 2010
	),
	array(
		'type' => 'JSON/AJAX',
		'year' => 2011
	),
	array(
		'type' => 'Responsive Web Coding',
		'year' => 2012
	),
	array(
		'type' => 'Google Maps API V.3',
		'year' => 2012
	),
	array(
		'type' => 'Photoshop 6.0+',
		'year' => 2005
	),
	array(
		'type' => 'PHP/MySQL',
		'year' => 2010
	),
	array(
		'type' => 'GitHub',
		'year' => 2014
	),
	array(
		'type' => 'Zend 2.0',
		'year' => 2014
	),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Michael Vano - UI/UX/Front End Developer</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="Front End Developer - Michael Vano" name="description" />
	<meta content="Michael Vano" name="author" />

	<meta property="og:title" content="Front End Developer" />
	<meta property="og:site_name" content="Michael Vano's Portfolio" />
	<meta property="og:url" content="http://portfolio.af13.ca/" />
	<meta property="og:description" content="Front End Developer Portfolio for Michael Vano" />
	<meta property="og:image" content="" />

	<link rel="canonical" href="http://portfolio.af13.ca" />
	<link rel="shortcut icon" href="img/favicon.png"  type="image/png">

	<!-- STYLES -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>	
	<link href="css/base.css" rel="stylesheet" type="text/css"/>

	<!-- SCRIPTS -->
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/base.js" type="text/javascript"></script>
	<script>
		$(document).ready(function(){
			// VANO.init();
		});
	</script>
</head>
<body>
	<div class="wave01"></div>
	<div class="wave02"></div>
	<div class="wave03"></div>
	<div class="header">
		<div class="info">
			<span class="bold size50">Michael Vano</span> <br />
			<span class="bold italic size24">Front End Developer</span> <br />
			<span class="size18">P: 416-985-6100 | E: <a href="mailto:vano@af13.ca">vano@af13.ca</a></span>
			<div class="spacer"></div>
			<div class="row size20">
				<div class="col-md-12">Experience</div>
			</div>
			<div class="spacer-small"></div>
			<div class="row">
				<?php
				if (!empty($experience))
				{
					foreach($experience AS $a)
					{
						?>
						<div class="col-md-3">
							<strong><?php echo $a['type']; ?>: </strong>
							<?php echo $current_year - $a['year'].' years'; ?>
						</div>
						<?php
					}
				}
				?>
			</div>			
		</div>
	</div>
	<div class="info-circle" show-info>
	</div>
</body>
</html>

