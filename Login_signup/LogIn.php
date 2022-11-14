<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>LOG In</title>
</head>

<body>
<style>
     body{
        background-image: linear-gradient(to right top, #05372a, #005650, #00767f, #0095b4, #12b4eb);
            height: 150vh;
        }
        .tops{
            margin-top: 120px;
        }
</style>
        
    <form action="\BankProject/BackendLogin/Backlogin.php" method="post">
        <div class="columns">
            <div class="tops column is-offset-4">
                <label for="" class="is-size-3 has-text-white">Username or email </label>
                <input type="text" class="input is-primary column is-5" placeholder="Username or Email" name="username"><br>

                <label for="" class="is-size-3 has-text-white">Password</label>
                <input type="password" class="input is-primary column is-5" placeholder="Password " name="password"><br>

                <div class="mt-5">
                <button class="button is-primary px-6" type="submit"name="sub">LOG in</button>
                <button class="button is-inverted is-outlined px-6">Forget Password</button>
            </div>
        </div>
    </div>

</body>
</html>