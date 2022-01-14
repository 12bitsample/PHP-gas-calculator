<?php

// $gasprices = array("1.89","1.99","2.09");

function letsGetGas(): array {
    return [
        "1.89" => "87 Octane",
        "1.99" => "89 Octane",
        "2.09" => "92 Octane",
    ];

}

function handlesubmission(): void {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        return;
    }
        $mpg = $_POST["mpg"];
        $commute = $_POST["commute"];
        $groceries = !empty($_POST["groceries"]) ? $_POST["groceries"] : 0;
        $fuelcost = $_POST["fuelgrade"];

    while (empty($mpg) || empty($commute) || empty($fuelcost)) {
        echo "<b>You must enter all required values</b>";
    return;
    }
    while (!is_numeric($mpg) || !is_numeric($commute) || !is_numeric($groceries)) {
        echo "<b>You must enter a numerical value</b>";
    
    return;
    }

    if ($groceries > 0) {
        $fuelcost = $fuelcost - (floor($groceries/100)*.1);
    }
    
    $budget = ($fuelcost/$mpg) * $commute;
    
    echo "$ " . number_format($budget,2);

}
?>
