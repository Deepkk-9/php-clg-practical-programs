<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Prac 13 - 2</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        width: 100vw;
        height: 100vh;
        display: grid;
        place-items: center;
    }

    .container {
        height: 30%;
        width: 30%;
        display: grid;
        place-items: center;
        box-shadow: 0 2px 5px 1px rgba(64, 60, 67, .16);
    }

    input {
        -moz-appearance: textfield !important;
        text-align: center;
        width: 50% !important;
    }
</style>


<body>
    <form class="container" method="POST" action="./prac_13_2.php">

        <h3 style="text-align: center;">Enter Username to Update your previous cookie</h3>
        <input type="text" name="val" class="form-control" id="exampleFormControlInput1" placeholder="Enter your username...">

        <button type="submit" class="btn btn-primary">Update Cookie</button>

        <?php
        if (isset($_POST['val'])) {
            $val = $_POST['val'];

            setcookie("name", $val);
            echo "Cookie set : " . $_COOKIE["name"];
        }
        ?>

    </form>
</body>

</html>