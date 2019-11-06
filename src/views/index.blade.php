<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once($dir_block . '/libs/lessc.inc.php');
    }
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    $less = new lessc;
    $less->compileFile('less/5.less', 'css/5.css');
    //var_dump($dir_block);die();
?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{ asset('/css/bootstrap-3.3.7.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/5.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('/js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap-3.3.7.min.js') }}"></script>	

        <title>Laravel View</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php include '5-content.php'; ?>
    </body>
</html>
