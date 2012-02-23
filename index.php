
<?php

$patron_id = $_GET['p'];
$item_id = $_GET['i'];

?>

<form action="https://library.catalog.gvsu.edu/patroninfo~S17/<?php echo $patron_id; ?>/items" name="checkout_form" method="POST" id="checkout_form" >
<input type="hidden" name="requestRenewSome" value="requestRenewSome" />	
<input type="hidden" name="renew0" id="renew0" value="<?php echo $item_id; ?>" />
</form>

<script>
document.checkout_form.submit();
</script>
<noscript><input type="submit" value="Confirm" /></noscript>