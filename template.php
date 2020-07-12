<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<?php 

$mega = "<%MEGA>";
$google_drive = "<%GOOGLE_DRIVE>";
$onedrive = "<%ONEDRIVE>";
$mediafire= "<%MEDIAFIRE>";
$box = "<%BOX>";
$dropbox = "<%DROPBOX>";
$cloud_mailru = "<%CLOUD_MAILRU>";
$icedrive = "<%ICEDRIVE>";
$pcloud = "<%PCLOUD>";
$sync = "<%SYNC>";
$yandex_disk = "<%YANDEX_DISK>";
$direct = "<%DIRECT>";

?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="<%FILE> をダウンロード">
	<meta name="thumbnail"
		content="/files/img/background.png">
	<meta name="viewport" content="width=device-width">
	<meta name="format-detection" content="telephone=no">
	<meta property="og:title" content="DLBase">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://dlbase.cf/link/<%FILENAME>">
	<meta property="og:image"
		content="/files/img/background.png">
	<meta property="og:site_name" content="DLBase">
	<meta property="og:description" content="<%FILE> をダウンロード">
	<meta property="og:locale" content="ja_JP">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:url" content="https://dlbase.cf/link/<%FILENAME>">
	<meta name="twitter:title" content="<%FILE> をダウンロード">
	<meta name="twitter:image"
		content="/files/img/background.png">
	<meta name="twitter:description" content="<%AUTHOR>">
	<link rel="shortcut icon" href="/favicon.ico">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
	<link href="/files/dl/css/fonts.css" rel="stylesheet">
	<title>DLBase | Download <%FILE></title>
	<link rel="stylesheet" href="/files/dl/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/fa42a17412.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/files/dl/css/dlbase.css">
	<script src="/files/dl/js/jquery-3.5.1.min.js"></script>
	<script src="/files/dl/js/bootstrap.min.js"></script>
	<script src="/files/dl/js/lazysizes.min.js"></script>
</head>

