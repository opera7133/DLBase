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
                <li><a href="/make">作成</a></li>
                <li><a href="/delete">削除</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="/">ホーム</a></li>
                <li><a href="/make">作成</a></li>
                <li><a href="/delete">削除</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <?php
    //POSTの処理
    $id = isset($_POST['id']) ? $_POST['id'] : "false";
    $pswd = isset($_POST['pswd']) ? $_POST['pswd'] : "false";
    ?>
    <?php
    //ファイル名の指定
    $file_name = "pswd.csv";


    //処理の分岐
    if ($id != "false") {
        $fp = fopen($file_name, "a+") or die('ファイル読み込みに失敗しました');
        //データを$arrayに代入（多元配列）
        while (!feof($fp)) {
            $data = fgets($fp);
            $array[] = explode(",", mb_convert_encoding($data, "UTF-8", "auto"));
        }
        fclose($fp);

        //目的のデータの修得
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i][0] == $id) {
                $new_data = $array[$i];
                //var_dump( $new_data );
                break;
            }
        }
    }
    $new_data = isset($new_data) ? $new_data : "false";
    ?>
    <div class="container">
        <h4>ページを削除</h4>
        <div class="row">
            <form class="col s12" action="delete.php" method="POST">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="id" class="validate" required>
                        <label for="id">ID</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" name="pswd" class="validate" required>
                        <label for="pswd">Password</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">削除
                    <i class="material-icons right">delete</i>
                </button>
            </form>

            <?php
            if ($id != "false") {
                if ($new_data == "false" || $id == "") {
                    echo "<p>IDが違います</p>";
                } else {
                    if ($new_data[1] == $pswd) {
                        $file = file($file_name);
                        $i = $new_data[2];
                        unset($file[$i]);
                        file_put_contents($file_name, $file);
                        $link = '/link/' . $id . '.php';
                        unlink($link);
                        echo "<p>" . $id . "が削除されました。</p>";
                    } else {
                        echo "<p>パスワードが違います</p>";
                    }
                }
            }
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="/files/make/js/init.js"></script>
</body>

</html>