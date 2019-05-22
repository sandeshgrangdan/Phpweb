<?php
session_start();
unset($_SESSION["shopping_cart"]);
  if(!empty($_GET['tid'] && !empty($_GET['product']))) {
    $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

    $tid = $GET['tid'];
    $product = $GET['product'];
    $_SESSION['c_id'] = $_GET['tid'];
    $amt = $_GET['amount'];
  } else {
    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>QR Code generator</title>
  <style type="text/css">
  html {
    font-family: sans-serif;
  }
  td {
    vertical-align: top;
    padding-top: 0.2em;
    padding-bottom: 0.2em;
  }
  td:first-child {
    white-space: pre;
    padding-right: 0.5em;
  }
  input[type=radio], input[type=checkbox] {
    margin: 0em;
    padding: 0em;
  }
  input[type=radio] + label, input[type=checkbox] + label {
    margin-right: 0.8em;
    padding-left: 0.2em;
  }
  </style>
</head>

<body>
<h1>Check Your Invoice With Scanner</h1>

<a href="user_map.php?c_id=<?php echo $_GET["tid"];?>" >Continue</a>
<form action="#" method="get" onsubmit="return false;">
  <table class="noborder" style="width:100%">
    <tbody>
      <tr>
        <td><strong>Text string:</strong></td>
        <td style="width:100%"><textarea placeholder="Enter your text to be put into the QR Code" id="text-input" style="width:100%; max-width:30em; height:5em; font-family:inherit" ><?php echo "
        TransactionID -> ".$tid."
        Product -> ".$product."
        Amount -> ".number_format($amt,3)."
        Email -> ".$_SESSION['email'];?></textarea></td>
      </tr>
      <tr>
        <td><strong>QR Code:</strong></td>
        <td>
          <canvas id="qrcode-canvas" style="padding:1em; background-color:#E8E8E8"></canvas>
          <svg id="qrcode-svg" style="width:30em; height:30em; padding:1em; background-color:#E8E8E8">
            <rect width="100%" height="100%" fill="#FFFFFF" stroke-width="0"></rect>
            <path d="" fill="#000000" stroke-width="0"></path>
          </svg>
        </td>
      </tr>
      <tr>
        <td><strong>Error correction:</strong></td>
        <td>
          <input type="radio" name="errcorlvl" id="errcorlvl-low" checked="checked"><label for="errcorlvl-low">Low</label>
          <input type="radio" name="errcorlvl" id="errcorlvl-medium"><label for="errcorlvl-medium">Medium</label>
          <input type="radio" name="errcorlvl" id="errcorlvl-quartile"><label for="errcorlvl-quartile">Quartile</label>
          <input type="radio" name="errcorlvl" id="errcorlvl-high"><label for="errcorlvl-high">High</label>
        </td>
      </tr>
      <tr>
        <td>Output format:</td>
        <td>
          <input type="radio" name="output-format" id="output-format-bitmap" checked="checked"><label for="output-format-bitmap">Bitmap</label>
          <input type="radio" name="output-format" id="output-format-vector"><label for="output-format-vector">Vector</label>
        </td>
      </tr>
      <tr>
        <td>Border:</td>
        <td><input type="number" value="4" min="0" max="100" step="1" id="border-input" style="width:4em"> modules</td>
      </tr>
      <tr id="scale-row">
        <td>Scale:</td>
        <td><input type="number" value="8" min="1" max="30" step="1" id="scale-input" style="width:4em"> pixels per module</td>
      </tr>
      <tr>
        <td>Version range:</td>
        <td>
          Minimum = <input type="number" value="1"  min="1" max="40" step="1" id="version-min-input" style="width:4em" oninput="app.handleVersionMinMax('min');">,
          maximum = <input type="number" value="40" min="1" max="40" step="1" id="version-max-input" style="width:4em" oninput="app.handleVersionMinMax('max');">
        </td>
      </tr>
      <tr>
        <td>Mask pattern:</td>
        <td><input type="number" value="-1" min="-1" max="7" step="1" id="mask-input" style="width:4em"> (−1 for automatic, 0 to 7 for manual)</td>
      </tr>
      <tr>
        <td>Boost ECC:</td>
        <td><input type="checkbox" checked="checked" id="boost-ecc-input"><label for="boost-ecc-input">Increase <abbr title="error-correcting code">ECC</abbr> level within same version</label></td>
      </tr>
      <tr>
        <td>Statistics:</td>
        <td id="statistics-output" style="white-space:pre"></td>
      </tr>
      <tr id="svg-xml-row">
        <td>SVG XML code:</td>
        <td>
          <textarea id="svg-xml-output" readonly="readonly" style="width:100%; max-width:50em; height:15em; font-family:monospace"></textarea>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<script type="application/javascript" src="js/qrcodegen.js"></script>
<script type="application/javascript" src="js/qrcodegen-demo.js"></script>

<hr>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Thank You For Using Dherai Sasto Deal</title>
</head>
<body>
  <div class="container mt-4">
    <h2>Thank you for purchasing <?php echo $product; ?></h2>
    <hr>
    <p>Your transaction ID is <?php echo $tid; ?></p>
    <p>Check your email for more info</p>
    <p><a href="user_map.php?c_id=<?php echo $tid; ?>" class="btn btn-light mt-2">Add Location</a></p>
  </div>
</body>
</html> -->