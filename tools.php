<!doctype html>
<html lang="ru">
<head>
<title>Tstng87 - Tools</title>
<meta charset="utf-8">
<meta name="description" content="Всё о разных тулзах(Jenkins, Cypress, Docker, Postman, Java), инструментах(Selenium, Rest-Assured, Cucumber).">
<meta name="keywords" content="Всё о разных тулзах(Jenkins, Cypress, Docker, Postman, Java), инструментах(Selenium, Rest-Assured, Cucumber).">
<?php include 'lib/module/sys-meta.php';?>
<meta property="og:title" content="Tstng87 - Tools" />
<meta property="og:description" content="Всё о разных тулзах(Jenkins, Cypress, Docker, Postman, Java), инструментах(Selenium, Rest-Assured, Cucumber)." />
<meta property="og:image" content="https://www.bugraptors.com/blog/public/blog_images/junit-vs-testng-600x400.png" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="https://www.testing87.online/" />
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Tstng87" />

<meta name="twitter:title" content="Tstng87 - Tools">
<meta name="twitter:description" content="Всё о разных тулзах(Jenkins, Cypress, Docker, Postman, Java), инструментах(Selenium, Rest-Assured, Cucumber).">
<meta name="twitter:image" content="https://www.bugraptors.com/blog/public/blog_images/junit-vs-testng-600x400.png">
<meta name="twitter:site" content="Всё о разных тулзах(Jenkins, Cypress, Docker, Postman, Java), инструментах(Selenium, Rest-Assured, Cucumber).">
<meta name="twitter:creator" content="Всё о разных тулзах(Jenkins, Cypress, Docker, Postman, Java), инструментах(Selenium, Rest-Assured, Cucumber).">
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
				<h1>Tools</h1>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
				<p>
					 Всё о разных тулзах(Jenkins, Cypress, JMeter, OWASP ZAP, Docker, Postman, Java), инструментах(Selenium, Rest-Assured, Cucumber).
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
						<h2>Jenkins</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 <b>Jenkins</b> предназначен для <u>Ci CD процесса</u>, для непрерывной интерграции ПО, в этом помогают ему <b>Pipeline</b>(так называемый конвейер). <b>Jenkins</b> одна из лучших тулзов для автоматизации и интегрируется с Docker'ом (там используются ноды, гипервизоры, контейнеры Linux and JailFree). <br>Также в Jenkins полно <u>плагинов</u> для разных аспектов использования (имеет разные функции).<br>И также можно планировать <u>тесты по времени</u> (Cron или Jobs), тут используется формат, к примеру 0*** и т.д.
