<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="/shop/Public/Admin/images/favicon.png">
<title><?php echo ($meta_title); ?></title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="/shop/Public/Admin/js/bootstrap/dist/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/shop/Public/Admin/fonts/font-awesome-4/css/font-awesome.min.css" />
<!-- Custom styles for this template -->
<link rel="stylesheet" type="text/css" href="/shop/Public/Admin/css/style.css" />
</head>
<body>
<!-- Nifty Modal -->
<div class="colored-header">
	<div class="modal-content">
		<div class="modal-header">
			<h3><?php echo ($meta_title); ?></h3>
		</div>
		<form action="<?php echo U();?>" class="form-x"  method="post">
			<div class="modal-body form">
				<div class="tab-container">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#basics" data-toggle="tab">基础</a></li>
						<li><a href="#senior" data-toggle="tab">高级</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="basics">
							<div class="form-group">
								<label>上级栏目</label>
								<input type="text" class="form-control" value="<?php echo ((isset($category['title']) && ($category['title'] !== ""))?($category['title']):'无'); ?>" disabled="disabled" placeholder="上级栏目"/>
							</div>
							<div class="form-group">
								<label>栏目名称</label>
								<input type="text" name="title" class="form-control" value="<?php echo ((isset($info["title"]) && ($info["title"] !== ""))?($info["title"]):''); ?>" placeholder="栏目名称">
							</div>
							<div class="form-group">
								<label>排序</label>
								<input type="text" name="sort" class="form-control" value="<?php echo ((isset($info["sort"]) && ($info["sort"] !== ""))?($info["sort"]):0); ?>"/>
							</div>
						</div>
						<div class="tab-pane" id="senior">
							<div class="form-group">
								<label>网页标题</label>
								<input type="text" name="meta_title" class="form-control" value="<?php echo ((isset($info["meta_title"]) && ($info["meta_title"] !== ""))?($info["meta_title"]):''); ?>" placeholder="SEO 网页标题"/>
							</div>
							<div class="form-group">
								<label>关键字</label>
								<input name="keywords" type="text" class="form-control" value="<?php echo ((isset($info["keywords"]) && ($info["keywords"] !== ""))?($info["keywords"]):''); ?>" placeholder="SEO 关键字">
							</div>
							<div class="form-group">
								<label>描述</label>
								<input name="description" type="text" class="form-control" value="<?php echo ((isset($info["keywords"]) && ($info["keywords"] !== ""))?($info["keywords"]):''); ?>" placeholder="SEO 描述">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" name="id" value="<?php echo ((isset($info["id"]) && ($info["id"] !== ""))?($info["id"]):''); ?>">
				<input type="hidden" name="pid" value="<?php echo isset($category['id'])?$category['id']:$info['pid'];?>">
				<button type="button" class="btn btn-default md-close">关闭</button>
				<button type="submit" class="btn btn-primary ajax-post no-refresh" target-form="form-x" callback="mdclose(parent.layer.getFrameIndex(window.name))">提交</button>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript" src="/shop/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/shop/Public/Static/layer/layer.js"></script>
<script type="text/javascript" src="/shop/Public/Admin/js/behaviour/web.js"></script>
<script type="text/javascript">
	$(function(){
		var index = parent.layer.getFrameIndex(window.name);
		$('.md-close').click(function(){
			parent.layer.close(index);
		});
		mdclose = function(index){
			parent.location.reload();
			parent.layer.close(index);
		}
	});
</script>
<script type="text/javascript" src="/shop/Public/Admin/js/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>