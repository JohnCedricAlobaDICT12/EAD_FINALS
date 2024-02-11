<?php
include('con_db.php');

if (isset($_POST['add-btn'])) {
    $Email = $_SESSION["Username"]; //session email id of user who is logged in

    // Get the values from the form
    $ProdID = $_POST['ProdID'];
    $ProdBrand = $_POST['product-brand'];
    $Prodname = $_POST['Prodname'];
    $Prodquant = $_POST['product-quantity'];
    $ProdPrice = $_POST['product-price'];
    $Prodcat = $_POST['Prodcat'];
    $Proddesc = $_POST['producct-description'];
    $ProdImg = $_POST['image'];

    // Check if the Email already exists in managers_tb
    $check_query = "SELECT * FROM managers_tb WHERE Email = '$Email'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo "<script>alert('Error: User with Email $Email already exists.');</script>";
    } else {
        $sql = "INSERT INTO prod_tb (ID, NAME, BRAND, STOCK, PRICE, CATEGORY, DESCR, IMG) 
        VALUES ('$ProdID', '$ProdBrand', '$Prodname', '$Prodquant', '$ProdPrice', '$Prodcat', '$Proddesc','$ProdImg')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('Data inserted successfully!');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
    }
} 



if (isset($_POST['edit-btn'])) {
    $Email = $_SESSION["Username"]; //session email id of user who is logged in

    // Get the values from the form
    $ProdID = $_POST['ProdID'];
    $ProdBrand = isset($_POST['product-brand']) ? $_POST['product-brand'] : null;
    $Prodname = isset($_POST['Prodname']) ? $_POST['Prodname'] : null;
    $Prodquant = isset($_POST['product-quantity']) ? $_POST['product-quantity'] : null;
    $ProdPrice = isset($_POST['product-price']) ? $_POST['product-price'] : null;
    $Prodcat = isset($_POST['Prodcat']) ? $_POST['Prodcat'] : null;
    $Proddesc = isset($_POST['producct-description']) ? $_POST['producct-description'] : null;
    $ProdImg = isset($_POST['image']) ? $_POST['image'] : null;

    // Check if the Email already exists in managers_tb
    $check_query = "SELECT * FROM admin_tb WHERE Email = '$Email'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $update_query = "UPDATE prod_tb SET ";
        $set_values = array();

        if ($Prodname !== null) {
            $set_values[] = "NAME = '$Prodname'";
        }
        if ($ProdBrand !== null) {
            $set_values[] = "BRAND = '$ProdBrand'";
        }
        if ($Prodquant !== null) {
            $set_values[] = "STOCK = '$Prodquant'";
        }
        if ($ProdPrice !== null) {
            $set_values[] = "PRICE = '$ProdPrice'";
        }
        if ($Prodcat !== null) {
            $set_values[] = "CATEGORY = '$Prodcat'";
        }
        if ($Proddesc !== null) {
            $set_values[] = "DESCR = '$Proddesc'";
        }
        if ($Proddesc !== null) {
            $set_values[] = "IMG = '$ProdImage'";
        }

        // Combine all non-null column updates
        $update_query .= implode(', ', $set_values);
        $update_query .= " WHERE ID = '$ProdID'";
        
        $update_result = mysqli_query($conn, $update_query);

        if ($update_result) {
            echo "<script>alert('Product updated successfully!');</script>";
        } else {
            echo "<script>alert('Error updating product: " . mysqli_error($conn) . "');</script>";
        }
    } else {
        echo "<script>alert('Error: You are unauthorized to perform this action.');</script>";
    }
}


if (isset($_GET['dell-btn'])) {
    $orderId = $_GET['ProdID11']; // Assuming orderId is the unique identifier for the order
    $email = $_SESSION["Username"];

    $check_query = "SELECT * FROM sadmin_tb WHERE Email = '$email'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $delete_query = "DELETE FROM prod_tb WHERE ID = '$orderId'";
        $delete_result = mysqli_query($conn, $delete_query);

        if ($delete_result) {
            echo "<script>alert('Product deleted successfully!');</script>";
        } else {
            echo "<script>alert('Error deleting product: " . mysqli_error($conn) . "');</script>";
        }
    } else {
        echo "<script>alert('Error: You are unauthorized to perform this action.');</script>";
    } 
}
?>
