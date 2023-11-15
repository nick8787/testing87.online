<!doctype html>
<html lang="ru">
<head>
<title>Tstng87 - XPath / CSS</title>
<meta charset="utf-8">
<meta name="description" content="Всё о XPath / CSS, операторы, их функции и разница.">
<meta name="keywords" content="Всё о XPath / CSS, операторы, их функции и разница.">
<?php include 'lib/module/sys-meta.php';?>
<meta property="og:title" content="Tstng87 - XPath / CSS" />
<meta property="og:description" content="Всё о XPath / CSS, операторы, их функции и разница." />
<meta property="og:image" content="https://www.bugraptors.com/blog/public/blog_images/junit-vs-testng-600x400.png" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="https://www.testing87.online/" />
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Tstng87" />

<meta name="twitter:title" content="Tstng87 - XPath / CSS">
<meta name="twitter:description" content="Всё о XPath / CSS, операторы, их функции и разница.">
<meta name="twitter:image" content="https://www.bugraptors.com/blog/public/blog_images/junit-vs-testng-600x400.png">
<meta name="twitter:site" content="Всё о XPath / CSS, операторы, их функции и разница.">
<meta name="twitter:creator" content="Всё о XPath / CSS, операторы, их функции и разница.">
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
				<h1>XPath / CSS</h1>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
				<p>
					 Всё о XPath / CSS, операторы, их функции и разница.
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
						<h2>XPath / CSS</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 Это <b>локаторы</b>, с помощью которых можно найти элемент на странице.
							 <br>
<b><u>Разница между ними:</b></u>
<br>
<b>CSS</b> легче в использовании, но <b>XPath</b> более гибкий, соответственно возможностей у него больше.
<br>
<b><u>Синтаксис:</b></u>
<br>
B <b>Xpath</b> – более точное описание пути к элементу. От родительского класса, по атрибуту и до названия элемента. 
<br>
B <b>CSS</b> – использует селекторы для выбора элемента на основе их структуры и стиля.
<br>
<b><u>Применение:</b></u>
<br>
<b>Xpath</b> – используется для навигации по системе.
<br>
<b>CSS</b> – используется для выбора элементов на основе их структуры и стиля.
<br><br>
<b><u>Оси элементов</b></u> – это когда есть родитель, то есть бывает только 1 родитель, а детей у него может быть много, и все элементы, которые заложены в детях – это и есть оси.

						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>XPath-функции</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 Его функциям могут быть <b>поиск по тексту, возвращает длину текста, поиск по части текста, проверка true or false.</b>
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Операторы contains / not contains</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						   <b><u>Contains и not contains</b></u> — это функции, которые используются в выражениях XPath для поиска элементов на веб-странице, содержащих или не содержащих определенный текст или подстроку. Вот как они работают:
						   <br>
<b><u>1.	contains:</b></u> 
<br>
<u>•	contains</u> — это функция, которая позволяет нам найти элементы, содержащие определенный текст или подстроку.
<br>
//тег[contains(@атрибут, 'текст')]
<br>
<b><u>2.	not contains:</b></u> 
<br>
<u>•	not contains</u> — это аналогичная функция, но она находит элементы, которые не содержат указанный текст или подстроку. 
<br>
Например, если вы хотите найти все элементы <a>, которые не содержат ссылку на "example.com", вы можете использовать следующее XPath выражение:
<br>
//a[not(contains(@href, 'example.com'))]

						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Разница между // и /*</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							<b><u>//</b></u> - используется для поиска всех элементов во всем документе, независимо от его местоположения. А <b><u>/*</b></u> — это поиск всех дочерних элементов от одного главного и по одному вниз (не самый удобынй способ).
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Оператор normalize-space</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 Это функция, которая убирает лишние и повторные пробелы.
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Использование ancestor, descendant (предка и потомка)</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 Используя, так называемых <b>предков</b> и <b>потомков</b>, мы можем найти нужный элемент. <br><b>Предок</b> – бывает только одним и главным элементом, а <b>потомки</b>, это так называемые оси, то есть ветки элементов от своего предка.
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Поиск по тексту</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
		Поиск по тексту можно выполнить с помощью функции <b><u>contains</b></u>, если у нас есть какая-то часть слова. Либо, второй вариант с помощью функции //element[<b><u>text</b></u>() = 'banana'], когда нам известно слово целиком.
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Поиск по содержанию атрибутов</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
	Для поиска по содержанию атрибутов, мы используем след конструкцию:
	<br>
<b>//element[@attribute='value'] </b>
<br>
Где:
<br>
•	<b>//</b> - означает поиск во всем документе
<br>
•	<b>element</b> – имя элемента, который нас интересует
<br>
•	<b>@attribute</b> - атрибут
<br>
•	<b>'value'</b> - значение атрибута, которое мы ищем.

						</p>
					</div>
				</div>
			</div>
			
</div>
</div>
<?php include 'lib/module/inc-footer.php';?>
</div>
</body>
