<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="alertify.css">
    <title>Form Submitted</title>
</head>
<body>
    <?php include "connection.php"; ?>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="message"></p>
        </div>
    </div>

    <script>
        function showErrorMessage(message, redirect) {
            var modal = document.getElementById("myModal");
            var messageElement = document.getElementById("message");
            messageElement.innerHTML = message;
            modal.style.display = "block";
            var close = document.getElementsByClassName("close")[0];
            close.onclick = function() {
                modal.style.display = "none";
                if (redirect) {
            window.location.href = redirect;
        }
            }
        }
    </script>

    <?php
        // Get form data
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $msg = $_POST['msg'];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $sql = "SELECT * FROM user_data WHERE email='$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $message = "Email already exists, please choose a different one.";
                $redirect = "index.php";
                echo '<script>showErrorMessage("'. $message .'", "'. $redirect .'");</script>';
            } else {
                // Email does not exist in the database, insert new data
                $sql = "INSERT INTO user_data (fname, lname, dob, email, country, message) VALUES ('$fname', '$lname', '$dob', '$email', '$country', '$msg')";
            
                if (!(mysqli_query($conn, $sql))) {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                } else {
                    $message = "Your Form Has been submit successfully.";
                    $redirect = "index.php";
                    echo '<script>showErrorMessage("'. $message .'", "'. $redirect .'");</script>';
                }
            }
            
        }
        mysqli_close($conn);
    ?>
</body>
</html>
