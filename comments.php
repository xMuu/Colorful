<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
        <h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
        <div class="card-text mdl-card mdl-shadow--4dp">
            <div class="mdl-card__supporting-text">
            <?php $comments->listComments(); ?>
            </div>
        </div>
        <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div class="card-text mdl-card mdl-shadow--4dp">
        <div id="<?php $this->respondId(); ?>" class="respond">
            <div class="cancel-comment-reply">
                <?php $comments->cancelReply(); ?>
            </div>
            <div class="mdl-card__title"<?php if ($this->options->logoUrl): ?> style="background-image: url(<?php $this->options->logoUrl() ?>);"<?php endif; ?>>
                <h3 class="mdl-card__title-text card-text-title" id="response"><?php _e('添加新评论'); ?></h3>
            </div>
            <div class="mdl-card__supporting-text">
                <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                    <?php if($this->user->hasLogin()): ?>
                        <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
                    <?php else: ?>
                        <p>
                        <div class="comments-textfield mdl-textfield mdl-js-textfield">
                            <label for="author" class="mdl-textfield__label"><?php _e('称呼'); ?></label>
                            <input type="text" name="author" id="author" class="mdl-textfield__input" value="<?php $this->remember('author'); ?>" required />
                        </div>
                        </p>
                        <p>
                        <div class="comments-textfield mdl-textfield mdl-js-textfield">
                            <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="mdl-textfield__label"<?php endif; ?>><?php _e('Email'); ?></label>
                            <input type="email" name="mail" id="mail" class="mdl-textfield__input" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                        </div>
                        </p>
                        <p>
                        <div class="comments-textfield mdl-textfield mdl-js-textfield">
                            <label for="url" class="mdl-textfield__label"<?php if ($this->options->commentsRequireURL): ?> <?php endif; ?>><?php _e('网站'); ?></label>
                            <input type="url" name="url" id="url" class="mdl-textfield__input" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
                        </div>
                        </p>
                    <?php endif; ?>
                    <p>
                    <div class="comments-textfield mdl-textfield mdl-js-textfield">
                        <label for="textarea" class="mdl-textfield__label"><?php _e('内容'); ?></label>
                        <textarea rows="8" cols="50" name="text" id="textarea" class="mdl-textfield__input" required ><?php $this->remember('text'); ?></textarea>
                    </div>
                    </p>
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect"><?php _e('提交评论'); ?></button>
                </form>
            </div>
        </div>
    </div>
    <?php else: ?>
        <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>