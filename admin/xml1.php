<?php
//include_once('../sys/config.php');
if (isset($_SESSION['admin'])) {
	include_once('../header.php');
}
?>
<div class="span10">
	<div id="content">
		<div class="page-header">
			<h4>xml</h4>
			<hr>
			<form name="xml_low" action="" method="post">
				<input type="text" name="keyword" size="160" class="form-control">
				<input type="submit" value="xml_attack" name="submit"  class="btn btn-primary">
			</form>
			
		</div>
	</div>
</div>

<?php
$keyword = $_POST['keyword'];
$xml_obj = simplexml_load_string($keyword);
var_dump($xml_obj);
?>


 