<?php
/*
 * ÉNONCÉ :
 * Créez une classe Calculator avec des méthodes statiques add, subtract, multiply, divide.
 * Utilisez ces méthodes pour effectuer des opérations sur deux nombres.
*/

class Calculator {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }

    public static function multiply($a, $b) {
        return $a * $b;
    }

    public static function divide($a, $b) {
        if ($b == 0) {
            return "Error: Division by zero";
        }
        return $a / $b;
    }
}

$num1 = 10;
$num2 = 5;

echo "Addition: " . Calculator::add($num1, $num2) . "\n";
echo "Subtraction: " . Calculator::subtract($num1, $num2) . "\n";
echo "Multiplication: " . Calculator::multiply($num1, $num2) . "\n";
echo "Division: " . Calculator::divide($num1, $num2) . "\n";