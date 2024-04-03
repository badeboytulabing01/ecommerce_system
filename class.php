<?php

class myDogstle{
     private $server = "mysql:host=localhost;dbname=db_dogge";
     private $user = "root";
     private $pass = "";
     private $options = array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => 
     PDO::FETCH_ASSOC);
    protected $con;
    //end of connection
    
    public function openConnection()
    {
        try{
            $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
            return $this->con;
        }catch(PDOException $e){
            echo "There is some problem in the connection:". $e->getMessage();
        }
        
    }
    //end of function openConnection
    
    public function closeConnection()
    {
        $this->con = null;
    }
    //end of function closeConnection
    
    public function getUsers()
    {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM  tbl_customers");
        $stmt -> execute();
        $users = $stmt->fetchAll();
        
        if($userCount >0){
            return $users;
        }else{
            return 0;
        }
    }
    //end of  function getUsers student



public function register()
{

  if(isset($_POST['register'])){
       $fname       = $_POST['fname'];
       $lname       = $_POST['lname'];
       $username    = $_POST['username'];
       $email       = $_POST['email'];
       $address     = $_POST['address'];
       $number      = $_POST['number'];

       $password = md5($_POST['password']);
       

        $connection = $this->openConnection();
        $stmt       = $connection->prepare("INSERT INTO tbl_customers(`firsName`,`lastName`,`contactNumber`, `email`,
        `username`, `password`, `address`)
       VALUES(?,?,?,?,?,?,?)");
       $stmt -> execute([$fname, $lname, $number, $email, $username, $password, $address]);     

       echo "<script language='javascript'>alert('User registered Successfully you are now able to login'); 
       window.location.href = 'login_form.php';
       </script>";

      

   }

}

 public function logout()
  {
    session_start();
    unset($_SESSION['user_ID']);
    session_unset();
    session_destroy();
   echo "Logout Please wait................. ";
      
}

public function set_userdata_customer($array)
    {
          if(!isset($_SESSION)){
            session_start();   
        }
        $_SESSION['customerdata'] = array(
           "firsName" => $array['firsName'],
            "lastName" => $array['lastName'],
            "contactNumber" => $array['contactNumber'],
            "email" => $array['email'],
            "username" => $array['username'],
            "contactNumber" => $array['address']

        );
        return $_SESSION['customerdata'];
}
//end of function set_userdata for admin

public function get_admindata()
{
         if(!isset($_SESSION)){
           session_start();   
         }
         if(isset($_SESSION['customerdata'])){
           return $_SESSION['customerdata'];  
         }else{
           return null;
         }
  

  }



     public function user_login()
   {
    if(isset($_POST['submit']) ){ 
        $password = md5($_POST['password']);
        $email = $_POST['email']; 
  
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM  tbl_customers WHERE email = ? AND password = ? AND customerstatus='Active'");
        $stmt -> execute([$email, $password]);
        $user = $stmt->fetch(); 
        $total = $stmt->rowCount(); 
       if($total > 0){
         $this->set_userdata_customer($user);
         echo "Welcome".$user['email']; 
         header("Location: dashboard.php");
        }else{
          echo "<script language='javascript'>alert('You Are Not Yet Registered'); </script>";
        }              
    }
    
}


  



}//end of class
$doggy = new myDogstle();
