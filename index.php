<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="src/template/css/styles.css">
    <link rel="stylesheet" href="src/lib/bootstrapIcons/icons-1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <main class="mainDiv">
        <form class="register" action="src/php/login.php" method="POST">
        <?php if(isset($_GET['error'])) {
            if($_GET['error'] == 'wPass') {
                echo '<div class="alert alert-danger text-center mb-1 p-1 fs-3 w-100"><p>Password dont match</p></div>';
            }
            if($_GET['error'] == 'wEmail') {
                echo '<div class="alert alert-danger text-center mb-1 p-1 fs-3 w-100"><p>Email dont exists</p></div>';
            }
        } ?>
            <div class="d-flex justify-content-center align-center flex-column text-center">
                <h1>Log In</h1>
                <i class="bi bi-piggy-bank-fill h2"></i>
            </div>
            <div class="registerItems mt-1">
                <input type="email" placeholder="Email" id="registerEmail" name="registerEmail">
                <input type="password" placeholder="Password" id="registerPassword" name="registerPassword" >
            </div>
            <div class="registerButtons p-2 mt-3 d-flex justify-content-center gap-2">
                <button type="reset" class="btn btn-secondary" id="cancel">Cancel</button>
                <button type="submit" class="btn btn-success" id="submit">Submit</button>
            </div>
            <div class="p-2 mt-3 d-flex justify-content-center mt-5">
                <label>Are not registered? <a class="signInButton text-decoration-none" href="tela_cadastro">sign In</a><label>
            </div>
        </form>
    </main>
    <script>
        let user = document.getElementById("registerUser");
        let mail = document.getElementById("registerEmail");
        let password = document.getElementById("registerPassword");
        let confirmPassword = document.getElementById("registerConfirmPassword");
        
    </script>
</body>
</html>
