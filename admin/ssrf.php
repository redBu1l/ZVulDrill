<?php 
include_once('../sys/config.php');

if (isset($_SESSION['admin'])) {
	include_once('../header.php');

	
?>
<div class="span10">
	<div id="content">
		<div class="page-header">
			<h4>ssrf</h4>
			<hr>
			<form name="ssrf" action="" method="post">
				<input type="text" name="target" size="30" class="form-control">
				<input type="submit" value="ssrf" name="submit" class="btn btn-primary">
			</form>
			<?php
				
				if(isset($_POST['submit'])) {
					$url = @$_POST['target'];
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_HEADER, 0);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
					$co = curl_exec($ch);
					curl_close($ch);
					echo $co;
				}
			?>
		</div>
	</div>
</div>


<a href="manage.php">返回</a>
	<?php 
	require_once('../footer.php');
	}
else {
	not_find($_SERVER['PHP_SELF']);
}
 ?>
