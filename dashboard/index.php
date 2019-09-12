<?php include '../layout/dashboard.php' ;?>
<div id="dashboardData">
    This is Dashboard
</div>
<div class="hamburgerbar">
		<a href="#" onclick="hamburgerFunc()">
			<div>
				<div class="bar topbar"></div>
				<div class="bar middlebar"></div>
				<div class="bar bottombar"></div>
			</div>
		</a>
		</div>
</body>
<script src="../script/script.js"></script>
<script>
    var elm = documentgetElementById("dashboardTab").classList.Add("isActive")
</script>
</html>