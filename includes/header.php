<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <style>
        body{
            
    background: rgb(0, 180, 235);

        }
        .nav a{
	color: white;
    font-weight: bold;
	transition: all 0.2s;
}

.container{
    color: white;
}

.nav a:hover{
	color: rgb(255, 0, 0);
}

main{
    text-align: center;
}

    </style>

</head>

<body>
    
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <h1>My blog</h1>
        
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link px-2" href="/">Home</a></li>

                <?php if (Auth::isLoggedIn()) : ?>
                    
                    <li class="nav-item"><a class="nav-link px-2" href="/admin/">Admin</a></li>
                    <li class="nav-item"><a class="nav-link px-2" href="/contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link px-2" href="/logout.php">Log out</a></li>

                <?php else : ?>
                    <li class="nav-item"><a class="nav-link px-2" href="/contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link px-2" href="/login.php"><button type="button" class="btn btn-success me-2">Login</button></a></li>
                    <li class="nav-item"><a class="nav-link px-2" href="/signup.php"><button type="button" class="btn btn-danger">Sign-up</button></a></li>

                <?php endif; ?>

                
            </ul>
            

        </header>
        </div>
        <main class="container">
