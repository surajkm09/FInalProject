<?php

    session_start();
    $link= mysqli_connect("shareddb-h.hosting.stackcp.net","water-db-3333d45f","123456789","water-db-3333d45f");
    if(mysqli_connect_errno())
    {
        print_r(mysqli_connect_error());
        
    }
    if($_GET['function'] == "logout")
    {
        session_unset();
    }
    
    
    
    function get_data($userId,$password){
        global $link ;
        
        /*echo "<h1>".$userId."<h1>";
        echo "<h4>".$password."<h4>" ;*/
        $queryData = "SELECT * from data WHERE userid ='".mysqli_real_escape_string($link,$userId)."'LIMIT 1";
        $resultData= mysqli_query($link,$queryData);
        $row = mysqli_fetch_assoc($resultData);
        if(mysqli_num_rows($resultData)==0)
        {
            echo "error";
        }
        
        else{
        echo "<h3 id=\"1\">Your user ID :".$row['userid']."<h3><br>" ;
        echo "<h3 id=\"1\">Your Billing  ID is  :".$row['billingid']."<h3><br>" ;
        echo "<h3 id=\"1\">Your apartment Id is :".$row['appid']."<h3><br>" ;
        echo "<h3 id=\"1\">Your water consumption for the day is : ".$row['day']."liters<h3><br>" ;
        echo "<h3 id=\"1\">Your water consumption for the month is : ".$row['month']."liters<h3><br>" ;
        echo "<h3 id=\"1\">Your water consumption for the year  is : ".$row['year']." liters <h3><br>" ;
        echo "<h3 id=\"1\">Your  apartment pH level is :".$row['ph']."<h3><br>" ;
        echo "<h3 id=\"1\">Your  billed at the rate of  : Rs".$row['price']."per liter<h3><br>" ;
        

        

            
        }
    }
    

?>