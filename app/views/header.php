<!DOCTYPE html>
<html lang="en">
<script>
	window.BASE_DIR = "<?= MAIN_PREFIX ?>";
</script>
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= TEMPLATE_CSS_PATH ?>/fonts_style.css?<?= rand() ?>" rel="stylesheet" />
    <link href="<?= TEMPLATE_CSS_PATH ?>/style.css?<?= rand() ?>" rel="stylesheet" />
    <link href="<?= TEMPLATE_CSS_PATH ?>/iconfont.css?<?= rand() ?>" rel="stylesheet" />
    <link href="<?= TEMPLATE_CSS_PATH ?>/calendar.css?<?= rand() ?>" rel="stylesheet" />
    <link href="<?= TEMPLATE_CSS_PATH ?>/bootstrap-reboot.min.css?<?= rand() ?>" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="<?= TEMPLATE_JS_PATH ?>/jquery.js?<?= rand() ?>"></script>
    <script src="<?= TEMPLATE_JS_PATH ?>/calendar.js?<?= rand() ?>"></script>
    <script src="<?= TEMPLATE_PATH ?>/regController/script.js?<?= rand() ?>"></script>  
    <script src="<?= TEMPLATE_PATH ?>/script.js?<?= rand() ?>"></script>
    
    <?if (isset ($this->addjs)):?>
    <script type="text/javascript" src="<?= $this->addjs ?>?<?= rand() ?>"></script>
    <?endif?>
    <?if (isset($this->addcss)):?>
    <link rel="stylesheet" href="<?= $this->addcss ?>?<?= rand() ?>">
    <?endif?>
    <!-- //<script src="script.js"></script> -->
    

</head>

<body>