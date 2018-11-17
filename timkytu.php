<html>
   
   <head>
      <title>Decode JSON string trong PHP</title>
   </head>
   <body>
   
      <?php
        $string_ban_dau="vietjack team";  
		$ki_tu_can_tim="v";  
		$count=0;  
		for($x=0; $x < strlen($string_ban_dau); $x++)  
		  {   
			if(substr($string_ban_dau,$x,1) == $ki_tu_can_tim)  
			{  
			$count = $count+1;  
			 }  
		  } 
		  $giaithua=1;
		   for($i=1;$i<=4;$i++){  
      			$giaithua=$giaithua*$i;
      		}  
   
		
		echo "Giai thừa của 7 = $giaithua"."<br>";

		echo "Có " .$count. " kí tự " .$ki_tu_can_tim. " trong chuỗi '" .$string_ban_dau. "'";
       ?>
       
   </body>
</html>

