<?php
/**
 * A beautiful typecho template
 *
 * @package Colorful
 * @author Volio
 * @version 1.0.0
 * @link https://niconiconi.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="mdl-cell mdl-cell--8-col">
    <?php while($this->next()): ?>
    <div class="card-text mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title"<?php if ($this->options->logoUrl): ?> style="background-image: url(<?php $this->options->logoUrl() ?>);"<?php endif; ?>>
            <h2 class="mdl-card__title-text"><a class="card-text-title" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        </div>
        <div class="mdl-card__supporting-text">
            <div class="post-meta">
                <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
                <li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></li>
                <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
                <li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
            </div>
        </div>
        <div class="mdl-card__supporting-text">
            <?php $this->content('- 阅读剩余部分 -'); ?>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect continue-button" href="<?php $this->permalink() ?>">继续阅读</a>
        </div>
    </div>
    <?php endwhile; ?>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
