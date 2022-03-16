<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?= $title; ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script src="<?= base_url('/styler/Indexstyler/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') ?>"></script>
</head>

<body>
  <nav class="nav-extended light-green">
    <div class="nav-wrapper">
      <strong> <a href="#" class="brand-logo">Administrator Page</a></strong>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href=""> Nama Admin </a></li>
        <li><a href="collapsible.html"> Sign Out</a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="<?= base_url('admin/viewticket') ?>">View Ticket</a></li>
        <li class="tab"><a href="<?= base_url('admin/editticket') ?>">Edit Ticket</a></li>
        <li class="tab"><a href="<?= base_url('admin/addticket') ?>">Add Ticket's Stock</a></li>
        <li class="tab"><a href="<?= base_url('admin/viewcust') ?>">View Customer</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">JavaScript</a></li>
  </ul>
  <!-- 
  <div id="test1" class="col s12">Test 1</div>
  <div id="test2" class="col s12">Test 2</div>
  <div id="test3" class="col s12">Test 3</div>
  <div id="test4" class="col s12">Test 4</div> -->


  <? $this->renderSection('isiframe'); ?>



</body>

</html>