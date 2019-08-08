<?php
/**
 * DIY-page
 *
 * @package custom
 *
 */
?>
<title><?php $this->title() ?></title>

<?php $this->need('header.php'); ?>

<div class="DIY-content">
	<div class="post-content">
	  <?php $this->content(''); ?>
	</div>
</div>

<?php $this->need('footer.php'); ?>