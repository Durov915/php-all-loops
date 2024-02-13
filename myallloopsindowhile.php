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
            animation: mymove 2s infinite;
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
                do {
                    $b = 1;
                    do {
                        echo $b;
                        $b++;
                    } while ($b <= $a);
                    echo "<br>";
                    $a++;
                } while ($a <= 5);
                ?>
                </h1>
            </td>

            <td>
                <h1>
                <?php
                $a = 1;
                do {
                    $b = 1;
                    do {
                        echo $a;
                        $b++;
                    } while ($b <= $a);
                    echo "<br>";
                    $a++;
                } while ($a <= 5);
                ?>
                </h1>
            </td>

            <td>
                <h1>
                <?php
                $a = 1;
                do {
                    $b = 1;
                    do {
                        echo "<div></div> ";
                        $b++;
                    } while ($b <= $a);
                    echo "<br>";
                    $a++;
                } while ($a <= 5);
                ?>
                </h1>
            </td>

            <td>
                <h1>
                <?php
                $n = 1;
                $a = 1;
                do {
                    $b = 1;
                    do {
                        echo $n++;
                        $b++;
                    } while ($b <= $a);
                    echo "<br>";
                    $a++;
                } while ($a <= 5);
                ?>
                </h1>
            </td>

            <td>
                <h1>
                <?php
                $a = 65;
                do {
                    $b = 65;
                    do {
                        echo "".chr($b);
                        $b++;
                    } while ($b <= $a);
                    echo "<br>";
                    $a++;
                } while ($a <= 70);
                ?>
                </h1>
            </td>

            <td>
                <h1>
                <?php
                $a = 5;
                do {
                    $b = 1;
                    do {
                        echo $b;
                        $b++;
                    } while ($b <= $a);
                    echo "<br>";
                    $a--;
                } while ($a >= 1);
                ?>
                </h1>
            </td>

            <td>
                <h1>
                <?php
                $a = 1;
                do {
                    $s = $a;
                    do {
                        echo "&nbsp&nbsp";
                        $s++;
                    } while ($s <= 5);
                    $d = 65;
                    do {
                        echo "  ".chr($d);
                        $d++;
                        $n++;
                    } while ($d <= $a + 64);
                    echo "<br>";
                    $a++;
                } while ($a <= 5);
                ?>
                </h1>
            </td>
        </tr>

        <tr>
            <td>
                <h1>
                <?php
                $a = 1;
                do {
                    $s = $a;
                    do {
                        echo "&nbsp&nbsp";
                        $s++;
                    } while ($s <= 5);
                    $d = 1;
                    do {
                        echo "<div></div>";
                        $d++;
                        $n++;
                    } while ($d <= $a);
                    echo "<br>";
                    $a++;
                } while ($a <= 5);
                ?>
                </h1>
            </td>

            <td>
                <h1>
                <?php
                $a = 5;
                do {
                    $s = 5;
                    do {
                        echo $a;
                        $s--;
                    } while ($s >= $a);
                    echo "<br>";
                    $a--;
                } while ($a >= 1);
                ?>
                </h1>
            </td>

            <td>
                <h1>
                <?php
                $a = 1;
                do {
                    $b = 1;
                    do {
                        echo $b;
                        $b++;
                    } while ($b <= $a);
                    echo "<br>";
                    $a++;
                } while ($a <= 5);

                $a = 4;
                do {
                    $b = 1;
                    do {
                        echo $b;
                        $b++;
                    } while ($b <= $a);
                    echo "<br>";
                    $a--;
                } while ($a >= 1);
                ?>
                </h1>
            </td>

            <td>
                <h1>
                <?php
                $a = 1;
                do {
                    $s = $a;
                    do {
                        echo "&nbsp&nbsp";
                        $s++;
                    } while ($s <= 5);
                    $d = 1;
                    do {
                        echo "<div></div>";
                        $d++;
                        $n++;
                    } while ($d <= $a);
                    echo "<br>";
                    $a++;
                } while ($a <= 5);

                $a = 5;
                do {
                    $s = $a;
                    do {
                        echo "&nbsp&nbsp";
                        $s++;
                    } while ($s <= 5);
                    $d = 1;
                    do {
                        echo "<div></div>";
                        $d++;
                        $n++;
                    } while ($d <= $a);
                    echo "<br>";
                    $a--;
                } while ($a >= 1);
                ?>
                </h1>
            </td>

            <td>
                <h1>
                <?php
                $a = 5;
                do {
                    $b = 1;
                    do {
                        echo "<div></div>";
                        $b++;
                    } while ($b <= $a);
                    echo "<br>";
                    $a--;
                } while ($a >= 1);

                $a = 1;
                do {
                    $b = 1;
                    do {
                        echo "<div></div> ";
                        $b++;
                    } while ($b <= $a);
                    echo "<br>";
                    $a++;
                } while ($a <= 5);
                ?>
                </h1>
            </td>
        </tr>
    </table>
</body>
</html>
