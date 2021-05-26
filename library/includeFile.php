<?php
    function includeFile($file, $args) {
        extract($args);
        include($file);
    }
?>