<!doctype html>
<html lang="en-US">
<head>
<title>Tstng87 - Git</title>
<meta charset="utf-8">
<meta name="description" content="Всё о теории тестировании">
<meta name="keywords" content="Всё о теории тестировании">
<?php include 'lib/module/sys-meta.php';?>
<meta property="og:title" content="Tstng87 - Git" />
<meta property="og:description" content="Всё о теории тестировании" />
<meta property="og:image" content="https://fs39.fex.net/preview/4723615196/0x0" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="https://www.testing87.online/" />
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Tstng87" />

<meta name="twitter:title" content="Tstng87 - Git">
<meta name="twitter:description" content="Всё о теории тестировании">
<meta name="twitter:image" content="https://fs39.fex.net/preview/4723615196/0x0">
<meta name="twitter:site" content="Всё о теории тестировании">
<meta name="twitter:creator" content="Всё о теории тестировании">
<meta name="twitter:card" content="summary_large_image">
<?php include 'lib/module/sys-css.php';?>
<?php include 'lib/module/sys-js.php';?>
</head>
<body>
<?php include 'lib/module/sys-php.php';?>
<div class="page-con-content">
	<div class="banner-con-container darkmode-header">
		<div id="object-particles">
		</div>
		<div class="wavebar-con-container">
			<div class="wavebar-con-wrap">
				<div class="wavebar-svg-object">
				</div>
				<div class="wavebar-svg-object">
				</div>
			</div>
		</div>
		<div class='banner-con-title fade-up-onstart'>
			<div class='banner-tx1-title fade-up-onstart pulsate'>
				<h1>Git</h1>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
				<p>
					 Что такое Git?, для чего нужен?, как он работает?, конфликты, основные команды.
				</p>
			</div>
		</div>
	</div>
	<div class="page-con-container">
		<div class="page-in-container">
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>1.Что такое Гит и для чего он?</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 <b>Гит</b> — это система контроля версий, это история изменений файлов и сохранения. Он помогает вернуться в любую стадию разработки. Это удобно тем, что, если после написания кода, например, что-то пошло не так, всегда можно откатиться назад. Также есть возможность работать нескольким людям над одним проектом.
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>2.Конфликты в гите</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							  Над одним проектом могут работать сразу несколько разработчиков, если разработчик А пытается изменить код, который уже редактирует разработчик Б, может произойти конфликт. Для этого каждый должен работать в отдельной бранче. 
							   <br>
Во время мержа в основную ветку, может произойти конфликт в таком случае. Гит сообщит, где именно ошибка. Командой git status – можно также увидеть, где у нас может быть конфликт.
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>3.Как работает Гит?</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						   Работает с помощью <b><u>КОММИТОВ.</u></b>

						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>4.Основные команды в гите:</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							<b>Git init</b> – с нее начинается работа гит, создает репо Гит в текущей папке.
							<br>
<b>Git config –list –global</b> – настройка пользователя, имя и имейл
<br>
<b>Git clone ссылка с удал репо</b> – создание репо из Гитхаба
<br>
<b>Git fetch</b> – сохраняет изменения с удаленного репо на локальный
<br>
<b>Git status</b> – проверка изменений
<br>
<b>Git add .</b> –  добавление файла
<br>
<b>Git commit -m “коммент любой”</b> – слепок кода
<br>
<b>Git revert</b> –  откатиться назад на рабочую версию (указываешь хеш коммита)
<br><b>Git reset</b> –  также откатиться назад на рабочую версию 
<br><b>Git stash</b> – откладывает изменения
<br><b>Git stash pop</b> - применяет изменения к репо и очистить стеш 
<br><b>Git pull</b> – с гитхаба добавляет на локальный репо
<br><b>Git push</b> – добавление с лок репо на гитхаб
<br><b>Echo “текст внутри файла” >> название файла.txt</b> – создания файла с текстом внутри
<br><b>Git branch</b> – просмотр веток
<br><b>Git branch название новой ветки</b> – создание ветки
<br><b>Git checkout название ветки</b> – переход на ветку
<br><b>Git checkout -</b> - переход назад в ветку
<br><b>Git push -u origin название ветки</b> – пуш ветку на удал репо
<br><b>Git rebase</b> – перенос изменений с одной ветки в другую ветку
<br><b>Git cherry-pick</b> – перенос коммита с одной ветки в другую ветку
<br><b>Git merge название ветки</b> – мерж ветки в основную 
<br><b>Git push origin :название ветки</b> – удаление ветки на гитхабе
<br><b>Git branch -D название ветки</b> – удаление ветки с компа

						</p>
					</div>
				</div>
			</div>
			
					</div>
				</div>
			</div>
			
</div>
<?php include 'lib/module/inc-footer.php';?>
</body>
</html>