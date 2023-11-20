<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to my portal</title>
    <link rel="stylesheet" href="../css/mStyle.css">
    <link rel="stylesheet" href="../css/mforms.css">
</head>
    <body>
        <div id="page-header" style="text-align: right;"></div>
        <div id="page-content">
            
            <div class="form-div">
                <div id="page-title"><h1>Sign In</h1></div>
                <form action="../BE/signin.php" method="post">
                    <div class="form-element">
                        <label>Username:</label><br>
                        <input type="text" class="tf" name="username"/>
                    </div>
                    <div class="form-element">
                        <label>First Name:</label><br>
                        <input type="text" class="tf" name="firstname"/>
                    </div>
                    <div class="form-element">
                        <label>Last Name:</label><br>
                        <input type="text" class="tf" name="lastname"/>
                    </div>
                    <div class="form-element">
                        <label>Email:</label><br>
                        <input type="text" class="tf" name="email"/>
                    </div>
                    <div class="form-element">
                        <label>Password:</label><br>
                        <input type="password" class="tf" name="pass"/>
                    </div>
                    <div class="form-element">
                        <label>Confirm Password:</label><br>
                        <input type="password" class="tf" name="confPass"/>
                    </div>
                    <div class="form-element">
                        <input type="radio" name="sex" value="m" id="rb-male"><label for="rb-male">Male</label>
                        <input type="radio" name="sex" value="f" id="rb-female"><label for="rb-female">Female</label>    
                    </div>
                    <div class="for-element">
                        <label for="dob">Date of Birth:</label><br>
                        <input type="date" class="tf" id="dob" name="dob" required><br><br>
                    </div>
                    <div class="form-element">                         
                        <a class="form-link" href="../index.php">Login</a>
                    </div>
                    <button type="submit">Signin</button>
                </form>                
            </div>

        </div>
    </body>
</html>