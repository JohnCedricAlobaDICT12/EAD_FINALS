<?php
include('con_db.php');

if (isset($_POST['add-btn'])) {
    // Get the values from the form
    $ProdID = $_POST['ProdID'];
    $OrdQuant = $_POST['OrdQuant'];
    $CustFN = $_POST['CustFN'];
    $CustLN = $_POST['CustLN'];
    $cont = $_POST['cont'];
    $pay = $_POST['pay'];
    $email = $_POST['email'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $brgy = $_POST['brgy'];
    $ADD = $_POST['ADD'];
    $Stat = $_POST['Stat'];
    $track = $_POST['track'];
    $Pstat = $_POST['Pstat'];

    // Get the email from session
    $Email = $_SESSION["Username"];

    // Check if the Email already exists in managers_tb
    $check_query = "SELECT * FROM managers_tb WHERE Email = '$Email'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // User already exists
        echo "<script>alert('Error: User with Email $Email already exists.');</script>";
    } else {
        // User does not exist, proceed to insert the data
        // Create the SQL query
        $sql = "INSERT INTO order_tb (ProdID, OrdQuant, CustFN, CustLN, CONTACT, Payment, Email, Prov, City, BRGY, Address, Ordstat, Ordtrac, Paystat) 
        VALUES ('$ProdID', '$OrdQuant', '$CustFN', '$CustLN', '$cont', '$pay', '$email', '$province', '$city', '$brgy', '$ADD', '$Stat', '$track', '$Pstat')";

        // Execute the query
        $result = mysqli_query($conn, $sql);

        // Check if the query was successful
        if ($result) {
            echo "<script>alert('Data inserted successfully!');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
    }
} 

if (isset($_GET['edit-btn'])) {
    // Get the values from the URL parameters
    $productId = $_GET['edit']; // Assuming productId is the unique identifier for the order
    $newOrderStatus = $_GET['stat1'];
    $newOrderTracking = $_GET['tract1'];
    $newPaymentStatus = $_GET['pstat1'];

    // Get the email from session
    $email = $_SESSION["Username"];

    // Check if the Email already exists in managers_tb
    $check_query = "SELECT * FROM admin_tb WHERE Email = '$email'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // User already exists
    // Update the order with the new values
        $update_query = "UPDATE order_tb SET Ordstat = '$newOrderStatus', Ordtrac = '$newOrderTracking', Paystat = '$newPaymentStatus' WHERE ProdID = '$productId'";
        $update_result = mysqli_query($conn, $update_query);

        if ($update_result) {
            echo "<script>alert('Order updated successfully!');</script>";
        } else {
            echo "<script>alert('Error updating order: " . mysqli_error($conn) . "');</script>";
        }


    } else {


        echo "<script>alert('Error: User with Email $email not exists.');</script>";
    
    } 
}


if (isset($_GET['dell-btn'])) {
    // Get the value from the form (assuming you want to delete by orderId)
    $orderId = $_GET['ProdID11']; // Assuming orderId is the unique identifier for the order
    // Get the email from sessions
    $email = $_SESSION["Username"];

    // Check if the Email already exists in managers_tb
    $check_query = "SELECT * FROM sadmin_tb WHERE Email = '$email'";
    $check_result = mysqli_query($conn, $check_query);




    if (mysqli_num_rows($check_result) > 0) {
        // User already exists
  
      // Delete the order
    $delete_query = "DELETE FROM order_tb WHERE ProdID = '$orderId'";
    $delete_result = mysqli_query($conn, $delete_query);


    if ($delete_result) {
        echo "<script>alert('Order deleted successfully!');</script>";
    } else {
        echo "<script>alert('Error deleting order: " . mysqli_error($conn) . "');</script>";
    }
    } else {

        echo "<script>alert('Error: You are unauthorize to do this function.');</script>";
    
    } 
} 
?>
