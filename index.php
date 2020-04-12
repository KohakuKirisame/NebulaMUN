<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="utf8" />
<title>Nebula MUN System</title>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
<script src="/js/jquery-3.4.1.min.js" ></script> 
<script src="/js/bootstrap.bundle.js" ></script>
</head>

<body>
<?php include($_SERVER['DOCUMENT_ROOT']."includes/nav.php"); ?>
<div class="container-fluid" style="margin-top:56px; background: url(./img/user/dashboard/1.jpg) no-repeat; background-size: cover; background-attachment:fixed">
	<div class="row" style="padding: 32px 5% 12px 5%;">
		<div class="jumbotron shadow col-xl-4 col-lg-4 col-md-6 col-12">
			<h1 class="display-4">星云模联</h1>
			<p class="lead">欢迎来到星云模联系统，这是您的主面板</p>
			<hr class="my-2" />
			<p>Giao！雅虎！火化！</p>
		</div>
		<div class=" col-xl-8 col-lg-8 col-md-6 col-12">
			<div class="card shadow">
				<h5 class="card-header">公告</h5>
				<div class="card-body">
					<h5 class="card-title">这里显示公告</h5>
					<p class="card-text">这里显示公告。</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="padding: 12px 5% 12px 5%;">
		<div class=" col-xl-4 col-lg-4 col-md-4 col-12">
			<div class="card shadow">
				<h5 class="card-header">学测</h5>
				<div class="card-body">
					<h5 class="card-title">没有待完成的学测</h5>
					<p class="card-text">这里显示学测。</p>
				</div>
			</div>
		</div>
		<div class=" col-xl-4 col-lg-4 col-md-4 col-12">
			<div class="card shadow">
				<h5 class="card-header">面试</h5>
				<div class="card-body">
					<h5 class="card-title">没有待进行的面试</h5>
					<p class="card-text">这里显示面试。</p>
				</div>
			</div>
		</div>
		<div class=" col-xl-4 col-lg-4 col-md-4 col-12">
			<div class="card shadow">
				<h5 class="card-header">席位</h5>
				<div class="card-body">
					<h5 class="card-title">没有席位</h5>
					<p class="card-text">这里显示席位。</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="padding: 12px 5% 12px 5%;">
		<div class="col-xl-12 col-lg-12 col-md-12 col-12">
			<div class="card shadow">
				<h5 class="card-header">账单</h5>
				<div class="card-body">
					<h5 class="card-title">没有需要交纳的账单</h5>
					<p class="card-text">这里显示账单。</p>
				</div>
			</div>
		</div>
	</div>
</div>
	<?php include($_SERVER['DOCUMENT_ROOT']."includes/footer.php"); ?> 
<script type="application/javascript">
	$("#nav-item-1").addClass("active");
</script>
</body>
</html>