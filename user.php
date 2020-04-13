<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="utf8" />
<title>用户 - NebulaMUN</title>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/custom.css">
<link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
<script src="/js/jquery-3.4.1.min.js" ></script> 
<script src="/js/bootstrap.bundle.js" ></script>
<style type="text/css">
	.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    color: #fff;
    background-color:#343a40 !important;
}
</style>
</head>

<body>
	<?php include($_SERVER['DOCUMENT_ROOT']."includes/nav.php"); ?>
	<div class="container-fluid" style="margin-top:56px;">
		<div class="row" style="padding: 32px 5% 12px 5%;">
		<div class="jumbotron col-12 p-5 m-0">
			<h2><img class="rounded-circle" src="/img/user/avatar/1.png" style="max-height: 96px" />卡尔·马克思</h2>
			<p class="lead">您好！您可以在此编辑您的用户资料并设置头像和主面板背景。</p>
			<hr class="my2" />
			<p>全世界无产者，联合起来！</p>
		</div>
			</div>
		<div class="row mx-md-4 mx-1">
			<div class="col-4 col-xl-3 border border-dark p-md-3 p-2 mb-auto rounded">
				<div class="nav flex-column nav-pills" id="user-settings-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="user-settings-info-tab" data-toggle="pill" href="#info" role="tab" aria-controls="info" aria-selected="true">个人信息</a>
					<a class="nav-link" id="user-settings-avatar-tab" data-toggle="pill" href="#avatar" role="tab" aria-controls="v-pills-home" aria-selected="false">头像</a>
					<a class="nav-link" id="user-settings-dashboard-tab" data-toggle="pill" href="#dashboard" role="tab" aria-controls="v-pills-home" aria-selected="false">面板背景</a>
					<a class="nav-link" id="user-settings-password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="v-pills-home" aria-selected="false">修改密码</a>
					<a class="nav-link text-danger" id="user-settings-exit-tab" data-toggle="pill" href="#exit" role="tab" aria-controls="v-pills-home" aria-selected="false">登出</a>
				</div>
			</div>
			<div class="col-8 col-xl-9 pr-3 pr-xl-5 pb-5">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="user-settings-info-tab">
						<h3>个人信息</h3>
						<hr class="my-4" />
						<form onSubmit="" >
							<div class="form-group">
								<label for="username">用户名</label>
								<input type="text" class="form-control" id="username" aria-describedby="userNameHelp" value="KarlMarx" readonly />
								<small class="form-text text-muted" id="userNameHelp">用户名不可更改</small>
							</div>
							<div class="form-group">
								<label for="realname">姓名</label>
								<input type="text" class="form-control" id="realname" value="卡尔·马克思" />
							</div>
							<div class="form-group">
								<label for="identity">身份证号</label>
								<input type="text" class="form-control" id="identity" value="11010218180505999X" />
							</div>
							<div class="form-group">
								<label for="sex">性别</label>
								<select class="form-control" id="sex">
									<option value="男" selected>男</option>
									<option value="女">女</option>
								</select>
							</div>
							<div class="form-group">
								<label for="email">E-Mail</label>
								<input type="email" class="form-control" id="email" value="karl@161mun.club" />
							</div>
							<div class="form-group">
								<label for="phone">手机</label>
								<input type="del" class="form-control" id="phone" value="18518954123" />
							</div>
							<div class="form-group">
								<label for="qq">QQ</label>
								<input type="number" class="form-control" id="qq" value="1848790911" />
							</div>
							<div class="form-group">
								<label for="cus_sign">个性签名</label>
								<textarea class="form-control" id="cus_sign" rows="2">全世界无产者，联合起来！</textarea>
							</div>
							<button class="btn btn-success" type="submit">更新</button>
						</form>
					</div>
					<div class="tab-pane fade" id="avatar" role="tabpanel" aria-labelledby="user-settings-avatar-tab">
						<h3>修改头像</h3>
						<hr class="my-4" />
					</div>
					<div class="tab-pane fade" id="dashboard" role="tabpanel" aria-labelledby="user-settings-dashboard-tab">
						<h3>面板背景</h3>
						<hr class="my-4" />
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="user-settings-password-tab">
						<h3>修改密码</h3>
						<hr class="my-4" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT']."includes/footer.php"); ?> 
<script type="application/javascript">
	$("#nav-user").addClass("active");
</script>
</body>
</html>