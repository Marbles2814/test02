
</br>
    <h3>Flight from <?php echo $from;?> to <?php echo $to;?> </h3>
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
    <td><p><a href="/reserve">Choose this flight</a></p> </td>
    <td><?php echo $flights_item['FlightNum']; ?></td>
    <td><?php echo $flights_item['Airline']; ?></td>
    <td><?php echo $flights_item['Departs']; ?></td>
    <td><?php echo $flights_item['Arrives']; ?></td>
    <td><?php echo $flights_item['Price']; ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

