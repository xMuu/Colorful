<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="mdl-cell mdl-cell--8-col">
    <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
    <?php if ($this->have()): ?>
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
    <?php else: ?>
        <article class="post">
            <h3 class="post-title"><?php _e('没有找到内容'); ?></h3>
        </article>
    <?php endif; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>

<!--    <div class="col-mb-12 col-8" id="main" role="main">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
    			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
    			<ul class="post-meta">
    				<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
    				<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></li>
    				<li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
                    <li itemprop="interactionCount"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
    			</ul>
                <div class="post-content" itemprop="articleBody">
        			<?php $this->content('- 阅读剩余部分 -'); ?>
                </div>
    		</article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div>-->

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
