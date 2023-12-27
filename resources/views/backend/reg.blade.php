<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Form in HTML and CSS | Codehal</title>
    <link rel="stylesheet" href="{{ asset('css/style-log.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>

    <div class="form-box login">
        <h3 class="animation" style-log="--i:0; --j:21;">Login</h3>

        <form action="#">
            <div class="input-box animation" style-log="--i:1; --j:22;">
                <input type="text" required>
                <label>Username</label>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box animation" style-log="--i:2; --j:23;">
                <input type="password" required>
                <label>Password</label>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="btn animation" style-log="--i:3; --j:24;">Login</button>
            <div class="logreg-link animation" style-log="--i:4; --j:25;">
                <p>Don't have an account? <a href="#" class="register-link">Sign Up</a> </p>
            </div>
        </form>
    </div>
    <div class="info-text login">
        <h2 class="animation" style-log="--i:0; --j:20;">Welcome Back!</h2>
        <p class="animation" style-log="--i:1; --j:21;">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
    </div>

    
    <div class="form-box register">
        <h3 class="animation" style-log="--i:17; --j:0;">Sign Up</h3>
        <form action="#">            
            <div class="input-box animation" style-log="--i:18; --j:1;">
                <input type="text" required>
                <label>Username</label>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box animation" style-log="--i:19; --j:2;">
                <input type="text" required>
                <label>Email</label>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box animation" style-log="--i:20; --j:3;">
                <input type="password" required>
                <label>Password</label>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="btn animation" style-log="--i:21; --j:4;">Sign Up</button>
            <div class="logreg-link animation" style-log="--i:22; --j:5;">
                <p>Already have an account? <a href="#" class="login-link">Login</a> </p>
            </div>
        </form>
    </div>
    <div class="info-text register">
        <h2 class="animation" style-log="--i:17; --j:0;">Welcome Back!</h2>
        <p class="animation" style-log="--i:18; --j:1;">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
    </div>
</div> 


 <script src="{{asset('script-log.js')}}"></script>  
</body>

</html>