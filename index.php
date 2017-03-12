<?php

$PictureLink = "https://www.instagram.com/p/BRiKUZ2ANJf/";

$json = file_get_contents("https://api.instagram.com/oembed/?url=".$PictureLink);
$data = json_decode($json);

$html = $data->html;

$data=str_replace("data-instgrm-captioned","", $html);
echo preg_replace('#word-wrap:break-word;" target="_blank">(.*?)</a></p>#s', "", $data);

?>