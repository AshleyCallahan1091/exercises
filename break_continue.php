<?php

for ($i = 1; $i <= 100; $i++) {
    echo $i . "\n";
    if ($i % 2 == 1) {
        continue;
    }
    echo "^ that is an even number.\n";
}


for ($i = 1; $i <= 100; $i++) {
    echo $i . "\n";
    if ($i == 10) {
        break;
    }
}