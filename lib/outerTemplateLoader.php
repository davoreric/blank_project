<?php

    // LOADING OUTER TEMPLATE
    function outerTemplate($name) {

        global $document_root;
        
        ob_start();
        include 'templates/controllers/' . $name . '.php';
        $body = ob_get_contents();
        ob_end_clean();

        include $document_root . "templates/controllers/outer/front.php";

    }

    // SETTING BLANK OUTER TEMPLATE
    function outerBlank($name) {

        global $document_root;
        include $document_root . "templates/api/" . $name . ".php";

    }

    

?>