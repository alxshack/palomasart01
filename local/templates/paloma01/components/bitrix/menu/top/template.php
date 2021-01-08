<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<? if (!empty($arResult)): ?>
        <div class="col-lg-10">
            <? foreach ($arResult as $arItem):
                if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) { continue;} ?>
                <a href="<?= $arItem["LINK"] ?>" class="btn btn-light btn-pa-light btn-top-menu"><?= $arItem["TEXT"] ?></a>
            <? endforeach ?>
        </div>
<? endif ?>