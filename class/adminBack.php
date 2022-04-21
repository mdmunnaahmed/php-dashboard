<?php
// Create Database if Not Exists
$db = new mysqli("127.0.0.1", "root", "");
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
} //above lines connect to the server

$db->query("CREATE DATABASE IF NOT EXISTS `admin`");  // this line checks if the database has been created if not it create a database
mysqli_select_db($db, "admin"); //this line select the created database


// Create Admin table
$sql = "CREATE TABLE IF NOT EXISTS admin_table (
   id INT(6) AUTO_INCREMENT PRIMARY KEY,
   username VARCHAR(255) NOT NULL,
   admin_email VARCHAR(255) NOT NULL,
   admin_pass VARCHAR(255) NOT NULL,
   login_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$db->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS setting (
   id INT(11) NOT NULL auto_increment,
   site_title VARCHAR(255) NOT NULL,
   currency VARCHAR(255) NOT NULL,
   currency_symbol VARCHAR(255) NOT NULL,
   base_color VARCHAR(255) NOT NULL,
   secondary_color VARCHAR(255) NOT NULL,
   secure_pass TINYINT  DEFAULT 0,
   agree_policy TINYINT  DEFAULT 0,
   user_registration TINYINT  DEFAULT 0,
   force_ssl TINYINT  DEFAULT 0,
   email_verification TINYINT  DEFAULT 0,
   email_notification TINYINT  DEFAULT 0,
   sms_verification TINYINT  DEFAULT 0,
   sms_notification TINYINT  DEFAULT 0,
   PRIMARY KEY(id)
)";
$db->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS tickets (
   id INT(11) NOT NULL auto_increment,
   ticket_id VARCHAR(255) NOT NULL,
   subject VARCHAR(255) NOT NULL,
   username VARCHAR(255) NOT NULL,
   email VARCHAR(255) NOT NULL,
   status TINYINT,
   last_message TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   PRIMARY KEY(id)
)";
$db->query($sql);



// Insert Demo data into the Admin Table if table is empty
$sql = "SELECT * FROM admin_table ";
$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result);
$pass = md5('admin');
if ($count == 0) {
    $sql = "INSERT INTO admin_table (username,admin_email,admin_pass) VALUES('admin','admin@gmail.com','$pass')";
    mysqli_query($db, $sql);
}

$sql = "SELECT * FROM setting";
$result2 = mysqli_query($db, $sql);
$row = mysqli_num_rows($result2);
if ($row == 0) {
    $sql = "INSERT INTO setting (site_title, currency, currency_symbol, base_color, secondary_color, secure_pass, agree_policy, user_registration, force_ssl, email_verification, email_notification, sms_verification, sms_notification) VALUES('Admin','USD','$', '008df5', '000237', '1', '1', '1', '1', '0', '0','0', '0')";
    mysqli_query($db, $sql);
}

$sql = "SELECT * FROM tickets";
$result2 = mysqli_query($db, $sql);
$row = mysqli_num_rows($result2);
if ($row == 0) {
    $sql = "INSERT INTO tickets (ticket_id , subject, username, email, status) VALUES('#9812V2ERU9', 'For Installation','user', 'user@gmail.com', '1')";
    mysqli_query($db, $sql);
}


class adminBack
{
    private $conn;
    public function __construct()
    {
        $dbhost = "127.0.0.1";
        $dbuser = "root";
        $dbpass = "";
        $dbname = 'admin';

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if (!$this->conn) {
            die("Database Connectioin Failed");
            echo "Database Connectioin Failed";
        }
    }

    // Admin Login // Logout
    function adminLogin($data)
    {
        $admin_email = $_POST['admin_email'];
        $admin_pass = md5($_POST['admin_pass']);


        $query = "SELECT * FROM admin_table WHERE admin_email = '$admin_email' OR username = '$admin_email' AND admin_pass = '$admin_pass'";
        if (mysqli_query($this->conn, $query)) {

            $info = mysqli_query($this->conn, $query);
            $admin_info = mysqli_fetch_assoc($info);

            if ($admin_info) {
                header('Location: dashboard.php');
                session_start();
                $_SESSION['id'] = $admin_info['id'];
                $_SESSION['admin_email'] = $admin_info['admin_email'];
            } else {
                $msg = "Your Username or Password is Wrong";
                return $msg;
            }
        }
    }
    function adminLogout()
    {
        unset($_SESSION['id']);
        header('location: index.php');
    }

