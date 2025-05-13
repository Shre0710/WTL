<?php
class Payment {
    public function pay() {
        echo "Paying using cash.";
    }
}

class CreditCardPayment extends Payment {
    public function pay() {
        echo "Paying using Credit Card.<br>";
    }
}

class UpiPayment extends Payment {
    public function pay() {
        echo "Paying using UPI.<br>";
    }
}

function processPayment(Payment $paymentMethod) {
    $paymentMethod->pay();
}

$payment1 = new CreditCardPayment();
$payment2 = new UpiPayment();

processPayment($payment1); 
processPayment($payment2); 
?>
