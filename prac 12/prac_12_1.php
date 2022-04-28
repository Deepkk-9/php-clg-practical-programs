<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Prac 12 - 1</title>
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
        padding: 10px;
    }

    .contf {
        width: 100%;
        height: 100%;
        display: grid;
        place-items: center;
    }
</style>

<body>
    <div class="container">
        <form action="./prac_12_1.php" method="POST" class="contf">
            <input type="number" class="form-control" id="exampleFormControlInput1" name="number" placeholder="Enter mobile number...">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if (isset($_POST['number'])) {

            $number = $_POST['number'];
            $pattern = '/\b[0-9]{10}\b/';

            if (preg_match($pattern, $number)) {
                echo "Verified number : $number";
            } else {
                echo "Incorrect number : $number";
            }
        }
        ?>
    </div>
</body>

</html>