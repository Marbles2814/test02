
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
<?php foreach($flights as $flights_item): ?>
<tr>   
    <td><p><a href="/purchase">Choose this flight</a></p> </td>
    <td><?php echo $flights_item['FlightNum']; ?></td>
    <td><?php echo $flights_item['Airline']; ?></td>
    <td><?php echo $flights_item['Departs']; ?></td>
    <td><?php echo $flights_item['Arrives']; ?></td>
    <td><?php echo $flights_item['Price']; ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

