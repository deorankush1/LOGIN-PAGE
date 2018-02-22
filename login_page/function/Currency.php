<?php
 if (isset($_POST)){
    $base1 = $_POST['base'];
    
    if (empty($base1)) {
    	$base1 = "USD";
    }
    
    $converter = $_POST['converter'];
    $amount = $_POST['amount'];
    $cSession = curl_init(); 
    
    curl_setopt_array($cSession,array(CURLOPT_URL =>"https://api.fixer.io/latest?base=$base1",CURLOPT_RETURNTRANSFER=>1,));
    curl_setopt_array($cSession,array(CURLOPT_HEADER=> false)); 
    
    if (curl_error($cSession)){
      echo 'error:' . curl_error($cSession);
    }
    
    echo $error = curl_error($cSession);
    $result = curl_exec($cSession);
    $array = json_decode($result, true);
    print_r($array);
 
    $T_Amout = $amount * $array['rates'][$converter]; 
    echo  $T_Amout;
  }
?>
    

      
