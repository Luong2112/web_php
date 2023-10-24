<!DOCTYPE html>
<html>
    <head>
        <title>Buoi_1</title>
    </head>
    <body>
        <?php 
            $arr = ["1", "2", "3", "4", "5", "6", "7", "8", "9"];
            echo "Mảng: ";
            foreach ($arr as $index){
                echo $index."   ";
            }
            echo "<br>Số hoàn hảo là : ";

            for ($i=0; $i< count($arr); $i++)
            {
                $tong = 0;
                for($j = 1; $j<$arr[$i] ; $j++)
                {
                    if ($arr[$i] % $j == 0){
                        $tong += $j;
                    }
                }
                if ($tong == $arr[$i])
                {
                    echo $arr[$i]."   " ;
                }
            }

            echo "<br>Số nguyên tố là : ";
            for ($i=0; $i< count($arr); $i++)
            {
                $dem = 0;
                for($j = 1; $j<$arr[$i] ; $j++)
                {
                    if ($arr[$i] % $j == 0){
                        $dem += $j;
                    }
                }
                if ($dem == 1)
                {
                    echo $arr[$i]."   " ;
                }
            }

            echo "<br>Sắp xếp giảm dần : ";
            for ($i=0; $i< count($arr); $i++)
            {
                $dem = 0;
                for($j = $i+1; $j<count($arr) ; $j++)
                {
                    if ($arr[$i] < $arr[$j]){
                        $tg = $arr[$i];
                        $arr[$i] = $arr[$j];
                        $arr[$j] = $tg;
                    }
                }
                echo $arr[$i]."   " ;
            }
        ?>
    </body>
</html>