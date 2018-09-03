<?php


function thiefAbility ($level)
{
    $message = "";
    
    if($level <= 2)
    {
        $message = "*Backstab: +4 bonus to hit; x2 damage.<br/>
        *Ability to use disguises and poisons.<br/>
        *Assassination (instant kill): Must successfully backstab and achieve surprise<br/>
        on the victim; base probability of 50% against a victim of equal level/HD<br/>
        (probability modified by 5% for each level/HD above or below assassin's level).<br/>";
    }
    else if($level == 3)
    {
        $message = "*Backstab: +4 bonus to hit; x2 damage.<br/>
        *Ability to use disguises and poisons.<br/>
        *Assassination (instant kill): Must successfully backstab and achieve surprise<br/>
        on the victim; base probability of 50% against a victim of equal level/HD<br/>
        (probability modified by 5% for each level/HD above or below assassin's level).<br/>
        *Gain thief skills at two levels lower.<br/>";
    }
    else if($level >= 4 && $level <= 7)
    {
        $message = "*Backstab: +4 bonus to hit; x2 damage.<br/>
        *Ability to use disguises and poisons.<br/>
        *Assassination (instant kill): Must successfully backstab and achieve surprise<br/>
        on the victim; base probability of 50% against a victim of equal level/HD<br/>
        (probability modified by 5% for each level/HD above or below assassin's level).<br/>
        *Gain thief skills at two levels lower.<br/>
        *May have hirelings (must be assassin of equal or lower levels).<br/>";
    }
    else if($level >= 8 && $level <= 11)
    {
        $message = "*Backstab: +4 bonus to hit; x2 damage.<br/>
        *Ability to use disguises and poisons.<br/>
        *Assassination (instant kill): Must successfully backstab and achieve surprise<br/>
        on the victim; base probability of 50% against a victim of equal level/HD<br/>
        (probability modified by 5% for each level/HD above or below assassin's level).<br/>
        *Gain thief skills at two levels lower.<br/>
        *May have hirelings (thief or assassin class only).<br/>";
    }
    else if($level > 11)
    {
        $message = "*Backstab: +4 bonus to hit; x2 damage.<br/>
        *Ability to use disguises and poisons.<br/>
        *Assassination (instant kill): Must successfully backstab and achieve surprise<br/>
        on the victim; base probability of 50% against a victim of equal level/HD<br/>
        (probability modified by 5% for each level/HD above or below assassin's level).<br/>
        *Gain thief skills at two levels lower.<br/>
        *May have hirelings (any class).<br/>";
    }
    
    return $message;
    
}

function pickLocks ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 0;
            break;
            
        case 2:
            $skill = 0;
            break;
            
        case 3:
            $skill = 17;
            break;
            
        case 4:
            $skill = 23;
            break;
            
        case 5:
            $skill = 27;
            break;
            
        case 6:
            $skill = 31;
            break;
            
        case 7:
            $skill = 35;
            break;
            
        case 8:
            $skill = 45;
            break;
            
        case 9:
            $skill = 55;
            break;
            
        case 10:
            $skill = 65;
            break;
            
        case 11:
            $skill = 75;
            break;
            
        case 12:
            $skill = 85;
            break;
            
        case 13:
            $skill = 95;
            break;
            
        case 14:
            $skill = 97;
            break;
            
        case 15:
            $skill = 99;
            break;
  
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}


function findRemoveTraps ($level)
{
    $skill = 0;
    
    switch($level)
    {
            
        case 1:
            $skill = 0;
            break;
            
        case 2:
            $skill = 0;
            break;
            
        case 3:
            $skill = 14;
            break;
            
        case 4:
            $skill = 17;
            break;
            
        case 5:
            $skill = 20;
            break;
            
        case 6:
            $skill = 23;
            break;
            
        case 7:
            $skill = 33;
            break;
            
        case 8:
            $skill = 43;
            break;
            
        case 9:
            $skill = 53;
            break;
            
        case 10:
            $skill = 63;
            break;
            
        case 11:
            $skill = 73;
            break;
            
        case 12:
            $skill = 83;
            break;
            
        case 13:
            $skill = 93;
            break;
            
        case 14:
            $skill = 95;
            break;
            
        case 15:
            $skill = 97;
            break;
            
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}



function pickPockets ($level)
{
    $skill = 0;
    
    switch($level)
    {
            
        case 1:
            $skill = 0;
            break;
            
        case 2:
            $skill = 0;
            break;
            
        case 3:
            $skill = 23;
            break;
            
        case 4:
            $skill = 27;
            break;
            
        case 5:
            $skill = 30;
            break;
            
        case 6:
            $skill = 37;
            break;
            
        case 7:
            $skill = 40;
            break;
            
        case 8:
            $skill = 43;
            break;
            
        case 9:
            $skill = 53;
            break;
            
        case 10:
            $skill = 63;
            break;
            
        case 11:
            $skill = 73;
            break;
            
        case 12:
            $skill = 83;
            break;
            
        case 13:
            $skill = 93;
            break;
            
        case 14:
            $skill = 105;
            break;
            
        case 15:
            $skill = 115;
            break;
            
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}


function moveSilently ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 0;
            break;
            
        case 2:
            $skill = 0;
            break;
            
        case 3:
            $skill = 23;
            break;
            
        case 4:
            $skill = 27;
            break;
            
        case 5:
            $skill = 30;
            break;
            
        case 6:
            $skill = 37;
            break;
            
        case 7:
            $skill = 40;
            break;
            
        case 8:
            $skill = 43;
            break;
            
        case 9:
            $skill = 53;
            break;
            
        case 10:
            $skill = 63;
            break;
            
        case 11:
            $skill = 73;
            break;
            
        case 12:
            $skill = 83;
            break;
            
        case 13:
            $skill = 93;
            break;
            
        case 14:
            $skill = 95;
            break;
            
        case 15:
            $skill = 97;
            break;
            
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}


function climbWalls ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 0;
            break;
            
        case 2:
            $skill = 0;
            break;
            
        case 3:
            $skill = 87;
            break;
            
        case 4:
            $skill = 88;
            break;
            
        case 5:
            $skill = 89;
            break;
            
        case 6:
            $skill = 90;
            break;
            
        case 7:
            $skill = 91;
            break;
            
        case 8:
            $skill = 92;
            break;
            
        case 9:
            $skill = 93;
            break;
            
        case 10:
            $skill = 94;
            break;
            
        case 11:
            $skill = 95;
            break;
            
        case 12:
            $skill = 96;
            break;
            
        case 13:
            $skill = 97;
            break;
            
        case 14:
            $skill = 98;
            break;
            
        case 15:
            $skill = 99;
            break;

        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}



function hideInShadows ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 0;
            break;
            
        case 2:
            $skill = 0;
            break;
            
        case 3:
            $skill = 13;
            break;
            
        case 4:
            $skill = 17;
            break;
            
        case 5:
            $skill = 20;
            break;
            
        case 6:
            $skill = 27;
            break;
            
        case 7:
            $skill = 30;
            break;
            
        case 8:
            $skill = 37;
            break;
            
        case 9:
            $skill = 47;
            break;
            
        case 10:
            $skill = 57;
            break;
            
        case 11:
            $skill = 67;
            break;
            
        case 12:
            $skill = 77;
            break;
            
        case 13:
            $skill = 87;
            break;
            
        case 14:
            $skill = 90;
            break;
            
        case 15:
            $skill = 97;
            break;

        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}


function hearNoise ($level, $characterRace)
{
    $message = "";
    
    if($characterRace === "Elf")
    {
        if($level <= 2)
        {
            $message = "1-2";   
        }
        else if($level >= 3 && $level <= 4)
        {
            $message = "1-3";   
        }
        else if($level >= 5 && $level <= 7)
        {
            $message = "1-4";   
        }
        else
        {
            $message = "1-5";
        }
    }
    else
    {
        if($level <= 2)
        {
            $message = "-";   
        }
        else if($level >= 3 && $level <= 4)
        {
            $message = "1-2";   
        }
        else if($level >= 5 && $level <= 7)
        {
            $message = "1-3";   
        }
        else if($level >= 8 && $level <= 11)
        {
            $message = "1-4";   
        }
        else
        {
            $message = "1-5";
        }
        
    }
    
    return $message;
    
    
}


?>