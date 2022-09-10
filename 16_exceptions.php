<?php
function inverse($x){
    if(!$x){
      throw new Exception('Division by zer0');
    }
    return  1/$x;
}
 try{
 echo inverse(4);
 echo inverse(0);
}catch(Exception $e){
  echo 'Caught exception'. $e->getMessage();
}finally{
  echo 'First finally';
}
?>