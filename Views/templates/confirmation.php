    <div class="container">
       <h1>Thank you for your purchase today!</h1>
    </br>
<?php foreach($Id->getResult('array') as $Id_item): ?>
    <div><p>Id: <?= $Id_item['Id']; ?> </p></div>
    <div><p>Status</p></div>
    <div><Amount</p></div>
    <div><p>Card Number: <?= $CardNumber ?></p></div>
    <div><p>Expiration: <?= $Month?> / <?= $Year?> </p></div>
    <div><p>Auth Code: <?= rand(); ?> </p></div>
    <div><p>Date: <?= date('Y-m-d H:i:s'); ?> </p></div>
    </div>
<?php endforeach; ?>
