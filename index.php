<?php
/*Mostrar la tabla de multiplicar del 3, utilizando un while (Hasta el numero 20).
Se debe mostrar al similar a lo siguiente.
3 * 1 = 3
3 * 2 = 6
3 * 3 = 9
...................*/

echo 'Tabla de Multiplicar del 3: ';

echo '<hr>';

$i = 0;

while ($i < 21) {
    $res = 3 * $i;
    echo '3 * ' . $i . ' = ' . $res;
    echo '<hr>';
    $i++;
}
