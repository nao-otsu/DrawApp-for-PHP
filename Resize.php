<?php 
    function getFileList($target) {
        $list = array();
        $listFile = array();

        //ファイル一覧を取得
        foreach(glob($target . '{*.*}', GLOB_BRACE) as $val){
            $listFile[] = $val;
        }

        $list['dir'] = $listDir;
        $list['file'] = $listFile;

        return $list;
    }

    $target = './files/';    //取得対象ディレクトリ

    //一覧取得
    $list = getFileList($target);

    foreach($list['file'] as $val){
        //$img = file_get_contests($val);
        //header('Content-type: image/png');
        echo '<img src="'.$val.'" style="width:100%; margin:10px 0;" /><br>';
    }
?>