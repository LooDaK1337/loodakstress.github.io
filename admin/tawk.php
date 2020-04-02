<?php

	/// Require the header that already contains the sidebar and top of the website and head body tags
	$page = "Tawk";
	require_once 'header.php'; 
	

?>


  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title"><?php echo $page; ?></h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
            <li><a href="#"><?php echo $sitename; ?></a></li>
            <li class="active"><?php echo $page; ?></li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
        
      <!-- .row -->
<html>
        
  <iframe src="https://dashboard.tawk.to/#/dashboard" width="100%" height="800px"></iframe>      
        
</html>
      <!--/.row -->
      <!-- .row -->
 
      <!--/.row -->
<?php

	require_once 'footer.php';
	
?>
