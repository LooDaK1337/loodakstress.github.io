<?php

	/// Require the header that already contains the sidebar and top of the website and head body tags
	$page = "Home";
	require_once 'header.php'; 
	
	/// Querys for the stats below
	$TotalUsers = $odb->query("SELECT COUNT(*) FROM `users`")->fetchColumn(0);
	$TodayAttacks = $odb->query("SELECT COUNT(*) FROM `logs` WHERE date >= CURDATE()")->fetchColumn(0);
	$MonthAttack = $odb->query("SELECT COUNT(*) FROM `logs` WHERE date >= CURDATE()  - INTERVAL 30 DAY")->fetchColumn(0);
	$TotalAttacks = $odb->query("SELECT COUNT(*) FROM `logs`")->fetchColumn(0);
	$TotalPools = $odb->query("SELECT COUNT(*) FROM `api`")->fetchColumn(0);
	$TotalPayments = $odb->query("SELECT COUNT(*) FROM `payments`")->fetchColumn(0);
	$RunningAttacks = $odb->query("SELECT COUNT(*) FROM `logs` WHERE `time` + `date` > UNIX_TIMESTAMP() AND `stopped` = 0")->fetchColumn(0);
	$TotalYesBoots = $odb->query("SELECT COUNT(id) FROM `logs` WHERE `date` BETWEEN DATE_SUB(CURDATE(), INTERVAL '-2' DAY) AND UNIX_TIMESTAMP()")->fetchColumn(0);
	$totlalUsersauth = $odb->query("SELECT SUM(2auth) FROM `users` WHERE `2auth` = '1'")->fetchColumn(0);
	// Income Results
	$TodayIN = $odb->query("SELECT SUM(paid) FROM `payments` WHERE `date` BETWEEN DATE_SUB(CURDATE(), INTERVAL '-1' DAY) AND UNIX_TIMESTAMP()")->fetchColumn(0);
	$WeekIN = $odb->query("SELECT SUM(paid) FROM `payments` WHERE `date` BETWEEN DATE_SUB(CURDATE(), INTERVAL '-7' DAY) AND UNIX_TIMESTAMP()")->fetchColumn(0);
	$MonthIN = $odb->query("SELECT SUM(paid) FROM `payments` WHERE `date` BETWEEN DATE_SUB(CURDATE(), INTERVAL '-30' DAY) AND UNIX_TIMESTAMP()")->fetchColumn(0);
	$TotalIN = $odb->query("SELECT SUM(paid) FROM `payments`")->fetchColumn(0);
