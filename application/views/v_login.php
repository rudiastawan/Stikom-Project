<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Calm breeze login screen</title>
  
  
  
  <link rel="stylesheet" href="<?php echo base_url('assets/custom/login/css/style.css') ?>">

  
</head>

<body>

  <div class="wrapper">
  <div class="container" style="background-color: #52dac5;">
    <div style="background-color: #3bcbb5; height: 100px; margin-top: -80px;">
      <img src="<?php echo base_url('assets/images/lg-bappeda.png') ?>"; style="width: 75px; height: 75px; margin: 10px 10px 0px 30px; float: left;">
      <h2 style="color: white; line-height: 100px; float: left; margin-left: 40px;"><b>BAPPEDA KABUPATEN BADUNG</b></h2>
    </div>

    <div><br />
    <h1>Login User</h1>
    
    <form class="form" action="<?php echo base_url()."Login/auth"; ?>" method="post" onsubmit="remmember();">
      <input type="text" placeholder="Username" name="user" required>
      <input type="password" placeholder="Password" name="pass" required>
      <button type="submit">Login</button>
    </form>
  </div>
  </div>
  
  <ul class="bg-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>
  <script src='<?php echo base_url('assets/custom/css/jquery.min.js'); ?>'></script>

  

    <script  src="<?php echo base_url('assets/custom/login/js/index.js'); ?>"></script>


<script src="<?php echo base_url('assets/template/plugins/slimScroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
<!-- FastClick -->
<script type="text/javascript" src="<?php echo base_url('assets/admin/js/ajax.js'); ?>"></script>

<script>
  /*$(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });*/

  var remm_username=getCookie('username');
  var remm_password=getCookie('password');
  $('#username').val(remm_username);
  $('#password').val(remm_password);

  var remmember=function(){
    //alert(value);
    if(document.getElementById('check-remmember').checked){
      setCookie('username', $('#username').val(), 30);
      setCookie('password', $('#password').val(), 30);
    }
    else{
      setCookie('username', '', 30);
      setCookie('password', '', 30);
    }
  }
</script>


</body>

</html>

