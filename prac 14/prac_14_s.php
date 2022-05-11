<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prac 14</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f5f5;
            display: grid;
            place-items: center;
        }
    </style>
</head>

<body>
    <form class="card p-3" style="width: 25% !important;" method="post" action="./prac_14_s.php">
        <p class="lead mx-auto">Send Email</p>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">To</label>
            <input type="email" class="form-control" name="to" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Subject</label>
            <input type="text" class="form-control" name="sub" id="exampleFormControlInput1" placeholder="Subject...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Description</label>
            <input type="text" class="form-control" name="desc" id="exampleFormControlInput1" placeholder="Description...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">From</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="From: deshmukhsaloni01@gmail.com" disabled>
        </div>

        <input class="btn btn-primary mt-2" type="submit" value="Send mail">

        <?php
        if (isset($_POST['to']) && $_POST['sub']) {
            $to = $_POST['to'];
            $sub = $_POST['sub'];
            $desc = $_POST['desc'];
            $from = "From: deshmukhsaloni01@gmail.com";

            if (mail($to, $sub, $desc, $from)) {
                echo "Mail sent successfully!";
            } else {
                echo "Failed to send mail!";
            }
        }
        ?>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/boot
strap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sE
NBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>