<div class="titulo"> Desáfio Precedência</div>

<?php

echo '<p>1. Qual o valor será impresso</p>';
echo '2 + 5 * 3 + (12 / 6) / (-8 + 2 **3) ? <br>';
/*
 * 2 + 5 * 3 + (2) / (-8 + 8)
 * 2 + 5 * 3 + 2 / 0
 * 2 + 5 * 3 + 0
 * 2 + 15 + 0
 * 17
 * */
echo 'R: ', 2 + 5 * 3 + (12 / 6) / (-8 + 2 **3);

echo '<p>2. Qual expessão imprime o valor 100?</p><br>';
echo 'a) (1 + 2) * 20 - 15<br>' ; // 45
echo 'b) 4 * 5 ** 2<br>'; // 100
echo 'c) 2 ** 3 ** 4 / 1e25<br>';
echo 'd) 3 + (3 * 8) / 2 - 3<br>';

echo 'R: B <br>';

echo 'a) (1 + 2) * 20 - 15<br> R:', (1 + 2) * 20 - 15; // 45
echo '<br>b) 4 * 5 ** 2<br> R:', 4 * 5 ** 2; // 100
echo '<br>c) 2 ** 3 ** 4 / 1e25<br> R:', 2 ** 3 ** 4 / 1e25;
echo '<br>d) 3 + (3 * 8) / 2 - 3<br> R:', 3 + (3 * 8) / 2 - 3;

?>
