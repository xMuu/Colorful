<?php
/**
 * Created by PhpStorm.
 * User: Volio
 * Date: 2016/2/21
 * Time: 9:41
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('material.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>

    <?php $this->header(); ?>
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header  mdl-layout__header--waterfall"<?php if ($this->options->topUrl): ?> style="background-image: url(<?php $this->options->topUrl() ?>);"<?php endif; ?>>
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title"><?php $this->options->title() ?></span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <form id="search" method="post" action="./" role="search">
                            <input type="text" name="s" class="mdl mdl-textfield__input" id="fixed-header-drawer-exp" placeholder="<?php _e('输入关键字搜索'); ?>" />
                            <input type="submit" style="display: none;">
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
            <a class="mdl-layout__tab<?php if($this->is('index')): ?> is-active<?php endif; ?>" href="#scroll-tab" onclick="window.location='<?php $this->options->siteUrl(); ?>'"><?php _e('首页'); ?></a>
            <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while($category->next()): ?>
                <a class="mdl-layout__tab<?php if($this->is('category', $category->slug)): ?> is-active<?php endif; ?>" href="#scroll-tab" onclick="window.location='<?php $category->permalink(); ?>'" title="<?php $category->description(); ?>"><?php $category->name(); ?></a>
            <?php endwhile; ?>
            <div class="mdl-layout-spacer"></div>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <a class="mdl-layout__tab mdl-layout--large-screen-only<?php if($this->is('page', $pages->slug)): ?> is-active<?php endif; ?>" href="#scroll-tab" onclick="window.location='<?php $pages->permalink(); ?>'" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
            <?php endwhile; ?>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title"><?php $this->options->title() ?></span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
            <?php $this->widget('Widget_Metas_Category_List')
                ->parse('<a class="mdl-navigation__link" href="{permalink}" title="{description}">{name}</a>'); ?>
            <?php $this->widget('Widget_Contents_Page_List')
                ->parse('<a class="mdl-navigation__link" href="{permalink}">{title}</a>'); ?>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <section class="mdl-layout__tab-panel is-active" id="scroll-tab">
            <div class="page-content mdl-grid">