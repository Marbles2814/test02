<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/flights/create" method="post">
    <?= csrf_field() ?>

    <label for="Name">Name</label>
    <input type="input" name="Name" value="<?= set_value('Name') ?>">
    <br>
    <label for="Company">Company</label>
    <input type="input" name="Company" value="<?= set_value('Company') ?>">
    <br>
    <label for="Email">Email</label>
    <input type="input" name="Email" value="<?= set_value('Email') ?>">
    <br>
    <label for="Password">Password</label>
    <input type="input" name="Password" value="<?= set_value('Password') ?>">
    <br>
    
    <input type="submit" name="submit" value="Create users">
</form>
