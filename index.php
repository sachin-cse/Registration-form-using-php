
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/icon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="alertify.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/dist/css/alertify.css" /> -->
    <script src = "register.js"></script>
    <title>Registration-form</title>
</head>
<body>


   <h2 class="center">Registration-form</h2>
   <div class="container" style="background:#f5f5f5;">
    <form class="form-bg" action="register.php" method="post" id = "registration-form" name="myform" onsubmit="return validateform()">

<!-- first name field -->
        <div class="row">
            <div class="col-25">
                <label for = "fname">First Name:</label>
            </div>
            <div class="col-75">
                <input type="text" id="fname" name="fname" placeholder="Your first name..">
            </div>
        </div>

<!-- last name field -->
        <div class="row">
            <div class="col-25">
                <label for = "lname">Last Name:</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="lname" placeholder="Your last name..">
            </div>
        </div>

<!-- date of birth field -->
        <div class="row">
            <div class="col-25">
                <label for = "dob">Date of Birth:</label>
            </div>
            <div class="col-75">
                <input type="date" id="dob" name="dob" min="1900-01-01" max="2022-12-31" placeholder="Your date of birth..">
            </div>
        </div>

<!-- email field -->
        <div class="row">
            <div class="col-25">
                <label for = "email">Email:</label>
            </div>
            <div class="col-75">
                <input type="email" id="email" name="email" placeholder="Your email..">
            </div>
        </div>

<!-- coutry field -->
        <div class="row">
            <div class="col-25">
              <label for="country">Country:</label>
            </div>
            <div class="col-75">
              <select id="country" name="country">
                <option value="">Select a country</option>
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                <option value="india">India</option>
                <option value="bhutan">Bhutan</option>
                <option value="Africa">Africa</option>
                <option value="newzealand">Newzealand</option>
                <option value="myanmar">Myanmar</option>
                <option value="srilanka">Sri Lanka</option>
              </select>
            </div>
          </div>

<!-- message field -->
<div class="row">
    <div class="col-25">
      <label for="subject">Message:</label>
    </div>
    <div class="col-75">
      <textarea id="msg" name="msg" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>

  <!-- submit form -->
  <div class="row">
    <input type="submit" value="Register">
  </div>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <p id="message"></p>
    </div>
  </div>
  
        </form>
   </div>
</body>
</html>