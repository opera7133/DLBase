<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DLBase | 完了</title>
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

    function makeRandStr($length)
    {
        $str = array_merge(range('a', 'z'), range('0', '9'), range('A', 'Z'));
        $r_str = null;
        for ($i = 0; $i < $length; $i++) {
            $r_str .= $str[rand(0, count($str) - 1)];
        }
        return $r_str;
    }

    if (empty($_SERVER["HTTP_REFERER"])) {
        header('Location: https://dlbase.cf/');
    } else {
        // パラメータ取得
        $request_param = $_POST;

        //定義
        $template = "template.php";
        $author = $request_param['author'];
        $file = $request_param['file'];
        $filept = pathinfo($file);

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

        $filenum = makeRandStr(8);
        $filename = $filenum . ".php";

        $contents = file_get_contents($template);
        $imgext = array('png', 'jpg', 'jpeg', 'raw', 'gif', 'bmp', 'heic', 'svg', 'tif', 'tiff', 'eps', 'ico');
        $vidext = array('mp4', 'avi', 'mpg', 'mov', 'wmv', 'mkv', 'flv', 'm4a', 'ts', 'webm', 'ogm', 'mts');
        $code = array('html', 'php', 'py', 'python', 'cs', 'cpp', 'hsp', 'sh', 'c', 'bash', 'exe', 'go', 'h', 'java', 'jar', 'lua', 'pl', 'rb', 'scala', 'vb', 'md', 'coffee', 'ws', 'b');
        $audioext = array('mp3', 'mid', 'midi', 'wav', 'wma', 'aif', 'aiff', 'aac', 'ogg', 'oga', 'flac', 'tta', 'opus', 'asf');
        $archiveext = array('zip', 'zipx', 'tar', 'tgz', 'taz', 'cab', 'aiff', 'lzh', 'lha', 'rar', 'ace', 'lzma');

        if (in_array($filept['extension'], $imgext)) {
            $contents = str_replace("<%IMG>", htmlspecialchars("/files/img/img.png"), $contents);
        } elseif (in_array($filept['extension'], $vidext)) {
            $contents = str_replace("<%IMG>", htmlspecialchars("/files/img/video.png"), $contents);
        } elseif (in_array($filept['extension'], $code)) {
            $contents = str_replace("<%IMG>", htmlspecialchars("/files/img/code.png"), $contents);
        } elseif (in_array($filept['extension'], $audioext)) {
            $contents = str_replace("<%IMG>", htmlspecialchars("/files/img/audio.png"), $contents);
        } elseif (in_array($filept['extension'], $archiveext)) {
            $contents = str_replace("<%IMG>", htmlspecialchars("/files/img/archive.png"), $contents);
        } elseif ($filept['extension'] = "pdf") {
            $contents = str_replace("<%IMG>", htmlspecialchars("/files/img/pdf.png"), $contents);
        } else {
            $contents = str_replace("<%IMG>", htmlspecialchars("/files/img/file.png"), $contents);
        }

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

        $link = "/link/" . $filenum;

        // メッセージ表示
        echo '<div class="container center"><p><a href=' . $link . '>' . $filenum . '</a>を生成しました。</p>';
        echo '<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-text="DLBase" data-size="large" data-url="https://dlbase.cf' . $link . '" class="twitter-share-button" data-show-count="false" data-lang="ja">ツイート</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>';
        echo '<iframe style="margin-left:10px;" src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdlbase.cf' . $link . '&layout=button&size=large&width=69&height=28&appId" width="89" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>';
        echo '<div class="line-it-button" data-lang="ja" data-type="share-a" data-ver="3" data-url="https://dlbase.cf' . $link . '" data-color="default" data-size="large" data-count="false" style="display: none;"></div></div>';
    }
    ?>
    <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="/files/make/js/init.js"></script>
</body>

</html>