<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width = 620" />
<title><?php e(t(DURA_TITLE)) ?> | <?php e(t(DURA_SUBTITLE)) ?></title>
<link rel="stylesheet" href="<?php echo DURA_URL; ?>/css/style.css"/>
<?php if ( Dura::$controller == 'room' ) : ?>
<script src="http://www.google.com/jsapi"></script>
<script type="text/javascript"><!--
google.load("language", "1"); 
google.load("jquery", "1");
google.load("jqueryui", "1");
duraUrl = "<?php e(DURA_URL) ?>";
GlobalMessageMaxLength = <?php e(DURA_MESSAGE_MAX_LENGTH) ?>;
useComet = <?php e(DURA_USE_COMET) ?>;
//-->
</script>
<script src="<?php e(DURA_URL) ?>/js/translator.js"></script>
<script src="<?php e(DURA_URL) ?>/js/language/<?php e(Dura::$language) ?>.js"></script>
<script src="<?php e(DURA_URL) ?>/js/jquery.sound.js"></script>
<script src="<?php e(DURA_URL) ?>/js/jquery.corner.js"></script>
<script src="<?php e(DURA_URL) ?>/js/jquery.chat.js"></script>
<?php endif ?>
<?php if ( file_exists(DURA_TEMPLATE_PATH.'/header.html') ) require(DURA_TEMPLATE_PATH.'/header.html'); ?>
</head>
<body>
<div id="body">
<?php e($content) ?>
</div>
</body>
</html>