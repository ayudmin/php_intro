<?php 


class HTMLStuff
{
    static function startTable()
    {
        echo "<table border=\"1\">\n";
    }

    static function endTable()
    {
        echo "</table>\n";
    }

}


HTMLStuff::startTable();

HTMLStuff::endTable();



?>