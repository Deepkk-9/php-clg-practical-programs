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
        <form action="./prac_4_4.php" class="inp" method="post">
            <div class="mb-3 inp">
                <label for="exampleFormControlInput1" class="form-label">Enter any string</label>
                <input type="number" class="form-control" name="str" id="exampleFormControlInput1" placeholder="Eg. 123">
            </div>
            <input type="submit" name="strLen" value="Check" class="btn btn-primary my-3">

        </form>
        <?php
        if (isset($_POST['strLen'])) {
            $getStr = $_POST['str'];
            $getStr1 = trim($getStr);

            $num1 = (int)$getStr1;
            $num = (int)$getStr1;
            $rev = 0;

            while ($num > 0) {
                $r = (int)$num % 10;
                $rev = $rev * 10 + $r;
                $num = (int)($num / 10);
            }

            if ($rev == $num1) {
                echo "$getStr1 is a Palindrome number";
            } else {
                echo "$getStr1 is not a Palindrome number";
            }
        }
        ?>
    </div>
</body>

</html>