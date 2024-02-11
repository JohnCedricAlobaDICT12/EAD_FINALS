<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Product List</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Optional CSS -->
  <link rel="stylesheet" href="css/layout/style.css">
  <link rel="stylesheet" href="css/layout/sidebar.css">
  <link rel="stylesheet" href="css/layout/navbar.css">
  <link rel="stylesheet" href="css/order_lists.css">
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

</head>

<body>
  <div class="wrapper">

    <!-- Sidebar -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <!-- <a href="DashboardSales.php"> -->
        <a href="ProductManagement.php">
          <div>
            <img id="logo" src="images/logo.png">
          </div>
        </a>
      </div>

      <ul class="list-unstyled components">
        <!-- <li>
          <a href="DashboardSales.php"><img id="sidebar-icon" src="images/dashboard_icon.png"></a>
        </li> -->
        <li>
          <a href="ProductManagement.php"><img id="sidebar-icon" src="images/product_icon.png"></a>
        </li>
        <li>
          <a href="OrderManagement.php"><img id="sidebar-icon" src="images/orders_icon.png"></a>
        </li>
      </ul>
    </nav>

    <!-- Main -->
    <div id="content">
      
      <!-- Topbar -->
      <nav class="navbar navbar-default">
        <div class="navbar-wrapper container-fluid">
          <div class="col-12">
            <div class="row">
              <div class="col-6 justify-content-start">
                <div class="navbar-content-left">
                  <button type="button" id="sidebarCollapse" class="btn navbar-btn">
                    <img id="topbar-icon" src="images/hamburgerMenu-icon.png">
                  </button>
                  <h2>Order Lists</h2>
                </div>
              </div>

              <div class="col-6 d-flex justify-content-end">
                <div class="navbar-content-right">
                  <div class="account-image">
                    <a href="Login.php" data-toggle="modal" data-target="#logoutModal">
                      <img src="images/account_image.png">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <!-- Add a modal for logout confirmation -->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Are you sure you want to logout?
            </div>
            <div class="modal-footer">
              <div class="modal-footer">
                <a href="Login.php" class="btn btn-danger">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Content -->
      <!-- View -->
      <div class="view-box col-12 p-2">
        <form class="needs-validation" novalidate>
          <!-- Form -->        
          <div class="form-row d-flex justify-content-end align-items-center">
            <div class="col-3 d-flex justify-content-end">
              <a href="OrderManagement.php">
                <button type="button" class="btn btn-secondary m-2">Back</button>
              </a>
            </div>
          </div>
        </form>
      </div>
        <!-- Table -->
        <div class="table-box scrollbar col-12 p-3" id="style-3">
                <table class="table">
                    <thead>
                        <tr>
                         
                            <th scope="col">PrdctID</th>
                            <th scope="col">Qntty</th>
                            <th scope="col">FrstName</th>
                            <th scope="col">LstName</th>
                            <th scope="col">PhNo.</th>
                            <th scope="col">Email</th>
                            <th scope="col">PymntMthd</th>
                            <th scope="col">Province</th>
                            <th scope="col">City</th>
                            <th scope="col">Brgy.</th>
                            <th scope="col">Strt.</th>
                            <th scope="col">OrderStatus</th>
                            <th scope="col">Tracking</th>
                            <th scope="col">PymntStatus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Include database connection
                        include('con_db.php');

                        // Fetch data from database
                        $query = "SELECT * FROM order_tb";
                        $result = mysqli_query($conn, $query);

                        // Check if there are any rows returned
                        if (mysqli_num_rows($result) > 0) {
                            // Loop through each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Output data into table rows
                                echo "<tr>";
                                echo "<td>" . $row['ProdID'] . "</td>";
                                echo "<td>" . $row['OrdQuant'] . "</td>";
                                echo "<td>" . $row['CustFN'] . "</td>";
                                echo "<td>" . $row['CustLN'] . "</td>";
                                echo "<td>" . $row['CONTACT'] . "</td>";
                                echo "<td>" . $row['Payment'] . "</td>";
                                echo "<td>" . $row['Email'] . "</td>";
                                echo "<td>" . $row['Prov'] . "</td>";
                                echo "<td>" . $row['City'] . "</td>";
                                echo "<td>" . $row['BRGY'] . "</td>";
                                echo "<td>" . $row['Address'] . "</td>";
                                echo "<td>" . $row['Ordstat'] . "</td>";
                                echo "<td>" . $row['Ordtrac'] . "</td>";
                                echo "<td>" . $row['Paystat'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            // If no rows returned, display a message
                            echo "<tr><td colspan='15'>No data found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  <!-- Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
  <!-- Optional Javascripts -->
  <script src="/javascripts/sript.js"></script>
</body>
</html>