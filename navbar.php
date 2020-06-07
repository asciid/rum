<?php
	
	/*
		Как видно из названия, просто выводит navbar сайта. В отдельный PHP выношу для удобства.

		ВНМАНИЕ: Везде, где используется PHP, должно быть расширение .php. По содержимому файла веб-сервер код не читает.
		(Мучался с этим пару дней, вдруг забуду)  
	*/

	echo <<<HTML
			<div id="navbar">
				<div class="row" id="navbar-logo">
					<div class="col-sm-12" id="logo">	
						<img src="logo.gif"/>
					</div>
				</div>
				<div class="row" id="navbar-links">
					<div class="col-sm-4 navbar_entry">
						&lt<a href="/rum/index.php">Главная</a>&gt
					</div>
					<div class="col-sm-4 navbar_entry">
						&lt<a href="/rum/sample.php">Пример</a>&gt
					</div>
					<div class="col-sm-4 navbar_entry">
						&lt<a href="/rum/pages.php">Страницы</a>&gt
					</div>
				</div>
			</div>
	HTML;
?>