<? if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) { die(); } ?>
<!doctype html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;400;800&display=swap');
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?$APPLICATION->ShowTitle();?></title>
    <? $APPLICATION->ShowHead(); ?>
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<div class="container-fluid">
    <div class="row align-items-start base-background-color header-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 top-logo">
                    <a href="/">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/Logo.png" class="img-fluid float-left" alt="logo">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 top-slogan">
                    <h2>PROFESSIONAL<br>ARTIST AND ANIMATOR</h2>
                    <h3>Will bring your ideas to life<br> in a press of a button</h3>
                    <a href="/prices/" class="btn btn-primary btn-pa-primary">PRICES</a>
                </div>
            </div>
            <div class="row top-menu-row">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "top",
                    [
                        'ROOT_MENU_TYPE' => 'main',
                        'MAX_LEVEL' => '1',
                        'USE_EXT' => 'Y',
                        'DELAY' => 'N',
                        'ALLOW_MULTI_SELECT' => 'N',
                    ],
	false
                );?>
            </div>
        </div>
    </div>