<?php

add_hook('ClientAreaPrimarySidebar', 1, function ($vars) {
    if (!array_key_exists('action', $_GET)) {
        return;
    }

    if ($_GET['action'] !== 'productdetails') {
        return;
    }

    foreach ($vars->getChildren() as $child) {
        $vars->removeChild($child->getName());
    }
});