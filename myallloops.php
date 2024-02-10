<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
    <style>
        * {
            margin: 0;
            padding: 0;

        }

        div {
            background-color: black;
            height: 20px;
            width: 20px;
            display: inline-block;
            border: 5px solid cyan;
            border-radius:10px 0px 10px 0px;
	    animation: mymove 2s infinite ;      


        }



           @keyframes mymove {
            from {transform: rotate(0deg)}
            to {transform: rotate(360deg)}
                 }

        table td {
            border: 5px solid red;
            padding: 5px;
            
            
        }
    </style>
</head>
<body>
    <table border="0" cellspacing="10">
        <tr>
            <td>
                <h1>
      
<?php
for($a=1;$a<=5;$a++)
{
  for($b=1;$b<=$a;$b++)
    { 
    echo $b;
     }
     echo"<br>";
}
?>
           </h1>
             </td>
               

       <td>
         <h1>
    
<?php
for($a=1;$a<=5;$a++)
{
  for($b=1;$b<=$a;$b++)
    { 
    echo $a;
     }
     echo"<br>";
}
?>

          </h1>  
      </td>


         <td>
             <h1>
<?php

for($a=1;$a<=5;$a++)
{
  for($b=1;$b<=$a;$b++)
    { 
    echo "<div></div> ";
     }
     echo"<br>";
}
?>
       </td>
         </h1>


         <td>
             <h1>
<?php
 $n=1;
for($a=1;$a<=5;$a++)
{
  for($b=1;$b<=$a;$b++)
    { 
    $n."";
    echo$n++;
     }
     echo"<br>";
}
?>
       </td>
         </h1>


         <td>
             <h1>
<?php

for($a=65;$a<=70;$a++)
{
  for($b=65;$b<=$a;$b++)
    { 
    echo "".chr($b);
     }
     echo"<br>";
}
?>
       </td>
         </h1>

         <td>
             <h1>
<?php

for($a=5;$a>=1;$a--)
{
  for($b=1;$b<=$a;$b++)
    { 
    echo $b;
     }
     echo"<br>";
}
?>
       </td>
         </h1>


            <td>
                <h1>
      
<?php
for($a=1;$a<=5;$a++)
{
  for($b=1;$b<=$a;$b++)
    { 
    echo $b%2;
     }
     echo"<br>";
}
?>
           </h1>
             </td>


            <td>
                <h1>
      
<?php
$n=65;
for($a=65;$a<=69;$a++)
{

for($s=$a;$s<=69;$s++)
    {
    echo"&nbsp&nbsp";
      }
 for($d=65;$d<=$a;$d++)

     {
         echo "  ".chr($n);
          $n++;     
     }

  echo"<br>";
}


?>
           </h1>
             </td>


     </tr>


      <tr>
       
      <td>
         <h1>
<?php

for($a=1;$a<=5;$a++)
{

for($s=$a;$s<=5;$s++)
    {
    echo"&nbsp&nbsp";
      }
 for($d=1;$d<=$a;$d++)

     {
         echo "<div></div>";
          $n++;     
     }

  echo"<br>";
}


?>

         </h1>
            </td>




               <td>
            <h1>

<?php

for($a=5;$a>=1;$a--){

for($s=5;$s>=$a;$s--){
   
  echo$a;   

     }
  echo"<br>";
}


?>
              </h1>
                  </td>


         <td>
            <h1>
  
<?php
for($a=1;$a<=5;$a++)
{
  for($b=1;$b<=$a;$b++)
    { 
    echo $b;
     }
     echo"<br>";
}

for($a=4;$a>=1;$a--)
{
  for($b=1;$b<=$a;$b++)
    { 
    echo $b;
     }
    echo"<br>";
}
?>

             </h1>
         </td>


        <td>
            <h1>
  
<?php

for($a=1;$a<=5;$a++)
{

for($s=$a;$s<=5;$s++)
    {
    echo"&nbsp&nbsp";
      }
 for($d=1;$d<=$a;$d++)

     {
         echo "<div></div>";
          $n++;     
     }

  echo"<br>";
}


for($a=5;$a>=1;$a--)
{

for($s=$a;$s<=5;$s++)
    {
    echo"&nbsp&nbsp";
      }
 for($d=1;$d<=$a;$d++)

     {
         echo "<div></div>";
          $n++;     
     }

  echo"<br>";
}

?>

             </h1>
         </td>


         <td>
             <h1>
<?php

for($a=5;$a>=1;$a--)
{
  for($b=1;$b<=$a;$b++)
    { 
    echo "<div></div>";
     }
     echo"<br>";
}
for($a=1;$a<=5;$a++)
{
  for($b=1;$b<=$a;$b++)
    { 
    echo "<div></div> ";
     }
     echo"<br>";
}
?>
       </td>
         </h1>

   </tr>

</body>

</html>