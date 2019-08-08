<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<title><?php $this->title() ?></title>

<div class="page-content">
	<p id="contents-list-info"><?php $this->author(); ?> - <?php $this->category(','); ?> - <?php $this->date('Y年m月d日'); ?></p>

	<p id="page-content-title"><?php $this->title() ?></p>

	<div class="post-content">
	  <?php $this->content(''); ?>
	</div>
	
</div>

<?php $this->need('footer.php'); ?>

<script>
	function addLineNumbers() {
	  var x = document.getElementsByTagName("pre");
	  
	  if (x==null) {
		return;
	  }
	  for (var i = 0; i < x.length; i++) {
		x[i].classList.add("line-numbers");
	  }
	}
	addEventListener();
</script>
