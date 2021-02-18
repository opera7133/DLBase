# DLBase
DLBaseは、MEGAやGoogle Driveなどのクラウドストレージでホストされた同じファイルを、まとめてLinkCore（TuneCoreの短縮URL）風にしてくれるプログラムです。

## URL
[https://dlbase.cf](https://dlbase.cf)

## 構成物
- Materialize CSS 1.0.0
- Material Icons
- jQuery 3.5.1
- Bootstrap v5 alpha
- FontAwesome 5.13.1
- Google Fonts

## 仕組み

### 生成
1.各サービスのURLを入力
2.ファイル名とユーザー名を入力
3.1と2をまとめてテンプレートに入れ込む
4.ランダムな文字列を作り、ファイル名にして生成
5.パスワードをランダム生成し、ファイル名をパスワードをCSVに追記

### 削除
1.ID（ファイル名）とパスワードを入力
2.pswd.csvを読み取り、IDと一致する行を検索
3.行のパスワードと入力されたパスワードの一致を確認
4.ファイルと行を削除

## .htaccess
.htaccessが使えるサーバーの場合、設定することをお勧めします。
```
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME}\.php -f
RewriteRule ^(.*)$ $1.php

ErrorDocument 404 /403.html
ErrorDocument 404 /404.html
```

## アクセス権限

**pswd.csvのパーミッションを```0660```に設定してください。**
