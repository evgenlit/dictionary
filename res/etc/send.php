<?php
	
    if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
        $fname = explode(".", $_FILES["file"]["name"]);
        $ext = end($fname);
        $name = md5(rand(1, rand(100, 700)));

        $new_path = "/res/upload/images/" . $name . '.' . $ext;
        move_uploaded_file($_FILES["file"]["tmp_name"], $new_path);
		echo 'File was uploaded!';
//        return $new_path;
    } else {
    	echo 'Error';
//        return false;
    }

	function load_response($data) {
		echo '<script type="text/javascript">
		        var data = '.json_encode($data).';
			 </script>';
	}
	//load_response('<img src="'.$new_path.'">');
	//echo '<p style="font-size:12px; color:#00C;">Фото загружено!</p>';
	echo '<img src="'.$new_path.'">';
?>