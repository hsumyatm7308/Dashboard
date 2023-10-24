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

    echo "successful";

} catch (Exception $e) {
    echo "Error found : " . $e->getMessage();
}

if (!isset($_SESSION['uploaded_file'])) {
    $_SESSION['uploaded_file'] = '';

}

if (!isset($_SESSION['uploaded_fname'])) {
    $_SESSION['uploaded_fname'] = '';

}

if (!isset($_SESSION['uploaded_lname'])) {
    $_SESSION['uploaded_lname'] = '';

}

if (!isset($_SESSION['uploaded_username'])) {
    $_SESSION['uploaded_username'] = '';

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $getuserfname = $_POST['userprofilefirstname'];
    $getuserlname = $_POST['userprofilelastname'];
    $getuserusername = $_POST['userprofileusername'];






    try {
        $selectstmt = $conn->prepare("SELECT firstname, lastname, username, bio FROM jamevectory");
        $updatestmt = $conn->prepare("UPDATE jamevectory SET firstname = :newfirstname, lastname = :newlastname, username = :newusername WHERE id = :userid");



        $selectstmt->execute();





        $row = $selectstmt->fetch();


        echo "<pre>" . print_r($row, true) . "</pre>";



    

        if (isset($_POST['submit'])) {
            $uploaddir = 'assets/img/profile/';
            $extension = pathinfo($_FILES['profile']['name'], PATHINFO_EXTENSION);
            $filename = uniqid() . '.' . $extension;
            $uploadfile = $uploaddir . $filename;

            if (move_uploaded_file($_FILES['profile']['tmp_name'], $uploadfile)) {
                $_SESSION['uploaded_file'] = $uploadfile;

            }





            $updatestmt->bindParam(':newfirstname', $newfirstname);
            $updatestmt->bindParam(':newlastname', $newlastname);
            $updatestmt->bindParam(':newusername', $newusername);
            $updatestmt->bindParam(":userid", $userid);


            $newfirstname = $getuserfname;
            $newlastname = $getuserlname;
            $newusername = $getuserusername;
            $userid = 1;




            $updatestmt->execute();


          
            if ($newfirstname === '') {


                // $row['firstname'] = $_SESSION['uploaded_fname'];
    
                // $row['lastname'] = $_SESSION['uploaded_lname'];
                // $row['username'] = $_SESSION['uploaded_username'];
               
    
                $newfirstname =  $row['firstname'];
                $newlastname = $row['lastname'];
                $newusername =  $row['username'];
    
    
    
            }elseif($newfirstname){
                $row = $selectstmt->fetch();
    
                $row['firstname'] = $getuserfname;
                $row['lastname'] = $getuserlname;
                $row['username'] = $getuserusername;
            }
            

            

            $_SESSION['uploaded_fname'] = $row['firstname'];
            $_SESSION['uploaded_lname'] = $row['lastname'];
            $_SESSION['uploaded_username'] = $row['username'];





        }

    } catch (Exception $e) {
        echo "Error Found : " . $e->getMessage();
    }




}

$uploadfile = $_SESSION['uploaded_file'];
$row['firstname'] = $_SESSION['uploaded_fname'];
$row['lastname'] = $_SESSION['uploaded_lname'];
$row['username'] = $_SESSION['uploaded_username'];

?>


<!DOCTYPE html>
<html>

