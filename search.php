<?php $this->need('header.php');?>
<title>搜索</title>
<body>
	<!--列表-->
	<?php if ($this->have()): ?>
		<div class="contents">
			<?php while($this->next()): ?>
			<div class="contents-list">
				<p id="contents-list-info"><?php $this->author(); ?> - <?php $this->category(','); ?> - <?php $this->date('Y年m月d日'); ?></p>
				<a id="contents-list-link" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
			</div>
			<hr />
			<?php endwhile; ?>
		</div>
	<?php else: ?>
		<div class="search-no">没有找到相关文章</div>
	<?php endif; ?>
			
	<!-- 上一页都下一页-->
	<ul class="pager">
		<li class="previous"><?php $this->pageLink('上一页'); ?></li>
		<li><?php echo $this->_currentPage;?>/<?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?></li>
		<li class="next"><?php $this->pageLink('下一页', 'next'); ?></li>
	</ul>
		
	<!--页脚-->
	<?php $this->need('footer.php'); ?>

</body>