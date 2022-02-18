<?php
function currency($number)
{
    return 'Rp ' . number_format($number, 0, ',', '.');
}
