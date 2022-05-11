<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prac 15 - 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f5f5;
            height: 100vh;
            display: grid;
            place-items: center;
        }
    </style>
</head>

<body>
    <form class="card p-3" style="width: 20% !important;" method="post" action="./prac_15_3.php">
        <h4 style="margin: 10px;" class="mx-auto">Sign Up</h4>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Enter Username</label>
            <input type="text" class="form-control" name="username" id="exampleFormControlInput1" placeholder="username..">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Enter Password</label>
            <input type="password" class="form-control" name="password" id="exampleFormControlInput1" placeholder="password..">
        </div>

        <input class="btn btn-primary mt-2" name="btn" type="submit" value="Sign Up">

        <?php
        if (isset($_POST['btn'])) {

            $un = $_POST['username'];
            $pass = $_POST['password'];

            $con = mysqli_connect("localhost", "root", "", "clgdb");

            $sql = "INSERT INTO signup (id, username, password) VALUES ('', '$un', '$pass')";

            if ($con) {
                $res = mysqli_query($con, $sql);

                if ($res) {
                    echo "Sign Up successful!";
                } else {
                    "Sign Up Failed! = ";
                    mysqli_error($con);
                }
            } else {
                "Connection Failed!";
            }
        }

        ?>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/boot
strap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sE
NBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>