<?php
session_start();
$total = NULL;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Lin Ye - Data Form</title>

  <!--ini adalah cssnya-->
  <link rel="stylesheet" type="text/css" href="css/paystyle.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--ini adalah stylesheet css direktori tambahan-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!--ini adalah link font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2>DATA FORM</h2>
        </div>
        <!--bagian ini adalah bagian form-->
        <form action="payments.php" method="post">
          <div class="card-details">
          <div class="row">
            <div class="form-group col-sm-12">
              <label for="full-name">Full Name</label>                
              <input id="full-name" name="nama" type="text" class="form-control" placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon1" required>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="card-number">Identity Number</label>
              <input id="card-number" name="identity" type="text" class="form-control" placeholder="Identity Number" aria-label="Card Holder" aria-describedby="basic-addon1" required>
            </div>
            <div class="form-group col-sm-6">
              <label for="card-number">Phone Number</label>
              <input id="card-number" name="phone" type="text" class="form-control" placeholder="Phone Number" aria-label="Card Holder" aria-describedby="basic-addon1" required>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-12">
              <label for="card-number">Address Detail</label>
              <textarea id="card-number" name="address" type="text" class="form-control" placeholder="Address Detail" aria-label="Card Holder" aria-describedby="basic-addon1" required></textarea>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="">City</label>
              <div class="input-group expiration-date">
                <input type="text" name="city" class="form-control" placeholder="City" aria-describedby="basic-addon1" required>
              </div>
            </div>
            <div class="form-group col-sm-6">
              <label for="">Postal Code</label>
              <div class="input-group expiration-date">
                <input type="text" name="postalcode" class="form-control" placeholder="Zip Postal" aria-describedby="basic-addon1" required>
              </div>
            </div>
            <hr>
            <div class="form-group col-sm-6">
              <label for="">Time</label>
              <div class="input-group expiration-date">
                <select class="form-control" name="time" required>
                  <option>Choose Time</option>
                  <option>1 Days</option>
                  <option>3 Days</option>
                  <option>5 Days</option>
                </select>
                </div>
            </div>
            <div class="form-group col-sm-6">
                <label for="">Expiration Date</label>
                <div class="input-group expiration-date">
                  <input type="text" class="form-control" placeholder="MM" name="monthcc" aria-label="MM" aria-describedby="basic-addon1" required>
                  <span class="date-separator">/</span>
                  <input type="text" class="form-control" placeholder="YY" name="yearcc" aria-label="YY" aria-describedby="basic-addon1" required>
                </div>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">Card Number</label>
                <input id="card-number" type="text" class="form-control" name="cardnumber" placeholder="Card Number" aria-label="Card Holder" aria-describedby="basic-addon1" required>
              </div>
              <div class="form-group col-sm-4">
                <label for="cvc">CVC</label>
                <input id="cvc" type="text" class="form-control" name="cvc" placeholder="CVC" aria-label="Card Holder" aria-describedby="basic-addon1" required>
              </div>
            <div class="form-group col-sm-12">
              <input name="" type="submit" class="btn btn-primary btn-block" value="Submit" /> 
            </div>
          </div>
        </div>
      </form>
      </div>
    </section>
  </main>
</body>
<!--disini ada script direktori tambahan-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
