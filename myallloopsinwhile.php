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
$a = 1;
while($a <= 5) {
    $b = 1;
    while($b <= $a) {
        echo $b;
        $b++;
    }
    echo"<br>";
    $a++;
}
?>
           </h1>
             </td>
               

       <td>
         <h1>
    
<?php
$a = 1;
while($a <= 5) {
    $b = 1;
    while($b <= $a) {
        echo $a;
        $b++;
    }
    echo"<br>";
    $a++;
}
?>

          </h1>  
      </td>


         <td>
             <h1>
<?php
$a = 1;
while($a <= 5) {
    $b = 1;
    while($b <= $a) {
        echo "<div></div> ";
        $b++;
    }
    echo"<br>";
    $a++;
}
?>
       </td>
         </h1>


         <td>
             <h1>
<?php
$n = 1;
$a = 1;
while($a <= 5) {
    $b = 1;
    while($b <= $a) {
        $n."";
        echo $n++;
        $b++;
    }
    echo"<br>";
    $a++;
}
?>
       </td>
         </h1>


         <td>
             <h1>
<?php
$a = 65;
while($a <= 70) {
    $b = 65;
    while($b <= $a) {
        echo "".chr($b);
        $b++;
    }
    echo"<br>";
    $a++;
}
?>
       </td>
         </h1>

         <td>
             <h1>
<?php
$a = 5;
while($a >= 1) {
    $b = 1;
    while($b <= $a) {
        echo $b;
        $b++;
    }
    echo"<br>";
    $a--;
}
?>
       </td>
         </h1>


            <td>
                <h1>
      
<?php
$a = 1;
while($a <= 5) {
    $b = 1;
    while($b <= $a) {
        echo $b % 2;
        $b++;
    }
    echo"<br>";
    $a++;
}
?>
           </h1>
             </td>


            <td>
                <h1>
      
<?php
$n = 65;
$a = 65;
while($a <= 69) {
    $s = $a;
    while($s <= 69) {
        echo"&nbsp&nbsp";
        $s++;
    }
    $d = 65;
    while($d <= $a) {
        echo "  ".chr($n);
        $n++;
        $d++;
    }
    echo"<br>";
    $a++;
}
?>
           </h1>
             </td>


     </tr>


      <tr>
       
      <td>
         <h1>
<?php
$a = 1;
while($a <= 5) {
    $s = $a;
    while($s <= 5) {
        echo"&nbsp&nbsp";
        $s++;
    }
    $d = 1;
    while($d <= $a) {
        echo "<div></div>";
        $n++;
        $d++;
    }
    echo"<br>";
    $a++;
}
?>

         </h1>
            </td>




               <td>
            <h1>

<?php
$a = 5;
while($a >= 1) {
    $s = 5;
    while($s >= $a) {
        echo"&nbsp&nbsp";
        $s--;
    }
    $b = 1;
    while($b <= $a) {
        echo $a;
        $b++;
    }
    echo"<br>";
    $a--;
}
?>
              </h1>
                  </td>


         <td>
            <h1>
  
<?php
$a = 1;
while($a <= 5) {
    $b = 1;
    while($b <= $a) {
        echo $b;
        $b++;
    }
    echo"<br>";
    $a++;
}

$a = 4;
while($a >= 1) {
    $b = 1;
    while($b <= $a) {
        echo $b;
        $b++;
    }
    echo"<br>";
    $a--;
}
?>

             </h1>
         </td>


        <td>
            <h1>
  
<?php
$a = 1;
while($a <= 5) {
    $s = $a;
    while($s <= 5) {
        echo"&nbsp&nbsp";
        $s++;
    }
    $b = 1;
    while($b <= $a) {
        echo "<div></div>";
        $n++;
        $b++;
    }
    echo"<br>";
    $a++;
}

$a = 5;
while($a >= 1) {
    $s = $a;
    while($s <= 5) {
        echo"&nbsp&nbsp";
        $s++;
    }
    $b = 1;
    while($b <= $a) {
        echo "<div></div>";
        $n++;
        $b++;
    }
    echo"<br>";
    $a--;
}

?>

             </h1>
         </td>


         <td>
             <h1>
<?php
$a = 5;
while($a >= 1) {
    $b = 1;
    while($b <= $a) {
        echo "<div></div>";
        $b++;
    }
    echo"<br>";
    $a--;
}
$a = 1;
while($a <= 5) {
    $b = 1;
    while($b <= $a) {
        echo "<div></div> ";
        $b++;
    }
    echo"<br>";
    $a++;
}
?>
       </td>
         </h1>

   </tr>

</body>

</html>
