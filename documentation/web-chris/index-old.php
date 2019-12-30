<?php
@session_start();
$d_id = $_SESSION[ 'doc_id' ];
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="Moddable Tech, Inc." content="">
<link rel="icon" href="favicon.ico">
<title>Moddable Documentation</title>

<!-- Bootstrap core CSS -->
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css">

<!-- Custom CSS -->
<link href="../../css/round-about.css" rel="stylesheet">
<link href="../../css/moddable1.css" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<style>	
	.accordion {
		margin-bottom : 20px;
	}
	
	.accordion-heading {
		margin-left: 14px;
	}
	.accordion-inner a {
		display: table;
		margin-left: 28px;
	}
	
	.initial a {
		display: table;
		margin-left: 14px;
	}
	
	p:first-of-type {
  margin-top: -10px;
	margin-bottom : 20px;
	}
	
	.list-group-item {
    padding: 4px 15px;
    border: none;
		background-color: transparent;
	}
	
	.dir {
    margin-bottom: -2px;
	}
</style>

<body>
<?php include("../../includes/top-nav.php"); ?>

<!-- Page Content -->
<div class="container">
	<h1>Moddable Documentation</h1>
	<p>This documentation is also available on the <a href="https://github.com/Moddable-OpenSource/moddable" target="_blank">Moddable Github</a> site.</p>
	
	<div class="list-group">
		<h4 class="dir">Getting Started</h4>
		<a href="docview-initial.php?d_id=../readme" type="button" class="list-group-item">Readme</a>
		<a href="docview-initial.php?d_id=../Moddable+SDK+-+Getting+Started" type="button" class="list-group-item">Moddable SDK - Getting Started</a>
	</div>
	
	<div class="list-group">
		<h4 class="dir">Base</h4>
		<a href="docview.php?sec_id=../base&d_id=base" type="button" class="list-group-item">Base</a>
		<a href="docview.php?sec_id=../base&d_id=setup" type="button" class="list-group-item">Setup</a>
		<a href="docview.php?sec_id=../base&d_id=worker" type="button" class="list-group-item">Worker</a>
	</div>
	
	<div class="list-group">
		<h4 class="dir">Comodetto</h4>
		<a href="docview.php?sec_id=../commodetto&d_id=commodetto" type="button" class="list-group-item">Commodetto</a>
    <a href="docview.php?sec_id=../commodetto&d_id=Creating+fonts+for+Moddable+applications" type="button" class="list-group-item">Creating fonts for Moddable applications</a>
    <a href="docview.php?sec_id=../commodetto&d_id=poco" type="button" class="list-group-item">Poco</a>
	</div>
	
	<div class="list-group">
		<h4 class="dir">Crypt</h4>
		<a href="docview.php?sec_id=../crypt&d_id=crypt" type="button" class="list-group-item">Crypt</a>
	</div>
	
	<div class="list-group">
		<h4 class="dir">Data</h4>
		<a href="docview.php?sec_id=../data&d_id=data" type="button" class="list-group-item">Data</a>
	</div>
	
	<div class="list-group">
		<h4 class="dir">Devices</h4>
		<a href="docview.php?sec_id=../devices&d_id=GeckoBuild" type="button" class="list-group-item">GeckoBuild</a>
		<a href="docview.php?sec_id=../devices&d_id=moddable-one" type="button" class="list-group-item">Moddable One</a>
		<a href="docview.php?sec_id=../devices&d_id=moddable-two" type="button" class="list-group-item">Moddable Two</a>
		<a href="docview.php?sec_id=../devices&d_id=moddable-three" type="button" class="list-group-item">Moddable Three</a>
		<a href="docview.php?sec_id=../devices&d_id=moddable-zero" type="button" class="list-group-item">Moddable Zero</a>
		<a href="docview.php?sec_id=../devices&d_id=qca4020" type="button" class="list-group-item">qca4020</a>
	</div>
	
	<div class="list-group">
		<h4 class="dir">Displays</h4>
		<a href="docview.php?sec_id=../displays&d_id=readme" type="button" class="list-group-item">Readme</a>
		<a href="docview.php?sec_id=../displays&d_id=wiring-guide-adafruit-1.8-st7735" type="button" class="list-group-item">Wiring Guide Adafruit 1.8 st7735</a>
		<a href="docview.php?sec_id=../displays&d_id=wiring-guide-adafruit-OLED" type="button" class="list-group-item">Wiring Guide Adafruit OLED</a>
		<a href="docview.php?sec_id=../displays&d_id=wiring-guide-crystalfontz-eink" type="button" class="list-group-item">Wiring Guide Crystalfontz Eink</a>
		<a href="docview.php?sec_id=../displays&d_id=wiring-guide-dotstar" type="button" class="list-group-item">Wiring Guide Dotstar</a>
		<a href="docview.php?sec_id=../displays&d_id=wiring-guide-generic-1.44-spi" type="button" class="list-group-item">Wiring Guide Generic 1.44 SPI</a>
		<a href="docview.php?sec_id=../displays&d_id=wiring-guide-generic-2.4-spi-esp32" type="button" class="list-group-item">Wiring Guide Generic 2.4 SPI ESP32</a>
		<a href="docview.php?sec_id=../displays&d_id=wiring-guide-generic-2.4-spi" type="button" class="list-group-item">Wiring Guide Generic 2.4 SPI</a>
		<a href="docview.php?sec_id=../displays&d_id=wiring-guide-generic-2.8-CPT-spi" type="button" class="list-group-item">Wiring Guide Generic 2.8 CPT SPI</a>
		<a href="docview.php?sec_id=../displays&d_id=wiring-guide-sharp-memory-1.3-spi" type="button" class="list-group-item">Wiring Guide Sharp Memory 1.3 SPI</a>
		<a href="docview.php?sec_id=../displays&d_id=wiring-guide-sharp-memory-2.7-spi" type="button" class="list-group-item">Wiring Guide Sharp Memory 2.7 SPI</a>
		<a href="docview.php?sec_id=../displays&d_id=wiring-guide-sparkFun-teensyview-spi" type="button" class="list-group-item">Wiring Guide SparkFun Teensyview SPI</a>
		<a href="docview.php?sec_id=../displays&d_id=wiring-guide-switch-science-LCD" type="button" class="list-group-item">Wiring Guide Switch Science LCD</a>
	</div>
	
	<div class="list-group">
		<h4 class="dir">Drivers</h4>
		<a href="docview.php?sec_id=../drivers&d_id=destm32s" type="button" class="list-group-item">destm32s</a>
		<a href="docview.php?sec_id=../drivers&d_id=dotstar" type="button" class="list-group-item">Dotstar</a>
		<a href="docview.php?sec_id=../drivers&d_id=ili9341" type="button" class="list-group-item">ili9341</a>
		<a href="docview.php?sec_id=../drivers&d_id=lpm013m126a" type="button" class="list-group-item">lpm013m126a</a>
		<a href="docview.php?sec_id=../drivers&d_id=ls013b4dn04" type="button" class="list-group-item">ls013b4dn04</a>
		<a href="docview.php?sec_id=../drivers&d_id=MCP230XX" type="button" class="list-group-item">MCP230XX</a>
		<a href="docview.php?sec_id=../drivers&d_id=neostrand" type="button" class="list-group-item">Neostrand</a>
		<a href="docview.php?sec_id=../drivers&d_id=ssd1306" type="button" class="list-group-item">ssd1306</a>
		<a href="docview.php?sec_id=../drivers&d_id=ssd1351" type="button" class="list-group-item">ssd1351</a>
		<a href="docview.php?sec_id=../drivers&d_id=st7735" type="button" class="list-group-item">st7735</a>
	</div>
	
	<div class="list-group">
		<h4 class="dir">Files</h4>
		<a href="docview.php?sec_id=../files&d_id=files" type="button" class="list-group-item">Files</a>
	</div>
	
	<div class="list-group">
		<h4 class="dir">Files</h4>
		<a href="docview.php?sec_id=../io&d_id=io" type="button" class="list-group-item">IO</a>
		<a href="docview.php?sec_id=../io&d_id=firmata" type="button" class="list-group-item">Firmata</a>
	</div>
	
	<div class="list-group">
		<h4 class="dir">Network</h4>
		<a href="docview.php?sec_id=../network&d_id=ble" type="button" class="list-group-item">BLE</a>
		<a href="docview.php?sec_id=../network&d_id=network" type="button" class="list-group-item">Network</a>
		<a href="docview.php?sec_id=../network&d_id=securesocket" type="button" class="list-group-item">Secure socket</a>
		<a href="docview.php?sec_id=../network&d_id=webthings" type="button" class="list-group-item">Webthings</a>
	</div>
	
	<div class="list-group">
		<h4 class="dir">Pins</h4>
		<a href="docview.php?sec_id=../pins&d_id=audioout" type="button" class="list-group-item">Audioout</a>
		<a href="docview.php?sec_id=../pins&d_id=pins" type="button" class="list-group-item">Pins</a>
	</div>
	
	<div class="list-group">
		<h4 class="dir">Piu</h4>
		<a href="docview.php?sec_id=../piu&d_id=ae+motion+export" type="button" class="list-group-item">AE motion export</a>
		<a href="docview.php?sec_id=../piu&d_id=die-cut" type="button" class="list-group-item">Die-cut</a>
		<a href="docview.php?sec_id=../piu&d_id=expanding-keyboard" type="button" class="list-group-item">Expanding keyboard</a>
		<a href="docview.php?sec_id=../piu&d_id=keyboard" type="button" class="list-group-item">Keyboard</a>
		<a href="docview.php?sec_id=../piu&d_id=localization" type="button" class="list-group-item">Localization</a>
		<a href="docview.php?sec_id=../piu&d_id=piu" type="button" class="list-group-item">Piu</a>
	</div>
	
	<div class="list-group">
		<h4 class="dir">Tools</h4>
		<a href="docview.php?sec_id=../tools&d_id=defines" type="button" class="list-group-item">Defines</a>
		<a href="docview.php?sec_id=../tools&d_id=manifest" type="button" class="list-group-item">Manifest</a>
		<a href="docview.php?sec_id=../tools&d_id=tools" type="button" class="list-group-item">tools</a>
	</div>
	
	<div class="list-group">
		<h4 class="dir">XS</h4>
		<a href="docview.php?sec_id=../xs&d_id=handle" type="button" class="list-group-item">Handle</a>
		<a href="docview.php?sec_id=../xs&d_id=preload" type="button" class="list-group-item">Preload</a>
		<a href="docview.php?sec_id=../xs&d_id=XS+Conformance" type="button" class="list-group-item">XS Conformance</a>
		<a href="docview.php?sec_id=../xs&d_id=XS+Differences" type="button" class="list-group-item">XS Differences</a>
		<a href="docview.php?sec_id=../xs&d_id=XS in C" type="button" class="list-group-item">XS+in+C</a>
		<a href="docview.php?sec_id=../xs&d_id=XS+linker+warnings" type="button" class="list-group-item">XS linker warnings</a>
		<a href="docview.php?sec_id=../xs&d_id=XS+Platforms" type="button" class="list-group-item">XS Platforms</a>
		<a href="docview.php?sec_id=../xs&d_id=xsbug" type="button" class="list-group-item">XSBug</a>
		<a href="docview.php?sec_id=../xs&d_id=xst" type="button" class="list-group-item">XST</a>
	</div>

  
	
</div><!-- /.container --> 

<!-- Footer -->
<?php include("../../includes/footer.php"); ?>

<!-- jQuery --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="../../js/bootstrap.min.js"></script> 

<!-- Restore Bootstrap accordion state -->
<!-- https://scottdorman.blog/2018/08/18/saving-bootstrap-component-state/ -->
	



</body>
</html>