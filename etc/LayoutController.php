<?php

namespace joker;

include_once 'include.php';

class LayoutController
{
    public static function addCSSLink(string $css)
    {
        global $router;
        ?>
        <link rel="stylesheet" href="<?php echo $router->base_url(TRUE) . $css; ?>" media="screen">
        <?php
    }

    public static function addJavaScript(string $js)
    {
        global $router;
        ?>
        <script type="text/javascript" src="<?php echo $router->base_url(TRUE) . $js; ?>"></script>
        <?php
    }
}