<?php
session_start(); // Start session to access session variables

$host = "localhost";
$user = "root";
$pass = "";
$db = "login";
$con = new mysqli($host, $user, $pass, $db);
if ($con->connect_error) {
    echo "Failed to connect DB" . $con->connect_error;
}

$email = $_SESSION['email']; // Get email from session variable

$data = "SELECT id, className, probability
         FROM disease
         WHERE probability > 0.35
         ORDER BY probability DESC";

$result = mysqli_query($con, $data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RESULTS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         body {
            background-color: #f8f9fa;
            background: rgb(37, 149, 184);
        }
        
        .card {
            border: none;
        }
        
        .card-header {
            background-color: #343a40;
            color: #fff;
            border-bottom: none;
        }
        
        .card-body {
            padding: 0;
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table th,
        .table td {
            border: 1px solid #dee2e6; /* Add border to cells */
            padding: .75rem;
        }
        
        .table-dark th,
        .table-dark td,
        .table-dark thead th {
            border-color: #343a40;
            background-color: #343a40;
            color: #fff;
        }
        
        .table-dark {
            background-color: #343a40;
            color: #fff;
        }

        /* Add hover effect to rows */
        .table tbody tr:hover {
            background-color: rgba(0,0,0,.075);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-6 text-center">RESULTS</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-dark table-bordered text-center mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Class Name</th>
                                        <th>Probability</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['className'] ?></td>
                                            <td><?php echo $row['probability'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
