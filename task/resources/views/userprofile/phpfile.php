<?php
session_start();

ini_set('display_errors', false);

$dbhost = 'localhost';
$dbusername = 'root';
$dbpass = '';
$dbname = 'hmmdb';

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "successful";

} catch (Exception $e) {
    echo "Error found : " . $e->getMessage();
}

if (!isset($_SESSION['uploaded_file'])) {
    $_SESSION['uploaded_file'] = 'assets/img/profile/anpuppy.jpg';

}

if (!isset($_SESSION['uploaded_fname'])) {
    $_SESSION['uploaded_fname'] = 'Jame';

}

if (!isset($_SESSION['uploaded_lname'])) {
    $_SESSION['uploaded_lname'] = 'Vectory';

}

if (!isset($_SESSION['uploaded_username'])) {
    $_SESSION['uploaded_username'] = 'jame890';

}

if(!isset($_SESSION['uploaded_bio'])){
    $_SESSION['uploaded_bio'] = "Hello I'm a programmer. If you need me, I'm always ready.";
}

if(!isset($_SESSION['uploaded_password'])){
    $_SESSION['uploaded_password'] = "";
}


if(!isset($_SESSION['uploaded_email'])){
    $_SESSION['uploaded_email'] = "";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $getuserfname = textfilter($_POST['userprofilefirstname']);
    $getuserlname = textfilter($_POST['userprofilelastname']);
    $getuserusername = textfilter($_POST['userprofileusername']);
    $getemail = textfilter($_POST['userprofileemail']);
    $getpass = textfilter($_POST['userprofilepass']);
    $getbio = $_POST['userprofilebio'];

   



    try {
        $updatestmt = $conn->prepare("UPDATE jamevectory SET firstname = :newfirstname, lastname = :newlastname, username = :newusername, email = :newemail , password = :newpassword , bio = :newbio WHERE id = :userid");
        $selectstmt = $conn->prepare("SELECT firstname, lastname, username, bio FROM jamevectory");


        $selectstmt->execute();
    
        $row = $selectstmt->fetch();
        echo "<pre>" . print_r($row, true) . "</pre>";

        if (isset($_POST['submit'])) {
        $uploaddir = 'assets/img/profile/';
        $extension = pathinfo($_FILES['profile']['name'], PATHINFO_EXTENSION);
        $filename = uniqid() . '.' . $extension;
        $uploadfile = $uploaddir . $filename;


        $uploadtype = explode('.',$_FILES['profile']['name']);
        $strtype = strtolower(end($uploadtype));
        $allowtype = ['jpg','jpeg','png','gif'];

        $error = [];

        echo "<pre>" .print_r($strtype,true)."</pre>";

        echo in_array($strtype,$allowtype);

        if(in_array($strtype,$allowtype) === false){
            $error[] = "We can not accept this file type";
        }



        if (empty($error) === true) {
            move_uploaded_file($_FILES['profile']['tmp_name'], $uploadfile);
            $_SESSION['uploaded_file'] = $uploadfile;
        }else{
            echo print_r($error,true);
        }

        $newfirstname = $getuserfname;
        $newlastname = $getuserlname;
        $newusername = $getuserusername;
        $newemail = $getemail;
        $newpassword = $getpass;
        $newbio = $getbio;
        $userid = 1;


        if (!empty($newfirstname)) {
            $row['firstname'] = $newfirstname;
            $updatestmt->bindParam(':newfirstname', $newfirstname);
        } else {
            $updatestmt->bindValue(':newfirstname', $row['firstname']);
           
        }


        if (!empty($newlastname)) {
            $row['lastname'] = $newlastname;
            $updatestmt->bindParam(':newlastname', $newlastname);
        } else {
            $updatestmt->bindValue(':newlastname', $row['lastname']);
        }


        if (!empty($newusername)) {
            $row['username'] = $newusername;
            $updatestmt->bindParam(':newusername', $newusername);
        } else {
            $updatestmt->bindValue(':newusername', $row['username']);
        }

        if (!empty($newemail)) {
            $row['email'] = $newemail;
            $updatestmt->bindParam(':newemail', $newemail);
        } else {
            $updatestmt->bindValue(':newemail', $row['email']);
        }


        if (!empty($newpassword)) {
            $row['password'] = $newpassword;
            $updatestmt->bindParam(':newpassword', $newpassword);
        } else {
            $updatestmt->bindValue(':newpassword', $row['password']);
        }
        
        if (!empty($newbio)) {
            $row['bio'] = $newbio;
            $updatestmt->bindParam(':newbio', $newbio);
        } else {
            $updatestmt->bindValue(':newbio', $row['bio']);
        }
        

        $updatestmt->bindParam(":userid", $userid);


        $updatestmt->execute();


        $_SESSION['uploaded_fname'] = $row['firstname'];
        $_SESSION['uploaded_lname'] = $row['lastname'];
        $_SESSION['uploaded_username'] = $row['username'];
        $_SESSION['uploaded_bio'] = $row['bio'];
        $_SESSION['uploaded_password'] = $row['password'];
        $_SESSION['uploaded_email'] = $row['email'];

        }
    } catch (Exception $e) {
        echo "Error Found: " . $e->getMessage();
    }





}

$uploadfile = $_SESSION['uploaded_file'];
$row['firstname'] = $_SESSION['uploaded_fname'];
$row['lastname'] = $_SESSION['uploaded_lname'];
$row['username'] = $_SESSION['uploaded_username'];
$row['bio'] = $_SESSION['uploaded_bio'];
$row['password'] = $_SESSION['uploaded_password'];
$row['email'] = $_SESSION['uploaded_email'];



function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
}

?>