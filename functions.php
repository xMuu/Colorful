<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $topUrl = new Typecho_Widget_Helper_Form_Element_Text('topUrl', NULL, NULL, _t('站点顶部图片地址'), _t('在这里填入一个图片URL地址, 以在网站顶部显示图片'));
    $form->addInput($topUrl);

    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('文章顶部图片地址'), _t('在这里填入一个图片URL地址, 以在文章顶部显示图片'));
    $form->addInput($logoUrl);

    $AuthorUrl = new Typecho_Widget_Helper_Form_Element_Text('AuthorUrl', NULL, NULL, _t('站点sidebar图片地址'), _t('在这里填入一个图片URL地址, 以便显示sidebar图片'));
    $form->addInput($AuthorUrl);

    $AuthorImage = new Typecho_Widget_Helper_Form_Element_Text('AuthorImage', NULL, NULL, _t('个人头像图片地址'), _t('在这里填入一个图片URL地址, 以便展示个人头像'));
    $form->addInput($AuthorImage);

    $Authordes = new Typecho_Widget_Helper_Form_Element_Text('Authordes', NULL, NULL, _t('个人描述'));
    $form->addInput($Authordes);

    $AuthorGithub = new Typecho_Widget_Helper_Form_Element_Text('AuthorGithub', NULL, NULL, _t('Github地址'));
    $form->addInput($AuthorGithub);

    $AuthorWeibo = new Typecho_Widget_Helper_Form_Element_Text('AuthorWeibo', NULL, NULL, _t('Weibo地址'));
    $form->addInput($AuthorWeibo);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}

