<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectronX Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <div class="mb-4 text-center" id="name" style="font-size:2rem; font-weight:bold;">
            ELECTRON<span style="color: orange;">X</span>
        </div>
        <h2 class="card-title text-center mb-4">Dashboard</h2>
        <table class="table table-bordered table-hover border shadow-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
               <?php
                  require_once 'connect.php';

                  $users = $conn->query("SELECT * FROM users");
                  if ($users && $users->num_rows > 0) {
                      while ($row = $users->fetch_assoc()) {
                          echo "<tr>
                          <th scope='row'>{$row['ID']}</th>
                          <td>{$row['name']}</td>
                          <td>{$row['email']}</td>
                          <td>{$row['password']}</td>
                          <td>
                              <button type='button' class='btn btn-success btn-sm'>Edit</button>
                              <button type='button' class='btn btn-danger btn-sm'>Delete</button>
                          </td>
                          </tr>";
                      }
                  } else {
                      echo "<tr><td colspan='5' class='text-center'>No users found.</td></tr>";
                  }
               ?>
            </tbody>
        </table>
    </div>
</body>
</html>