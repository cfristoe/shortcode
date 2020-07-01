<?php
/**
 * Plugin Name: Jordan Cry
 * Description: Share Jordan's crying face with greater ease. 
 * Version: 0.1
 * Author: C.Fristoe
 */
 function jordan_cry_plugin ($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.testText {r\n";
    $Content .= "color: #ff3f7e;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= '<h3 class="testText">HELLO WOOORLD!</h3>'; 
    $Content .= return '<img src=\"https://www.dlf.pt/png/big/5/56420_jordan-cry-face-png.jpg" 
         alt="jord" width="96" height="96" class="left-align" />';
   }

return $Content;

}

add_shortcode('jordan_cry', 'jordan_cry_plugin' );
