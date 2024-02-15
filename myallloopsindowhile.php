<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do while loops</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="20" >
        <tr>
            <td>
                <?php
                $a=1;
                do{
                    $b=1;
                    do{
                        echo $b;
                        $b++;
                    }
                    while($b<=$a);
                    echo"<br>";
                    $a++;
                }
                while($a<=5);
                
                ?>
            </td>

            <td>
                <?php
                  $a=1;
                  do{
                    $b=1;
                    do{
                        echo $a;
                        $b++;

                        
                    }
                    while($b<=$a);
                    $a++;
                    echo"<br>";
                  }
                  while($a<=5);
                ?>
            </td>

            <td>
                <?php
                $a=1;
                do{
                    $b=1;
                    do{
                     echo"*";
                     $b++;         
                    }
                    while($b<=$a);
                    echo"<br>";
                    $a++;
                }          
                while($a<=5);

                ?>
            </td>
            <td>
                <?php
                $n=1;
                $a=1;
                do{
                    $b=1;
                    do{
                       echo $n++;
                        // echo $n."";
                        $b++;
                     
                    }
                    while($b<=$a);
                    echo"<br>";
                    $a++;

                }
                while($a<=5);
            ?>
            </td>

            <td>
                <?php
                 $a=65;
                 do{
                    $b=65;
                    do{
                        echo "".chr($b);
                        $b++;
                    }
                     while($b<=$a);
                     $a++;
                     echo"<br>";
                 }
                 while($a<=70);
                ?>
            </td>
            <td>
                <?php
                  $a=5;
                  do{
                    $b=1;
                    do{
                      echo"$b";
                      $b++;
                    }
                    while($b<=$a);
                      echo"<br>";
                      $a--;
                    
                    
                  }
                  while($a>=1);
                ?>
            </td>
            <td>
                <?php
              
                $a=1;
                do{
                    $b=1;
                    do{
                        echo $b%2;
                         $b++;
                    }
                    while($b<=$a);
                    echo"<br>";
                    $a++;
                }
                while($a<=5);
                ?>
            </td>
            <td>

            
            <?php
            $n65;
            $a=65;
            do{
                $s=$a;
                do{
                    echo"&nbsp";
                    $s++;
                }
                while($s<=69);  
                $b=65;
                do{
                    echo" ".chr($b);
                    $b++;
                    $s++;
                } while($b<=$a);
                echo"<br>";
                $a++;
            }while($a<=70)
            ?>

            </td>
            <td>
                <?php
                $a=1;
                do{
                    $s=$a;
                    do{
                        echo"&nbsp";
                        $s++;
                    }while($s<=5);
                    $b=1;
                    do{
                      echo"*";
                      $b++;
                    }while($b<=$a);
                  echo"<br>";
                  $a++;
                } while($a<=5);
                ?>
            </td>
            <td>
                <?php
                $a=5;
                do{
                    $b=5;
                    do{
                        echo"$a";
                        $b--;
                    }
                    while($b>=$a);
                     echo"<br>";
                     $a--; 
                }while($a>=1);
                ?>
            </td>
        </tr>
    </table>
</body>
</html>
