<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>CheckBalance</title>
</head>
<body>
    <style>
        body{
        background-image: linear-gradient(to right top, #371605, #6a161b, #a20042, #d20082, #eb12da);
        height: 105vh;
        }
        .tops{
            margin-top: 120px;
        }
    </style>
<form action="\BankProject/TransactionBackend/checkbalance.php" method="post">
    <div class="columns">
            <div class="tops column is-offset-4">
            <label for="" class="is-size-3 has-text-white">Account Number</label><br>
			<input type="text" class="input is-primary  column is-5" placeholder="Account Number" name="account_number"><br>
			<label for="" class="is-size-3 has-text-white">Pin Number </label><br>
			<input type="text" class="input is-primary column is-5" placeholder="Pin Number" name="pin"><br>

                <div class="mt-5">
                <button class="button is-info px-6" type="submit"name="sub">Check Balance</button>
                
            </div>
        </div>
    </div>
    </form>
</body>
</html>