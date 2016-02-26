<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="error-page">
    <h2 class="post-title"><?php _e('页面没找到'); ?></h2>
    <img src="<?php $this->options->themeUrl('img/eac7fbb7d2f267ef.png'); ?>">
    <h5 class="post-title">你想查看的页面已经飞到了火星</h5>
    <h5 class="post-title">要不戳右上角搜索看看~</h5>
</div>

<?php $this->need('footer.php'); ?>
