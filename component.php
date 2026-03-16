<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */

$arResult['DOWNLOAD_URL'] = $arParams['DOWNLOAD_URL'] ?? '';
$this->includeComponentTemplate();
