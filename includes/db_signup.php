<?php
// Include config file
include "db_conn.php";
 
$username = $_POST['username'];

$password = $_POST['password'];

// Define variables and initialize with empty values
#$username = $password = $confirm_password = "";
#$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
#if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a email-id.";
    } 
    else{
        // Prepare a select statement
        $sql = "SELECT user_ID FROM user_details WHERE email_id = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This email-id is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
 /*   if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    } */
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO user_details (email_id, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
           
            
            // Set parameters
            $param_username = $username;
            $param_password = $password; // Creates a password hash
            echo $password;
            echo $username;
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: ../index.php");
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
    header("Location: ../index.php");
    exit();
?>