<?php
session_start();
$total = NULL;
?>
<!DOCTYPE html>
<html>
<head>
<title>Lin Ye - Payment</title>

<!--ini adalah cssnya-->
<link rel="stylesheet" type="text/css" href="css/paystyle.css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--ini adalah stylesheet css direktori tambahan-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<!--ini adalah link font-->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<!--bagian javascript ini berfungsi sebagai alert yang jika kalau kita menekan tombol akan muncul pesan di atas-->
	<script type="text/javascript">
		function disp_alert(txt)
		{if (confirm("Succsessful,Thanks for Renting.")) window.location = "index.html";}
	</script>
</head>
<body>
<?php
//Proses Penyeleksian Kondisi kode barang
$nama = $_POST['nama'];
$identity = $_POST['identity'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$postalcode = $_POST['postalcode'];
$time = $_POST['time'];
$monthcc = $_POST['monthcc'];
$yearcc = $_POST['yearcc'];
$cardnumber = $_POST['cardnumber'];
$cvc = $_POST['cvc'];

if ($time=="1 Days")
{
	$rentdays="240.000";
}
else if ($time=="3 Days")
{
	$rentdays="720.000";
}
else if ($time=="5 Days")
{
	$rentdays="1.200.000";
}
else
{
	echo"Nothing";}
?>

<body>
  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2>PAYMENT INFORMATION</h2>
        </div>
        <!--bagian ini adalah bagian form-->
		<div class="card-details">
          <div class="row">
            <div class="form-group col-sm-12">
              <label for="full-name">Full Name</label>                
              <input id="full-name" name="nama" type="text" class="form-control" placeholder="<?php echo $nama; ?>" aria-label="Full Name" aria-describedby="basic-addon1" disabled>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="card-number">Identity Number</label>
              <input id="card-number" name="identity" type="text" class="form-control" placeholder="<?php echo $identity; ?>" aria-label="Card Holder" aria-describedby="basic-addon1" disabled>
            </div>
            <div class="form-group col-sm-6">
              <label for="card-number">Phone Number</label>
              <input id="card-number" name="phone" type="text" class="form-control" placeholder="<?php echo $phone; ?>" aria-label="Card Holder" aria-describedby="basic-addon1" disabled>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-12">
              <label for="card-number">Address Detail</label>
              <textarea id="card-number" name="address" type="text" class="form-control" placeholder="<?php echo $address; ?>" aria-label="Card Holder" aria-describedby="basic-addon1" disabled></textarea>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="">City</label>
              <div class="input-group expiration-date">
                <input type="text" name="city" class="form-control" placeholder="<?php echo $city; ?>" aria-describedby="basic-addon1" disabled>
              </div>
            </div>
            <div class="form-group col-sm-6">
              <label for="">Postal Code</label>
              <div class="input-group expiration-date">
                <input type="text" name="postalcode" class="form-control" placeholder="<?php echo $postalcode; ?>" aria-describedby="basic-addon1" disabled>
              </div>
            </div>
            <hr>
            <div class="form-group col-sm-6">
			<label for="">Price - <?php echo $time; ?></label>
				<div class="input-group expiration-date">
					<input type="text" name="time" class="form-control" placeholder="Rp. <?php echo $rentdays; ?>" aria-describedby="basic-addon1" disabled>
				</div>
            </div>
            <div class="form-group col-sm-6">
                <label for="">Expiration Date</label>
                <div class="input-group expiration-date">
                  <input type="text" class="form-control" placeholder="<?php echo $monthcc; ?>" aria-label="MM" aria-describedby="basic-addon1" disabled>
                  <span class="date-separator">/</span>
                  <input type="text" class="form-control" placeholder="<?php echo $yearcc; ?>" aria-label="YY" aria-describedby="basic-addon1" disabled>
                </div>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">Card Number</label>
                <input id="card-number" type="text" class="form-control" placeholder="<?php echo $cardnumber; ?>" aria-label="Card Holder" aria-describedby="basic-addon1" disabled>
              </div>
              <div class="form-group col-sm-4">
                <label for="cvc">CVC</label>
                <input id="cvc" type="text" class="form-control" placeholder="<?php echo $cvc; ?>" aria-label="Card Holder" aria-describedby="basic-addon1" disabled>
              </div>
			<div class="form-group col-sm-3" style="margin-left:50%;">
				<button type="button" class="btn btn-info btn-block" onclick="history.back()">Go Back</button>
			</div>
            <div class="form-group col-sm-3">
			  <button type="button" class="btn btn-primary btn-block" onclick="disp_alert()" value="Successful">Proceed</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
<!--disini ada script direktori tambahan-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>