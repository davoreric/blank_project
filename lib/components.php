<?php

    function component($name, $params = array()) {

        global $document_root;

        ob_start();
        extract($params, EXTR_SKIP);
        include 'templates/components/' . $name . '.php';
        $content = ob_get_contents();
        ob_end_clean();

        return $content;

    }

?>