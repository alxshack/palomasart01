<? if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) { die(); } ?>

<div class="row base-background-color footer-block">
    <div class="container bottom-menu-container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="bottom-info-text">
                    <p>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "bottom_text.php"
                        ]
                    );?>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row justify-content-lg-end">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom",
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
                <div class="row socials-block justify-content-lg-end align-items-lg-end">
                    <div class="soc-element">
                        <a href="mailto:mail@mail.ml">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/mail.png" alt="email">
                        </a>
                    </div>
                    <div class="soc-element">
                        <a href="#!">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/yt.png" alt="email">
                        </a>
                    </div>
                    <div class="soc-element">
                        <a href="#!">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/tel.png" alt="email">
                        </a>
                    </div>
                    <div class="soc-element">
                        <a href="mailto:mail@mail.ml">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/fa.png" alt="email">
                        </a>
                    </div>
                    <div class="soc-element">
                        <a href="mailto:mail@mail.ml">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/fb.png" alt="email">
                        </a>
                    </div>
                    <div class="soc-element">
                        <a href="mailto:mail@mail.ml">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/dis.png" alt="email">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>
<?// $APPLICATION->ShowProperty('FooterJS'); ?>
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
</body>
</html>