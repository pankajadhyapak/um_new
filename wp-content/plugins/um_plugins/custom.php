<?php

function my_login_logo() { ?>
    <style type="text/css">
        html {
            background: #133259;
            background-image: -webkit-linear-gradient(top left, #573e81, #133259 40%, #133259);
            background-image: -o-linear-gradient(top left, #573e81, #133259 40%, #133259);
            background-image: linear-gradient(to bottom right, #573e81, #133259 40%, #133259);
        }
        body{
        	background: transparent;
        	color: #fff;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );