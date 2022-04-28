<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Prac 10 | Q.2</title>
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

    .form-check {
        width: 50% !important;
        display: flex;
        justify-content: center;
    }

    .lb {
        margin-left: 7px;
    }
</style>


<body>
    <form class="container" method="POST" action="./prac_10_2.php">

        <h3 style="text-align: center;">Select gender</h3>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="fb" id="flexRadioDefault1" value="Male">
            <label class="form-check-label lb" for="flexRadioDefault1">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="fb" id="flexRadioDefault2" value="Female">
            <label class="form-check-label lb" for="flexRadioDefault2">
                Female
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

        <?php

        if (isset($_POST['fb'])) {
            $g = $_POST['fb'];

            echo "Your selected gender is : $g";
        }
        ?>

    </form>
</body>

</html>