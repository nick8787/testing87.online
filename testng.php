<!doctype html>
<html lang="ru">
<head>
<title>Tstng87 - TestNG / JUnit</title>
<meta charset="utf-8">
<meta name="description" content="Всё о TestNG и JUnit, аннотации, их разница">
<meta name="keywords" content="Всё о TestNG и JUnit, аннотации, их разница">
<?php include 'lib/module/sys-meta.php';?>
<meta property="og:title" content="Tstng87 - TestNG / JUnit" />
<meta property="og:description" content="Всё о TestNG и JUnit, аннотации, их разница" />
<meta property="og:image" content="https://www.bugraptors.com/blog/public/blog_images/junit-vs-testng-600x400.png" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="https://www.testing87.online/" />
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Tstng87" />

<meta name="twitter:title" content="Tstng87 - TestNG / JUnit">
<meta name="twitter:description" content="Всё о TestNG и JUnit, аннотации, их разница">
<meta name="twitter:image" content="https://www.bugraptors.com/blog/public/blog_images/junit-vs-testng-600x400.png">
<meta name="twitter:site" content="Всё о TestNG и JUnit, аннотации, их разница">
<meta name="twitter:creator" content="Всё о TestNG и JUnit, аннотации, их разница">
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
				<h1>TestNG and Junit</h1>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
				<p>
					 Всё о TestNG и JUnit, аннотации, их разница
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
						<h2>TestNG and Junit</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 Это тестовые фреймворки, для более легкого и удобного тестирования. Они имеют много общего, но также есть некоторые ключевые различия.
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>В TestNG входит:</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							  Annotations, Data providers, Assertions, Parameters, Suits. 
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Разница между ними:</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						   <b>TestNG</b> медленнее чем <b>JUnit</b>. 
						   <br>
Разница в аннотациях. В <b>TestNG</b> их больше, соответственно им удобнее пользоваться.
<br>
Разница в асертах.
<br>
Разница в группировки тестов. В TestNG - <b>@Test(groups = "GroupName"</b>, а в JUnit - <b>'@Category'</b>.

						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Data providers</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 <b>Дата провайдер</b> — это функция для фреймворка, она используется для запуска тестов множество раз с разными наборами данных.
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Parameters</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						    Аннотация <b>@Parameters</b>,<u>далее пример:</u><b>({db})</b> - с его помощью мы можем создавать переменную (db) и в дальнейшем ее передавать в параметры методов, где хотим уже использовать эту переменную.
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Suits </h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 Это набор тестов. Чтоб создать сьюты нужно добавить классы в файл xml.
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Assertions </h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
		<b>Assert</b> помогает нам проверять условия теста и принимать решения, когда тест провален, а когда нет. Также это проверки на наличие элемента.
		<br>
Наиболее используемыми Assert вставками являются:
<br>
<b>•	1) Assert.assertTrue()</b> и <b>Assert.assertFalse()</b>
<br>
<b>•	2) Assert.assertEquals()</b>

						</p>
					</div>
				</div>
			</div>
			
</div>
</div>
<?php include 'lib/module/inc-footer.php';?>
</div>
</body>
