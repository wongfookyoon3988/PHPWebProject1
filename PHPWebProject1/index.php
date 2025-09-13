<?php

// Print a heading
echo "<h1>Hello World From Azure PHP!</h1>";

// Print a paragraph
echo "<p>Task 3.3 completed ✅</p>";

// Exchange rate: 1 AUD = 4.7 RMB (example fixed rate)
$rate = 4.7;

// If the form is submitted
if (isset($_POST['username']) && isset($_POST['amount'])) {
    $name = htmlspecialchars($_POST['username']); // clean input
    $amountAUD = floatval($_POST['amount']);       // convert input to number
    $amountRMB = $amountAUD * $rate;               // calculate RMB

    echo "<h1>Hello, $name! 👋</h1>";
    echo "<p>You entered: $amountAUD AUD</p>";
    echo "<p>Converted: " . number_format($amountRMB, 2) . " RMB 💴</p>";
    echo "<p>Today is: " . date("Y-m-d") . "</p>";
    echo "<p><a href='index.php'>Convert Again</a></p>";
} else {
    // Show the form if not submitted yet
    echo "<h1>Currency Converter 💱</h1>";
    echo "<p>Convert AUD to RMB</p>";
    echo "<form method='post'>
            <label>Your Name: </label>
            <input type='text' name='username' required><br><br>
            <label>Amount in AUD: </label>
            <input type='number' step='0.01' name='amount' required><br><br>
            <button type='submit'>Convert</button>
          </form>";
}
?>
