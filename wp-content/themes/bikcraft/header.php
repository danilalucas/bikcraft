<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?= bloginfo('name'); ?></title>
		<meta name="description" content="<?= bloginfo('description'); ?>">
        <?php 
            wp_head();
            $url = get_template_directory_uri();
        ?>
        
		<meta property="og:type" content="website"/>
		<meta property="og:title" content="<?= bloginfo('name'); ?>"/>
		<meta property="og:description" content="<?= bloginfo('description'); ?>"/>
		<meta property="og:url" content="<?= $url ?>"/>
		<meta property="og:image" content="<?= $url . '/assets/img/og-image.png' ?>"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="<?= $url . '/assets/img/favicon.ico' ?>">

		<link rel="stylesheet" href="<?= $url . '/assets/css/style.css' ?>">
		<script src="<?= $url . '/assets/js/libs/modernizr.custom.45655.js' ?>"></script>
	</head>
    
    <body>
        <header class="header">
            <div class="container">
                <a href="<?= $url ?>" class="grid-4">
                    <img src="<?= $url . '/assets/img/bikcraft.png' ?>" alt="Bikcraft">
                </a>
                <nav class="grid-12 header_menu">
                    <ul>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Produtos</a></li>
                        <li><a href="#">Portfólio</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </header>