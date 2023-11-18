<!doctype html>
<html lang="ru">
<head>
<title>Tstng87 - DB / MySQL</title>
<meta charset="utf-8">
<meta name="description" content="Всё о базе данных, их типов, разница между ними и базовые операторы.">
<meta name="keywords" content="Всё о базе данных, их типов, разница между ними и базовые операторы.">
<?php include 'lib/module/sys-meta.php';?>
<meta property="og:title" content="Tstng87 - DB / SQL" />
<meta property="og:description" content="Всё о базе данных, их типов, разница между ними и базовые операторы." />
<meta property="og:image" content="https://www.bugraptors.com/blog/public/blog_images/junit-vs-testng-600x400.png" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="https://www.testing87.online/" />
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Tstng87" />

<meta name="twitter:title" content="Tstng87 - DB / SQL">
<meta name="twitter:description" content="Всё о базе данных, их типов, разница между ними и базовые операторы.">
<meta name="twitter:image" content="https://www.bugraptors.com/blog/public/blog_images/junit-vs-testng-600x400.png">
<meta name="twitter:site" content="Всё о базе данных, их типов, разница между ними и базовые операторы.">
<meta name="twitter:creator" content="Всё о базе данных, их типов, разница между ними и базовые операторы.">
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
				<h1>DB / MySQL</h1>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
				<p>
					 Всё о базе данных, их типов, разница между ними и базовые операторы.
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
						<h2>БАЗА ДАННЫХ</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 <b><u>Типы БД:</b></u>
							 <br>
<b>•	Иерархическая</b> (от предка к потомку)
<br>
<b>•	Сетевая</b> (между собой взаимодействуют данные)
<br>
<b>•	Реляционная модель БД:</b>
<br>
Это таблица, в которой есть первичный <b>(Primary key)</b> ключ - уникальный ID клиента, к примеру, дальше уже его имя, город и т.д., <br>также может были вторичный ключ <b>(Foreign key)</b> - внешний номер для связи между таблицами.
<br>
<b><u>SQL</b></u>
<br>Это язык обращения к базе данных, туда входят такие операторы SELECT, INSERT, UPDATE, DELETE, and CREATE.
<br>
<u>Строки - записи, столбцы - поля.</u>
<br>
<b><u>Нормализация реляционной БД:</b></u>
<br>
<b>1NF</b> - таблица, где все должно быть распределено по записям и полям. 
<br>
<b>2NF</b> - если есть какие-то доп уточнения по объектам, создаем ВТОРУЮ таблицу. <br>То есть разделяем их, сначала самые важные хара-ки, затем уточнения - второй таблицей. 
						</p>
					</div>
				</div>
			</div>
				<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Разница между реляционной и не реляционной БД:</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							В реляционной связь между таблицами и все обьекты будут иметь общие критерии значений. 
<br>В не реляционной значения могут быть очень разные. То есть, это большой список инфы, а реляционная идет на базе таблицы.
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Logical operators (AND, OR, NOT)</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							<b>AND</b> – команда, которая добавляет условия для определённого поиска.
<br><b>OR</b> – когда нам нужно уточнить поиск, например, найти страну или город.
<br><b>NOT</b> – когда нам нужно вытащить все элементы, кроме одного.
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Aggregation Function (SUM, COUNT, AVG, MAX, MIN) </h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						Выводит самые максимальные значения, минимальные, средние. <b>SUM</b> – добавление, <b>COUNT</b> – выводит инфу сколько всего полей.
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Разница между БД и СУБД:</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							<b>База данных</b> = объект - данные
							<br>
<b>СУБД</b> = субъект - программа
<br>
<u>Виды СУБД:</u>
<br>MySQL
<br>MS SQL 
<br>Oracle

						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>MySQL</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						   <b>Это Система Управления Базы Данных, использует реляционную модель данных(таблицы)</b>
						   <br>
<u>Основные команды в СУБД:</u>
<br>
<b>SHOW</b> - показывает БД
<br>
<b>CREATE</b> - создает БД
<br>
<b>DROP</b> - удаляет БД
<br>
<b>JOIN</b> - объединяет несколько таблиц.
<br>
<b>SELECT</b> - вытягивает значения из данных (всех или определенных-больше одного значение, меньше какого-то значения и т.д.); <br>сравнивает данные; поиск по значению с использованием <b>LIKE</b>; псевдонимы (переименование столбца, к примеру, временно!); <br>диапазон значений с исп. BETWEEN; сортировка; 
<br>
<b>INSERT</b> - добавляет значения в таблицу
<br>
<b>UPDATE</b> - изменяет значение 
<br>
<b>DELETE</b> FROM название таблицы WHERE - удалить значение из таблицы 
<br>
<b>USE</b> - использование БД
						</p>
					</div>
				</div>
			</div>
				<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>JOIN'ы</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							Объединяет несколько таблиц. Есть 4 вида join’ов:
<br><b>1. Inner join</b> - внутренне объедение, left and right join.
<br><b>2. Left join</b> - объедение по левой таблице (добавляет значения которой нет в правой таблице).
<br><b>3. Right join</b>- объедение по правой таблице (добавляет значения которых нет в левой таблице). 
<br><b>4. Full join</b> – все объединяет. 

						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Ключевое слово LIKE </h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							Ключевое слово <b>LIKE</b> используется для поиска строк в текстовых данных. Чтоб найти слово с первой буквой А = SELECT * FROM courses WHERE first_liter LIKE <b>‘A%’</b> и чтоб найти слово, где вторая буква А = SELECT * FROM courses WHERE first_liter LIKE <b>‘_A%’</b>
							<br>
‘A%’ – первая буква А
<br>
‘_A%’ – вторая буква А
<br>
% означает что без разницы на количество символов, а _ - означает 1 символ.

						</p>
					</div>
				</div>
			</div>
						<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Types of NoSQL Databases | Типы нереляционных БД</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						Есть 4 основных типа:
<br><b>1. Документо-ориентированные</b> – сохраняют данные в формате JSON системы (MongoDB, Couchbase)
<br><b>2. Ключ значения</b> – сохраняются в формате ключ значения, для быстрого доступа к значению (Redis, Riak)
<br><b>3. Столбчатые</b> – данные хранятся посредством столбцов с помощью строк ключей.
<br><b>4. Графовые</b> – используют графовую модель для хранения данных и связей между ними.

						</p>
					</div>
				</div>
			</div>
		
			
</div>
</div>
<?php include 'lib/module/inc-footer.php';?>
</div>
</body>
