<?php
function autoversion($url) {
    $path = pathinfo($url);
    $ver = stat($_SERVER['DOCUMENT_ROOT'].$url)[mtime];
    return  $url . "?v=" .$ver;
}
# example
?>

<link href="<?php autoversion('/path/to/theme.css'); ?>" rel="stylesheet">
