<p>News item created successfully.</p>
<form action="<?php base_url();?>confirmation" method = 'post'>
<input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
<input type="hidden" name="cardNumber" value="<?= set_value('CreditCard') ?>">
<input type="hidden" name="Rand1" value="<?= set_value('Rand1') ?>">
<input type="hidden" name="Rand2" value="<?= set_value('Rand2') ?>" >
<input type="hidden" name="Month" value="<?= set_value('Month') ?>">
<input type="hidden" name="Year" value="<?= set_value('Year') ?>" >
<input type="submit" name="submit" value="Continue">
</form>
