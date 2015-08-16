
function autoversion($url) {
    $path = pathinfo($url);
    $ver = '.'.filemtime($_SERVER['DOCUMENT_ROOT'].$url).'.';
    return $path['dirname'].'/'.str_replace('.', $ver, $path['basename']);
}

# example

<link href="<?php autoversion('/path/to/theme.css'); ?>" rel="stylesheet">
