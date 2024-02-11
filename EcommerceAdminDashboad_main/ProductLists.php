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
  <link rel="stylesheet" href="css/product_lists.css">
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
                  <h2>Product Lists</h2>
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
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
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
              <a href="ProductManagement.php">
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
              <th scope="col">IMG</th>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Brand</th>
              <th scope="col">Stock</th>
              <th scope="col">Price.</th>
              <th scope="col">Category</th>
              <th scope="col">Description</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Include database connection
            include('con_db.php');

            // Fetch data from database
            $query = "SELECT * FROM prod_tb";
            $result = mysqli_query($conn, $query);

            // Check if there are any rows returned
            if (mysqli_num_rows($result) > 0) {
              // Loop through each row
              while ($row = mysqli_fetch_assoc($result)) {
                // Output data into table rows
                echo "<tr>";
                // Display image if IMG column is not empty
                if (!empty($row['IMG'])) {
                  echo "<td><img src='" . $row['IMG'] . "' alt='Product Image' style='max-width: 100px; max-height: 100px;'></td>";
                } else {
                  echo "<td>No Image</td>";
                }
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['NAME'] . "</td>";
                echo "<td>" . $row['BRAND'] . "</td>";
                echo "<td>" . $row['STOCK'] . "</td>";
                echo "<td>" . $row['PRICE'] . "</td>";
                echo "<td>" . $row['CATEGORY'] . "</td>";
                echo "<td>" . $row['DESCR'] . "</td>";
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