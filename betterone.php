<?php

function ordr_pz($pizzatype, $fw) 
{

    $type = $pizzatype;
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzatype;
    $p = calc_cts($type);
    $address = 'unknown';
    
        if($fw == 'koen'){
            $address = 'a yacht in Antwerp';
        } elseif($fw == 'manuele'){
            $address = 'somewhere in Belgium';
        } elseif ($fw == 'students') {
        $address = 'BeCode office';
        }
    
    $toPrint .=   ' pizza should be sent to ' . $fw . ". <br>The address: {$address}.";
    echo $toPrint; echo '<br>';
    echo'The bill is €'.$p.'.<br>';
    echo "Order finished.<br><br>";
}


    function total_price($p)
    {
        return $p;
    }

    function test($p_type) 
    {
        echo "Test: type is {$p_type}. <br>";
    }

    function calc_cts($p_type)
    {
        $cst = 'unknown';
        if ($p_type == 'marguerita') {
            $cst = 5;
        }else
        {
            if ($p_type == 'golden')
            {
                $cst = 100;
            }
            if ($p_type == 'calzone')
            {
                $cst = 10;
            }
            if ($p_type == 'hawaii') {
                throw new Exception('Computer says no');
            }
        }
    
        return $cst;
    }

?>




/*
function : 

        ordr_pz
        total_price
        calc_cts
        prdr_piz_all
        make_Allhappy 



*/