<body cz-shortcut-listen="true">
	<div id="container">
		<style>
			.HyperList_sound ul.ListBody li.ListBlock a:hover {
				background: 0 0
			}
		</style>
		<div class="single-release">
			<section class="single-release-detail album_detail">
				<div class="release-bg-cover">
					<picture class="hidden-xs">
						<source media="(min-width: 300px)"
							srcset="/files/img/background.png 2x"
							type="image/webp">
						<source media="(min-width: 300px)"
							srcset="/files/img/background.png 2x"
							type="image/jpeg"><img src="/files/img/background.png" alt="背景"></picture>
				</div>
				<div class="centering">
					<div class="listening clearfix">
						<div class="cover">
							<div class="title">
								<img src="https://img.icons8.com/officel/80/000000/archive.png"/>
								<div class="release_title">
									<h1 title="<%FILE>"><%FILE></h1>
								</div>
								<div class="artist_name">
									<h2 class="name"><%AUTHOR></h2>
								</div>
							</div>
						</div>
						<div class="release_stores">
							<div class="info">
								<ul class="store_icon">
								<?php if (!empty($google_drive)) : ?>
									<li><a href="<%GOOGLE_DRIVE>"
											title="Google Driveからダウンロード"><span class="store">
												<picture>
													<img class="mb5 lazyautosizes lazyloaded" alt="Google Driveからダウンロード"
														width="107" height="40" data-sizes="auto"
														data-src="/files/img/google_drive.1x.png"
														data-srcset="/files/google_drive.1x.png 1x, /files/img/google_drive.2x.png 2x, /files/img/google_drive.3x.png 3x"
														sizes="107px"
														srcset="/files/img/google_drive.1x.png 1x, /files/img/google_drive.2x.png 2x, /files/img/google_drive.3x.png 3x"
														src="/files/img/google_drive.1x.png"><noscript><img class=mb5
															alt="Google Driveからダウンロード" width=107 height=40
															src=/files/img/google_drive.1x.png
															srcset="/files/google_drive.1x.png 1x, /files/img/google_drive.2x.png 2x, /files/img/google_drive.3x.png 3x"></noscript>
												</picture>
											</span></a></li>
											<?php endif; ?>
											<?php if (!empty($mega)) : ?>
									<li><a href="<%MEGA>"
											title="MEGAからダウンロード"><span class="store">
												<picture>
													<img class="mb5 lazyautosizes lazyloaded" alt="MEGAからダウンロード"
														width="107" height="40" data-sizes="auto"
														data-src="/files/img/mega.1x.png"
														data-srcset="/files/img/mega.1x.png 1x, /files/img/mega.2x.png 2x, /files/img/mega.3x.png 3x"
														sizes="107px"
														srcset="/files/img/mega.1x.png 1x, /files/img/mega.2x.png 2x, /files/img/mega.3x.png 3x"
														src="/files/img/mega.1x.png"><noscript><img class=mb5
															alt="MEGAからダウンロード" width=107 height=40
															src=/files/img/mega.1x.png
															srcset="/files/img/mega.1x.png 1x, /files/img/mega.2x.png 2x, /files/img/mega.3x.png 3x"></noscript>
												</picture>
											</span></a></li>
											<?php endif; ?>
											<?php if (!empty($dropbox)) : ?>
									<li><a href="<%DROPBOX>"
											title="Dropboxからダウンロード"><span class="store">
												<picture>
													<img class="mb5 lazyautosizes lazyloaded" alt="Dropboxからダウンロード"
														width="107" height="40" data-sizes="auto"
														data-src="/files/img/dropbox.1x.png"
														data-srcset="/files/img/dropbox.1x.png 1x, /files/img/dropbox.2x.png 2x, /files/img/dropbox.3x.png 3x"
														sizes="107px"
														srcset="/files/img/dropbox.1x.png 1x, /files/img/dropbox.2x.png 2x, /files/img/dropbox.3x.png 3x"
														src="/files/img/dropbox.1x.png"><noscript><img class=mb5
															alt=Dropboxからダウンロード width=107 height=40
															src=/files/img/dropbox.1x.png
															srcset="/files/dropbox.1x.png 1x, /files/dropbox.2x.png 2x, /files/img/dropbox.3x.png 3x"></noscript>
												</picture>
											</span></a></li>
											<?php endif; ?>
											<?php if (!empty($onedrive)) : ?>
									<li><a href="<%ONEDRIVE>"
											title="Onedriveからダウンロード"><span class="store">
												<picture>
													<img class="mb5 lazyautosizes lazyloaded" alt="Onedriveからダウンロード"
														width="107" height="40" data-sizes="auto"
														data-src="/files/img/onedrive.1x.png"
														data-srcset="/files/img/onedrive.1x.png 1x, /files/img/onedrive.2x.png 2x, /files/img/onedrive.3x.png 3x"
														sizes="107px"
														srcset="/files/img/onedrive.1x.png 1x, /files/img/onedrive.2x.png 2x, /files/img/onedrive.3x.png 3x"
														src="/files/img/onedrive.1x.png"><noscript><img class=mb5
															alt=Onedriveからダウンロード width=107 height=40
															src=/files/img/onedrive.1x.png
															srcset="/files/onedrive.1x.png 1x, /files/onedrive.2x.png 2x, /files/img/onedrive.3x.png 3x"></noscript>
												</picture>
											</span></a></li>
											<?php endif; ?>
											<?php if (!empty($mediafire)) : ?>
									<li><a href="<%MEDIAFIRE>"
											title="MediaFireからダウンロード"><span class="store">
												<picture>
													<img class="mb5 lazyautosizes lazyloaded" alt="MediaFireからダウンロード"
														width="107" height="40" data-sizes="auto"
														data-src="/files/img/mediafire.1x.png"
														data-srcset="/files/img/mediafire.1x.png 1x, /files/img/mediafire.2x.png 2x, /files/img/mediafire.3x.png 3x"
														sizes="107px"
														srcset="/files/img/mediafire.1x.png 1x, /files/img/mediafire.2x.png 2x, /files/img/mediafire.3x.png 3x"
														src="/files/img/mediafire.1x.png"><noscript><img class=mb5
															alt="MediaFireからダウンロード" width=107 height=40
															src=/files/mediafire.1x.png
															srcset="/files/img/mediafire.1x.png 1x, /files/img/mediafire.2x.png 2x, /files/img/mediafire.3x.png 3x"></noscript>
												</picture>
											</span></a></li>
											<?php endif; ?>
											<?php if (!empty($box)) : ?>
									<li><a href="<%BOX>"
											title="Boxからダウンロード"><span class="store">
												<picture>
													<img class="mb5 lazyautosizes lazyloaded" alt="Boxからダウンロード"
														width="107" height="40" data-sizes="auto"
														data-src="/files/img/box.1x.png"
														data-srcset="/files/img/box.1x.png 1x, /files/img/box.2x.png 2x, /files/img/box.3x.png 3x"
														sizes="107px"
														srcset="/files/img/box.1x.png 1x, /files/img/box.2x.png 2x, /files/img/box.3x.png 3x"
														src="/files/img/box.1x.png"><noscript><img class=mb5
															alt="Boxからダウンロード" width=107 height=40
															src=/files/img/box.1x.png
															srcset="/files/img/box.1x.png 1x, /files/img/box.2x.png 2x, /files/img/box.3x.png 3x"></noscript>
												</picture>
											</span></a></li>
											<?php endif; ?>
											<?php if (!empty($cloud_mailru)) : ?>
									<li><a href="<%CLOUD_MAILRU>"
											title="Cloud mail.ruからダウンロード"><span class="store">
												<picture>
													<img class="mb5 lazyautosizes lazyloaded" alt="Cloud mail.ruからダウンロード"
														width="107" height="40" data-sizes="auto"
														data-src="/files/img/cloud_mailru.1x.png"
														data-srcset="/files/img/cloud_mailru.1x.png 1x, /files/img/cloud_mailru.2x.png 2x, /files/img/cloud_mailru.3x.png 3x"
														sizes="107px"
														srcset="/files/img/cloud_mailru.1x.png 1x, /files/img/cloud_mailru.2x.png 2x, /files/img/cloud_mailru.3x.png 3x"
														src="/files/img/cloud_mailru.1x.png"><noscript><img class=mb5
															alt="Cloud mail.ruからダウンロード" width=107 height=40
															src=/files/img/cloud_mailru.1x.png
															srcset="/files/img/cloud_mailru.1x.png 1x, /files/img/cloud_mailru.2x.png 2x, /files/img/cloud_mailru.3x.png 3x"></noscript>
												</picture>
											</span></a></li>
											<?php endif; ?>
											<?php if (!empty($icedrive)) : ?>
									<li><a href="<%ICEDRIVE>"
											title="Icedriveからダウンロード"><span class="store">
												<picture>
													<img class="mb5 lazyautosizes lazyloaded" alt="Icedriveからダウンロード"
														width="107" height="40" data-sizes="auto"
														data-src="/files/img/icedrive.1x.png"
														data-srcset="/files/img/icedrive.1x.png 1x, /files/img/icedrive.2x.png 2x, /files/img/icedrive.3x.png 3x"
														sizes="107px"
														srcset="/files/img/icedrive.1x.png 1x, /files/img/icedrive.2x.png 2x, /files/img/icedrive.3x.png 3x"
														src="/files/img/icedrive.1x.png"><noscript><img class=mb5
															alt="Icedriveからダウンロード" width=107 height=40
															src=/files/img/icedrive.1x.png
															srcset="/files/img/icedrive.1x.png 1x, /files/img/icedrive.2x.png 2x, /files/img/icedrive.3x.png 3x"></noscript>
												</picture>
											</span></a></li>
											<?php endif; ?>
											<?php if (!empty($pcloud)) : ?>
									<li><a href="<%PCLOUD>"
											title="pCloudからダウンロード"><span class="store">
												<picture>
													<img class="mb5 lazyautosizes lazyloaded" alt="pCloudからダウンロード"
														width="107" height="40" data-sizes="auto"
														data-src="/files/img/pcloud.1x.png"
														data-srcset="/files/img/pcloud.1x.png 1x, /files/img/pcloud.2x.png 2x, /files/img/pcloud.3x.png 3x"
														sizes="107px"
														srcset="/files/img/pcloud.1x.png 1x, /files/img/pcloud.2x.png 2x, /files/img/pcloud.3x.png 3x"
														src="/files/img/pcloud.1x.png"><noscript><img class=mb5
															alt="pCloudからダウンロード" width=107 height=40
															src=/files/img/pcloud.1x.png
															srcset="/files/img/pcloud.1x.png 1x, /files/img/pcloud.2x.png 2x, /files/img/pcloud.3x.png 3x"></noscript>
												</picture>
											</span></a></li>
											<?php endif; ?>
											<?php if (!empty($sync)) : ?>
									<li><a href="<%SYNC>"
											title="Syncからダウンロード"><span class="store">
												<picture>
													<img class="mb5 lazyautosizes lazyloaded" alt="Syncからダウンロード"
														width="107" height="40" data-sizes="auto"
														data-src="/files/img/sync.1x.png"
														data-srcset="/files/img/sync.1x.png 1x, /files/img/sync.2x.png 2x, /files/img/sync.3x.png 3x"
														sizes="107px"
														srcset="/files/img/sync.1x.png 1x, /files/img/sync.2x.png 2x, /files/img/sync.3x.png 3x"
														src="/files/img/sync.1x.png"><noscript><img class=mb5
															alt="Syncからダウンロード" width=107 height=40
															src=/files/img/sync.1x.png
															srcset="/files/img/sync.1x.png 1x, /files/img/sync.2x.png 2x, /files/img/sync.3x.png 3x"></noscript>
												</picture>
											</span></a></li>
											<?php endif; ?>
											<?php if (!empty($yandex_disk)) : ?>
									<li><a href="<%YANDEX_DISK>"
											title="Yandex.Diskからダウンロード"><span class="store">
												<picture>
													<img class="mb5 lazyautosizes lazyloaded" alt="Yandex.Diskからダウンロード"
														width="107" height="40" data-sizes="auto"
														data-src="/files/img/yandex_disk.1x.png"
														data-srcset="/files/img/yandex_disk.1x.png 1x, /files/img/yandex_disk.2x.png 2x, /files/img/yandex_disk.3x.png 3x"
														sizes="107px"
														srcset="/files/img/yandex_disk.1x.png 1x, /files/img/yandex_disk.2x.png 2x, /files/img/yandex_disk.3x.png 3x"
														src="/files/img/yandex_disk.1x.png"><noscript><img class=mb5
															alt="Yandex.Diskからダウンロード" width=107 height=40
															src=/files/img/yandex_disk.1x.png
															srcset="/files/img/yandex_disk.1x.png 1x, /files/img/yandex_disk.2x.png 2x, /files/img/yandex_disk.3x.png 3x"></noscript>
												</picture>
											</span></a></li>
											<?php endif; ?>
											<?php if (!empty($direct)) : ?>
									<li><a href="<%DIRECT>"
											title="直接ダウンロード"><span class="store">
												<picture>
													<img class="mb5 lazyautosizes lazyloaded" alt="直接ダウンロード"
														width="107" height="40" data-sizes="auto"
														data-src="/files/img/direct.1x.png"
														data-srcset="/files/img/direct.1x.png 1x, /files/img/direct.2x.png 2x, /files/img/direct.3x.png 3x"
														sizes="107px"
														srcset="/files/img/direct.1x.png 1x, /files/img/direct.2x.png 2x, /files/img/direct.3x.png 3x"
														src="/files/img/direct.1x.png"><noscript><img class=mb5
															alt="直接ダウンロード" width=107 height=40
															src=/files/img/direct.1x.png
															srcset="/files/img/direct.1x.png 1x, /files/img/direct.2x.png 2x, /files/img/direct.3x.png 3x"></noscript>
												</picture>
											</span></a></li>
											<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<footer id="footer">
			<div class="copy"><a href="https://github.com/opera7133/DLBase" rel="noopener" target="_blank">
					<p>Generated by DLBase</p>
				</a>
			</div>
		</footer>
	</div>
</body>

</html>