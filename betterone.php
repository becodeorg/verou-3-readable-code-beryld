<?php

    function orderPizza($pizzaType, $client) 
    {
        echo 'Creating new order... <br>';
        $Message = 'A ';
        $Message .= $pizzaType;
        $price = calc_cts($pizzaType);
        $address = 'unknown';
        
            if($client == 'koen'){
                $address = 'a yacht in Antwerp';
            } elseif($client == 'manuele'){
                $address = 'somewhere in Belgium';
            } elseif ($client == 'students') {
            $address = 'BeCode office';
            }
        
        $Message .=   ' pizza should be sent to ' . $client . ". <br>The address: {$address}.";
        echo $Message; echo '<br>';
        echo'The bill is €'.$price.'.<br>';
        echo "Order finished.<br><br>";
    }

  
    

    function calc_cts($pizzaType)
    {
        if ($pizzaType == 'marguerita') {
            $price = 5;
        }else
        {
            if ($pizzaType == 'golden')
            {
                $price = 100;
            }
            if ($pizzaType == 'calzone')
            {
                $price = 10;
            }
            if ($pizzaType == 'hawaii') {
                $price = 1000;
                // throw new Exception('Computer says no'); SORRY I LIKE HAWAII !
            }
        }
    
        return $price;
    }


    // function ordr_piz_all()
    //     {
            orderPizza('calzone', 'koen');
            orderPizza('marguerita', 'manuele');
            orderPizza('golden', 'students');
            orderPizza('hawaii', 'koen');
        // }
        // ordr_piz_all();

    

    

?>




/*
function : 

        ordr_pz
        total_price
        calc_cts
        prdr_piz_all
        make_Allhappy 



*/