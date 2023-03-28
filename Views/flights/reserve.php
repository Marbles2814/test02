<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>
<br><br>
<div class="container">
    <h1>Your flight from X to X has been reserved.</h1>
</div>
<div class="container">
    <div> 
      <p> Airline:  </p>
      <p> Flight number:  </p>
      <p> Price:  </p>
      <p> Arbitrary fees and taxes:  </p>
    </div>
      
   <br />
    <div>
      <p> Total cost:  </p>
      <a> Please submit the form below to purchase the flight </a>
    </br></br>


<form action="/flights/reserve" method="post">

    <?= csrf_field() ?>
  <div class="form-group">
    <p class="text-left" for="mail"style="color:Black;" >Name:</p>
    <input type="input" name="Name" value="<?= set_value('Name') ?>" maxlength="50" size="50" required>
    <br>
  </div>
  <div class="form-group">
    <p  class="text-left"  for="pwd"style="color:Black;">Address:</p>
    <input type="input" name="Address" value="<?= set_value('Address') ?>"maxlength="50" size="50" required>
    <br>
  </div>
  <div class="form-group">
    <p  class="text-left"  for="pwd"style="color:Black;">City:</p>
    <input type="input" name="City" value="<?= set_value('City') ?>" maxlength="50" size="50" required>
    <br>
  </div>
  <div class="form-group">
    <p  class="text-left"  for="pwd"style="color:Black;">State:</p>
    <input type="input" name="State" value="<?= set_value('State') ?>"maxlength="50" size="50" required>
    <br>
  </div>
  <div class="form-group">
    <p class="text-left" for="mail"style="color:Black;" >Zip Code:</p>
    <input type="input" name="ZipCode" value="<?= set_value('ZipCode') ?>"maxlength="50" size="50" required>
    <br>
  </div>
  <div class="form-group">
    <p  class="text-left"  for="pwd"style="color:Black;">Credit card type:</p>
    <input list="card" value="<?= set_value('CardType') ?>" required>
    <datalist id="card">
     <option value="VISA">
     <option value="American Express">
     <option value="Diner's club">
   </datalist>
    <br>
  </div>
  <div class="form-group">
    <p  class="text-left"  for="pwd"style="color:Black;">Credit Card Numbre</p>
    <input type="input" name="CreditCard" value="<?= set_value('CreditCard') ?>"maxlength="50" size="50" required>
    <br>
  </div>
  <div class="form-group">
    <p  class="text-left"  for="pwd"style="color:Black;">Month:</p>
    <input type="number" name="Month" min ="1" max="12" value="<?= set_value('Month') ?>"maxlength="50" size="200" required>
    <br>
  </div>
  <div class="form-group">
    <p  class="text-left"  for="pwd"style="color:Black;">Year</p>
    <input type="number" name="Year" min ="2023" max ="2030" value="<?= set_value('Year') ?>"maxlength="50" size="50" required>
    <br>
  </div>
  <div class="form-group">
    <p  class="text-left"  for="pwd"style="color:Black;">Name on card:</p>
    <input type="input" name="CardName" value="<?= set_value('CardName') ?>"maxlength="50" size="50" required>
    <br>
  </div>
 <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
            <label class="form-check-label" for="form2Example31"> Remember me <br /> <br /></label>
<div class="container">
    <input type="submit" name="submit" value="Purchase Flight">
  </div>
</form>