    // Setting
    function setting($data)
    {
        $site_title = $_POST['site_title'];
        $currency = $_POST['currency'];
        $currency_symbol = $_POST['currency_symbol'];
        $base_color = $_POST['base_color'];
        $secondary_color = $_POST['secondary_color'];
        $secure_pass = $_POST['secure_pass'];
        $agree_policy = $_POST['agree_policy'];
        $user_registration = $_POST['user_registration'];
        $force_ssl = $_POST['force_ssl'];
        $email_verification = $_POST['email_verification'];
        $email_notification = $_POST['email_notification'];
        $sms_verification = $_POST['sms_verification'];
        $sms_notification = $_POST['sms_notification'];

        $query =  "INSERT INTO setting(site_title, currency, currency_symbol, base_color, secondary_color, secure_pass, agree_policy, user_registration, force_ssl, email_verification, email_notification, sms_verification, sms_notification) VALUE ('$site_title', '$currency', '$currency_symbol', '$base_color', '$secondary_color', '$secure_pass','$secure_pass','$agree_policy','$user_registration','$force_ssl','$email_verification','$email_notification', '$sms_verification','$sms_notification')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Setting Successfully Added";
            return $msg;
        } else {
            $msg = "Setting Couldn't Added";
            return $msg;
        }
    }
    function updateSetting($data)
    {
        $site_title = $data['site_title'];
        $currency = $data['currency'];
        $currency_symbol = $data['currency_symbol'];
        $base_color = $data['base_color'];
        $secondary_color = $data['secondary_color'];

        if (isset($data['secure_pass']) && $data['secure_pass'] == 'on') {
            $secure_pass = 1;
        } else {
            $secure_pass = 0;
        }

        if (isset($data['agree_policy']) && $data['agree_policy'] == 'on') {
            $agree_policy = 1;
        } else {
            $agree_policy = 0;
        }

        if (isset($data['user_registration']) && $data['user_registration'] == 'on') {
            $user_registration = 1;
        } else {
            $user_registration = 0;
        }

        if (isset($data['force_ssl']) && $data['force_ssl'] == 'on') {
            $force_ssl = 1;
        } else {
            $force_ssl = 0;
        }

        if (isset($data['email_verification']) && $data['email_verification'] == 'on') {
            $email_verification = 1;
        } else {
            $email_verification = 0;
        }

        if (isset($data['email_notification']) && $data['email_notification'] == 'on') {
            $email_notification = 1;
        } else {
            $email_notification = 0;
        }

        if (isset($data['sms_verification']) && $data['sms_verification'] == 'on') {
            $sms_verification = 1;
        } else {
            $sms_verification = 0;
        }

        if (isset($data['sms_notification']) && $data['sms_notification'] == 'on') {
            $sms_notification = 1;
        } else {
            $sms_notification = 0;
        }


        $query =  "UPDATE setting SET site_title = '$site_title', currency ='$currency', currency_symbol ='$currency_symbol', base_color ='$base_color', secondary_color ='$secondary_color', secure_pass = $secure_pass, agree_policy =$agree_policy, user_registration =$user_registration, force_ssl =$force_ssl, email_verification =$email_verification, email_notification =$email_notification, sms_verification =$sms_verification, sms_notification =$sms_notification";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Setting Successfully Added";
            return $msg;
        } else {
            $msg = "Setting Couldn't Added";
            return $msg;
        }
    }

    function displaySetting()
    {
        $query =  "SELECT * FROM setting";
        if (mysqli_query($this->conn, $query)) {
            return mysqli_query($this->conn, $query);
        }
    }

    // Color Dynamic
    function colorPrint()
    {
        $query = "SELECT * FROM setting";
        if (mysqli_query($this->conn, $query)) {
            return mysqli_query($this->conn, $query);
        }
    }

    // Ticket Show
    function displayTicket()
    {
        $query =  "SELECT * FROM tickets";
        if (mysqli_query($this->conn, $query)) {
            return mysqli_query($this->conn, $query);
        }
    }

    // Users Show
    function displayUsers()
    {
        $query =  "SELECT * FROM users";
        if (mysqli_query($this->conn, $query)) {
            return mysqli_query($this->conn, $query);
        }
    }
}
