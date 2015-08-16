<?php
function autoversion($url) {
    $ver = stat($_SERVER['DOCUMENT_ROOT'] . $url)[mtime];
    return $url . "?v=" . $ver;
}
# example
?>

<link href="<?php echo autoversion('/path/to/theme.css'); ?>" rel="stylesheet">
