<?php

function __autoload($Class)
{
    $dirName = 'class';

    if (file_exists("{$dirName}/{$Class}.class.php"))
    {
        require_once("{$dirName}/{$Class}.class.php");
    }
    else
    {
        die("Error to include: {$dirName}/{$Class}.class.php<hr>");
    }
}
