	<head>
		<meta charset="utf-8" />
		<meta content="width=device-width,initial-scale=1.0" name="viewport" />
		<title><?php $this->options->title() ?>&nbsp;<?php echo ' 第 '.$this->_currentPage.' 页'; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/styles.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/prism.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/style.mini.css'); ?>" />

		<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>" type="text/javascript"></script>
		<script src="<?php $this->options->themeUrl('js/prism.js'); ?>" type="text/javascript"></script>
	</head>
	
	<header>
		<img id="header-headr" src="<?php $this->options->themeUrl('img/header.jpg')?>" />
		<p id="header-title"><?php $this->options->title() ?></p>
		<div class="header-menu">
			<a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
			<?php $this->widget('Widget_Contents_Page_List')->parse('<a href="{permalink}">{title}</a>'); ?>
		</div>
	</header>