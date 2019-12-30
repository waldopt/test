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
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">

<!-- Custom CSS -->
<link href="../css/round-about.css" rel="stylesheet">
<link href="../css/moddable1.css" rel="stylesheet">
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
<?php include("../includes/top-nav.php"); ?>

<!-- Page Content -->
<div class="container">
	<h1>Moddable Documentation</h1>
	<p>This documentation is also available on the <a href="https://github.com/Moddable-OpenSource/moddable" target="_blank">Moddable Github</a> site.</p>
	
<?php

$doc_dir = '/Library/Server/Web/Data/Sites/staging.moddable.tech/documentation/';

 function createTOC($dir = '', $currDir = '')
 {
    // Ignore directories/files with these names (even if nested)
    $ignore_elements = array('web', 'assets', 'foo.md');

    // Scan the target directory
    $toc = scandir($dir);

    // Remove ignores
    $toc = array_diff($toc, $ignore_elements);

    // Remove ..
    unset($toc[array_search('.', $toc, true)]);
    unset($toc[array_search('..', $toc, true)]);

    // Parse Root files
    $root_files = array('Moddable SDK - Getting Started.md', 'readme.md'); // order is opposite of display order

    if(array_intersect($root_files, $toc))
    {
        foreach($root_files As $file)
        {
            $key = array_search($file, $toc);
            unset($toc[$key]);
            array_unshift($toc, $file);
        }
    }

    // Ignore empty directories
    if (count($toc) < 1) return;

    // Parse each TOC element (directories & files)
    foreach($toc as $element)
    {
        // When switching to new directory, close the previous section markup 
        if($currDir && is_dir($dir . '/' . $element) && $currDir != $element)
        {
            echo '</div>';
        }

        // If a new directory
        if(is_dir($dir . '/' . $element))
        {
            $currDir = $element;

            // Start section markup 
            echo '<div class="list-group">
                    <h4 class="dir">' . ucwords($currDir) . '</h4>';

            // Continue to parse elements (files) inside this directory
            createTOC($dir . '/' . $element, $currDir);
        }
        else // If a file
        {
            $element_title = pathinfo($element, PATHINFO_FILENAME);

            echo '<a href="web/docview.php?sec_id=../' . strtolower($currDir) . '&d_id=' . urlencode($element_title) . '" type="button" class="list-group-item">' . ucwords($element_title) . '</a>';
        }
    }

    // Close the last section
    //echo '</div>';
}

    createTOC($doc_dir);
?>

	</div>
</div><!-- /.container --> 
	
	<!-- Footer -->
<?php include("../includes/footer.php"); ?>

<!-- jQuery --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="../js/bootstrap.min.js"></script> 

<!-- Restore Bootstrap accordion state -->
<!-- https://scottdorman.blog/2018/08/18/saving-bootstrap-component-state/ -->
	



</body>
</html>