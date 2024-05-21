<?php
// if user accesses page with access method POST:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // sanitise the input data with htmlspecialchars()
    // grab the data from the form and assign it to variables
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // if a field has been left empty, do not submit, return to empty form
    if (empty($name) || empty($email) || empty($subject) || empty($message) ) {
        exit("Submission failed. Please fill in the required (*) fields.");
    }

    // when form is submitted, return the user to the form page
    header("Location: ../contact.php");
} else {
    // if the user has accessed the page by any other means, return them to landing page
    header("Location: ../index.html");
}