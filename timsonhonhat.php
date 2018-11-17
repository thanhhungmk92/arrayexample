<html>
   
   <head>
      <title>Decode JSON string trong PHP</title>
   </head>
   <body>
   
       <?php
      	$arr = array(25,5,6,23,15,51,22,9,27,30);
    	$max=$arr[0]; 
    $result_max="";
    for($i=1;$i<count($arr);$i++)
    {
        if($max>$arr[$i]) 
    {
        $max=$arr[$i];
    }
    }
    $a="Max array: $max";
		
       ?>
       <div> <?php echo $a; ?></div>
   </body>
</html>

