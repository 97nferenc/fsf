<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	</head>
<body>
	<header>
		<img src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
		<h1><?= $fejlec['cim'] ?></h1>
		<?php if (isset($fejlec['motto'])) { ?><h3><?= $fejlec['motto'] ?></h3><?php } ?>
		<form method="get" action="http://www.google.hu/search"><div class="clear-block">
			<input type="hidden" name="ie" value="UTF-8" />
			<input type="hidden" name="oe" value="UTF-8" />
			<input type="hidden" name="domains" value="fsf.nhely.hu/" />
			<input type="hidden" name="sitesearch" value="www.fsf.nhely.hu/" />
			<input type="text" class="form-text" name="q" size="20" maxlength="255" value="" />
			<input type="submit" class="form-submit" name="btnG" value="Keresés" /></div>
		</form>
	</header>
    <div id="wrapper">
        <aside id="nav">
            <nav>
                <ul>
					<?php foreach ($oldalak as $url => $oldal) { ?>
						<li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
						<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
						<?= $oldal['szoveg'] ?></a>
						</li>
					<?php } ?>
                </ul>
            </nav>
        </aside>
        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    </div>
    <footer>
		<div class="href">
		<p>Az eredeti oldal <a href="http://fsf.hu/">ide</a> kattintva megtekinthető.</p>
		<div class="fb-like" data-href="https://www.facebook.com/FSF.hu/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
		</div>
		<br>
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
	</footer>
</body>
</html>
