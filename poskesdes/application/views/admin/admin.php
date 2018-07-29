<body>

<nav class="navbar navbar-light" style="background-color: #2c3e50;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand"  href="<?php echo base_url("admin")?>">Admin page</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php

date_default_timezone_set("Asia/Jakarta");

$b = time();
$hour = date("G",$b);

if ($hour>=0 && $hour<=11)
{
echo "Selamat Pagi ";
}
elseif ($hour >=12 && $hour<=14)
{
echo "Selamat Siang ";
}
elseif ($hour >=15 && $hour<=17)
{
echo "Selamat Sore ";
}
elseif ($hour >=17 && $hour<=18)
{
echo "Selamat Petang ";
}
elseif ($hour >=19 && $hour<=23)
{
echo "Selamat Malam ";
}

?>,<?php echo $this->session->userdata('username_admin') ?> <i class="fa fa-cog" aria-hidden="true"></i></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url("admin/keluar");?>">log out <i class="fa fa-sign-out" aria-hidden="true" style="float: right;"></i></a></li>
        </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-left">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p style="text-align: center;"><img src="<?php echo base_url("assets/img/user.png"); ?>" class="img-responsive img-circle" width="304" height="236"><br>
      	Anda Masuk sebagai<br>
         <?php echo $this->session->userdata('username_admin') ?> <a href="<?php echo base_url("admin/keluar");?>"><i class="fa fa-sign-out" style="color: white;"></i></a></p>
         <div class="icon-bar">
      <div><a class="active" href="<?php echo base_url("admin")?>"><i class="fa fa-tachometer"></i> Dashboard</a></div>
      <div><a href="<?php echo base_url("admin/pasien")?>"><i class="fa fa-wheelchair"></i> Data Pasien</a></div>
      <div><a href="<?php echo base_url("admin/penyakit")?>"><i class="fa fa-heartbeat"></i> Data penyakit</a></div>
      <div><a href="<?php echo base_url("admin/pengguna")?>"><i class="fa fa-user"></i> Data pengguna</a></div>
      <div><a href="<?php echo base_url("admin/laporan")?>"><i class="fa fa-sticky-note-o"></i> laporan</a></div>
    </div>
    </div>
    <div class="col-sm-10 text-left">
      <h1>&nbsp;</h1>
    <div class="row">
      <div class="col-sm-3">
        <div class="panel-body">
      <div class="panel panel-default">
  <div class="panel-body" style="background-color: #27ae60;"><a href="<?php echo base_url("admin/pasien")?>"><i class="fa fa-wheelchair" style="font-size:48px;color:white"></i> Data Pasien</a></div>
</div>
    </div>
  </div>
  <div class="col-sm-3">
        <div class="panel-body">
      <div class="panel panel-default">
  <div class="panel-body" style="background-color: #27ae60;"><a href="<?php echo base_url("admin/penyakit")?>"><i class="fa fa-heartbeat" style="font-size:48px;color:white"></i> Data Penyakit</a></div>
</div>
    </div>
    
  </div>
  <div class="col-sm-3">
        <div class="panel-body">
      <div class="panel panel-default">
  <div class="panel-body" style="background-color: #27ae60;"><a href="<?php echo base_url("admin/pengguna")?>"><i class="fa fa-user" style="font-size:48px;color:white"></i> Data Pengguna</a></div>
</div>
    </div>
    
  </div>
   <div class="col-sm-3">
        <div class="panel-body">
      <div class="panel panel-default">
  <div class="panel-body" style="background-color: #27ae60;"><a href="<?php echo base_url("admin/laporan")?>"><i class="fa fa-sticky-note" style="font-size:48px;color:white"></i> Laporan</a></div>
</div>
    </div>
    
  </div>
</div>
      
    </div>
  </div>
</div> 