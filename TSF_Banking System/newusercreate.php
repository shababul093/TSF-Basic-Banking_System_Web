<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body style="background-color : #8A2BE2;">
    <?php
    include 'dbconfig.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $id=$_POST['id'];




    $sql="insert into users(id,name,email,balance) values('{$id}' ,'{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Great! User created');
                               window.location='customers.php';
                     </script>";
                    
    }
  }
?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">The Sparks Foundation Bank </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="customers.php">Our Customers</a>
                    </li>

            </div>

        </div>
    </nav>

    <h2 class="text-center pt-4" style="color : black;">Create a User</h2>
    <br>

    <div class="screen-body">
        <style>
        .app-form-control {
            width: 30%;
            padding: 8px 16px;
            margin: 4px 0;
            box-sizing: border-box;
        }
        </style>
        <div class="screen-body-item">
            <form class="app-form" method="post" style="text-align: center; ">

                <div class="app-form-group">
                    <input class="app-form-control" placeholder="ACCOUNT NUMBER" type="number" name="id" required>
                </div>
                <div class="app-form-group">
                    <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
                </div>
                <div class="app-form-group">
                    <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
                </div>
                <div class="app-form-group">
                    <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
                </div>
                <br>
                <div class="app-form-group button">
                    <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                    <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    <footer class="text-center mt-5 py-2">
        <p>&copy 2022. Developed By <b>Shababul Ali</b> <br> </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>