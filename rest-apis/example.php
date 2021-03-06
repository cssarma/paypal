<?php
require_once("requests.php");

$paypal = new paypal();

$request = '{
  "intent": "sale",
  "payer": {
    "payment_method": "credit_card",
    "funding_instruments": [
      {
        "credit_card": {
          "number": "5500005555555559",
          "type": "mastercard",
          "expire_month": 12,
          "expire_year": 2018,
          "cvv2": 111,
          "first_name": "Joe",
          "last_name": "Shopper"
        }
      }
    ]
  },
  "transactions": [
    {
      "amount": {
        "total": "7.47",
        "currency": "USD"
      },
      "description": "This is the payment transaction description."
    }
  ]
}';

//print_r($paypal->process_payment($request));

$credit_card = array("type" => "visa",
                     "number" => "4417119669820331",
                     "expire_month" => "11",
                     "expire_year" => "2018",
                     "first_name" => "Joe",
                     "last_name" => "Shopper");

//print_r($paypal->store_cc($credit_card));

//$ccid = "CARD-35Y54265JC7133454KFM5G4I";
//print_r($paypal->fetch_cc($ccid));

//$id = "PAY-5JH752195H683312PKFM5GNI";
//print_r($paypal->fetch_single_payment($id));

/*$sale_id = "8RV385008S218341G";
$paypal->refund_sale($sale_id);*/

$request = '{
  "intent":"sale",
  "redirect_urls":{
    "return_url":"http://www.return.com",
    "cancel_url":"http://www.cancel.com"
  },
  "payer":{
    "payment_method":"paypal"
  },
  "transactions":[
    {
      "amount":{
        "total":"7.47",
        "currency":"USD"
      },
      "description":"This is the payment transaction description."
    }
  ]
}';

//$paypal->process_payment($request);
?>
