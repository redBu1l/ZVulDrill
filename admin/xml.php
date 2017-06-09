<?php 
include_once('../sys/config.php');

//if (isset($_SESSION['admin'])) {
	include_once('../header.php');

	
//
?>
<div class="span10">
	<div id="content">
		<div class="page-header">
			<h4>xml-attack</h4>
			<hr>
			<form name="keyword" action="" method="post">
				<input type="text" name="keyword" size="30" class="form-control">
				<input type="submit" value="xml-attack" name="keyword"  class="btn btn-primary">
			</form>
			<?php
			$keyword = $_POST['keyword'];
			$xml_obj = simplexml_load_string($keyword);
			var_dump($xml_obj);
			//print_r($xml_obj);
			?>
		</div>
	</div>
</div>


<a href="manage.php">返回</a>
	<?php 
//	require_once('../footer.php');
//	}
//else {
//	not_find($_SERVER['PHP_SELF']);
//}
 ?>
