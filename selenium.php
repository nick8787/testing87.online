<!doctype html>
<html lang="ru">
<head>
<title>Tstng87 - Selenium WebDriver</title>
<meta charset="utf-8">
<meta name="description" content="Всё о Selenium WebDriver, methods, exceptions, waiters.">
<meta name="keywords" content="Всё о Selenium WebDriver, methods, exceptions, waiters.">
<?php include 'lib/module/sys-meta.php';?>
<meta property="og:title" content="Tstng87 - Selenium WebDriver" />
<meta property="og:description" content="Всё о Selenium WebDriver, methods, exceptions, waiters." />
<meta property="og:image" content="https://www.bugraptors.com/blog/public/blog_images/junit-vs-testng-600x400.png" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="https://www.testing87.online/" />
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Tstng87" />

<meta name="twitter:title" content="Tstng87 - Selenium WebDriver">
<meta name="twitter:description" content="Всё о Selenium WebDriver, methods, exceptions, waiters.">
<meta name="twitter:image" content="https://www.bugraptors.com/blog/public/blog_images/junit-vs-testng-600x400.png">
<meta name="twitter:site" content="Всё о Selenium WebDriver, methods, exceptions, waiters.">
<meta name="twitter:creator" content="Всё о Selenium WebDriver, methods, exceptions, waiters.">
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
				<h1>Selenium WebDriver</h1>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
				<p>
					 Всё о Selenium WebDriver, methods, exceptions, waiters, flacky tests, Selenium Grid.
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
						<h2>Selenium WebDriver </h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 <b>Selenium WebDriver</b> - это инструмент для автоматизации веб-приложений, с ее помощью тестировщик может создать сценарий поведения веб-приложения.
							 <br>
<u>Он работает так, как со стороны пользователя, только без нашего вмешательства. То есть тестирование идет автоматически.</u>

						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Основные методы Selenium:</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 <b>Get</b> - открыть ссылку 
							
<br><b>FindElement</b> – возвращает 1 элемент.
<br><b>FindElements</b> – возвращает лист элементов. (если он будет пустой - вернет пустой лист)
<br><b>Click</b> - клик левой кнопкой
<br><b>DoubleClick, Scroll, moveTo</b> - эти методы уже являются больше методами класса Action, JavaScriptExecutor.
<br><b>SendKeys</b> - ввести значение в поле
<br><b>Close</b> - закрыть
<br><b>Quit</b> - выйти
<br><b>assertTrue ()</b> и <b>assertFalse ()</b> - проверяет условие
<br><br><u>Для проверки состояний элементов:</u>
<br><b>isSelected</b> - элемент выбран
<br><b>IsDisplayed</b> - элемент отображается на странице
<br><b>isEnabled</b> - элемент доступен.

						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Exception WebDriver (исключения)</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						   <b>Исключения</b> показывают, где у нас возникла ошибка.
						   <br>
Исключения бывают:
<br>
<b>NoSuchElementException</b> — это исключение возникает, когда Selenium не может найти элемент на странице.
<br>
<b>TimeoutException</b> - возникает, когда ожидание длится дольше, чем заданный таймаут.
<br>
<b>StaleElementReferenceException</b> - возникает, когда элемент был удален или уже не привязан к странице.

						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>WebDriver waiters (ожидания), их типы</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 Позволяют делать задержку перед загрузкой какого-то действия. 
							 <br>
Есть 3 типа ожиданий: <b>Explicit, Implicit, Fluent.</b>
<br>
<b>Explicit (явное)</b> - ожидание, пока я не получу <u>excepted condition</u> (toBeClickable, toBeVisible). Пропишу его в BasePage. 
<br>
<b>Implicit (неявное)</b> - просто прописал что есть waiter. Напишу в самом тесте, прямо перед шагом, где я должен ожидать. Редко используется.
<br>
<b>Fluent (плавное)</b> – гибкие условия 
<br><b>Sleep ожидание</b> - останавливает поток выполнения теста, не самая лучшая практика.

						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Как проверить что элемента нет на странице?</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 С помощью <b>Xpath’а</b> и команды <b>findElement. </b>
							 <br>
Сначала создадим аннотацию ТЕСТ, затем создадим метод и с помощью ВебДрайвер выполним вход на сайт, потом с помощью метода public WebElement прописываем код, return driver.findElement(By.Xpath(“locators”)); Потом с помощью Asset.assertTrue(название методаЭлемента()).isDisplayed);

						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Класс Actions (Java Script Execution) </h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 Это и есть <b><u>продвинутые действия с элементами.</b></u>
							 <br>
Это часть библиотеки Джава, с помощью которой мы можем делать двойной клик, к примеру, перетаскивание объекта, клик правой кнопки, клик и удерживание и т.д.
<br><b>DoubleClick, Scroll, moveTo</b> - эти методы уже являются больше методами класса Action, JavaScriptExecutor.
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Запуск тестов в параллели </h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
		<b>Запуск тестов в параллели</b> – это методика, с помощью которой прогон тестов может происходит одновременно, а не последовательно. С помощью фреймворка <b>TestNG</b> мы можем реализовать параллельное тестирование. Нужно добавить в MAVEN фреймворк TestNG и в файл <b>testng.xml</b> добавить <u>сьюты</u> (набор тестов).
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Flacky tests (нестабильные тесты) </h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
	Проблемы с Flacky tests могут быть из-за <b>нестабильного Xpath’a</b>, <b>плохо написаного кода</b>, из-за <b>локаторов</b>, либо если <b>долго страница загружается</b>. Чтоб это исправить:
<br>Конструкция <b><u>ReTry</u></b> – попробовать снова (прописываю внутри кода)
<br>Использование <b><u>ожиданий</u></b> также может быть решением. Может прописаться в BasePage, а потом везде использоваться.

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
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Selenoid</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
		<b>Selenoid</b> - это инструмент для Ui тестов (работает до Докере).
		<br>
Он нужен для паралелизации тестов, чтоб тесты проводить на разных enviroments.
<br>
<b>Основная задача</b> - сделать каждый поток изолированным от другого потока, похожий элемент есть еще Selenium Grid, но он более замудрененый.
						</p>
					</div>
				</div>
			</div>
			
</div>
</div>
<?php include 'lib/module/inc-footer.php';?>
</div>
</body>
