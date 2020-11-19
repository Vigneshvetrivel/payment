<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51Hmit6EjIKjKBJtfdmQawHW2JWCG1cr4C4sPnSEcljwIAFQb7uB490E3H1isPWZRoPO6T30tlYKYmTMEOWFJUAEX00I0dCOGuv";
$secretKey="sk_test_51Hmit6EjIKjKBJtfnSUmuUFpXdEeeEXD9ctTg1JC3K0ootFaUHi3tMQN4v2wYghlEwRDhvyVyGl0OJ6ankYzh8JE00H8sexdY3";

\Stripe|Stripe::setApiKey($secretKey);
?>
