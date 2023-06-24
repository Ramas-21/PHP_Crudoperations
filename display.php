<?php
include 'connect.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>crud operations</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <button class="btn bg-dark my-5"><a href="user.php" class="text-light text-decoration-none">Add user</a></button>
    <table class="table">
      <thead>
        <tr class="table-dark">
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Password</th>
          <th scope="col">operations</th>
        </tr>
      </thead>
      <tbody>


        <?php
        $sql = "select * from `crud`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          /*
        $row=mysqli_fetch_assoc($result);
        echo $row['name'];
        $row=mysqli_fetch_assoc($result);
        echo $row['name'];
        */
          // lets say we have a thousands of records we use the while loop to simplify the work instead of reapiting the code above a thousand times
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['password'];

            echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $mobile . '</td>
            <td>' . $password . '</td>
            <td>
            <button class="btn bg-dark"><a href="update.php? updateid=' . $id . '" class="text-light text-decoration-none">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php? deleteid=' . $id . '" class="text-light text-decoration-none">Delete</a></button>
            </td>
          </tr>';
          }
        }
         
        ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>