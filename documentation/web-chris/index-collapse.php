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
</style>

<body>
<?php include("../../includes/top-nav.php"); ?>

<!-- Page Content -->
<div class="container">
	<h1>Moddable Documentation</h1>
	<p>This documentation is also available on the <a href="https://github.com/Moddable-OpenSource/moddable" target="_blank">Moddable Github</a> site.</p>
  
	<div class="accordion" id="accordion">
		
		<!-- initial -->
    <div class="initial">
			<h4><a href="docview-initial.php?d_id=../readme">Readme</a></h4>
			<h4><a href="docview-initial.php?d_id=../Moddable+SDK+-+Getting+Started">Moddable SDK - Getting Started</a></h4>
		</div>
   
		<hr />
		
		<!-- base -->
    <div class="accordion-group">
      <div class="accordion-heading"><h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#base">Base</a></h4> </div>
      <div id="base" class="accordion-body collapse">
        <div class="accordion-inner">
					<a href="docview.php?sec_id=../base&d_id=base">Base</a>
          <a href="docview.php?sec_id=../base&d_id=setup" >Setup</a>
          <a href="docview.php?sec_id=../base&d_id=worker" >Worker</a> 
				</div>
      </div>
    </div>
    
		<!-- comodetto -->
		<div class="accordion-group">
      <div class="accordion-heading"><h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#comodetto">Comodetto</a></h4></div>
      <div id="comodetto" class="accordion-body collapse">
        <div class="accordion-inner"> 
					<a href="docview.php?sec_id=../commodetto&d_id=commodetto">Commodetto</a>
          <a href="docview.php?sec_id=../commodetto&d_id=Creating+fonts+for+Moddable+applications">Creating fonts for Moddable applications</a>
          <a href="docview.php?sec_id=../commodetto&d_id=poco">Poco</a>
				</div>
      </div>
    </div>
	
		<!-- crypt -->
		<div class="accordion-group">
      <div class="accordion-heading"><h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#crypt" href="#crypt">Crypt</a></h4></div>
      <div id="crypt" class="accordion-body collapse">
        <div class="accordion-inner"> 
					<a href="docview.php?sec_id=../crypt&d_id=crypt">Crypt</a>
				</div>
      </div>
    </div>
		
		<!-- data -->
		<div class="accordion-group">
      <div class="accordion-heading"><h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#data">Data</a></h4></div>
      <div id="data" class="accordion-body collapse">
        <div class="accordion-inner"> 
					<a href="docview.php?sec_id=../data&d_id=data">Data</a>
				</div>
      </div>
    </div>
		
		<!-- devices -->
		<div class="accordion-group">
      <div class="accordion-heading"><h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#devices">Devices</a></h4></div>
      <div id="devices" class="accordion-body collapse">
        <div class="accordion-inner"> 
					<a href="docview.php?sec_id=../devices&d_id=GeckoBuild">GeckoBuild</a>
					<a href="docview.php?sec_id=../devices&d_id=moddable-one">Moddable One</a>
          <a href="docview.php?sec_id=../devices&d_id=moddable-two">Moddable Two</a>
          <a href="docview.php?sec_id=../devices&d_id=moddable-three">Moddable Three</a>
					<a href="docview.php?sec_id=../devices&d_id=moddable-zero">Moddable Zero</a>
					<a href="docview.php?sec_id=../devices&d_id=qca4020">qca4020</a>
				</div>
      </div>
    </div>
		
		<!-- displays -->
		<div class="accordion-group">
      <div class="accordion-heading"><h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#displays">Displays</a></h4></div>
      <div id="displays" class="accordion-body collapse">
        <div class="accordion-inner"> 
					<a href="docview.php?sec_id=../displays&d_id=readme">Readme</a>
					<a href="docview.php?sec_id=../displays&d_id=wiring-guide-adafruit-1.8-st7735">Wiring Guide Adafruit 1.8 st7735</a>
          <a href="docview.php?sec_id=../displays&d_id=wiring-guide-adafruit-OLED">Wiring Guide Adafruit OLED</a>
          <a href="docview.php?sec_id=../displays&d_id=wiring-guide-crystalfontz-eink">Wiring Guide Crystalfontz Eink</a>
					<a href="docview.php?sec_id=../displays&d_id=wiring-guide-dotstar">Wiring Guide Dotstar</a>
					<a href="docview.php?sec_id=../displays&d_id=wiring-guide-generic-1.44-spi">Wiring Guide Generic 1.44 SPI</a>
					<a href="docview.php?sec_id=../displays&d_id=wiring-guide-generic-2.4-spi-esp32">Wiring Guide Generic 2.4 SPI ESP32</a>
					<a href="docview.php?sec_id=../displays&d_id=wiring-guide-generic-2.4-spi">Wiring Guide Generic 2.4 SPI</a>
					<a href="docview.php?sec_id=../displays&d_id=wiring-guide-generic-2.8-CPT-spi">Wiring Guide Generic 2.8 CPT SPI</a>
          <a href="docview.php?sec_id=../displays&d_id=wiring-guide-sharp-memory-1.3-spi">Wiring Guide Sharp Memory 1.3 SPI</a>
					<a href="docview.php?sec_id=../displays&d_id=wiring-guide-sharp-memory-2.7-spi">Wiring Guide Sharp Memory 2.7 SPI</a>
					<a href="docview.php?sec_id=../displays&d_id=wiring-guide-sparkFun-teensyview-spi">Wiring Guide SparkFun Teensyview SPI</a>
					<a href="docview.php?sec_id=../displays&d_id=wiring-guide-switch-science-LCD">Wiring Guide Switch Science LCD</a>
				</div>
      </div>
    </div>
		
		<!-- drivers -->
		<div class="accordion-group">
      <div class="accordion-heading"><h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#drivers">Drivers</a></h4></div>
      <div id="drivers" class="accordion-body collapse">
        <div class="accordion-inner"> 
					<a href="docview.php?sec_id=../drivers&d_id=destm32s">destm32s</a>
					<a href="docview.php?sec_id=../drivers&d_id=dotstar">Dotstar</a>
          <a href="docview.php?sec_id=../drivers&d_id=ili9341">ili9341</a>
          <a href="docview.php?sec_id=../drivers&d_id=lpm013m126a">lpm013m126a</a>
					<a href="docview.php?sec_id=../drivers&d_id=ls013b4dn04">ls013b4dn04</a>
					<a href="docview.php?sec_id=../drivers&d_id=MCP230XX">MCP230XX</a>
					<a href="docview.php?sec_id=../drivers&d_id=neostrand">Neostrand</a>
					<a href="docview.php?sec_id=../drivers&d_id=ssd1306">ssd1306</a>
					<a href="docview.php?sec_id=../drivers&d_id=ssd1351">ssd1351</a>
          <a href="docview.php?sec_id=../drivers&d_id=st7735">st7735</a>
				</div>
      </div>
    </div>
		
		<!-- files -->
		<div class="accordion-group">
      <div class="accordion-heading"><h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#files">Files</a></h4></div>
      <div id="files" class="accordion-body collapse">
        <div class="accordion-inner"> 
					<a href="docview.php?sec_id=../files&d_id=files">Files</a>
				</div>
      </div>
    </div>
		
		<!-- io -->
		<div class="accordion-group">
      <div class="accordion-heading"><h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#io">IO</a></h4></div>
      <div id="io" class="accordion-body collapse">
        <div class="accordion-inner"> 
					<a href="docview.php?sec_id=../io&d_id=io">IO</a>
					<a href="docview.php?sec_id=../io&d_id=firmata">Firmata</a>
				</div>
      </div>
		</div>	
		
		<!-- network -->
		<div class="accordion-group">
      <div class="accordion-heading"><h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#network">Network</a></h4></div>
      <div id="network" class="accordion-body collapse">
        <div class="accordion-inner"> 
					<a href="docview.php?sec_id=../network&d_id=ble">BLE</a>
					<a href="docview.php?sec_id=../network&d_id=network">Network</a>
					<a href="docview.php?sec_id=../network&d_id=securesocket">Secure socket</a>
					<a href="docview.php?sec_id=../network&d_id=webthings">Webthings</a>
				</div>
      </div>
    </div>
    
	
		<!-- pins -->
		<div class="accordion-group">
      <div class="accordion-heading"><h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#pins">Pins</a></h4></div>
      <div id="pins" class="accordion-body collapse">
        <div class="accordion-inner"> 
					<a href="docview.php?sec_id=../pins&d_id=audioout">Audioout</a>
					<a href="docview.php?sec_id=../pins&d_id=pins">Pins</a>
				</div>
      </div>
    </div>
	
		<!-- piu -->
		<div class="accordion-group">
      <div class="accordion-heading"><h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#piu">Piu</a></h4></div>
      <div id="piu" class="accordion-body collapse">
        <div class="accordion-inner"> 
					<a href="docview.php?sec_id=../piu&d_id=ae+motion+export">AE motion export</a>
					<a href="docview.php?sec_id=../piu&d_id=die-cut">Die-cut</a>
					<a href="docview.php?sec_id=../piu&d_id=expanding-keyboard">Expanding keyboard</a>
					<a href="docview.php?sec_id=../piu&d_id=keyboard">Keyboard</a>
					<a href="docview.php?sec_id=../piu&d_id=localization">Localization</a>
					<a href="docview.php?sec_id=../piu&d_id=piu">Piu</a>
				</div>
      </div>
    </div>
	
		<!-- tools -->
		<div class="accordion-group">
      <div class="accordion-heading"><h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#tools">Tools</a></h4></div>
      <div id="tools" class="accordion-body collapse">
        <div class="accordion-inner"> 
					<a href="docview.php?sec_id=../tools&d_id=defines">Defines</a>
					<a href="docview.php?sec_id=../tools&d_id=manifest">Manifest</a>
					<a href="docview.php?sec_id=../tools&d_id=tools">tools</a>
				</div>
      </div>
    </div>
		
		<!-- xs -->
		<div class="accordion-group">
      <div class="accordion-heading"><h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#xs">XS</a></h4></div>
      <div id="xs" class="accordion-body collapse">
        <div class="accordion-inner"> 
					<a href="docview.php?sec_id=../xs&d_id=handle">Handle</a>
					<a href="docview.php?sec_id=../xs&d_id=preload">Preload</a>
					<a href="docview.php?sec_id=../xs&d_id=XS+Conformance">XS Conformance</a>
					<a href="docview.php?sec_id=../xs&d_id=XS+Differences">XS Differences</a>
					<a href="docview.php?sec_id=../xs&d_id=XS in C">XS+in+C</a>
					<a href="docview.php?sec_id=../xs&d_id=XS+linker+warnings">XS linker warnings</a>
					<a href="docview.php?sec_id=../xs&d_id=XS+Platforms">XS Platforms</a>
					<a href="docview.php?sec_id=../xs&d_id=xsbug">XSBug</a>
					<a href="docview.php?sec_id=../xs&d_id=xst">XST</a>
				</div>
      </div>
    </div>

	</div><!-- /.accordion -->
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