


<!DOCTYPE html>
<html>

<head>
    <title>My Profile</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<style>
    body {
    background: #f4f4f4f4;
    margin: 0;
    padding: 0;
}

nav {
    /* background: rgb(23, 37, 43); */
    background-color: #ffff;

    display: flex;
    justify-content: space-between;
    align-items: center;

}



.logo-brand,
.profile-account {
    text-decoration: none;
    color: #2b2b2b;

    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0px 30px 0px 30px;
    padding: 8px;
}

.logo-brand {
    font-size: 20px;
    font-weight: 800
}



.logo-brand span,
.profile-account span {
    margin: 0px 5px 0px 5px;
}



.user-account-edit {
    width: 100%;
    
    display: grid;
    grid-template-columns: 1fr 2fr;
    /* column-gap: 80px; */
    margin-top: 10px;

}

.user-profile,.user-edit-content  {

    width: 100%;
    height: 100vh;
    background-color: #f4f4f4;
    
    display: flex;
  
    align-items: start;
    
}

.profile-display{
    width: 400px;
    height: 450px;
    background-color: #ffffff;
    border-radius: 10px;
    margin: 0px 30px 0px 30px;
   
    
}

.profile-display-img{
    width: 100%;
    height: 60%;
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom: 1px solid #f4f4f4;
}

.profile-display-img .img{
    width: 200px;
    height: 200px;
    border: 1px solid #cdc9c9;
    border-radius: 50%;
}

.profile-display-name{
    width: 100%;
    
    
    line-height: 1px;
    margin: 0px 20px 0px 20px;

    padding: 10px;
}



.profile-display-name p{
    color: #aaa0a0;
}

.profile-display-bio{

  
    margin:0px 20px 0 20px;
   

    padding: 10px;
}

.profile-display-bio textarea{
    width: 98%;
    border: none;
    margin-right: 10px;
    resize: none;

}

.profile-display-bio textarea:focus{
    border: none;
}


.edit-form{
    width: 70%;
    height: inherit;
    justify-self: start;
    /* background-color: #ffff; */
}

.user-form-name,.user-authanticate,.user-selection{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 2em;
    /* background-color: #2b2b2b; */
}

.user-form-name .form-control,.user-authanticate .form-control{
    width: 100%;
}

.form-control{
    border: 1px solid #bcb5b5;
    

    padding: 10px ;
    margin-bottom: 15px;
    margin-top: 4px;
}



.userprofileusername input{
    width: 100%;
}

.user-bio textarea{
    width: 100%;
    height: 100px;
}


.user-img{
    width: 100%;
    height: 300px;
    border: 1px solid #aaa0a0;
    border-top: none;
    border-bottom: none;

   display: grid;
   place-items:center ;

}

.user-img .img-item{
   width: 155px;
   height: 155px;
   border: 1px dashed #aaa0a0;
   display: flex;
   justify-content: center;
   align-items: center;
}

.editbtn button{
   width: 150px;
   padding: 5px 10px ;
}

.user-pronouncs .form-control,.user-socialacc .form-control,.user-company .form-control{
    width: 100%;
    
}

.user-socialacc .form-control{
    margin-bottom: 5px;
    padding: 8px;
}

.user-company{
    margin-top: 10px;
}


.update-button{
    display: grid;
    grid-template-columns: 1fr 1fr;

    margin-top: 30px;

    padding: 10px;
}

.update-button button{
    width: 110px;
    padding: 8px;
    transform: translate(240%);
    background: #769a88;
    border: none;
    
    
}
</style>

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
                    <img src="" alt="" width="30px" style="border-radius: 50%;">
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
                            <textarea name="displaybio" rows="5" maxlength="150" readonly><?= $row['bio'] ?>
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