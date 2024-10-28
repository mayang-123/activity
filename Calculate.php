<?php
function calculateTotal($haircut, $manicure) {
    return $haircut + $manicure;
}

$haircutPrice = 15.00;
$manicurePrice = 20.00;
echo "Total for haircut and manicure: $" . calculateTotal($haircutPrice, $manicurePrice);
?>
