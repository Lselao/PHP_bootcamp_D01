#!/usr/bin/php
<?php
    function ft_split($st)
    {
        $st = array_filter(explode (" ", $st));
        sort($st);
        return($st);
    }
?>