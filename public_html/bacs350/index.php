<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'Caleb Leonard (UNC BACS 350)';
    
    $page_title = "Caleb's Incomplete Page";
    
    $content = '
        <p>
            <a href="https://www.findingfocusministries.com/">Home</a>
        </p>
        <p> 
            This page is the beginning of an ongoing project in BACS 350. This is not as complete as I would like it to be. Check back later for development!
        </p>
        <p> 
            It is a custom information manager.
        </p>
        <p> 
            Different rooms within this PHP app will contain different types of info.
        </p>
        
        <ul>
            <li>
                <a href="demo">Code Demos</a>
            </li>
            <li>
                <a href="pattern">Design Patterns</a>
            </li>
            <li>
                <a href="project">Projects</a>
            </li>
        </ul>
    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
