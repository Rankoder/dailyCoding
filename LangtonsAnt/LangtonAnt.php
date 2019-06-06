<?php

function ant($grid, $column, $row, $n, $dir = 0): array {
    $actualAntPosition = [
        'column'    => $column,
        'row'       => $row
    ];
    $actualColor = $grid[0][0];

    $grid[$column] = [$row, $actualColor];
    $grid[$column] = [$row, changeColor($actualColor)];

    return $grid;
}

function changeColor($actualColor) {
    if($actualColor === 1) {
        return 0;
    } elseif($actualColor === 0) {
        return 1;
    }
}