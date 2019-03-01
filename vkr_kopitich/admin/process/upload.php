<?php
if(!empty($_FILES['image'])) {
	print_r(count($_FILES['image']['name']));
	// file_put_contents('log.log', json_encode($_FILES['image']));
	for ($i=0; $i < count($_FILES['image']['name']); $i++) { 
		$upload_img = cwUpload($i, 'image', '../../uploads/img/', date('YmdHis') .'-'. explode(".",$_FILES['image']['name'][$i])[0] , TRUE, '../../uploads/img/thumbs/', '350', '200');
		
	}
}else{
    $thumb_src = '';
    $message = '';
}

// header('Location: ../index.php?upload="1"');
function cwUpload($id, $field_name = '', $target_folder = '', $file_name = '', $thumb = TRUE, $thumb_folder = '', $thumb_width = '', $thumb_height = '') {
    $target_path = $target_folder;
    $thumb_path = $thumb_folder;
    
    $filename_err = explode(".",$_FILES[$field_name]['name'][$id]);
    $filename_err_count = count($filename_err);
    $file_ext = $filename_err[$filename_err_count-1];
    if($file_name != ''){
        $fileName = $file_name.'.'.$file_ext;
    }else{
        $fileName = $_FILES[$field_name]['name'][$id];
    }

    $upload_image = $target_path.basename($fileName);
    
    if(move_uploaded_file($_FILES[$field_name]['tmp_name'][$id],$upload_image))
    {
        if($thumb == TRUE)
        {
            $thumbnail = $thumb_path.$fileName;
            list($width,$height) = getimagesize($upload_image);
            $thumb_create = imagecreatetruecolor($thumb_width,$thumb_height);
            switch($file_ext){
                case 'jpg':
                    $source = imagecreatefromjpeg($upload_image);
                    break;
                case 'jpeg':
                    $source = imagecreatefromjpeg($upload_image);
                    break;

                case 'png':
                    $source = imagecreatefrompng($upload_image);
                    break;
                case 'gif':
                    $source = imagecreatefromgif($upload_image);
                    break;
                default:
                    $source = imagecreatefromjpeg($upload_image);
            }
            if ($height > $width) {   
                $ratio = $thumb_height / $height;  
                $newheight = $thumb_height;
                $newwidth = $width * $ratio; 
                $writex = round(($thumb_width - $newwidth) / 2);
                $writey = 0;
            }else {
                $ratio = $thumb_width / $width;   
                $newwidth = $thumb_width;  
                $newheight = $height * $ratio;   
                $writex = 0;
                $writey = round(($thumb_height - $newheight) / 2);
            }
            imagecopyresized($thumb_create,$source,$writex,$writey,0,0,$newwidth,$newheight,$width,$height);
            switch($file_ext){
                case 'jpg' || 'jpeg':
                    imagejpeg($thumb_create,$thumbnail,100);
                    break;
                case 'png':
                    imagepng($thumb_create,$thumbnail,100);
                    break;

                case 'gif':
                    imagegif($thumb_create,$thumbnail,100);
                    break;
                default:
                    imagejpeg($thumb_create,$thumbnail,100);
            }
        }
        return $fileName;
    }
    else
    {
        return false;
    }
}