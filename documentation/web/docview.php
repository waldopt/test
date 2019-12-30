<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once '../../libs/Parsedown.php';
$parsedown = new Parsedown();
$doc = $_GET['d_id'];
$dir = $_GET['sec_id'];
$title_doc = ($doc) ? ' - ' . ucwords(str_replace('-', ' ', $doc)) : '';
$title_dir = substr($dir, strrpos($dir, '/') + 1);
$title_dir = ($title_dir) ? ' - ' . ucfirst($title_dir) : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="Moddable Tech, Inc." content="">
  <link rel="icon" href="favicon.ico">

  <title>Moddable - Documentation <?php echo $title_dir; echo $title_doc; ?></title>
	

  <!-- Bootstrap core CSS -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom CSS -->
	
  <link href="../../css/round-about.css" rel="stylesheet">
  <link href="../../css/moddable1.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
	.doc_content h2::first-letter {
    text-transform: uppercase;
	}
	
	p.top {
		padding-top: 16px;
	}
	
	.doc_content {
   margin-bottom: 60px;
	}

</style>

</head>


<body>

  <?php include("../../includes/top-nav.php"); ?>

  <!-- Page Content -->
  <div class="container">

	<p class="top">
 		<button type="button" class="btn btn-default btn-xs" onclick="goBack()">Back</button>
	</p>

<?php 
//echo $section; // returns 'section id'
//echo $doc; // returns 'doc id's
?>
	

<div class="doc_content">
	<?php 
		$text    = file_get_contents("$dir/$doc.md");
		$display = $parsedown->text($text);
	 	
	 	echo str_replace(
	 		// find
	 		array(
	 				'./devices',
					'./xs',
					'./tools',
					'../Moddable%20SDK%20-%20Getting%20Started.md',
					'./Moddable%20SDK%20-%20Getting%20Started.md',
					'worker.md',
					'commodetto.md',
					'poco.md',
					'manifest.md',
					'./XS%20%Platforms.md',
					'./XS%20Conformance.md',
					'devices/moddable-zero.md',
					'devices/moddable-one.md',
					'devices/moddable-two.md',
					'devices/moddable-three.md',
					'xs/XS%20Platforms.md',
					'xs/xsbug.md',
					'displays/wiring-guide-adafruit-OLED.md',
					'displays/wiring-guide-adafruit-1.8-st7735.md',
					'displays/wiring-guide-crystalfontz-eink.md',
					'displays/wiring-guide-sharp-memory-2.7-spi.md',
					'displays/wiring-guide-sharp-memory-1.3-spi.md',
					'displays/wiring-guide-sparkFun-teensyview-spi.md',
					'displays/wiring-guide-switch-science-LCD.md',
					'displays/wiring-guide-generic-2.8-CPT-spi.md',
					'displays/wiring-guide-generic-2.4-spi-esp32.md',
					'../xs/XS%20Platforms.md',
					'../xs/XS%20in%20C.md',
					'../commodetto/commodetto.md',
					'../piu/piu.md',
					'../tools/defines.md',
					'../xs/XS%20Differences.md'
	 			), 

	 		// replace
	 		array(
					'../index.php#devices',
					'../index.php#xs',
					'../index.php#tools',
					'./docview.php?sec_id=../&d_id=Moddable+SDK+-+Getting+Started',
					'./docview.php?sec_id=../&d_id=Moddable+SDK+-+Getting+Started',
					'./docview.php?sec_id=../base&d_id=worker',
					'./docview.php?sec_id=../commodetto&d_id=commodetto',
					'./docview.php?sec_id=../commodetto&d_id=poco',
					'./docview.php?sec_id=../tools&d_id=manifest',
					'./docview.php?sec_id=../xs&d_id=XS+Platforms',
					'./docview.php?sec_id=../xs&d_id=XS+Conformance',
					'./docview.php?sec_id=../devices&d_id=moddable-zero',
					'./docview.php?sec_id=../devices&d_id=moddable-one',
					'./docview.php?sec_id=../devices&d_id=moddable-two',
					'./docview.php?sec_id=../devices&d_id=moddable-three',
					'./docview.php?sec_id=../xs&d_id=XS%20Platforms',
					'./docview.php?sec_id=../xs&d_id=xsbug',
					'./docview.php?sec_id=../displays&d_id=wiring-guide-adafruit-OLED',
					'./docview.php?sec_id=../displays&d_id=wiring-guide-adafruit-1.8-st7735',
					'./docview.php?sec_id=../displays&d_id=wiring-guide-crystalfontz-eink',
					'./docview.php?sec_id=../displays&d_id=wiring-guide-sharp-memory-2.7-spi',
					'./docview.php?sec_id=../displays&d_id=wiring-guide-sharp-memory-1.3-spi',
					'./docview.php?sec_id=../displays&d_id=wiring-guide-sparkFun-teensyview-spi',
					'./docview.php?sec_id=../displays&d_id=wiring-guide-switch-science-LCD',
					'./docview.php?sec_id=../displays&d_id=wiring-guide-generic-2.8-CPT-spi',
					'./docview.php?sec_id=../displays&d_id=wiring-guide-generic-2.4-spi-esp32',
					'./docview.php?sec_id=../xs&d_id=XS+Platforms',
					'./docview.php?sec_id=../xs&d_id=XS+in+C',
					'./docview.php?sec_id=../commodetto&d_id=commodetto',
					'./docview.php?sec_id=../piu&d_id=piu',
					'./docview.php?sec_id=../tools&d_id=defines',
					'./docview.php?sec_id=../xs&d_id=XS+Differences'

	 			), 

	 		$display);
	?>
</div>
	
</div>
<!-- /.container -->

<!-- Footer -->
<?php include("../../includes/footer.php"); ?>

<!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="..././js/bootstrap.min.js"></script>
	
<script>
	function goBack() {
		window.history.back();
	}
</script> 
	
<script>
	//$( document ).ready(function() {
		//$("a[href='./Moddable%20SDK%20-%20Getting%20Started.md/']").attr('href', 'docview-initial.php?d_id=../readme')
//	});
	
//$(document).ready(function() {
//     $("a[href='./Moddable%20SDK%20-%20Getting%20Started.md/']").click(function() {
//       location.href = $("docview-initial.php?d_id=../readme").val();
//     });
//    }); 
</script>

</body>

</html>