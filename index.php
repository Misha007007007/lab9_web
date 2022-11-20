<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Andreitsev 211-361 lr9</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="/img/mospolytech-logo-white.png" alt="mospolytech-logo">
        </div>
        <div class="title">
            <h1>Лабораторная работа №9</h1>
            <h2>Андрейцев Михаил</h2>
            <h2>211-361</h2>
        </div>
    </header>
    <main>
        <?php
            $num = 0;
            $encounting = 10000;
            $step = 2;
            $type = "A";
            $result;
            $max = PHP_INT_MIN;
            $min = PHP_INT_MAX;
            $sum = 0;
            $average;

            function f1 ($num) {
                return (10 + $num) / $num;}
            function f2 ($num) {
                return ($num / 7) * ($num - 2);}
            function f3 ($num) {
                return $num * 8 + 2;}

            for ($i = 0; $i < $encounting; $i++, $num += $step) {
                if ($num==0){
                    $result = "error";
                }else {
                    if ($num<=10) {$result = f1 ($num);}
                    else if ($num > 10 && $num <= 20) {$result = f2 ($num);}
                    else if ($num > 20) {$result = f3 ($num);}
                }

                if ($type == 'A') {
                    echo 'f(' . $num . ') = ' . $result;
                    if( $i < $encounting-1 ) echo '<br>';
                }

                if ($result == "error"){
                    $result = 0;
                }
                else {
                    if ($result > $max) $max = $result;
                    if ($result < $min) $min = $result;
                    $sum += $result;
                    $average = $sum / $encounting;
                }
            }
        ?>
    </main>
    <footer>
        <div>Московский политехнический университет</div>
        <div><?php echo 'Максимум: ' . $max ?></div>
        <div><?php echo 'Минимум: ' . $min ?></div>
        <div><?php echo 'Среднее значение: ' . $average ?></div>
    </footer>
</body>

</html>