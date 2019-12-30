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

            echo '<a href="web/docview.php?sec_id=../' . strtolower($currDir) . '&d_id=' . urlencode($element_title) . '" type="button" class="list-group-item">' . ucwords($element_title) . '</a><br>';
        }
    }

    // Close the last section
    echo '</div>';
}

    createTOC($doc_dir);
?>