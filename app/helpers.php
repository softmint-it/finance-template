<?php
if (!function_exists('formatLKR')) {
    function formatLKR($amount) {
        return 'Rs.  ' . number_format($amount, 2);
    }
}
if (!function_exists('formatPercentage')) {
    function formatPercentage($amount) {
        return number_format($amount, 2) . '%';
    }
}