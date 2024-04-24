<?submit_contact_form.php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $location = $_POST["location"];
    $contactMethod = $_POST["contact-method"];

    // Here you can perform actions with the form data,
    // such as sending an email or storing it in a database.

    // For example, sending an email
    $to = "RenbelSmoothies@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage: $message\nLocation: $location\nPreferred Contact Method: $contactMethod";
    $headers = "From: $email";

    // Send email
    mail($to, $subject, $body, $headers);

    // Redirect back to the contact form or a thank you page
    header("Location: contact_thank_you.html");
    exit;
}
?>
