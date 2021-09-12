<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <!-- step 1 -->
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
        <div id="card-element">
            <!-- Elements will create input elements here -->
        </div>

        <!-- We'll put the error messages in this element -->
       <div id="card-errors" role="alert"></div>

    <!-- step 2 -->
    <script>
        // Set your publishable key: remember to change this to your live publishable key in production
        // See your keys here: https://dashboard.stripe.com/apikeys
        var stripe = Stripe('pk_test_51JYbzlA6KkNfl0pkZxNpeWQlDD2bjtA6zkyNNLBK9T29i3RhLYhFJttkwNdZaSIDsLBe8SvXPJsHtMT9Hv1k0o2Y00FUfWOYEQ');
        var elements = stripe.elements();
        var card = elements.create("card");
        card.mount("#card-element");

        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
    </script>
</body>
</html>
