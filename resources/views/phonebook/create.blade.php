<?php
/*
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md

require_once '../vendor/twilio/sdk/src/Twilio/autoload.php';

use Twilio\Rest\Client;

$sid    = "AC9773e294923d8caacf8008bef6e7ba0d";
$token  = "2d20c60fa96b15bb10cfebcad8b6f33f";
$twilio = new Client($sid, $token);

$message = $twilio->messages
    ->create("+447384577069", // to
        array(
            "from" => "+12514511145",
            "body" => "Your message"
        )
    );

print($message->sid);
*/
?>

<?php
/*
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md

require_once '../vendor/twilio/sdk/src/Twilio/autoload.php';

use Twilio\Rest\Client;

if(isset($_POST['phonenumber']) && ($_POST['message']))  {

    $sid    = "AC9773e294923d8caacf8008bef6e7ba0d";
    $token  = "2d20c60fa96b15bb10cfebcad8b6f33f";
    $twilio = new Client($sid, $token);

    $message = $twilio->messages
        ->create(
            $_POST["phonenumber"], array(
                "from" => "+12514511145",
                "body" => $_POST["message"]
            )
        );

    print($message->sid);

}
*/
?>







@extends('layouts.app')

@include('layouts.nav')

<div class="container">
    @section('content')
        @include('layouts.navigation')

        <form action="/home" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Send Message</h1>
                    </div>

                    <div class="form-group row">
                        <label for="phonenumber" class="col-form-label">Phone Number</label>
                        <input id="phonenumber"
                               type="text"
                               class="form-control"
                               name="phonenumber"
                               autocomplete="phonenumber" autofocus>
                        @error('phonenumber')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="message" class="col-md-4 col-form-label">Message</label>

                        <textarea id="message"
                                  maxlength="2000"
                                  type="text"
                                  class="form-control @error('message') is-invalid @enderror"
                                  name="message"
                                  autocomplete="message"
                                  autofocus>
                        </textarea>
                        <p>
                            <span id="wordCount">2000</span> Characters
                        </p>

                        @error('message')
                        <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Send Message</button>
                    </div>
                </div>
            </div>
        </form>
    @endsection
</div>
