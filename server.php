<?php
$target_dir = ".well-known/pki-validation/"; // 업로드할 디렉토리
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // 업로드할 파일 경로
$uploadOk = 1;

// 파일 업로드 작업 수행
if ($_FILES["fileToUpload"]["error"] !== UPLOAD_ERR_OK) {
    echo "파일 업로드에 실패했습니다. 에러 코드: " . $_FILES["fileToUpload"]["error"];
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "파일이 업로드되었습니다. <br>";
        echo "다음 링크에서 파일을 사용할 수 있는지 확인하세요: ";
        echo "<a href='http://yourdomain.com/$target_file' target='_blank'>http://yourdomain.com/$target_file</a>";
    } else {
        echo "파일 업로드에 실패하였습니다.";
    }
}
?>
