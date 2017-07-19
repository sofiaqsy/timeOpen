<?php
function Cortar($string,$hasta){
   if($string=="Comprensión y Redacción de Textos 1")
   {
     return "Redacción 1";
   }

   else if($string=="Comprensión y Redacción de Textos 2")
   {
     return "Redacción 2";
   }

   else
   {
     if(strlen($string)>$hasta)
     {
       return substr($string,0,$hasta)."...";
     }
     else
     {
       return substr($string,0,$hasta);
     }
   }

}

?>
