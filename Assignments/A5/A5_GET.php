<?php
    //Actor ID:
    $actorId = $_GET["actorId"];

    if($actorId == "1")
    {
        echo("<h1>Actor is: Daniel Craig</h1>");
    }
    elseif($actorId == "2")
    {
        echo("<h1>Actor is: Edward Norton</h1>");
    }
    elseif($actorId == "3")
    {
        echo("<h1>Actor is: Dave Bautista</h1>");
    }
    elseif($actorId == "4")
    {
        echo("<h1>Actor is: Kate Hudson</h1>");
    }
    else
    {
        echo("<h1>Number Input MUST be from 1 - 4</h1>");
    }

?>