<?php

use App\Models\category;

$id = $_REQUEST['id'];
$category =  category::find($id);
if($category==null){
    header("location:index.php?option=category");
}
//
$category->status =0;
$category->updated_at = date('Y-m-d H:i:s');
$category->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
$category->save();
header("location:index.php?option=category");