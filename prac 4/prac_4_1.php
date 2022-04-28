<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Prac - 4</title>
</head>

<style>
    body {
        display: grid;
        place-items: center;
        height: 100vh;
        width: 100vw;
    }

    .container {
        width: 30%;
        box-shadow: 0 2px 5px 1px rgba(64, 60, 67, .16);
        padding: 20px;
        display: grid;
        place-items: center;
    }

    .inp {
        width: 100%;
    }

    form {
        display: grid;
        place-items: center;
    }
</style>

<body>
    <div class="container">
        <form action="./prac_4_1.php" class="inp" method="post">
            <div class="mb-3 inp">
                <label for="exampleFormControlInput1" class="form-label">Enter any string</label>
                <input type="text" class="form-control" name="str" id="exampleFormControlInput1" placeholder="Eg. Deep">
            </div>
            <input type="submit" name="strLen" value="Get Length" class="btn btn-primary my-3">

        </form>
        <?php
        if (isset($_POST['strLen'])) {
            $getStr = $_POST['str'];
            echo "The length of the string <b>$getStr</b> is: " . strlen($getStr);
        }
        ?>
    </div>
</body>

</html>