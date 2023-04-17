<form action="<?php base_url();?>/Confirmation">
<br />
<div class="container">
    <div> 
      <h3> Airline:  </h3>
      <p> Flight number:  </p>
      <p> Price:  </p>
      <p> Arbitrary fees and taxes:  </p>
    </div>
      
   <br />
    <div>
      <p> Total cost:  </p>
      <a> Please submit the form below to purchase the flight </a>
    </br></br>
          <div class="form-group">
            <p class="text-left" for="mail"style="color:Black;" >Name:</p>
            <input type="text" class="form-control" id="usr">
          </div>
          <div class="form-group">
            <p  class="text-left"  for="addr"style="color:Black;">Address:</p>
            <input type="text" class="form-control" id="addr">
          </div>
          <div class="form-group">
            <p class="text-left" for="mail"style="color:Black;" >City:</p>
            <input type="text" class="form-control" id="usr">
          </div>
          <div class="form-group">
            <p  class="text-left"  for="addr"style="color:Black;">State:</p>
            <input type="text" class="form-control" id="addr">
          </div>
          <div class="form-group">
            <p class="text-left" for="mail"style="color:Black;" >Zip code:</p>
            <input type="number" class="form-control" id="usr">
          </div>
          <div class="form-group">
            <p  class="text-left"  for="addr"style="color:Black;">Card type:</p>
            <select name="fromPort" class="form-inline"><option value="VISA">VISA</option>slot
              <option value="American Express">American Express</option>slot
              <option value="Diner's club">Diner's club</option>slot
            </select>
          </div>
          <div class="form-group">
            <p class="text-left" for="mail"style="color:Black;" >Credit card number:</p>
            <input type="text" class="form-control" id="usr">
          </div>
          <div class="form-group">
            <p  class="text-left"  for="addr"style="color:Black;">Month:</p>
            <input type="month" class="form-control" id="addr">
          </div>
          <div class="form-group">
            <p class="text-left" for="mail"style="color:Black;" >Year:</p>
            <input type="text" class="form-control" id="usr">
          </div>
          <div class="form-group">
            <p  class="text-left"  for="addr"style="color:Black;">Name on card:</p>
            <input type="text" class="form-control" id="addr">
          </div>
          
          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
            <label class="form-check-label" for="form2Example31"> Remember me <br /> <br /></label>
    </div>
   

<input type="submit" class="btn btn-primary" value="Purchase Flight">   
   </div>
   
</form>
