<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Registration System</h1>
        
        <!-- Registration Form -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Register</h5>
                        <?php
                            session_start();

                            $servername = "localhost";
                            $username = "root";
                            $password = "Nithinraj";
                            $database = "registration_nr";

                            $conn = null;

                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $dob = $_POST['dob'];

                                $conn = new mysqli($servername, $username, $password, $database);

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $query = "INSERT INTO Registration (Name, Email, DateOfBirth) VALUES (?, ?, ?)";
                                $stmt = $conn->prepare($query);
                                $stmt->bind_param("sss", $name, $email, $dob);
                                $stmt->execute();

                                $stmt->close();
                                $conn->close();

                                $_SESSION['registration_success'] = true;

                                header("Location: " . $_SERVER['PHP_SELF']);
                                exit();
                            }

                            if (isset($_POST['delete'])) {
                                $conn = new mysqli($servername, $username, $password, $database);

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $registration_id = $_POST['delete'];

                                $query = "DELETE FROM Registration WHERE ID = ?";
                                $stmt = $conn->prepare($query);
                                $stmt->bind_param("i", $registration_id);
                                $stmt->execute();

                                $stmt->close();
                                $conn->close();

                                $_SESSION['delete_success'] = true;

                                header("Location: " . $_SERVER['PHP_SELF']);
                                exit();
                            }
                        ?>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="register">Register</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Registrations</h5>
                        <?php
                            if ($conn = new mysqli($servername, $username, $password, $database)) {
                                $query = "SELECT * FROM Registration";
                                $result = $conn->query($query);

                                if ($result) {
                                    echo '<ul class="list-group">';
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<li class="list-group-item">Name: ' . $row['Name'] . '<br>Email: ' . $row['Email'] . '<br>Date of Birth: ' . $row['DateOfBirth'] . '
                                              <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" style="display: inline;">
                                                  <input type="hidden" name="delete" value="' . $row['ID'] . '">
                                                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                              </form>
                                              </li>';
                                    }
                                    echo '</ul>';
                                } else {
                                    echo "No registrations found.";
                                }

                                $conn->close();
                            } else {
                                echo "Connection failed.";
                            }

                            if (isset($_SESSION['registration_success']) && $_SESSION['registration_success']) {
                                echo '<div class="alert alert-success mt-3" role="alert">
                                      Registration successful!
                                      </div>';
                                unset($_SESSION['registration_success']);
                            }

                            if (isset($_SESSION['delete_success']) && $_SESSION['delete_success']) {
                                echo '<div class="alert alert-success mt-3" role="alert">
                                      Deletion successful!
                                      </div>';
                                unset($_SESSION['delete_success']);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
