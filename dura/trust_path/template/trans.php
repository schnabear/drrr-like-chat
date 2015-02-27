<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width = 620" />
<title><?php e(t(DURA_TITLE)) ?> | <?php e(t(DURA_SUBTITLE)) ?></title>
<link rel="stylesheet" href="<?php echo DURA_URL; ?>/css/style.css"/>
<body>
<div id="body">
<div class="header">
<p><?php echo $message ?></p>
<p><?php e(t('If auto reload doesn\'t work,  please click <a href="{1}">here</a>.', $url)) ?></p>
</div>
</div>
</body>
</html>