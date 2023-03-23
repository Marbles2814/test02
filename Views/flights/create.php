<!doctype html>
<html lang="en">
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>BlazeDemoClone</title>
</head>
<body>
<nav class="navbar navbar-lg bg-light">

    <a class="navbar-brand" href="/"style="color:
    Gray;">BlazeDemo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <a class="navbar-brand" href="" style="color:Gray;">Login</a>
    <a class="navbar-brand" href="register" style="color:Gray;">Register</a>
    
    
    </button>
  </a>
  
  </nav>
<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>



<form action="/flights/create" method="post">
<section class=" text-center text-lg-start">
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }
    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }
      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
    }
</style>
  <div class="container">
  <div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">

    <?= csrf_field() ?>
  <div class="form-group">
    <p class="text-left" for="mail"style="color:Gray;" >Name:</p>
    <input type="input" name="Name" value="<?= set_value('Name') ?>">
    <br>
  </div>
  <div class="form-group">
    <p  class="text-left"  for="pwd"style="color:Gray;">Company:</p>
    <input type="input" name="Company" value="<?= set_value('Company') ?>">
    <br>
  </div>
  <div class="form-group">
    <p  class="text-left"  for="pwd"style="color:Gray;">E-Mail Address</p>
    <input type="input" name="Email" value="<?= set_value('Email') ?>">
    <br>
  </div>
  <div class="form-group">
    <p  class="text-left"  for="pwd"style="color:Gray;">Password:</p>
    <input type="input" name="Password" value="<?= set_value('Password') ?>">
    <br>
  </div>
  <div class="container">
    <input type="submit" name="submit" value="Create users">
  </div>
</form>