?>


  <!-- Page Content -->
  <div id="page-wrapper">    <div class="container-fluid">      <div class="row bg-title">        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">          <h4 class="page-title"><?php echo $page; ?> <i style="display: none;" id="alerts" class="fa fa-cog fa-spin"></i></h4>        </div>        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">          <ol class="breadcrumb">            <li><a href="#"><?php echo $sitename; ?></a></li>            <li class="active"><?php echo $page; ?></li>          </ol>        </div>        <!-- /.col-lg-12 -->      </div>      <!-- .row -->	  <div class="widget-content"><div id="team-section" class="text-center">  <div class="container">    <div class="section-title wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">      <h2>	  <center>	  <span style="color: #000000;							font-size: 25px;							font-weight: bold;							text-shadow: -1px -2px 3px #FF0000, 1px -2px 9px #FF0000, 1px 2px 3px #FF0000, 1px 2px 11px rgb(255, 0, 0);							background-repeat: no-repeat;							background-position: left center;							padding-left: 15px;							letter-spacing: 1.5px;&quot;">Death.Stress Security<strong>Team</strong></h2>							</span>							</center>							</h3>      <hr>      <div class="clearfix"></div>          </div>      <div class="row">        <div class="col-lg-3 col-sm-3 col-xs-12">          <div class="white-box analytics-info">            <h3 class="box-title">			<center>			<span style="color: #000000;							font-size: 15px;							font-weight: bold;							text-shadow: -1px -2px 3px #FF0000, 1px -2px 9px #FF0000, 1px 2px 3px #FF0000, 1px 2px 11px rgb(255, 0, 0);							background-repeat: no-repeat;							background-position: left center;							padding-left: 15px;							letter-spacing: 1.5px;&quot;">Total Users							</span>							</center>							</h3>            <ul class="list-inline two-part">              <li>              </li>              <center><li class=""><span class="counter text-red"><?php echo $TotalUsers; ?></span></li></center>            </ul>          </div>        </div>        <div class="col-lg-3 col-sm-3 col-xs-12">          <div class="white-box analytics-info">            <h3 class="box-title">			<center>			<span style="color: #000000;							font-size: 15px;							font-weight: bold;							text-shadow: -1px -2px 3px #FF0000, 1px -2px 9px #FF0000, 1px 2px 3px #FF0000, 1px 2px 11px rgb(255, 0, 0);							background-repeat: no-repeat;							background-position: left center;							padding-left: 15px;							letter-spacing: 1.5px;&quot;">Total Boots							</span>							</center>							</h3>            <ul class="list-inline two-part">              <li>              </li>              <center><li class=""><span class="counter text-red"><?php echo $TotalAttacks;?></span></li></center>            </ul>          </div>        </div>        <div class="col-lg-3 col-sm-3 col-xs-12">          <div class="white-box analytics-info">            <h3 class="box-title">			<center>			<span style="color: #000000;							font-size: 15px;							font-weight: bold;							text-shadow: -1px -2px 3px #FF0000, 1px -2px 9px #FF0000, 1px 2px 3px #FF0000, 1px 2px 11px rgb(255, 0, 0);							background-repeat: no-repeat;							background-position: left center;							padding-left: 15px;							letter-spacing: 1.5px;&quot;">Running Attacks							</span>							</center>							</h3>            <ul class="list-inline two-part">              <li>              </li>              <center><li class=""><span class="counter text-red"><?php echo $RunningAttacks; ?></span></li></center>            </ul>          </div>        </div>        <div class="col-lg-3 col-sm-3 col-xs-12">          <div class="white-box analytics-info">            <h3 class="box-title">			<center>			<span style="color: #000000;							font-size: 15px;							font-weight: bold;							text-shadow: -1px -2px 3px #FF0000, 1px -2px 9px #FF0000, 1px 2px 3px #FF0000, 1px 2px 11px rgb(255, 0, 0);							background-repeat: no-repeat;							background-position: left center;							padding-left: 15px;							letter-spacing: 1.5px;&quot;">Total Servers							</span>							</center>							</h3>            <ul class="list-inline two-part">              <li>              </li>              <center><li class=""><span class="counter text-red"><?php echo $TotalPools; ?></span></li></center>            </ul>          </div>        </div>      </div>
      <!--/.row -->
      <!-- .row -->
     
      <!--/.row -->
      <!-- .row -->		<h6>
	  <hr>
    <div id="row">
      <div class="col-md-3 col-sm-6 team wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
        <div style="-moz-box-shadow: 1px 1px 4px 3px #FF8000;
					-webkit-box-shadow: 1px 1px 4px 3px #FF8000;
					 box-shadow:         1px 1px 4px 3px #FF8000;">
		<div class="thumbnail"> <img src="img/FBI.png" width="190" height="190" class="img-circle team-img">
          <div class="caption">
			<hr>
			<center>
			<span style="color:#FF8000;">
            <h3>SPIRIT</h3>
            <p>Developpeur</p>
			<p>discord : SPIRIT#8687</p>
			</div>
			</div>
			</center>
			</span>
                        <ul class="list-inline">

            </ul>
          </div>
        </div>
      </div>
	    <div id="row">
      <div class="col-md-3 col-sm-6 team wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
        <div style="-moz-box-shadow: 1px 1px 4px 3px #00ff37;
					-webkit-box-shadow: 1px 1px 4px 3px #00ff37;
					 box-shadow:         1px 1px 4px 3px #00ff37;">
		<div class="thumbnail"> <img src="anon1.gif" alt="..." class="img-circle team-img">
          <div class="caption">
			<hr>
			<center>
			<span style="color:#00ff37;">
            <h3>MAROCAIN09</h3>
            <p>Fondateur</p>
			<p>discord : ☆☆MAROCAIN09☆☆#1722</p>
			</div>
			</div>
			</center>
			</span>
                        <ul class="list-inline">					

            </ul>
          </div>
        </div>
      </div>
    <div id="row">
      <div class="col-md-3 col-sm-6 team wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
        <div style="-moz-box-shadow: 1px 1px 4px 3px #00ff37;
					-webkit-box-shadow: 1px 1px 4px 3px #00ff37;
					 box-shadow:         1px 1px 4px 3px #00ff37;">
		<div class="thumbnail"> <img src="anon1.gif" alt="..." class="img-circle team-img">
          <div class="caption">
			<hr>
            <center>
			<span style="color:#00ff37;">
			<h3>KaliStresser</h3>
            <p>Fondateur</p>
			<p>discord : ?</p>
			</div>
			</div>
			</center>
			</span>
                        <ul class="list-inline">

            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team wow fadeInUp animated" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
        <div style="-moz-box-shadow: 1px 1px 4px 3px #ea0202;
					-webkit-box-shadow: 1px 1px 4px 3px #ea0202;
					 box-shadow:         1px 1px 4px 3px #ea0202;">        
		<div class="thumbnail"> <img src="anon1.gif" alt="..." class="img-circle team-img">
          <div class="caption">
			<hr>
			<center>
			<span style="color:red;">
            <h3>Victor71</h3>
            <p>Admin</p>
			<p>discord : ViictorTrz_#2965</p>
			</div>
			</div>
			<center>
			</span>
                        <ul class="list-inline">

            </ul>
          </div>
        </div>
      </div>
	      <div id="row">
      <div class="col-md-3 col-sm-6 team wow fadeInUp animated" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
        <div style="-moz-box-shadow: 1px 1px 4px 3px #02ffff;
					-webkit-box-shadow: 1px 1px 4px 3px #02ffff;
					 box-shadow:         1px 1px 4px 3px #02ffff;">
		<div class="thumbnail"> <img src="staff.gif" alt="..." class="img-circle team-img">
          <div class="caption">
			<hr>
            <center>
			<span style="color:#02ffff;">
			<h3>??</h3>
            <p>??</p>
			<p>discord : ?</p>
			</div>
			</div>
			</center>
			</span>
                        <ul class="list-inline">

            </ul>
          </div>
        </div>
      </div>
	      <div id="row">
      <div class="col-md-3 col-sm-6 team wow fadeInUp animated" data-wow-delay="700ms" style="visibility: visible; animation-delay: 700ms; animation-name: fadeInUp;">
        <div style="-moz-box-shadow: 1px 1px 4px 3px #02ffff;
					-webkit-box-shadow: 1px 1px 4px 3px #02ffff;
					 box-shadow:         1px 1px 4px 3px #02ffff;">
		<div class="thumbnail"> <img src="staff.gif" alt="..." class="img-circle team-img">
          <div class="caption">
			<hr>
            <center>
			<span style="color:#02ffff;">
			<h3>??</h3>
            <p>??</p>
			<p>discord : ?</p>
			</div>
			</div>
			</center>
			</span>
                        <ul class="list-inline">

            </ul>
          </div>
        </div>
      </div>
	  	      <div id="row">
      <div class="col-md-3 col-sm-6 team wow fadeInUp animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
        <div style="-moz-box-shadow: 1px 1px 4px 3px #02ffff;
					-webkit-box-shadow: 1px 1px 4px 3px #02ffff;
					 box-shadow:         1px 1px 4px 3px #02ffff;">
		<div class="thumbnail"> <img src="staff.gif" alt="..." class="img-circle team-img">
          <div class="caption">
			<hr>
            <center>
			<span style="color:#02ffff;">
			<h3>??</h3>
            <p>??</p>
			<p>discord : ?</p>
			</div>
			</div>
			</center>
			</span>
                        <ul class="list-inline">

            </ul>
          </div>
        </div>
      </div>
	  	      <div id="row">
      <div class="col-md-3 col-sm-6 team wow fadeInUp animated" data-wow-delay="900ms" style="visibility: visible; animation-delay: 900ms; animation-name: fadeInUp;">
        <div style="-moz-box-shadow: 1px 1px 4px 3px #02ffff;
					-webkit-box-shadow: 1px 1px 4px 3px #02ffff;
					 box-shadow:         1px 1px 4px 3px #02ffff;">
		<div class="thumbnail"> <img src="staff.gif" alt="..." class="img-circle team-img">
          <div class="caption">
			<hr>
            <center>
			<span style="color:#02ffff;">
			<h3>??</h3>
            <p>??</p>
			<p>discord : ?</p>
			</div>
			</div>
			</center>
			</span>
                        <ul class="list-inline">

            </ul>
          </div>
        </div>
      </div>
    </div>

<?php	
	
	require_once 'footer.php';
	
?>