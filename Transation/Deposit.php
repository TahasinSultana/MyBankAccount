<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Deposit</title>
</head>
<body>
<style>
     body{
        background-image: linear-gradient(to right top, #2e0537, #560d5f, #831387, #b516b1, #eb12da);
        height: 105vh;
        }
        .tops{
            margin-top: 95px;
        }
</style>



<form action="\BankProject/TransactionBackend/depositbackend.php" method="post">
    <div class="columns">
        <div class="tops column is-offset-4">
        <label for="" class="is-size-5 has-text-white">Account Number</label><br>
			<input type="text" class="input is-outlined column is-5 " name="account_number"><br>

			<label for=""  class="is-size-5 has-text-white">Amount to Deposit</label><br>
			<input type="text" class="input is-outlined  column is-5" name="amount_to_deposit"><br>


			<label for=""  class="is-size-5 has-text-white">Account Name </label><br>
			<input type="text" class="input is-outlined   column is-5" name="account_name"><br>


			<label for=""  class="is-size-5 has-text-white">Depositor Name </label><br>
			<input type="text" class="input is-outlined     column is-5" name="depositor_name"><br>



            <label for="" class="is-size-5 has-text-white">Bank Name</label><br>
            <input type="text" class="input is-outlined  column is-5" readonly="" placeholder="Easy BAnk"><br>


            <div class="mt-5">
                <button class="button is-primary is-outlined px-6 mb-5" type="submit"name="submit">Transfer</button>
                
            </div>

            
    </div>
    </div>
    
    </form>

</body>
</html>