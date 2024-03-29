<?php
use BAG\AdminPanelSkeleton\AdminPanelSkeleton;

include __DIR__ . '/vendor/autoload.php';

error_reporting(E_ALL);

$pageLinks = include __DIR__ . '/menu-data.php';
$headerMenuLinks = $pageLinks;
$headerMenuLinks[2]['active'] = false;
$headerMenuLinks[2]['links'][1]['active'] = false;

$data = [
	// 'contentOnly' => true,
	'version' => 'Skeleton 1.0',
	'title' => 'Admin Skeleton 1.0',
	'titleUrl' => '#',
	'memberImage' => 'user.svg',
	'memberLabel' => 'Skeleton Admin',
	'lockIcon' => true,
	'mainMenu' => [
		'links' => $pageLinks
	],
	'headerMenu' => [
		'links' => $headerMenuLinks
	],
	'content' => [
		'sideMenu' => '&nbsp;',
		'appMenu' => '&nbsp;'
		,'page' => file_get_contents(__DIR__ . '/ipsum.txt')
	]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Skeleton Template</title>
	<link href="dist/css/main.css?v=<?=rand()?>" rel="stylesheet" type="text/css">
	<style>
		.main-content p {
			margin: 0 0 1rem 0;
		}
		.main-content {
			padding: 1rem;
		}
	</style>
</head>
<body>
	<?php
		echo AdminPanelSkeleton::render($data);
	?>
	<script src="dist/js/vendor/bglib.min.js" type="text/javascript"></script>
	<script src="dist/js/skeleton.js?v=<?=rand()?>" type="text/javascript"></script>
	<script type="text/javascript">
		window.addEventListener('load', function() {
			SkeletonWidget.load();
		});
	</script>
</body>
</html>