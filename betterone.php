<?php

    function orderPizza($pizzaType, $client) 
    {
        $price = priceList($pizzaType);

            if($client == 'koen'){
                $address = 'a yacht in Antwerp';
            } elseif($client == 'manuele'){
                $address = 'somewhere in Belgium';
            } elseif ($client == 'students') {
            $address = 'BeCode office';
            }
        
        echo $Message = 'Creating new order... <br> A ' . $pizzaType .  ' pizza should be sent to ' . $client . ". <br>The address: {$address}. <br>The bill is €$price.<br> Order Finished <br><br>";
        //Here could delete the variable but maybe it's better to keep it, in case your website need to place it somewhere else
    }

  
    

    function priceList($pizzaType)
    {   
        if ($pizzaType == 'marguerita') {
            $price = 5;
        }
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