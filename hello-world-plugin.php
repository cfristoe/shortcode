<?php
/**
 * Plugin Name: Jordan Cry
 * Description: Share Jordan's crying face with greater ease. 
 * Version: 0.1
 * Author: C.Fristoe
 */
 function jordan_cry_plugin ($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.testText {\r\n";
    $Content .= "color: #ff3f7e;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= '<h3 class="testText">HELLO WOOORLD!</h3>'; 
    $Content .= '<img src="http://assets.stickpng.com/images/58967e8c0803320bf17c2fb7.png" 
    alt="Michael Jordan Crying Face" itemprop="contentUrl">';
   

return $Content;

}

add_shortcode('jordan_cry', 'jordan_cry_plugin' );
