<?php 
   class myDog
   {
     private $server = "mysql:host=localhost;dbname=db_ecommerce";
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
            }catch(PDOException $e)
            {
              echo "There is some problem in the connection:". $e->getMessage();
          }
          
      }
public function closeConnection(){
          $this->con = null;
      }

public function show_404()
   {

    http_response_code(404);
    echo "<script language='javascript'>alert('Page not Found');
                window.location.href='index.php';</script>";

    die;

   }  

/////////////////////////////////////////start admin function///////////////////////////////////////////////////

public function set_userdata($array)
    {
          if(!isset($_SESSION)){
            session_start();   
        }
        $_SESSION['userdata'] = array(
        "user_id" => $array['user_id'],
        "fname" => $array['fname'],
        "lname" => $array['lname'],
        "username" => $array['username'] ,
        "email" => $array['email'],  
        "contact_number" => $array['contact_number'], 
        "address" => $array['address'],
        "date_create" => $array['date_create']

           
        );
        return $_SESSION['userdata'];
}
//end of function set_userdata


public function logout()
    {
      session_start();
      unset($_SESSION['user_id']);
      session_unset();
      session_destroy();
      echo "Logging out .... Please Wait .....";
        
    }



 public function check_user_exist($email){
        
          $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM  tbl_user  WHERE email = ?");
            $stmt -> execute([$email]);
            $total = $stmt ->rowCount();
            return $total;
}


public function usersLogin(){
    if(isset($_POST['user-log']) ){ 
        
        $passlog = md5($_POST['passlog']);
        $emailLog = $_POST['emailLog']; 
        $access = $_POST['access']; 
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM  tbl_user WHERE email = ? AND password = ?");
        $stmt -> execute([$emailLog, $passlog]);
        $user = $stmt->fetch(); 
        $total = $stmt->rowCount(); 

        if($total > 0){
        echo "Welcome".$user['email']; 
         $this->set_userdata($user);
        
         if($access == "admin"){
            header("Location: admin");
         }else{
            header("Location: index.php");
         }
       
        }else{
          echo "<script type='text/javascript' src='js/sweetalert2.all.min.js'></script>";
  echo "<script type='text/javascript'>
  document.addEventListener('DOMContentLoaded', ()=>{
  Swal.fire({
  position: 'top-center',
  title: 'You Are Not Yet Registered',
  icon: 'error',
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
        
       
       
       

    }

}




public function registration(){
  if(isset($_POST['registration'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = md5($_POST['password']);

    if($this->check_user_exist($email) == 0){
        $connection = $this->openConnection();
        $stmt = $connection->prepare("INSERT INTO
         tbl_user(`fname`,`lname`,`username`,`contact_number`,`email`,`address`,`password`) VALUES(?,?,?,?,?,?,?)");
       
       $stmt -> execute([$first_name, $last_name, $username, $contact, $email, $address,$password]);
       echo "<script type='text/javascript' src='js/sweetalert2.all.min.js'></script>";
  echo "<script type='text/javascript'>
  document.addEventListener('DOMContentLoaded', ()=>{
  Swal.fire({
  position: 'top-center',
  title: 'Registerd Success!',
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

    }else{
             echo "<script type='text/javascript' src='js/sweetalert2.all.min.js'></script>";
  echo "<script type='text/javascript'>
  document.addEventListener('DOMContentLoaded', ()=>{
  Swal.fire({
  position: 'top-center',
  title: 'User Already Exist',
  icon: 'error',
  allowOutsideClick: false,
  showConfirmButton: false,
  allowEscapeKey: false
  });
  setTimeout(()=>{
  window.location.href = window.location.href;
  },3000);
  });
  </script>";

    }

  }

}



/////////////////////////////////////end of user function///////////////////////////////////////////////////

}



$dogshop = new myDog();

 ?>