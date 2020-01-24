<?php
$data = require('data/gallery.php');
function FindOneById($id)
{
    global $data;
    foreach ($data as $datas) {
        if ($id == $datas['id']) {
            return $datas;
        }
    }
    return false;
}
function getCount($data)
{
    return count($data);
}
function findPaged($limit, $offset)
{
    global $data;
    $img_select = [];
    $compteur = 0;
    foreach ($data as $dat) {
        $img_select[] = $dat;
        $compteur++;
        if ($compteur == $limit) {
            break;
        }
    }
    return $img_select;
}
