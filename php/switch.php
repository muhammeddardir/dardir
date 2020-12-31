<?php
/**
 * switch(expression){
 *     case :
 *     code ;
 *  break;
 * 
 * defult:
 * code;
 * 
 * }
 * 
 */


 $browser = "Firefox";

 switch($browser){
    case "Firefox":
    case "Mozila FireFox":
        echo "Firefox";
    break;
    case "chrome":
        echo "chrome";
    break;
    default:
    echo "error";


 }