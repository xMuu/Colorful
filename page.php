<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="mdl-cell mdl-cell--8-col">
    <div class="card-text mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title"<?php if ($this->options->logoUrl): ?> style="background-image: url(<?php $this->options->logoUrl() ?>);"<?php endif; ?>>
            <h1 class="mdl-card__title-text"><a class="card-text-title" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        </div>
        <div class="mdl-card__supporting-text">
            <?php $this->content(); ?>
        </div>
    </div>

    <?php $this->need('comments.php'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
