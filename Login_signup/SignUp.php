<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>SignUp</title>
</head>
<body>
<style>
     body{
            background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
            height: 150vh;
        }
</style>

<div class="columns">
    <div class="column is-offset-4">
        <h1 class="title has-text-white"> EASY  BANK  LTD <h1>
</div>
</div>

<form action="\BankProject/BackendSignUp/backSignup.php" method="post">
    <div class="columns">
        <div class="column is-offset-4">
            <label for="" class="is-size-5 has-text-white"> Username </label><br>
            <input type="text" class="input is-outlined column is-5" name="username"><br>

            <label for="" class="is-size-5 has-text-white"> E-mail </label><br>
            <input type="text" class="input is-outlined    column is-5" name="email"><br>

            <label for="" class="is-size-5 has-text-white">Make a 4 digit pin</label><br>
            <input type="text" class="input is-outlined     column is-5" name="pin"><br>

            <label for="" class="is-size-5 has-text-white">Phone number</label><br>
            <input type="text" class="input is-outlined    column is-5" name="phone_number"><br>

            <label for="" class="is-size-5 has-text-white">Birth Date</label><br>
            <input type="date" class="input is-outlined  column is-5" name="birth_date"><br>

            <label for="" class="is-size-5 has-text-white">Address</label><br>
            <input type="text" class="input is-outlined    column is-5" name="location"><br>

            <label for="" class="is-size-5 has-text-white">Password</label><br>
            <input type="text" class="input is-outlined  column is-5" name="password"><br>

            <label for="" class="is-size-5 has-text-white">Confirm Password</label><br>
            <input type="text" class="input is-outlined   column is-5" name="password_pass"><br>

            <div class="mt-5">
                <button class="button is-primary px-6" type="submit"name="sub">SignUP</button>
                <button class="button is-inverted is-outlined px-6">Log in</button>
            </div>

            
    </div>
    </div>
    
    </form>

</body>
</html>