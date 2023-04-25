<?php include 'cart-select.php' ?>

<?php

// echo "test";

// print_r($product_array);

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$address2 = $_POST['address2'];
$country = $_POST['country'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$paymentMethod = $_POST['paymentMethod'];
$ccName = $_POST['cc-name'];
$ccNumber = $_POST['cc-number'];
$ccExpiration = $_POST['cc-expiration'];
$ccCVV = $_POST['cc-cvv'];

$date = date("l jS \of F Y h:i:s A");

// echo $date;
// echo "test";
// echo $username;
// echo $firstName, $lastName, $username, $address, $address2, $country, $state, $zip, $paymentMethod, $ccName, $ccNumber, $ccExpiration, $ccCVV;

// Subject
$subject = 'Order Confirmation|' . $date . '[' . $username . ']';

// echo $subject;

// Message
$form_details = '
<ul>
    <li>First Name: ' . $firstName . '</li>
    <li>Last Name: ' . $lastName . '</li>
    <li>Email: ' . $email . '</li>
    <li>Username: ' . $username . '</li>
    <li>Address:' . $address . '</li>
    <li>Address cont: ' . $address2 . '</li>
    <li>Country:' . $country . '</li>
    <li>State:' . $state . '</li>
    <li>Postcode:' . $zip . '</li>
  </ul>';

// echo $form_details;

$cart_details = '<table><tbody>';

foreach ($product_array as $product) {
  $cart_details .= '
    <tr>
        <td>' . $product["product_name"] . '</td>
        <td>' . $product["unit_price"] . '</td>
        <td>' . $product["quantity"] . '</td>
    </tr>';
}

$cart_details .= '</tbody></table>';

// echo $cart_details;

$message = '<h2>Here is the information we got from you:</h2><br>' . $form_details . '<br><h3>Here is the order details:</h3><br>' . $cart_details;

echo $message;

$to = $email;

$encoding = "utf-8";

// Preferences for Subject field
$subject_preferences = array(
  "input-charset" => $encoding,
  "output-charset" => $encoding,
  "line-length" => 76,
  "line-break-chars" => "\r\n"
);

// Mail header
$header = "Content-type: text/html; charset=" . $encoding . " \r\n";
$header .= "From: " . $from_name . " <" . $from_mail . "> \r\n";
$header .= "MIME-Version: 1.0 \r\n";
$header .= "Content-Transfer-Encoding: 8bit \r\n";
$header .= "Date: " . date("r (T)") . " \r\n";
$header .= iconv_mime_encode("Subject", $mail_subject, $subject_preferences);

// Additional headers
$headers .= 'To: Sid <sidakaulakh@gmail.com>' . "\r\n";
$headers .= 'From: Grocery Store(donotreply) <sidakaulakh@gmail.com>' . "\r\n";


// Mail it
if (mail($to, $subject, $message, $headers)) {
  echo "Mail Sent";
} else {
  echo "Mail Not Sent";
}
?>