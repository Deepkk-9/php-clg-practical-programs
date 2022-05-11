<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prac 16 - 3</title>
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
    <form class="card p-3" style="width: 20% !important;" method="post" action="./prac_16_3.php">
        <h4 style="margin: 10px;" class="mx-auto">Update or Delete (Admin)</h4>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Enter User Id</label>
            <input type="number" name="uid" class="form-control" id="exampleFormControlInput1" placeholder="user ID...">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Update Username</label>
            <input type="text" name="uname" class="form-control" id="exampleFormControlInput1" placeholder="updated username..">
        </div>

        <input class="btn btn-warning my-2" name="btn_u" type="submit" value="Update User">
        <input class="btn btn-danger my-2" name="btn_d" type="submit" value="Delete User">

        <?php
        if (isset($_POST['btn_u'])) {

            $uid = $_POST['uid'];
            $uname = $_POST['uname'];

            $con = mysqli_connect("localhost", "root", "", "clgdb");

            $sql = "UPDATE signup SET username = '$uname' WHERE id = '$uid'";

            if ($con) {
                $res = mysqli_query($con, $sql);

                if (mysqli_affected_rows($con) >= 1) {
                    echo "User Updated Successfully";
                } elseif (mysqli_affected_rows($con) <> 1) {
                    echo "No such user!";
                } else {
                    "Update Failed! = ";
                    mysqli_error($con);
                }
            } else {
                "Connection Failed!";
            }
        }

        if (isset($_POST['btn_d'])) {

            $uid = $_POST['uid'];
            $uname = $_POST['uname'];

            $con = mysqli_connect("localhost", "root", "", "clgdb");

            $sql = "DELETE FROM signup WHERE id = '$uid' AND username = '$uname'";

            if ($con) {
                $res = mysqli_query($con, $sql);

                if (mysqli_affected_rows($con) >= 1) {
                    echo "User Deleted!";
                } elseif (mysqli_affected_rows($con) <> 1) {
                    echo "No Such User";
                } else {
                    "Deletion Failed! = ";
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