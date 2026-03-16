<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
$downloadUrl = $arResult['DOWNLOAD_URL'] ?: ($arParams['DOWNLOAD_URL'] ?? '');
?>
<div class="custom-excel-download">
    <a href="<?= htmlspecialcharsbx($downloadUrl) ?>" class="btn btn-primary" download>
        Скачать Excel (Привет мир2!)
    </a>
</div>
