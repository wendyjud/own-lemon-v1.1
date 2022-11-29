<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Payment;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use PayPal\Exception\PayPalConnectionException;

//use Config;


class PaymentController extends Controller
{
    //

    private $apiContext;

    public function __construct()
    {
        $payPalConfig = Config::get('paypal');
        require('../vendor/autoload.php');
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                $payPalConfig['client_id'],
                $payPalConfig['secret']
            )
        );

        $this->apiContext->setConfig($payPalConfig['settings']);
    }

    // ...

    public function payWithPayPal()
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal('3.99');
        $amount->setCurrency('USD');

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        // $transaction->setDescription('See your IQ results');

        $callbackUrl = url('/status');

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($this->apiContext);
            return redirect()->away($payment->getApprovalLink());
        } catch (PayPalConnectionException $ex) {
            echo $ex->getData();
        }
    }

    public function payPalStatus(Request $request)
    {
        //dd($request->all());
        $paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');
        $token = $request->input('token');
        if (!$paymentId || !$payerId || !$token) {
            $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
            return redirect('/paypal/failed')->with(compact('status'));
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

         //Execute the payment 
        $result = $payment->execute($execution, $this->apiContext);
        //dd($result);

        
        if ($result->getState() === 'approved') {
            $status = 'Gracias! El pago a través de PayPal se ha ralizado correctamente.';
            return redirect('/pago-status')->with(compact('status'));

        }

        $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
        return redirect('/pago-status')->with(compact('status'));

    }
}
