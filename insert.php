
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include 'connect.php';
if (isset($_SESSION['loggedin'])) {
    if ($stmt = $con->prepare('SELECT menu_id  FROM cart WHERE menu_id = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmt->bind_param('i', $_POST['m_id']);
    $stmt->execute();
    
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result();
  
    if ($stmt = $con->prepare('INSERT INTO cart (menu_id,menu_name,menu_pic,menu_price,shopname,c_username,c_firstname,c_lastname,c_address) VALUES (?,?,?,?,?,?,?,?,?)')) {
        // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
        
        $stmt->bind_param('ississsss', $_POST['m_id'], $_POST['m_name'], $_POST['m_pic'], $_POST['m_price'],$_POST['menu_shop'],$username,$firstname,$lastname,$location);
        $stmt->execute();
        
        echo "<SCRIPT> //not showing me this
            
        javascript:history.back(1);
    </SCRIPT>";
 
        
    }
        else{ echo"fail";}

    }
} else {
    $message = 'Please log in before order';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('login.php');
    </SCRIPT>";
}

// Close connection

?>        