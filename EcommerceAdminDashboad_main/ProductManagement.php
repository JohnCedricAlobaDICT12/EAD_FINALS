<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Product Management</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Optional CSS -->
  <link rel="stylesheet" href="css/layout/style.css">
  <link rel="stylesheet" href="css/layout/sidebar.css">
  <link rel="stylesheet" href="css/layout/navbar.css">
  <link rel="stylesheet" href="css/product_management.css">
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
          <div><img id="logo" src="images/logo.png"></div>
        </a>
      </div>

      <ul class="list-unstyled components">
        <!-- <li title="Dashboard">
          <a href="DashboardSales.php"><img id="sidebar-icon" src="images/dashboard_icon.png"></a>
        </li> -->
        <li><a href="ProductManagement.php"><img id="sidebar-icon" src="images/product_icon.png"></a></li>
        <li><a href="OrderManagement.php"><img id="sidebar-icon" src="images/orders_icon.png"></a></li>
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
                  <h2>Product Management</h2>
                </div>
              </div>

              <div class="col-6 d-flex justify-content-end">
                <div class="navbar-content-right">
                  <!-- <ul class="navbar-list list-unstyled components">
                      <li><a href="ProductManagement.php">Management</a></li>
                      <div class="divider"></div>
                      <li><a href="ProductLists.php">Lists</a></li>
                    </ul> -->
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
              <a href="Login.php" class="btn btn-danger">Logout</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Content -->
      <div class="entry-box col-12"> <!--ADD/EDIT/VIEW FORMS> -->
        <form class="needs-validation" method="POST" novalidate>
          <!-- Title -->
          <div class="form-row">
            <div class="form-title col-md-5">
              <label>
                <h2>Create New Product</h2>
              </label>
            </div>
          </div>
          <!-- COL -->
          <div class="form-row">
            <div class="col-8">
              <!-- Forms 1 -->
              <div class="form-row">
                <div class="col-md-6 mb-2">
                  <label>Product ID</label>
                  <input type="text" class="form-control" placeholder="Product ID" name="ProdID" required>
                  <div class="invalid-feedback">Provide a product ID.</div>
                </div>

                <div class="col-md-6 mb-2">
                  <label>Product Brand</label>
                  <input type="text" class="form-control" id="product-brand" name="product-brand" placeholder="Product Brand" required>
                  <div class="invalid-feedback">Required product brand.</div>
                </div>
              </div>
              <!-- Forms 2 -->
              <div class="form-row">
                <div class="col-md-6 mb-2">
                  <label>Product Name</label>
                  <input type="text" class="form-control" placeholder="Product Name" name="Prodname" required>
                  <div class="invalid-feedback">Provide a product name.</div>
                </div>

                <div class="col-md-6 mb-2">
                  <label>Product Quantity</label>
                  <input type="text" class="form-control" id="product-quantity" name="product-quantity" placeholder="Product Quantity" required>
                  <div class="invalid-feedback">Required product stock.</div>
                </div>
              </div>
              <!-- Forms 3 -->
              <div class="form-row">
                <div class="col-md-6 mb-2">
                  <label>Product Price</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">₱</span>
                    </div>
                    <input type="text" class="form-control" id="product-price" name="product-price" placeholder="Product Price" required>
                    <div class="invalid-feedback">Required product price.</div>
                  </div>
                </div>

                <div class="col-md-6 mb-2">
                  <label>Product Category</label>
                  <select class="form-control my-1 mr-sm-2" name="Prodcat" required>
                    <option value="">Product Category...</option>
                    <option value="D">Dress</option>
                    <option value="P">Pants</option>
                    <option value="S">Shoes</option>
                  </select>
                  <div class="invalid-feedback">Choose a product category.</div>
                </div>
              </div>
            </div>

            <div class="col-4">
              <div class="col-md-12 mt-3" style="height: 250px;">
                <div class="display-image d-flex justify-content-center align-items-center">
                  <img src="images/product-image.png" id="selected-image" class="img-fluid">
                </div>
                <label for="photo" class="upload-icon">
                  <i><img src="images/upload-icon.png"></i>
                </label>
                <input type="file" class="custom-file-input" id="photo" name="image" accept="image/*">
              </div>
            </div>
          </div>

          <!-- Forms 4 -->
          <div class="form-row d-flex">
            <div class="col-md-8">
              <textarea class="form-control" id="producct-description" name="producct-description" placeholder="Product Description..." rows="3" required></textarea>
              <div class="invalid-feedback">Required product description.</div>
            </div>
            <div class="buttons-box col-4 d-flex align-items-end mb-2">
              <button type="submit" class="btn btn-success" name="add-btn" id="add-btn">Add Product</button>
              <button type="Submit" class="btn btn-primary" name="edit-btn" id="edit-btn">Edit Product</button>
              <a href="ProductLists.php">
                <button type="button" class="btn btn-dark" name="view-btn" id="view-btn">View List</button>
              </a>
            </div>
          </div>
        </form>
      </div>
      <div class="delete-box col-12"> <!--DELETE FORMS> -->
        <form class="needs-validation" novalidate>
          <!-- Title -->
          <div class="form-row">
            <div class="col-md-3 d-flex justify-content-start">
              <label class="d-flex justify-content-center align-items-center">
                <h5>Delete Product</h5>
              </label>
            </div>
          </div>
          <!-- Forms -->
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
        <?php
        include('Prodman.php');
        ?>
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

  <script src="js/scripts.js"></script>
</body>

</html>