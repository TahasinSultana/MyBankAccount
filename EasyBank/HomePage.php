<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Easy Bank ltd</title>
</head>
<body>
<style>
    body{
        background-image: linear-gradient(to right top, #372e05, #3e4c21, #3d6a46, #338975, #2ca7ac);
        height: 120vh;
    }
    .easy{
        margin-top: 150px;
    }
     /*background-image: linear-gradient(to right top, #051937, #282451, #512b66, #7e2d73, #ac2c75);*/
</style>

<nav class="navbar has-background-primary-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <h1 class="title is-size-4 has-text-white">EASY BANK LTD</h1>
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary mr-6"href="\BankProject/Login_signup/SignUp.php">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light" href="\BankProject/Login_signup/LogIn.php">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
<div class="easy columns">
    <div class="column ml-6">
        <div class="card">
            <header class="card-header title">MOVING FUNDS SPEEDLY</header>
            <div class="card-content">
                <p> Easy Bank is an Online banking allows a user to conduct financial transactions via the Internet. 
                    Online banking is also known as Internet banking or web banking. 
                    Easy Online banking offers customers almost every service traditionally available through a local branch including deposits, transfers, and online bill payments. </p>

</div>
<form action="">
    <button class="button is-success is-outlined ml-5" formaction="\BankProject/Transation/Checkbalance.php">Check Balance </button>
    <button class="button is-info " formaction="\BankProject/Transation/buyairtime.php">Buy Airtime </button>
    <button class="button is-info has-background-black mb-5" formaction="\BankProject/Transation/Deposit.php">Deposit Money</button>
</form>
</div>
</div>
<div class="column mr-6">
        <div class="card">
            <header class="card-header title">Learn More</header>
            <div class="card-content">
                <p> Banking online means accessing your bank account and carrying out financial transactions through the internet on your smartphone, tablet or computer.
                     It's quick, usually free and allows you to do tasks, such as paying bills and transferring money, without having to visit or call your bank. </p>

</div>
<form action="">
    
    <button class="button is-outlined is-inverted ml-5">Customer Care </button>
    <button class="button is-success mb-5">Know More</button>
</form>
</div>
</div>

</body>
</html>