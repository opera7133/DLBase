<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DLBase | 処理中</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="./files/make/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="/" class="brand-logo">DLBase</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">ホーム</a></li>
                <li><a href="/make.html">作成</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="/">ホーム</a></li>
                <li><a href="/make.html">作成</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <?php

    if (empty($_SERVER["HTTP_REFERER"])) {
        header('Location: https://dlbase.cf/');
    } else {
        // パラメータ取得
        $request_param = $_POST;

        //定義
        $template = "template.php";
        $author = $request_param['author'];
        $file = $request_param['file'];

        //クラウド
        $mega = $request_param['mega'];
        $box = $request_param['box'];
        $onedrive = $request_param['onedrive'];
        $google_drive = $request_param['google-drive'];
        $dropbox = $request_param['dropbox'];
        $mediafire = $request_param['mediafire'];
        $cloud_mailru = $request_param['cloud-mailru'];
        $icedrive = $request_param['icedrive'];
        $pcloud = $request_param['pcloud'];
        $sync = $request_param['sync'];
        $yandex_disk = $request_param['yandex-disk'];

        //それ以外
        $direct = $request_param['direct'];

        $file = rand(1000000, 9999999);
        $filename = $file . ".php";

        $contents = file_get_contents($template);

        //ファイル情報
        $contents = str_replace("<%FILENAME>", htmlspecialchars($filename), $contents);
        $contents = str_replace("<%FILE>", htmlspecialchars($file), $contents);
        $contents = str_replace("<%AUTHOR>", htmlspecialchars($author), $contents);

        //クラウド
        $contents = str_replace("<%MEGA>", htmlspecialchars($mega), $contents);
        $contents = str_replace("<%BOX>", htmlspecialchars($box), $contents);
        $contents = str_replace("<%ONEDRIVE>", htmlspecialchars($onedrive), $contents);
        $contents = str_replace("<%GOOGLE_DRIVE>", htmlspecialchars($google_drive), $contents);
        $contents = str_replace("<%DROPBOX>", htmlspecialchars($dropbox), $contents);
        $contents = str_replace("<%MEDIAFIRE>", htmlspecialchars($mediafire), $contents);
        $contents = str_replace("<%CLOUD_MAILRU>", htmlspecialchars($cloud_mailru), $contents);
        $contents = str_replace("<%ICEDRIVE>", htmlspecialchars($icedrive), $contents);
        $contents = str_replace("<%PCLOUD>", htmlspecialchars($pcloud), $contents);
        $contents = str_replace("<%SYNC>", htmlspecialchars($sync), $contents);
        $contents = str_replace("<%YANDEX_DISK>", htmlspecialchars($yandex_disk), $contents);

        //それ以外
        $contents = str_replace("<%DIRECT>", htmlspecialchars($direct), $contents);

        // ファイル生成＆書き込み
        $handle = fopen(".//link//" . $filename, 'w');
        fwrite($handle, $contents);
        fclose($handle);

        $link = "/link/" . $file;

        // メッセージ表示
        echo '<div class="container center"><p><a href=' . $link . '>' . $file . '</a>を生成しました。</p>';
        echo '<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-text="DLBase" data-size="large" data-url="https://dlbase.cf' . $link . '" class="twitter-share-button" data-show-count="false" data-lang="ja">ツイート</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>';
        echo '<iframe style="padding-left:10px;" src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdlbase.cf' . $link . '&layout=button&size=large&width=79&height=28&appId" width="89" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></div>';
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="/files/make/js/init.js"></script>
</body>

</html>