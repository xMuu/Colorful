<?php
/**
 * Created by PhpStorm.
 * User: Volio
 * Date: 2016/2/21
 * Time: 11:12
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</section>

<footer class="mdl-mini-footer mdl-shadow--4dp">
    <div class="mdl-mini-footer__left-section">
        <ul class="mdl-mini-footer__link-list">
            <li>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><strong><?php $this->options->title(); ?></strong></a>.</li>
        </ul>
    </div>
    <div class="mdl-mini-footer__right-section">
        <ul class="mdl-mini-footer__link-list">
            <li>Powered By <a href="http://www.typecho.org" rel="nofollow"><strong>Typecho</strong></a></li>
            <li> | </li>
            <li>Theme By <a href="https://niconiconi.org"><strong>Volio</strong></a></li>
        </ul>
    </div>
</footer>

</div>
</main>
</div>
<script src="<?php $this->options->themeUrl('material.min.js'); ?>"></script>
<?php $this->footer(); ?>
</body>
</html>