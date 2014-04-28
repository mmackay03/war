<?php
session_start();
function setSessions($debug)
{
    
    
    if ($debug )
    {
        print "<pre>";
        print_r($_SESSION);
        print "</pre>";
    }
}


