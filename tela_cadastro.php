<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="src/template/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <main class="mainDiv">
        <form class="register" action="src/php/insert.php" method="POST">
        <?php if(isset($_GET['error'])) {
            if($_GET['error'] == 'passDif') {
                echo '<div class="alert alert-danger text-center mb-1 fs-3"><p>Password dont match</p></div>';
            }
        } ?>
            <div class="d-flex justify-content-center align-center ">
                <h1>Cadastro</h1>
            </div>
            <div class="registerItems">
                <input type="text" placeholder="User" id="registerUser" name="registerUser">
                <input type="email" placeholder="Email" id="registerEmail" name="registerEmail">
                <input type="password" placeholder="Password" id="registerPassword" name="registerPassword" >
                <input type="password" placeholder="Confirm Password" id="registerConfirmPassword" name="registerConfirmPassword">
            </div>
            <div class="registerButtons p-2 mt-3 d-flex justify-content-center gap-2">
                <button type="reset" class="btn btn-secondary" id="cancel">Cancel</button>
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
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