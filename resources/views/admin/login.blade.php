<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="assets/auth/assets/img/favicon.png" rel="icon">
    <link href="assets/auth/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="assets/auth/assets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body class="d-flex justify-content-center align-items-center">
    <section>
        <div class="logo text-center">
            <img src="assets/auth/assets/img/logo.png" alt="logo" width="300px">
        </div>
        <div class="d-flex  justify-content-center">
            <div class="cardForm shadow p-5 m-3 ">
                <h3 class="blueColor text-center">Login to Your Account</h3>
                <p class="text-center text-secondary">Enter your email & password to login</p>
                <div class="alert alert-danger" style="opacity:0" id='errorLoginForm' role="alert">
                    
                </div>
                <form name="loginForm" class="d-flex flex-column justify-content-between gap-4">
                    <label class="text-secondary">Your Email 
                        <input type="email" name="email" id="email" placeholder="Your Email ..." class="form-control mt-1">
                        <span id='errorMessage1' class='text-danger' style='opacity:0'>_</span>
                    </label>
                    <label class="text-secondary">Your Password 
                        <input type="password" name="password" id="password"  class="form-control mt-1">
                        <span id='errorMessage2' class='text-danger' style='opacity:0'>_</span>
                    </label>
                    <label class="text-secondary">
                        <input type="checkbox" class="form-check-input"> Remember me
                    </label>
                    <button type="button" id='submit' class="btn btn-primary">Login</button>
                    <p class="text-secondary">Don't have account? <a href="<?=$_ENV['APP_URL']."/Registre"?>" class="blueColor no-underline"> Create an account</a></p>
                </form>
            </div>
        </div>
        
        <div class="footer text-center">
            <p>Designed by <span class="blueColor">Rabie Ait Imghi</span></p>
        </div>
    </section>
    <script src="assets/auth/assets/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>