<br><b><u>Pipeline</u></b> - мощный инструмент, который помогает определить и управлять Ci CD процессами. Pipeline использует свой DSL - он существует для создания скриптовых конструкций, которые описывают этапы сборки (сборка,тестирование,доставка ПО).
<br>Он служит для Deploy'я. Показывает потом количество фейлов в тестах, если там % маленький, значит Деплой возможен. Смотря как Pipeline настроить.
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Cypress</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						   <b><u>Cypress</u></b> - это инструмент для тестирования веб-приложений, который довольно прост в использовании. Он базируется на JavaScript'е. Также он может создавать видео запусков тестов, генерировать отчеты тестов. Среда выполнения Cypress-тестов - VS Code (вместе с Node.js программой).
						   <br>
						   В след <b><u>примере теста</u></b> можно увидеть: <b><u>1.PageObject</u></b> (убирает весь хардкод), <b><u>2.Тест</u></b> (4 теста=открывает сайт, добавляет задачи, удаляет их, делает ассерты). 
						   <br><a href="/img/graphics/about/PageObjectCypress.png">
								<span><b>1.PageObjectCypress</b> </span> </a> и <a href="/img/graphics/about/FullTestCypress.png">
								<span><b>2.FullTestCypress</b> </span> </a>
							<br>Далее также целый <a href="https://ua.files.fm/f/xr895d2y6z" target="_blank">
								<span><b><u>ВИДЕО-ПРИМЕР ХОРОШО ПРОПИСАНОГО ТЕСТА</u></b> </span> </a>, где будут: <b><u>PageObject</u></b> - разбивавние на пейджи и локаторы, <b><u>4 теста</u></b> (открывает сайт, добавляет задачи, удаляет их, делает ассерты), <b><u>генератор рандомных чисел</u></b>.
								<br><a href="/img/graphics/about/TestQACypress.zip">
								<span><b>Скачать zip-папку с фул тестом</b> </span> </a> и <a href="/img/graphics/about/HowToReportsCypress.zip">
								<span><b>Как настроить генерацию отчетов в Cypress(инструкция)</b> </span> </a> и <a href="/img/graphics/about/ReportCypress.png" target="_blank">
								<span><b>вот так выглядит html-отчет тестов</b> </span> </a>
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>JMeter</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						    <b><u>Apache JMeter</u></b> — это инструмент для проведения <u>нагрузочного тестирования</u>, которое работает на базе Java. JMeter позволяет определить, <u>пик нагрузки на сервер</u> (стресс Т.) и создавать <u>сценарий юзеров</u>, которые бы заходили на сайт одновременно (нагрузочное Т.).
						    <br>С помощью нагрузочного тестирования, мы можем создавать негативные сценарии тестов, также смотреть как ведет себя сервер во время нагрузки.
							 <br><b><u>Функции JMeter:</u></b>
							 <br>В этой программе много плагинов, которые могут делать разные функции, например:
							 <br>- задать количество пользователей для проверки
							 <br>- задать время, за которое эти пользователи должны зайти
							 <br>- задать количество таких сценариев
							 <br>- можно увидеть результаты тестов (статус код)
							 <br>- график нагрузки
<br><a href="/img/graphics/about/JMeterCollage.jpg" target="_blank">
								<span><b><b><u>Пример теста в JMeter.</u></b></b> </span> </a> Этапы теста: <u>1.Thread Group</u> (задать юзеров, время и круги) <u>2.HTTP-request</u> (указать URL и тип запроса) <u>3.View results</u> <u>4.Run test</u>
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Docker</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						    <b><u>Docker</u></b> — это инструмент для разработки, доставки и запуска контейнерных приложений. Он позволяет создавать контейнеры, автоматизировать их запуск и развертывание, управляет жизненным циклом. Контейнеров может быть сколько угодно. 
						   <br><u><b> Контейнеры</b></u> нужны для того, чтобы в тесте определить и настроить его окружение и запустить как локально, так и в "облаке". Это обеспечивает корректность запуска и проведения тестов изолировано друг от друга.
						    <br>Например, тесты написанные на Javа, можно запускать на докере, используя десктопное приложение. <br><u><b>Этапы запуска теста</b></u>: 1.Сам докер 2.В Java создать файл Dockerfile, в нем прописать код 3.Собрать Докер образ через командную строку 4.В Джаве забилдить тест и создать .jar файл теста 5.Запустить докер-контенер в командной строке
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>OWASP ZAP</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						    <b><u>OWASP ZAP(Открытый Проект По Обеспечению Безопасности Веб-Приложений)</u></b> — это сканер для поиска уязвимостей в веб-приложениях. Он основан на методике DAST, эта методика позволяет обнаружить проблемы безопасности в уже работающем веб-приложении при помощи сканирования на известные уязвимости, так называемое "тестирование черного ящика". 
						   <br><b><u> Сущесвтуют такие уязвимости:</u></b>
						    <br><u>Инъекции</u> (<b><u>например</u></b> злоумышленник может ввести скрипт в форму регистрации и если форма не защищена, то его код сработает) (Injections).
