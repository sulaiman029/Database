<?php 
 if(isset($_POST['submit'])){
    require_once 'db.php';
    $empno = $_POST['empno'];
    $ename = $_POST['ename'];
    $username = $_POST['username'];
    $password = MD5($_POST['password']);
    $sql = "INSERT INTO emp (EMPNO,ENAME,USERNAME,PASSWORD) VALUES (?,?,?,?)";
    $statement = $connection->prepare($sql);
    if ($statement->execute([$empno, $ename, $username, $password])) 
      {
      echo 'ลงทะเบียนเสร็จเรียบร้อย';
      }
} 
?>
<?php require 'header.php'; ?>
  <div class="card mt-5">
    <div class="card-header">
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
        <?= $message; ?>
        </div>
      <?php endif; ?>

<br>
<center>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <title>Font Awesome 5 Icons</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!--Get your own code at fontawesome.com-->
</head>
<body>
<i class='fas fa-cubes' style='font-size:48px;color:red'></i>
<br>
</center>
<center>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
  
<br>
<h2 style="color:rgb(255,0,0)">สร้างบัญชีใหม่</h2>
<form name="register" action="" method="post">
<div >
  <input type="text" class="form-control" name="empno" placeholder="รหัสพนักงาน" required>
</div>
<div>
  <input type="text" class="form-control" name="ename" placeholder="ชื่อ" required>
</div>
<div>
  <input type="text" class="form-control" name="username" placeholder="อีเมล" required>
</div>
<div> 
  <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required>
</div>
<br>
<div >
  <input style="background-color:rgb(255, 99, 71, 0.4)" type="submit" class="form-control" name="submit" value="สมัคร">
</div>
</form>
</center>
</div>
</div>
</div>

<?php require 'footer.php'; ?>
