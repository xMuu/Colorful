<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop">
    <div class="card-square mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title mdl-card--expand"<?php if ($this->options->AuthorImage): ?> style="background-image: url(<?php $this->options->AuthorImage() ?>);"<?php endif; ?>>
            <h2 class="mdl-card__title-text"><?php $this->author(); ?></h2>
        </div>
        <div class="mdl-card__supporting-text">
            <span><?php if ($this->options->Authordes): $this->options->Authordes(); endif; ?></span>
        </div>
        <div class="mdl-card__menu">
            <button id="col1-menu-bottom-right"
                    class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">more_vert</i>
            </button>

            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                data-mdl-for="col1-menu-bottom-right">
                <li class="mdl-menu__item"><a class="mdl-navigation__link" href="<?php if ($this->options->AuthorGithub): $this->options->AuthorGithub(); endif; ?>" target="_blank">Github</a></li>
                <li class="mdl-menu__item"><a class="mdl-navigation__link" href="<?php if ($this->options->AuthorGithub): $this->options->AuthorWeibo(); endif; ?>" target="_blank">Weibo</a></li>
            </ul>
        </div>
    </div>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
        <div class="card-sidebar mdl-card mdl-shadow--4dp">
            <div class="mdl-card__title mdl-card--expand"<?php if ($this->options->AuthorUrl): ?> style="background-image: url(<?php $this->options->AuthorUrl() ?>);"<?php endif; ?>>
                <h2 class="mdl-card__title-text"><?php _e('最新文章'); ?></h2>
            </div>
            <div class="mdl-card__supporting-text">
                <ul class="card-sidebar-ul">
                    <?php $this->widget('Widget_Contents_Post_Recent')
                        ->parse('<li><a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect continue-button" href="{permalink}">{title}</a></li>'); ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
        <div class="card-sidebar mdl-card mdl-shadow--4dp">
            <div class="mdl-card__title mdl-card--expand"<?php if ($this->options->AuthorUrl): ?> style="background-image: url(<?php $this->options->AuthorUrl() ?>);"<?php endif; ?>>
                <h2 class="mdl-card__title-text"><?php _e('最近回复'); ?></h2>
            </div>
            <div class="mdl-card__supporting-text">
                <ul class="card-sidebar-ul">
                    <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
                    <?php while($comments->next()): ?>
                        <li><a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect continue-button" href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?></li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
        <div class="card-sidebar mdl-card mdl-shadow--4dp">
            <div class="mdl-card__title mdl-card--expand"<?php if ($this->options->AuthorUrl): ?> style="background-image: url(<?php $this->options->AuthorUrl() ?>);"<?php endif; ?>>
                <h2 class="mdl-card__title-text"><?php _e('分类'); ?></h2>
            </div>
            <div class="mdl-card__supporting-text">
                <ul class="card-sidebar-ul">
                    <?php $this->widget('Widget_Metas_Category_List')
                        ->parse('<li><a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect continue-button" href="{permalink}">{name}</a></li>'); ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
        <div class="card-sidebar mdl-card mdl-shadow--4dp">
            <div class="mdl-card__title mdl-card--expand"<?php if ($this->options->AuthorUrl): ?> style="background-image: url(<?php $this->options->AuthorUrl() ?>);"<?php endif; ?>>
                <h2 class="mdl-card__title-text"><?php _e('归档'); ?></h2>
            </div>
            <div class="mdl-card__supporting-text">
                <ul class="card-sidebar-ul">
                    <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
                        ->parse('<li><a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect continue-button" href="{permalink}">{date}</a></li>'); ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
        <div class="card-sidebar mdl-card mdl-shadow--4dp">
            <div class="mdl-card__title mdl-card--expand"<?php if ($this->options->AuthorUrl): ?> style="background-image: url(<?php $this->options->AuthorUrl() ?>);"<?php endif; ?>>
                <h2 class="mdl-card__title-text"><?php _e('其它'); ?></h2>
            </div>
            <div class="mdl-card__supporting-text">
                <ul class="card-sidebar-ul">
                    <?php if($this->user->hasLogin()): ?>
                        <li class="last"><a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect continue-button" href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                        <li><a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect continue-button" href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
                    <?php else: ?>
                        <li class="last"><a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect continue-button" href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
                    <?php endif; ?>
                    <li><a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect continue-button" href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
                    <li><a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect continue-button" href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>
