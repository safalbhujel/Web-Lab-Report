<!DOCTYPE html>
<html>

<head>
    <title>PHP Form Validation</title>
    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

    <h2>Simple PHP Form</h2>

    <?php
    // initialize variables
    $name = $email = "";
    $nameErr = $emailErr = "";

    // check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // name validation
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = $_POST["name"];
        }

        // email validation
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = $_POST["email"];
        }
    }
    ?>

    <form method="post" action="">
        Name: <input type="text" name="name">
        <span class="error"><?php echo $nameErr; ?></span>
        <br><br>

        Email: <input type="text" name="email">
        <span class="error"><?php echo $emailErr; ?></span>
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // display data after successful submission
    if ($name != "" && $email != "") {
        echo "<h3>Form Data:</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email;
    }
    ?>

</body>

</html>