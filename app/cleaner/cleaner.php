<?php

function cleaner($string){
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
}
