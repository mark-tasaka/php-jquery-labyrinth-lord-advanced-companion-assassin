<?php
/*Thief Class*/

function levelLimit ($race, $level)
{
    $characterLevel = 0;
    
    if($race === "Dwarf")
    {
        if($level <= 9)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 9;
        }
    }
    else if($race === "Elf")
    {
        if($level <= 10)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 10;
        }
    }
    else if($race === "Gnome")
    {
        if($level <= 8)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 8;
        }
    }
    else if($race === "Half-Elf")
    {
        if($level <= 11)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 11;
        }
    }
    else
    {
        $characterLevel = $level;
    }
    
    
    return $characterLevel;
}




?>