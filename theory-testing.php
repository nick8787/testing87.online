<!doctype html>
<html lang="ru">
<head>
<title>Tstng87 - Theory</title>
<meta charset="utf-8">
<meta name="description" content="Всё о теории тестировании. Виды, 7 принципов, уровни, пирамида, техники тест-дизайна, тестовая документация.">
<meta name="keywords" content="Всё о теории тестировании. Виды, 7 принципов, уровни, пирамида, техники тест-дизайна, тестовая документация.">
<?php include 'lib/module/sys-meta.php';?>
<meta property="og:title" content="Tstng87 - Theory" />
<meta property="og:description" content="Всё о теории тестировании. Виды, 7 принципов, уровни, пирамида, техники тест-дизайна, тестовая документация." />
<meta property="og:image" content="https://fs39.fex.net/preview/4723615196/0x0" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="https://www.testing87.online/" />
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Tstng87" />

<meta name="twitter:title" content="Tstng87 - Theory">
<meta name="twitter:description" content="Всё о теории тестировании. Виды, 7 принципов, уровни, пирамида, техники тест-дизайна, тестовая документация.">
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
				<h1>О тестировании</h1>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
				<p>
					 Виды, 7 принципов, уровни, пирамида, техники тест-дизайна, тестовая документация.
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
						<h2>Виды тестирования: </h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 <b>1.Функциональное тестирование. То есть работает ли продукт?</b>
							 <br>
<u>Это тестирование направлено на проверку функциональности продукта, соответствует ли ожидаемый результат фактическому.</u> 
<br>Сюда входит: <b>smoke testing</b> (быстрая и минимальная проверка продукта, Самый главный тест), <b>санити тестирование</b> (здесь будет больше тестов, чем в smoke), <b>regression testing</b> (все ли будет работать также хорошо, как прежне после изменений, после добавления фичи), <b>системное тестирование</b>, <b>интеграционное тестирование</b> (проверка взаимодействия модулей). 
<br><br>
<b>2.Нефункциональное тестирование. То есть то, как продукт работает?</b>
<br>
<u>Это тестирование свойств, которые не относятся к функциональности системы, например:</u>
<br>
- Т. Удобства пользователя (проверка насколько легко пользоваться нашим продуктом со стороны пользователя)
<br>
- Т. безопасности (проверка на предмет защищенности пользовательских данных, проверка на сколько просто неавторизированному пользователю пользоваться функционалом на сайте, проверка насколько просто постороннему лицу получить доступ к данным)
<br>
- Т. производительности Performance Testing (целью этого тестирования является определение работоспособности, стабильности)
<br><br>
<b>В Т. Производительности входят след Т.:</b>
<br>
- LOAD нагрузочное Т. (проверка системы, выдержит ли она нагрузку во время того, если будет на сайте сразу 1000 пользователей. ПОСТЕПЕННАЯ НАГРУЗКА)
<br>
- STRESS нагрузочное Т. (здесь нагрузка идет полным объёмом сразу)
<br>
- краш Т. (проверка на прочность продукта)
<br>
- кросс-браузерное Т. и кроссплатформенное Т. (проверка на разных платформах ОС, например Андроид или Ios. Кросс-браузерное – проверка в разных браузерах)
<br>
- Т. на восстановление (проверка на надежность. Проверка системы насколько просто будет восстановить данные после ошибок или сбоев)
<br>
- Т. на проникновение (проверка насколько просто постороннему лицу получить доступ к данным)
<br><br>
<b>3.Тестирование белого ящика, серого ящика и черного ящика</b>
<br>
<b>Т.черного ящика</b> – когда тестировщик не знает программный код, только исходя внешних факторов интерфейса. Без знаний реализации проекта. Только все что есть на интерфейсе.
<br>
<b>Т.белого ящика</b> – когда мы знаем весь процесс реализации (можем протестировать как с внешним интерфейсом, так и с внутренним кодом)
<br>
<b>Т.серого ящика</b> – когда мы знаем только некоторые особенности реализации проекта
<br><br>
<b>4.Альфа и Бета тестирование</b>
<br>
<b>Альфа тестирование</b> – проверяется разработчиками
<br><b>Бета тестирование</b> – нанимается определенная группа пользователей, чтоб проверили функциональность проекта (без разработчика), то есть, работа со стороны пользвателя.
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>7 принципов тестирования</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							  <b>• Исчерпывающее тестирование невозможно ...</b>
							  <br>
