<form action="<?php base_url();?>flights" method='post'>
<input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
	
        <div class="container">
	    <h2>Choose your departure city:<br /></h2>
	    <select name="fromPort" class="custom-select">
	   <option value="Paris">Paris</option>
	   <option value="Philadelphia">Philadelphia</option>
	   <option value="Boston">Boston</option>
	   <option value="Portland">Portland</option>
	   <option value="San Diego">San Diego</option>
	   <option value="Mexico City">Mexico City</option>
	   <option value="Sao Paolo">Sao Paolo</option>
	   </select>
	</div>
	   
	<div class="container">
	    <h2><br />Choose your destination city:<br /></h2>
	    <select name="toPort" class="custom-select">
	    <option value="Buenos Aires">Buenos Aires</option>
	    <option value="Rome">Rome</option>
	    <option value="London">London</option>
	    <option value="Berlin">Berlin</option>
	    <option value="New York">New York</option>
	   <option value="Dublin">Dublin</option>
	   <option value="Cairo">Cairo</option>
	   </select>
	   <br />
	  
        </br>
	<input type="submit" class="btn btn-primary" value="Find Flights">
        </div>
</form>