<u>Нарушенная аутентификация</u> (Broken Authentication).
<u>Раскрытие критически важных данных</u> (Sensitive Data Exposure).
<u>Внешние объекты XML (XXE)</u> (XML External Entities (XXE)).
<u>Нарушенный контроль доступа</u> (Broken Access control).
<u>Неправильная конфигурация безопасности</u> (Security misconfigurations).
<u>Межсайтовый скриптинг (XSS)</u> (Cross Site Scripting (XSS)).
<u>Небезопасная десериализация</u> (Insecure Deserialization).
<u>Использование компонентов с известными уязвимостями</u> (Using Components with known vulnerabilities).
<u>Недостаточно подробные журналы и слабый мониторинг</u> (Insufficient logging and monitoring).
						    <br><b><u>Принцип работы OWASP ZAP:</u></b>
						    <br>Он создает прокси-сервер (это типо как VPN, только без скачивания каких-либо программ, он стоит между клиентом и сервером и может прятать данные клиента (конфиденциальность). Через этот прокси-сервер обрабатываются все запросы на сканирование, которые уже ищут уязвимсоти.
						    <br><b><u>Процесс работы OWASP ZAP:</u></b>
						    <br>1.Нужно выбрать режим АТАКИ (стандартный, безопасный, защищенный и режим АТАКИ)
						    <br>2.В "Быстром ответе" добавить URl сайта и нажать "Атака"
						    <br>3.Ниже раздел результатов, где есть "История, Поиск, Оповещения, где присваивается уровень риска уязвимости"
						    <br>4.Можно создать отчет выбрав любой шаблон, параметры и  т.д.
						    <br>Также можно выбрать "паука", который обнаружит новые URL-адреса на проверяемом сайте.
						    <br><a href="/img/graphics/about/AttackOwasp.png" target="_blank">
								<span><b><b><u>Пример сканирования</u></b></b> </span> </a> и <a href="/img/graphics/about/reportOwasp.png" target="_blank">
								<span><b><b><u>пример отчёта.</u></b></b> </span> </a>
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Playwright</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						    <b><u>Playwright</u></b> — это фреймворк для авто-тестов, пишется на VS Code, базируется на JavaScript'e или на TypyScript'e. 
						    <br>Его особенностью является запуск тестов в <u>разных браузерах сразу</u>, <u>генерация отчетов</u> встроенная уже.
						    <br><a href="/img/graphics/about/testPlaywright.png" target="_blank">
								<span><b><b><u>Пример теста</u></b></b> </span> </a> и <a href="/img/graphics/about/reportPlaywright.png" target="_blank">
								<span><b><b><u>пример отчёта.</u></b></b> </span> </a>
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Selenium, Selenoid, Selenide разница</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 <b><u>SELENIUM WebDriver</u></b> - это инструмент для автоматизации веб-приложений, с ее помощью тестировщик может создать сценарий поведения веб-приложения. Он работает так, как со стороны пользователя, только без нашего вмешательства. 
							 <br><a href="/selenium">
								<span><b>Подробнее про Selenium.</b> </span> </a>Далее <b><u>пример теста</u></b> для запуска Google(ТестиИнит, Пейджи(паттерны) и сам Тест. <a href="/img/graphics/about/TestInit.png" target="_blank">
								<span><b>1.TestInit</b> </span>
								</a> <a href="/img/graphics/about/BasePage.png" target="_blank">
								<span><b>2.BasePage</b> </span>
								</a> <a href="/img/graphics/about/GoogleHomePage.png" target="_blank">
								<span><b>3.GoogleHomePage</b> </span>
								</a><a href="/img/graphics/about/GoogleTest.png" target="_blank">
								<span><b>4.GoogleTest</b> </span>
								</a>
<br><br><b><u>SELENOID</u></b> - это инструмент для запуска браузеров в изолированных <u>Докер-контейнерах!</u>. <br><b>Основная задача</b> - сделать каждый поток <u>изолированным</u> от другого потока, похожий элемент есть еще Selenium Grid, но он более замудрененый.
<br><br><b><u>SELENIDE</u></b> - базируется на основе Selenium'а, созданный для упрощения написания тестов на основе Selenium WebDriver. <br>Он автоматически выполняет <u>ожидания</u> перед выполнение действия.
<br><br>Кроме того, <u>Selenide</u> и <u>Selenium</u> могут использовать <u>Selenoid</u> для запуска браузеров в контейнерах вместо локальных установок.

						</p>
					</div>
				</div>
			</div>
			
			
</div>
</div>
<?php include 'lib/module/inc-footer.php';?>
</div>
</body>
