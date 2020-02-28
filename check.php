<?php

// echo PHP_SAPI;

exec("netstat -lntp|grep 0.0.0.0:1688 2>&1",$output,$ret_val);


if($ret_val == 0){
    
    // $scope =  implode('|',$output);
    // echo $scope;
    echo "online";
    
}
else{
    
    echo "offline";
}
exit;
?>