Это значит, что надо понимать с чем именно дело, с какой работой. Надо учитывать оценку и управления рисками. 
<br>
<b> • Тестирование демонстрирует наличие дефектов ...</b>
<br>
Благодаря тестированию можно определить наличие дефектов 
<br>
 <b>• Заблуждение об отсутствии ошибок ...</b>
<br>Даже если ошибок не найдено, работа системы может работать неправильно из-за того, что она сама по себе построена неудобно для пользователей 
<br>
 <b>• Раннее тестирование сохраняет время и деньги ...</b>
 <br>
Чем раньше обнаружен дефект, тем проще быстрее и дешевле его исправить. Сэкономит время!
<br>
 <b>• Принцип скопления или кластеризация дефектов ...</b>
 <br>
Небольшое количество модулей содержит много дефектов, и они кучкуются. 
<br>
<b> • Тестирование зависит от контекста ...</b>
<br>
Тестирование может быть разным и зависит это от работы, будь то сайт интернет магазина либо системы безопасности. Где-то риски больше, где-то меньше. 
<br>
 <b>• Парадокс пестицида</b>
 <br>
Необходимо менять наборы тестов и методы тестирование, для того чтобы находить невыявленные ошибки, 1 способ может найти одни дефекты, но они могут остаться еще и надо тестировать их другими методами или тестами

						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Уровни тестирования:</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						    <u>Показывает в какой последовательности идут тесты.</u>
						    <br>
<b>1. Компонентное UNIT-testing</b> (например, интернет-магазин = тестирования корзины или окно оплаты)
<br>
 <b>2. Интеграционное</b> (тестирование двух модулей и больше, взаимодействие между ними)
 <br>
  <b>3. Системное тестирование</b> (проверка всех модулей) <b>API-tests</b>
  <br>
  <b>4. Приемочное тестирование UI-tests</b> (определение готовности продукта, проверяем работу функционала) в основном финальное тестирование перед релизом. Сюда можно отнести альфа и бета тестирования.

						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Пирамида тестирования: </h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 <u>Пирамида указывает на то, сколько тестов будет проведено.</u>
							 <br>
							 Пирамиду разбивают на <b>3 уровня:</b>
							 <br>
<b>•	модульное тестирование (юнит);</b>
<br>
займет 50-60% тестов всего модульного блока 
<br>
<b>•	интеграционное тестирование API-тесты;</b>
<br>
займет 30% количества проведенных тестов
<br>
<b>•	системное тестирования UI-тесты;</b> (клик, сендКис)
<br>
Системное тестирования занимает больше сил и больше ресурсов. Займет 10% количества проведенных тестов


						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Техники тест-дизайна:</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 <b><u>1.Классы эквивалентности</u></b>
							 <br>
Это определённый диапазон входных данных, то есть проведение тестов с определёнными значениям. (например, с 0-13лет, не нанимаем на работу – это один класс эквивалентности, с 14-17 – частично нанимаем, с 18-55 – берем на работу, с 56-99 – не нанимаем) с 0 до 99 – позитивный класс, все что до и после значений: негативный класс. 
<br>
Сюда можно отнести <b><u>эквивалентное разбиение:</u></b> если брать один диапазон значений, то нам не нужно тестить все значение, а стоит выбрать только среднее. Этот метод позволяет минимизировать количество тестов. Но это в принципе не обязательно, так как есть тестирование граничных значений.
<br>
<u>Применяется в основном на полях ввода.</u>
<br>
<b><u>2.Анализ граничных значений</u></b>
<br>
B ISTQB прописано то, что есть два подхода тестированию граничных значений. Если от 2 до 6 букв диапазон, 1 подход: тестируется 1,2 и 6,7. 2 подход: тестируется 1,2,3 и 5,6,7.
<br>
К примеру, диапазон от 0 до 10. Тестироваться будут: -1,0,1 и 9,10,11.
<br>
<b><u>3.Попарное тестирование Pairwise Testing </u></b>
<br>
Это техника тест-дизайна, которая предусматривает собой создание таких тест-кейсов, которое бы покрывало наибольшее количество комбинаций каждой пары входных данных.
<br>
Применяется в основном, когда имеем дело с фильтрами, шрифтами, их размером и т.д.
<br>
<b><u>4.Тестирование состояний и переходов</u></b>
<br>
Это тестирование объекта и его перехода. Например, есть пользователь, состояние – не зареган, когда он зарегается – это будет переход во второе состояние (зареган).
<br>
<b><u>5.Таблица принятий решений</u></b>
<br>
Это комбинация условий. Используется, когда у нас есть условие и их значение, делаем комбинацию из значений и проводим тесты.
<br>
<b><u>5.Подход на основе опыта</u></b>
<br>
Позволяет провести тестирования «черного ящика». Ввод выше максимальных чисел, ввод ниже минимальных чисел, ввод спецсимволов или нулевых значений, Ui - тесты.

						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Тестовая документация:</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 Это чек-листы, тест-кейсы, баг-репорты, тест план, тест стратегия, отчет о тестировании.
							 <br>
							 <b><u>ЧЕК-ЛИСТЫ</u></b>
							 <br>
