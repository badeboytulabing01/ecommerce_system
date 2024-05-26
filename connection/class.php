<?php
class DbConnection{
//databse connection

private $host;
private $user;
private $pass;
private $db_name;
private $conn;

//set variables
public function __construct($host, $user, $pass, $db_name){
    $this->host = $host;
    $this->user = $user;
    $this->pass = $pass;
    $this->db_name = $db_name;
}

//get variable
public function connectDB(){
    $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
   if($this->conn->connect_error){
    die("Connection Failed: ". $this->conn->connect_error);
   }
   return $this->conn;
}

//close connection
public function closeConnect(){
    if ($this->conn){
        $this->conn->close();
    }
 }

}



//user resgistration

class userRegistration{

    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function userRegister($fname, $lname, $username, $contact, $email, $address, $password){
        $fname    = $this->conn->escape_string(trim($fname));
        $lname    = $this->conn->escape_string(trim($lname));
        $username = $this->conn->escape_string(trim($username));
        $contact  = $this->conn->escape_string(trim($contact));
        $email    = $this->conn->escape_string(trim($email));
        $address  = $this->conn->escape_string(trim($address));
        $password = $this->conn->escape_string(trim($password));

        $check_user  = "SELECT * FROM tbl_user WHERE username = '$username'";
        $check_email = "SELECT * FROM tbl_user WHERE email = '$email'";

        $check_user_row       = $this->conn->query($check_user);
        $check_user_email_row = $this->conn->query($check_email);
   
        $total_user_row  = $check_user_row->num_rows;
        $total_email_row = $check_user_email_row->num_rows;


        if($total_user_row > 0 || $total_email_row > 0){
            showAlertError();
        }else{
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $sql  = "INSERT INTO tbl_user(fname, lname, username, contact_number, email, address, 
            password) VALUES(?,?,?,?,?,?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sssssss", $fname, $lname, $username, $contact, $email, $address, $hash);
            $stmt->execute();
            $stmt->close();
            LoginSuccess();
        }
        
    }

}
/* end of user user registration */

class loginUserAccount{
 private $conn;

 public function __construct($conn){
$this->conn = $conn;
}
 public function loginUser($postUser, $postPass){

  $emailLog = $this->conn->escape_string(trim($postUser));
  $passLog = $this->conn->escape_string(trim($postPass));

  $sql         = "SELECT * FROM tbl_user WHERE email='$emailLog'";
  $user        = $this->conn->query($sql);
  $total_users = $user->num_rows;

  if($total_users > 0){
  while($row_users = $user->fetch_assoc()){
    $user_id            = $row_users["user_id"];
    $db_fname           = $row_users["fname"];
    $db_lname           = $row_users["lname"];
    $db_username        = $row_users["username"];
    $db_contact_number  = $row_users["contact_number"];
    $db_email           = $row_users["email"];
    $db_address         = $row_users["address"];
    $db_password        = $row_users["password"];

    if(password_verify($passLog, $db_password) && strcmp($emailLog, $db_email) === 0) {
      $_SESSION["user_id"]        = $user_id;
      $_SESSION["fname"]          = $db_fname;
      $_SESSION["lname"]          = $db_lname;
      $_SESSION["username"]       = $db_username;
      $_SESSION["contact_number"] = $db_contact_number;
      $_SESSION["email"]          = $db_email;
      $_SESSION["address"]        = $db_address;
     header("location:dashboard.php");
    }else{
        return "Wrong Password or kindly considerate the case sensitive ";
    }

   }

  }else{
    return "Your email is not registered";
  }

  return null;


}


}


/* alerts  */

function showAlertError(){
    echo "<script type='text/javascript' src='resources/js/sweetalert2.all.min.js'></script>";
    echo "<script type='text/javascript'>
    document.addEventListener('DOMContentLoaded', ()=>{
    Swal.fire({
    position: 'top-end',
    title: 'Error',
    icon: 'error',
    allowOutsideClick: false,
    showConfirmButton: false,
    allowEscapeKey: false,
    });
    setTimeout(()=>{
    window.location.href = window.location.href;
    },3000);
    });
    </script>";
}


//success alert

function LoginSuccess(){
    echo "<script type='text/javascript' src='resources/js/sweetalert2.all.min.js'></script>";
    echo "<script type='text/javascript'>
    document.addEventListener('DOMContentLoaded', ()=>{
    Swal.fire({
    position: 'top-center',
    title: 'Add Successful!',
    icon: 'success',
    allowOutsideClick: false,
    showConfirmButton: false,
    allowEscapeKey: false
    });
    setTimeout(()=>{
    window.location.href = window.location.href='login.php';
    },3000);
    });
    </script>";
    }

    //login alert

    function showAlertLoginError($result){ //<-- get the result variable in the statement of login
        echo "<script type='text/javascript' src='js/sweetalert2.all.min.js'></script>";
        echo "<script type='text/javascript'>
        document.addEventListener('DOMContentLoaded', ()=>{
        Swal.fire({
        position: 'top-center',
        title: '$result!',
        icon: 'error',
        allowOutsideClick: false,
        showConfirmButton: false,
        allowEscapeKey: false,
        });
        setTimeout(()=>{
        window.location.href = window.location.href;
        },3000);
        });
        </script>";
    }
        
    

    
    