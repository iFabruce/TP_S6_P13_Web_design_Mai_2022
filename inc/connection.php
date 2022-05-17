<?php
function dbconnect()
{
    static $connect = null;
    if ($connect === null) {
        $connect = mysqli_connect('mysql-fabruce.alwaysdata.net', 'fabruce', 'Troptop1!', 'fabruce_tp_s6_web_design');
    }
    return $connect;
}

?>