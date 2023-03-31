

</br>
    <h3>Flight from <?php echo $from?> to <?php echo $to;?> </h3>
    </br>

<table class="table">
<thead>
      <tr>
        <th></th>        
        <th>Number</th>
        <th>Airnline</th>
 	<th>Departs</th>
        <th>Arrives</th>
        <th>Price</th>
      </tr>
<tbody>
<?php foreach($flights->getResult('array') as $flights_item): ?>
<tr>
  <form action="<?php base_url();?>reserve" method = 'post'>   
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
    <td><input type="submit" class="btn btn-primary" value="Choose this flight"></td>
    <td><?php echo $flights_item['FlightNum']; ?></td>
    <td><?php echo $flights_item['Airline']; ?></td>
    <td><?php echo $flights_item['Departs']; ?></td>
    <td><?php echo $flights_item['Arrives']; ?></td>
    <td><?php echo $flights_item['Price']; ?></td>
  </form>
</tr>
<?php endforeach; ?>
</tbody>
</table>

