<?php

$banks = (new App\Models\Bank)->getAll();

echo '<ul>';
foreach ($banks as $bank) {
    echo '<li>'. $bank['name'] .'</li>';
}
echo '</ul>';

