<?php
$to = "example@gmail.com";
$subject = "New message from Web X Contact Form";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!empty($_POST["website"])) {
        die("Spam detected. Request blocked.");
    }

    $email   = trim(htmlspecialchars($_POST["email"] ?? ""));
    $message = trim(htmlspecialchars($_POST["message"] ?? ""));

    if (empty($email) || empty($message)) {
        die("Please fill in all required fields.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    $body  = "You received a new message from Web X:\n\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n\n";
    $body .= "Sent on: " . date("Y-m-d H:i:s");

    $safe_email = str_replace(["\r", "\n", "%0a", "%0d"], '', $email);
    $headers  = "From: $safe_email\r\n";
    $headers .= "Reply-To: $safe_email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<div style='font-family: Arial; text-align:center; padding:50px;'>
                <h2>✅ Message Sent Successfully!</h2>
                <p>Thank you for reaching out. We'll get back to you soon.</p>
              </div>";
    } else {
        echo "<div style='font-family: Arial; text-align:center; padding:50px; color:red;'>
                <h2>❌ Message Failed!</h2>
                <p>Something went wrong. Please try again later.</p>
              </div>";
    }

} else {
    http_response_code(403);
    echo "Access forbidden.";
}
?>