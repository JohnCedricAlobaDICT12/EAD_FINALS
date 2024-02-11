<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Order Management</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Optional CSS -->
  <link rel="stylesheet" href="css/layout/style.css">
  <link rel="stylesheet" href="css/layout/sidebar.css">
  <link rel="stylesheet" href="css/layout/navbar.css">
  <link rel="stylesheet" href="css/order_management.css">
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <a href="ProductManagement.php">
          <div>
            <img id="logo" src="images/logo.png">
          </div>
        </a>
      </div>

      <ul class="list-unstyled components">
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
                  <h2>Order Management</h2>
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
      <div class="add-view-box col-12"> <!--ADD & VIEW FORMS> -->
        <form class="needs-validation" method="POST">
          <!-- Title -->
          <div class="form-row">
            <div class="col-md-5">
              <label>
                <h5>New Orders</h5>
              </label>
            </div>
          </div>
          <!-- Forms -->
          <!-- Labels -->
          <div class="form-row">
            <div class="col-md-3">
              <h6>Orders Information</h6>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3">
              <h6>Location</h6>
            </div>
            <div class="col-md-3">
              <h6>Tracking & Status</h6>
            </div>
          </div>

          <!-- Inputs -->
          <div class="form-row">
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control" placeholder="Product ID" name="ProdID" required>
            </div>
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control" placeholder="Order Quantity" name="OrdQuant" required>
            </div>
            <div class="col-md-3 mb-3">
              <select class="form-control" id="provinceSelect" name="province" required>
                <option value="" disabled selected>Select Province</option>
                <option value="Laguna">Laguna</option>
                <!-- JavaScript will populate the options here -->
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <select class="form-control my-1 mr-sm-2" name="Stat" required>
                <option value="">Order Status</option>
                <option value="1">Success</option>
                <option value="2">Pending</option>
                <option value="3">Cancelled</option>
                <option value="3">Returned</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control" placeholder="Customer First Name" name="CustFN" required>
            </div>
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control" placeholder="Customer Last Name" name="CustLN" required>
            </div>
            <div class="col-md-3 mb-3">
              <select class="form-control" id="citySelect" name="city" required>
                <option value="" disabled selected>Select City</option>
                <option value="Binan">Binan</option>
                <!-- JavaScript will populate the options here -->
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <select class="form-control my-1 mr-sm-2" name="track">
                <option value="">Order Tracking</option>
                <option value="1">Warehouse</option>
                <option value="2">Logistic</option>
                <option value="3">Out of Delivery</option>
                <option value="3">Dilevered</option>
              </select>
            </div>
          </div>

          <div class="form-row d-flex align-items-center">
            <div class="col-md-3 mb-2">
              <input type="text" class="form-control" placeholder="Contact No." name="cont" required>
            </div>
            <div class="col-md-3 mb-2">
              <select class="form-control my-1 mr-sm-2" name="pay">
                <option value="">Payment Method</option>
                <option value="1">Cash on Delivery</option>
                <option value="2">Credit Card</option>
                <option value="2">GCash</option>
                <option value="2">Maya</option>
              </select>
            </div>
            <div class="col-md-3 mb-2">
              <input type="text" class="form-control" placeholder="Barangay" name="brgy" required>
            </div>
            <div class="col-md-3 mb-2">
              <select class="form-control my-1 mr-sm-2" name="Pstat">
                <option value="">Payment Status</option>
                <option value="1">Not Paid</option>
                <option value="2">Paid</option>
              </select>
            </div>
          </div>

          <div class="form-row d-flex align-items-center">
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="col-md-3 mb-3"></div>
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control" placeholder="Please enter your subdivision, house number, building and street name" name="ADD" required>
            </div>
            <div class="col-md-3 mb-3 d-flex justify-content-between">
              <button type="submit" class="btn btn-success m-2" name="add-btn" id="add-btn">Add Order</button>
              <a href="OrderLists.php">
                <button type="button" class="btn btn-dark m-2" name="add-btn" id="add-btn">View Order</button>
              </a>
            </div>
          </div>
        </form>
      </div>

      <div class="edit-box col-12"><!--EDIT FORMS> -->
        <form class="needs-validation" method="LOST" novalidate>
          <!-- Title -->
          <div class="form-row">
            <div class="form-title col-md-5">
              <label>
                <h5>Edit Orders</h5>
              </label>
            </div>
          </div>
          <!-- Forms -->
          <div class="form-row">
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control" placeholder="Product ID" name="edit" required>
            </div>

            <div class="col-md-3 mb-3">
              <select class="form-control my-1 mr-sm-2" name="stat1" required>
                <option value="">Order Status</option>
                <option value="Success">Success</option>
                <option value="Pending">Pending</option>
                <option value="Cancelled">Cancelled</option>
                <option value="Returned">Returned</option>
              </select>
            </div>

            <div class="col-md-3 mb-3">
              <select class="form-control my-1 mr-sm-2" name="tract1" required>
                <option value="">Order Tracking</option>
                <option value="Warehouse">Warehouse</option>
                <option value="Logistic">Logistic</option>
                <option value="Out of Delivery">Out of Delivery</option>
                <option value="Dilevered">Dilevered</option>
              </select>
            </div>

            <div class="col-md-3 mb-3">
              <select class="form-control my-1 mr-sm-2" name="pstat1" required>
                <option value="">Payment Status</option>
                <option value="Not Paid">Not Paid</option>
                <option value="Paid">Paid</option>
              </select>

            </div>
          </div>
          <div class="form-row">
            <div class="col-md-2 mb-3 d-flex justify-content-start">
              <button type="submit" class="btn btn-primary " name="edit-btn" id="edit-btn">Edit Order</button>
            </div>
            <div class="col-3 d-flex">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Continue to edit order.
                </label>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div class="delete-box col-12"><!--DELETE FORMS> -->
        <form class="needs-validation" method="MOST" novalidate>
          <!-- Title -->
          <div class="form-row">
            <div class="form-title col-md-5">
              <label>
                <!-- <img src="images/newProduct-icon.png"> -->
                <h5>Delete Orders</h5>
              </label>
            </div>
          </div>
          <!-- Form -->
          <div class="form-row d-flex align-items-center">
            <div class="col-3">
              <input type="text" class="form-control" placeholder="Product ID" name="ProdID11" required>
            </div>
            <div class="col-3 d-flex justify-content-end">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Continue to delete order.
                </label>
              </div>
            </div>
            <div class="col-3 d-flex justify-content-end">
              <button type="submit" class="btn btn-danger m-2" name="dell-btn" id="dell-btn">Delete Order</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php include('Ordman.php'); ?>
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