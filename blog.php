<!doctype html>
<html lang="ru">
<head>
<title>Блог</title>
<meta charset="utf-8">
<meta name="description" content="Представленная страница содержит в себе ленту новостей проекта, также в ней будут публиковаться различные анонсы и материалы нашей команды.">
<meta name="keywords" content="pancake, faces, microcontrollers, unity, open source, development, 2d, project, разработка, микроконтроллеры, юнити, проект, blog, блог">
<meta name="author" content="Pancake Faces">
<meta name="copyright" content="Pancake Faces">
<?php include 'lib/module/sys-meta.php';?>
<?php include 'lib/module/sys-css.php';?>
<?php include 'lib/module/sys-js.php';?>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>
</head>
<body>
<?php include 'lib/module/sys-php.php';?>
<?php include 'lib/module/ui-sidebar-blog.php';?>
<div class="page-con-content">
	<div class="banner-con-container darkmode-header">
		<div id="object-particles">
		</div>
		<div class="wavebar-con-container">
			<div class="wavebar-con-wrap">
			  <div class="wavebar-svg-object"></div>
			  <div class="wavebar-svg-object"></div>
			</div>
		</div>
		<div class='banner-con-title fade-up-onstart'>
			<div class='banner-tx1-title fade-up-onstart pulsate'>
				<h1>Блог</h1>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
				<p>
				Представленная страница содержит в себе ленту новостей проекта, также в ней будут публиковаться различные анонсы и материалы нашей команды
				</p>
			</div>
		</div>
	</div>
	<div class="page-con-container">
		<div class="page-in-container">
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<h2 id="1">Собран тестовый прототип HotPotato</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						Сейчас мы уже собрали тестовую модель игрушки. Вышло вполне играбельно, но это тестовый прототип только с базовыми функциями, чтобы возможно было играть.<br>
						В процессе сборки возникла идея отказаться от идеи "картошки" и собрать всю конструкцию в компактный кубик и избавиться от кнопок и выклчателей, заменив их на систему потрясывания (условно, как в 8ball)</p>
					</div>
                    <div class='blog-img'>
						<img src="https://sun9-55.userapi.com/impg/l4eLtkiHVZb6PYhvv4pztK87BjSTu-DwYtEevw/8Es2HaNYQ2I.jpg?size=200x267&quality=96&sign=dea31f415df1a50057e3698c069d9124&type=album" hspace="5" vspace="5">
                    	<img src="https://sun9-33.userapi.com/impg/LpEK9SIpsRjwn68RriHtDyDIq8jgYYr-UhMzVQ/EHPt3SMQV48.jpg?size=200x150&quality=96&sign=37c2479ed9e7c252bc0b05dabdf35d85&type=album" hspace="5" vspace="5">
						<img src="https://sun9-11.userapi.com/impg/mnfAY2UiY1BAyUz-JbYxIUHmDANt_uKWJ4gmNA/nZfnD2kuOVE.jpg?size=200x150&quality=96&sign=f6bebad7a53a08aca516d1f3441c793a&type=album" hspace="5" vspace="5">
                    </div>
					<div class='container-tx3-block darkmode-txt'>
						<p>21.03.2021</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'lib/module/ui-main-footer.php';?>
	<div id="vk_community_messages">
		<script type="text/javascript">
			VK.Widgets.CommunityMessages("vk_community_messages", 191834852, {tooltipButtonText: "Есть вопрос?"});
		</script>
	<div>
</div>
</body>
</html>