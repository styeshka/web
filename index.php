<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to my portal </title>
    <link rel="stylesheet" href="css/mStyle.css">
    <link rel="stylesheet" href="css/mforms.css">
</head>
<body>
        <div id="page-header" style="text-align: right;"></div>
        <div id="page-content">
        <div class="form-div">
            <div id="page-title"><h1>Login</h1></div>
            <div>
                <form method="post" action="BE/login.php">
                <div class="form-element">
                    <label for="username">Username:</label><br>
                    <input type="text" class="tf" name="username" id="username"/><br><br>
                </div>
                
                <div class="form-element">
                    <label for="password">Password:</label><br>
                    <input type="password" class="tf" name="password" id="password"/><br><br>
                </div>  
                <div class="form-element">                         
                        <a class="form-link"  href="pages/signin.php">Sign In</a>
                    </div>
                <button type="submit">Login</button>             
                </form>                
            </div>
        </div>

    </body>
</html>