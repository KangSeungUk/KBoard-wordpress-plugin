<?php if(!defined('ABSPATH')) exit;?>
<div class="wrap">
	<div style="float: left; margin: 7px 8px 0 0; width: 36px; height: 34px; background: url(<?php echo plugins_url('kboard/images/icon-big.png')?>) left top no-repeat;"></div>
	<h2>
		KBoard : 대시보드
		<a href="http://www.cosmosfarm.com/products/kboard" class="add-new-h2" onclick="window.open(this.href); return false;">홈페이지</a>
		<a href="http://www.cosmosfarm.com/threads" class="add-new-h2" onclick="window.open(this.href); return false;">커뮤니티</a>
		<a href="http://www.cosmosfarm.com/support" class="add-new-h2" onclick="window.open(this.href); return false;">고객지원</a>
	</h2>
	<div id="welcome-panel" class="welcome-panel">
		<?php include 'welcome.php';?>
	</div>
</div>