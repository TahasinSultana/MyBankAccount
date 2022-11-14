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
            background-image: linear-gradient(to right top, #353705, #564200, #814600, #b43d00, #eb1227);
            height: 105vh;
        }
        .tops{
            margin-top: 120px;
        }
    </style>
<form action="\BankProject/TransactionBackend/airtimebackend.php" method="post">
    <div class="columns">
            <div class="tops column is-offset-4">
            <label for="" class="is-size-3 has-text-white">Phone  Number</label><br>
			<input type="text" class="input is-primary  column is-5" placeholder="Phone Number" name="phone_number"><br>


			<label for="" class="is-size-3 has-text-white">Amount  </label><br>
			<input type="text" class="input is-primary column is-5" placeholder="Amount" name="amount_to_buy"><br>


			<label for="" class="is-size-3 has-text-white">Pin Number </label><br>
			<input type="text" class="input is-primary column is-5" placeholder="Pin Number" name="pin"><br>
                <div class="mt-5">
                <button class="button is-info px-6" type="submit"name="submit">Buy</button>
                
            </div>
        </div>
    </div>
    </form>
</body>
</html>