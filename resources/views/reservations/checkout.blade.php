@extends('layouts.app')

@section('head')
<script src="https://js.stripe.com/v3/"></script>

<script>
  window.onload = function() {
    const stripe = Stripe('pk_test_gcKOxBOF606PpJw9lhEVEc2N');
 
    const elements = stripe.elements();
    const cardElement = elements.create('card',{'hidePostalCode':true});
 
    cardElement.mount('#card-element');

    const cardHolderName = document.getElementById('card-holder-name');
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;
    
    cardButton.addEventListener('click', async (e) => {
        const { setupIntent, error } = await stripe.confirmCardSetup(
            clientSecret, {
                payment_method: {
                    card: cardElement,
                    billing_details: { name: cardHolderName.value }
                }
            }
        );
    
        if (error) {
            // Display "error.message" to the user...
            document.getElementById('card-message').innerHTML = error.message;
        } else {
            // The card has been verified successfully...
            document.getElementById('card-message').innerHTML = 'Paiement accepté';

            console.log(setupIntent);
            location.href= '/reservations/representation/1/pay?paymentMethod='+setupIntent.payment_method;
    /*        const headers = {
              'method':'POST',
              'mode':'cors',
              'body': JSON.stringify({'paymentId' : setupIntent.payment_method}),
            };

            const xhr = new XMLHttpRequest();

            xhr.onload = function() {
              console.log('success');
            };

            xhr.onerror = function() {
              console.log('error');
            };

            /*xhr.open('POST','/reservations/representation/1/pay', true);
            xhr.send('data='+JSON.stringify({'paymentId' : setupIntent.payment_method}));
/*
            fetch('/reservations/representation/1/pay', headers)
              .then(function(response) {
                  response => response.json();
              });*/
        }
    });
  }
</script>
@endsection

@section('content')
<section>
    <input id="card-holder-name" type="text">

    <!-- Stripe Elements Placeholder -->
    <div id="card-element"></div>
    
    <button id="card-button" data-secret="{{ $intent->client_secret }}">
        Update Payment Method
    </button>
    <div id="card-message"></div>
  </section>
  @endsection