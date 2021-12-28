<?php
function uploadimg($img,$save){
  if($img['error'] !== UPLOAD_ERR_OK){
    echo '<script>alert("文件上传失败");history.back();</script>';
	exit();
  }
  if($img['type'] !== 'image/png' && $img['type'] !== 'image/x=png' && $img['type'] !== 'image/jpeg' && $img['type'] !== 'image/pjpeg' && $img['type'] !== 'image/gif'){
   echo '<script>alert("请上传jpeg,png,gif图片");history.back();</script>';
   exit();
  }
  if($img['size'] >= (1024 * 1024)){
    echo '<script>alert("请上传小于1M的图片");history.back();</script>';
	exit();
  }
  if(!move_uploaded_file($img['tmp_name'],$save)){
  echo '<script>alert("文件上传失败，无法保存到指定位置");history.back();</script>';
  exit();
  }
}
$func = [
         'image/png' => function($file,$img = null){
		     return $img ? imagepng($img, $file) : imagecreatefrompng($file);
		 },
		 'image/jpeg' => function($file,$img = null){
		     return $img ? imagejpeg($img, $file) : imagecreatefromjpeg($file);
		 },
          'image/gif' => function($file,$img = null){
		     return $img ? imagegif($img, $file) : imagecreatefromgif($file);
		 },
];
function thumb($file, $save, $limit)
{
  $info = getimagesize($file);
  $mime = $info['mime'];
  list($src_w, $src_h) = $info;
  list($dst_w, $dst_h) = [$src_w, $src_h];
  if($src_w / $limit > $src_h / $limit){
     if($src_w > $limit){
	     $dst_w = $limit;
		 $dst_h = round($dst_w * $src_h / $src_w);
	 }
  }else{
      if($src_h > $limit){
	     $dst_h = $limit;
		 $dst_h = round($dst_h * $src_w / $scr_h);
	  }
  }
  $src = $GLOBALS['func'][$mime]($file);
  $dst = imagecreatetruecolor($dst_w,$dst_h);
  imagecopyresampled($dst, $src, 0, 0, 0, 0, $dst_w,$dst_h,$src_w,$src_h);
  return $GLOBALS['func'][$mime]($save,$dst);
}
?>