<?php
require('config.php');
?>
<form action="submit.php" method="post">
<script
src="https://checkout.stripe.com/checkout.js" class="stripe-button"
data-key="<?php echo $publishableKey?>"
data-amount="500"
data-name="CIGM MEMORIAL CHURCH"
data-description="PAYMENT"
data-image=""
data-currency="inr"
>
</script>
</form>