<head>
    <title>My Profile</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>

        <nav>

            <div>
                <a href="" class="logo-brand">
                    <img src="./assets/img/mylogo.jpg" alt="" width="50px" style="border-radius: 50%;">
                    <span>Jame Vectory</span>
                </a>
            </div>

            <div>
                <a href="" class="profile-account">
                    <span>My account</span>
                    <img src="<?php echo $uploadfile ?>" alt="" width="30px" style="border-radius: 50%;">
                </a>
            </div>


        </nav>

    </header>
    <section>
        <div class="user-account-edit">

            <div class="user-profile">
                <div>
                    <form action="index.php" method='post' enctype='multipart/formdata' class="profile-display">
                        <div class="profile-display-img">

                            <div class="img">
                                <img src="<?php echo $uploadfile ?>" alt="" width="200px" style="border-radius: 50%;">
                            </div>


                        </div>


                        <div class="profile-display-name">
                            <h3 class="dispalyname"><span>
                                    <?= $row['firstname'] ?>
                                </span> <span>
                                    <?= $row['lastname'] ?>
                                </span></h3>
                            <p>
                                <?= $row['username'] ?>
                            </p>
                        </div>

                        <div class="profile-display-bio">
                            <textarea name="displaybio" rows="5" maxlength="150">Hello I'm a programmer. If you need me, I'm always ready.
                        </textarea>
                        </div>
                    </form>


                </div>
            </div>

            <div class="user-edit-content">
                <div class="edit-form">
                    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
                        <div class="user-form-name">
                            <div>
                                <label for="">First name</label>
                                <input type="text" name="userprofilefirstname" id="userprofilefirstname"
                                    class="form-control" placeholder="First Name">
                            </div>
                            <div>
                                <label for="">Last name</label>
                                <input type="text" name="userprofilelastname" id="userprofilefirstname"
                                    class="form-control" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="userprofileusername">
                            <label for="">Username</label>
                            <input type="text" name="userprofileusername" id="userprofileusername" class="form-control"
                                placeholder="username874">
                        </div>

                        <div class="user-authanticate">
                            <div>
                                <label for="">Email</label>
                                <input type="text" name="userprofileemail" id="userprofileemail" class="form-control"
                                    placeholder="Email">

                            </div>
                            <div>
                                <label for="">Passwrod</label>
                                <input type="text" name="userprofilepass" id="userprofilepass" class="form-control"
                                    placeholder="Password">
                            </div>
                        </div>

                        <div class="user-bio">
                            <label for="">Bio</label>
                            <br>
                            <textarea name="userprofilebio" id="userprofilebio" maxlength="150"
                                class="form-control"></textarea>
                        </div>


                        <div class="user-selection">
                            <div class="user-img">
                                <div class="img-item">
                                    <img src="<?php echo $uploadfile ?>" alt="" width="150px">


                                </div>
                                <div class="editbtn">
                                    <input type="file" name="profile">
                                </div>
                            </div>

                            <div class="user-options">
                                <div class="user-pronouncs">
                                    <label for="">Pronouns</label>
                                    <br>

                                    <select name="pronouns" id="pronouns" class="form-control">
                                        <option selected>Don't specify</option>
                                        <option value="t">They/them</option>
                                        <option value="h">He/him</option>
                                        <option value="s">She/her</option>
                                        <option value="c">Custom</option>
                                    </select>

                                </div>


                                <div class="user-socialacc">
                                    <label for="">Social accounts</label>
                                    <br>

                                    <div>
                                        <input type="text" placeholder="social account link" class="form-control">
                                    </div>
                                    <div>
                                        <input type="text" placeholder="social account link" class="form-control">
                                    </div>
                                    <div>
                                        <input type="text" placeholder="social account link" class="form-control">
                                    </div>

                                </div>

                                <div class="user-company">
                                    <label for="">Company</label>
                                    <br>

                                    <div>
                                        <input type="text" placeholder="Company" class="form-control">
                                    </div>


                                </div>





                            </div>


                        </div>

                        <div class="update-button">
                            <div>

                            </div>
                            <button type="submit" name="submit">
                                Update
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>



<!-- 

CREATE TABLE IF NOT EXISTS jamevectory(
 id INT AUTO_INCREMENT PRIMARY KEY,
 firstname VARCHAR(255) NOT NULL,
  lastname VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password INT NOT NULL,
    bio VARCHAR(255),
    pronouns VARCHAR(255), 
    company VARCHAR(255)
    
    
) -->