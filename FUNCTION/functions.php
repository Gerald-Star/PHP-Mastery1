
<?php
function printHello() {
    echo "Hello World";
};

?>

// in function you can pass parameters
// bool, int, float, string, array, object are callable

<?php
function calculateTax($price, $tax) {
    $total = $price + ($price * $tax);
    return $total;
}

echo calculateTax(200, 2);

?>