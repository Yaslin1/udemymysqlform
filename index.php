<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <html>

    <body>

        <form action="index.php" method="post">
            E-mail: <input type="text" name="email"><br>
            Password: <input type="text" name="password"><br>
            <input type="submit">

        </form>

    </body>

    </html>

</body>

</html><?php
        $conn = mysqli_connect(
            "sdb-56.hosting.stackcp.net",
            "yaslin",
            "kchbpyl29w",
            "yaslin-353031337075"
        );

        $query = "SELECT 'password', 'Name' FROM 'users' WHERE email =" . $_POST["email"];

        // This is a conditional
        if ($result = mysqli_query($conn, $query)) {
            $row = mysqli_fetch_array($result);

            // put line below in a conditional
            if ($row["password"] == $_POST["password"]) {

                // do something is password matches
                echo ("You logged in!");
            } else {
                echo ("Try again!");
                // do something else if it don't

            };
        };

        ?>