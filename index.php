<?php
/**
 * Simple-lnzu
 * @package lnzu
 * @author lnzu
 * @version 1.0
 * @link https://bflbbn.coding.io/
 */
?>
<html>

	<body>
		<?php $this->need('header.php');?>
		
		<div class="contents">
			<?php while($this->next()): ?>
			<div class="contents-list">
				<p id="contents-list-info"><?php $this->author(); ?> - <?php $this->category(','); ?> - <?php $this->date('Y年m月d日'); ?></p>
				<a id="contents-list-link" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
			</div>
			<hr />
			<?php endwhile; ?>
		</div>
		
		<!-- 上一页都下一页-->
		<ul class="pager">
			<li class="previous"><?php $this->pageLink('上一页'); ?></li>
			<li><?php echo $this->_currentPage;?>/<?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?></li>
			<li class="next"><?php $this->pageLink('下一页', 'next'); ?></li>
		</ul>
		
		<?php $this->need('footer.php');?>
	</body>
</html>



