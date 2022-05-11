<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prac 16 - 2</title>
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
    <form class="card p-3" style="width: 20% !important;" method="post" action="./prac_16_2.php">
        <h4 style="margin: 10px;" class="mx-auto">Update or Delete</h4>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Enter Employee Name</label>
            <input type="text" class="form-control" name="e_name" id="exampleFormControlInput1" placeholder="employee name...">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Update Post</label>
            <input type="text" class="form-control" name="e_post" id="exampleFormControlInput1" placeholder="updated post..">
        </div>

        <input class="btn btn-warning my-2" name="btn_u" type="submit" value="Update Employee">
        <input class="btn btn-danger my-2" name="btn_d" type="submit" value="Delete Employee">

        <?php
        if (isset($_POST['btn_u'])) {

            $e_name = $_POST['e_name'];
            $e_post = $_POST['e_post'];

            $con = mysqli_connect("localhost", "root", "", "clgdb");

            $sql = "UPDATE employee_info SET post = '$e_post' WHERE employee_name = '$e_name'";

            if ($con) {
                $res = mysqli_query($con, $sql);

                if ($res) {
                    echo "Employee Updated Successfully";
                } else {
                    "Update Failed! = ";
                    mysqli_error($con);
                }
            } else {
                "Connection Failed!";
            }
        }

        if (isset($_POST['btn_d'])) {

            $e_name = $_POST['e_name'];
            $e_post = $_POST['e_post'];

            $con = mysqli_connect("localhost", "root", "", "clgdb");

            $sql = "DELETE FROM employee_info WHERE employee_name = '$e_name' AND post = '$e_post'";

            if ($con) {
                $res = mysqli_query($con, $sql);

                if ($res) {
                    echo "Employee Deleted!";
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