Это быстрая проверка на предмет ошибок и проблем.
<br><br>
<b><u>ТЕСТ-КЕЙСЫ</u></b>
<br>
Тут будет использоваться пошаговый сценарий, той или иной <u>user-story</u>. Например:
<br>
<b>Описание:</b> Заголовок, приоритет, шаги, ожидаемый результат. 
<br><br>
<b><u>БАГ-РЕПОРТ</u></b>
<br>
Это документ, где есть полное описание Бага (дефекта), он найден тестировщиком, чтобы передать деву.
При обнаружении Бага, мы должны его задокументировать, например, в JIRA.
<br>
 <b>Составляется он след способом:</b> Описание проблемы (шаги воспроизведения, факт результат, ожид результат), Название проекта, Компонент, Версия сборки, Критичность бага (Severity, типы – blocker, critical, major, minor, trivial), Приоритет (Очередь исправление проблемы), Статус, Автор, Окружение (ОС, Разрядность ОС, браузер, где был обнаружен БАГ), скриншот бага с компа.
 <br><br>
<b><u>ТЕСТ ПЛАН</u></b>
<br>
Это детализация отдельного конкретного продукта. Более высокоуровневый документ, служит для все участников проекта.
<br>
<u>Структура:</u>
<br> • Виды тестирования 
<br> • Приоритет тестирования (последовательность выполнения тестов)
<br> • Environment (окружения: dev, Stage, beta, prod) это тестовое окружение, чтоб потестить новые фичи, к примеру. 
 <br>• Таски тестировщиков 
<br> • Тест стратегия 
<br> • Техники тест-дизайна
<br> • Баг-трекинг 
<br> • Инструменты для работы
<br><br>
<b><u>ТЕСТ СТРАТЕГИЯ</u></b>
<br>
Это подход для тестирования. Максимально обобщенный документ, что до того, как будет происходит тестирование в компании.
<br>
<u>Этапы тест стратегии:</u> 
<br> • Сбор информации (общение с заказчиком, его требования, как будет устроен продукт)
<br> • Анализ информации (выбираем те задачи, с которыми будем работать)
<br> • Принятие решений (какие виды тестирования будем использовать) 
<br> • Презентация (после того, как собрали всю инфу, презентует менеджменту, команде)
<br><u>Составляет:</u>
<br> • Менеджер (чаще всего)
 • Тестировщик (mid)
<br><u>Что включает:</u>
 • Цель тестирования 
 • Инфа о продукте 
 • Виды тестирования 
							 </a>.
						</p>
					</div>
				</div>
			</div>
				<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Enviroment | Окружения</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							Окружение используется для того, чтобы потестить, к примеру, добавленные новые фичи, написанный свежий код и т.д. <br>Так называемое - <u>окружения развертывания ПО</u>. Чтоб не затрагивать рабочую версию продукта и провести регрессию, происходит разделение окружения.<br> Существуют такие разделения, как:
						<br>	• <u>Dev enviroment</u> - среда разработки (базы данных, сайт и т.д.), тут развертывается свежий код.
						<br>	• <u>Test enviroment</u> - тут тестируется функциональность.
					    <br>	• <u>Stage enviroment</u> - это предпродакшн, тут развертывается бэк системы.
			     		<br>	• <u>Prod enviroment</u> - тут работают пользователи. Может быть открытм и закрытым.
						</p>
					</div>
				</div>
			</div>
			
</div>
</div>
<?php include 'lib/module/inc-footer.php';?>
</div>
</body>