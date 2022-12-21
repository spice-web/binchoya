<?php
switch ($pageName) {
  case "page_food-menu":
    $title = "MENU<span>メニュー</span>";
    break;
  case "page_takeout":
    $title = "TAKEOUT<span>お持ち帰り</span>";
    break;
  case "page_shopInfo":
    $title = "INFORMATION<span>店舗情報</span>";
    break;
}; ?>

<h2 class="page-title"><?= $title; ?></h2>
<main class="wrap__main">