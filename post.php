<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="mdl-cell mdl-cell--8-col">
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
            <?php $this->content(); ?>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
        </div>
    </div>

    <?php $this->need('comments.php'); ?>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
