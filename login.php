<?php include 'conn.php';
session_start();
if (isset($_SESSION["pass"])||isset($_SESSION["user"]))
header('Location: admin.php');
?>
<!DOCTYPE html>
<html>
<head>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>PLN-PUSAT WILAYAH SUMUT</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
<script src="/cdn-cgi/apps/head/QJpHOqznaMvNOv9CGoAdo_yvYKU.js"></script><link rel="apple-touch-icon" href="pages/ico/60.png">
<link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
<link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
<link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<link href="css/fontawesome-free/css/all.css" rel="stylesheet" type="text/css" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="description" />
<meta content="" name="author" />
<link href="css/pace-theme-flash.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="view-source:http://pages.revox.io/dashboard/4.1.0/html/casual/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
<link href="css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="http://pages.revox.io/dashboard/4.1.0/html/casual/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
<link class="main-stylesheet" href="css/modern.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
</head>
<body class="fixed-header ">
<div class="login-wrapper ">

<div class="bg-pic">

<img src="img/polmed.jpg" data-src="img/polmed.jpg" data-src-retina="img/polmed.jpg" alt="" class="lazy">


<div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
<h2 class="semi-bold text-white">
<a href="index.php">
<i class="fas fa-home" style="color:white"></i>
</a>
</h2><br>

<p class="small">
PLN-PUSAT WILAYAH SUMUT.
</p>
</div>

</div>


<div class="login-container bg-white">
<div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
<a href="index.php"> 
<img src="img/logo.png" alt="Telkom-inventory" data-src="img/logo.png" data-src-retina="img/logo.png" width="360" >
</a>
<br>


<p class="p-t-35">Sign into Admin pages account</p>

<form id="form-login" class="p-t-15" role="form" action="log.php" method="post">

<div class="form-group form-group-default">
<label>Login</label>
<div class="controls">
<input type="text"  placeholder="User Name" class="form-control" required name="name">
</div>
</div>


<div class="form-group form-group-default">
<label>Password</label>
<div class="controls">
<input type="password" class="form-control" placeholder="Credentials" required name="pass">
</div>
</div>


<button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</button>
</form>

<div class="pull-bottom sm-pull-bottom">
<div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
<div class="col-sm-3 col-md-2 no-padding">
</div>
<div class="col-sm-9 no-padding m-t-10">
<p>

</p>
</div>
</div>
</div>
</div>
</div>

</div>

<div class="overlay hide" data-pages="search">

<div class="overlay-content has-results m-t-20">

<div class="container-fluid">

<img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">


<a href="#" class="close-icon-light overlay-close text-black fs-16">
<i class="pg-close"></i>
</a>

</div>

<div class="container-fluid">

<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
<br>
<div class="inline-block">
<div class="checkbox right">
<input id="checkboxn" type="checkbox" value="1" checked="checked">
<label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
</div>
</div>
<div class="inline-block m-l-10">
<p class="fs-13">Press enter to search</p>
</div>

</div>

<div class="container-fluid">
<span>
<strong>suggestions :</strong>
</span>
<span id="overlay-suggestions"></span>
<br>
<div class="search-results m-t-40">
<p class="bold">Pages Search Results</p>
<div class="row">
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
 <div>
<img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
<p class="hint-text">via john smith</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>T</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
<p class="hint-text">via pages</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div><i class="fa fa-headphones large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
<p class="hint-text">via pagesmix</p>
</div>
</div>

</div>
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
<div><i class="fa fa-facebook large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
<p class="hint-text">via facebook</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
<div><i class="fa fa-twitter large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via twitter</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
<div><i class="fa fa-google-plus large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via google plus</p>
</div>
</div>

</div>
</div>
</div>
</div>

</div>

</div>

<script src="js/pace.min.js" type="text/javascript"></script>
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="js/modernizr.custom.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery-easy.js" type="text/javascript"></script>
<script src="js/jquery.unveil.min.js" type="text/javascript"></script>
<script src="js/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="js/jquery.actual.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="js/select2.full.min.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script src="js/switchery.min.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script src="js/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="js/jquery-datatable-bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="js/datatables.responsive.js"></script>
<script type="text/javascript" src="js/lodash.min.js"></script>


<script src="js/pages.min.js"></script>


<script src="js/datatables.js" type="text/javascript"></script>
<script src="js/scripts.js" type="text/javascript"></script>

<script>
    $(function()
    {
      $('#form-login').validate()
    })
    </script>
</body>
</html>