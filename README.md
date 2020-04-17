# Payment-Gateway-Using-PHP-Part-2
## Letest Payment Gateway Using php ,Css, Bootstrap , Html-5  Jquery

>First you create an account on Instamojo https://test.instamojo.com/


>All Details for Testing Purpose Only !
>Select -> Card Payment type

``` text
    Debit = 4242 4242 4242 4242
    Expiry =1221
    cvv = 111
    security pin = 1221
```

Assists you to programmatically create, edit and delete Links on Instamojo in PHP

![home](https://user-images.githubusercontent.com/45098599/79573184-d81a0b00-80db-11ea-9d73-e5193688f4fc.png)
![fill](https://user-images.githubusercontent.com/45098599/79573375-31823a00-80dc-11ea-8ea6-0424162b37b0.png)

![fill-input](https://user-images.githubusercontent.com/45098599/79573854-e157a780-80dc-11ea-910b-ae1273035747.png)
![fill-second](https://user-images.githubusercontent.com/45098599/79573954-0b10ce80-80dd-11ea-8a55-773e3d5fdf0c.png)

![card-fill](https://user-images.githubusercontent.com/45098599/79573259-f849ca00-80db-11ea-9145-4bd68b09dcb9.png)
![select card type](https://user-images.githubusercontent.com/45098599/79573266-fbdd5100-80db-11ea-9eac-629f39911121.png)
![thank you](https://user-images.githubusercontent.com/45098599/79573267-fbdd5100-80db-11ea-901e-461d190d44b2.png)


![Payment Gateway GIF-downsized](https://user-images.githubusercontent.com/45098599/79464303-8a3bcf00-8017-11ea-916a-49905128caaa.gif)


.

Note: If you're using this wrapper with our sandbox environment https://test.instamojo.com/ then you should pass 'https://test.instamojo.com/api/1.1/' as third argument to the Instamojo class while initializing it. API key and Auth token for the same can be obtained from https://test.instamojo.com/developers/ (Details: Test Or Sandbox Account).

>$api = new Instamojo\Instamojo(API_KEY, AUTH_TOKEN, 'https://test.instamojo.com/api/1.1/');


Installing via Composer
$ php composer.phar require instamojo/instamojo-php
Note: If you're not using Composer then directly include the contents of src directory in your project.

>Usage
```php
$api = new Instamojo\Instamojo(API_KEY, AUTH_TOKEN);
Create a new Payment Request
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "FIFA 16",
        "amount" => "3499",
        "send_email" => true,
        "email" => "foo@example.com",
        "redirect_url" => "http://www.example.com/handle_redirect.php"
        ));
    print_r($response);
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
```
This will give you JSON object containing details of the Payment Request that was just created.

Get the status or details of a Payment Request
```php
try {
    $response = $api->paymentRequestStatus(['PAYMENT REQUEST ID']);
    print_r($response);
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
```
This will give you JSON object containing details of the Payment Request and the payments related to it. Key for payments is 'payments'.

Here ['PAYMENT REQUEST ID'] is the value of 'id' key returned by the paymentRequestCreate() query.

>Get the status of a Payment related to a Payment Request
```php
try {
    $response = $api->paymentRequestPaymentStatus(['PAYMENT REQUEST ID'], ['PAYMENT ID']);
    print_r($response['purpose']);  // print purpose of payment request
    print_r($response['payment']['status']);  // print status of payment
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
```

This will give you JSON object containing details of the Payment Request and the payments related to it. Key for payments is 'payments'.

Here ['PAYMENT REQUEST ID'] is the value of 'id' key returned by the paymentRequestCreate() query and ['PAYMENT ID'] is the Payment ID received with redirection URL or webhook.

>Get a list of Payment Requests
```php
try {
    $response = $api->paymentRequestsList();
    print_r($response);
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
```

This will give you an array containing Payment Requests created so far. Note that the payments related to individual Payment Request are not returned with this query.

paymentRequestsList() also accepts optional parameters for pagination as well as filtering based on created_at and updated_at fields.

paymentRequestsList($limit=null, $page=null, $max_created_at=null, $min_created_at=null, $max_modified_at=null, $min_modified_at=null)
For example:

$response = $api->paymentRequestsList(50, 1, "2015-11-19T10:12:19Z", "2015-10-29T12:51:36Z");
For details related to supported datetime format check the documentation: https://www.instamojo.com/developers/request-a-payment-api/#toc-filtering-payment-requests

>Available Request a Payment Functions
>You have these functions to interact with the Request a Payment API:

paymentRequestCreate(array $payment_request) Create a new Payment Request.
paymentRequestStatus($id) Get details of Payment Request specified by its unique id.
paymentRequestsList(array $datetime_limits) Get a list of all Payment Requests. The $datetime_limits argument is optional an can be used to filter Payment Requests by their creation and modification date.
Payment Request Creation Parameters
Required
purpose: Purpose of the payment request. (max-characters: 30)
amount: Amount requested (min-value: 9 ; max-value: 200000)
Optional
buyer_name: Name of the payer. (max-characters: 100)
email: Email of the payer. (max-characters: 75)
phone: Phone number of the payer.
send_email: Set this to true if you want to send email to the payer if email is specified. If email is not specified then an error is raised. (default value: false)
send_sms: Set this to true if you want to send SMS to the payer if phone is specified. If phone is not specified then an error is raised. (default value: false)
redirect_url: set this to a thank-you page on your site. Buyers will be redirected here after successful payment.
webhook: set this to a URL that can accept POST requests made by Instamojo server after successful payment.
allow_repeated_payments: To disallow multiple successful payments on a Payment Request pass false for this field. If this is set to false then the link is not accessible publicly after first successful payment, though you can still access it using API(default value: true).

>Further documentation is available at https://docs.instamojo.com/v1.1/docs
