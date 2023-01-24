<?php

    function roompage() {
        //require DATABASE DATA in /src/model/
        $room = $_GET["page"];
        $room = explode("/rooms/",$room)[1]; #gets the targeted room
        
        require_once("/templates/pages/roompage.php");
    }

?>