<?php
if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {

    if (move_uploaded_file($_FILES["upfile"]["tmp_name"], "files/" . $_FILES["upfile"]["name"])) {

        chmod("files/" . $_FILES["upfile"]["name"], 0644);

        echo $_FILES["upfile"]["name"] . "をアップロードしました。";

    } else {

        echo "ファイルをアップロードできません。";

    }

}
?>