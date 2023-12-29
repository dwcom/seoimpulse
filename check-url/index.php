
<!DOCTYPE html>

<html lang="ru_RU">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="/app/css/style.css">
	<script src="/app/js/jquery.js"></script>
	<script src="/app/js/common.js"></script>
	<title>Seo Impulse | Массовая проверка</title>
</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/php/header.php' ?>

<main class="main">
	
	<div class="main__wrap">
		<div class="container">
			<div class="main__block">
				
				<section class="breadcrumb">
					<div class="breadcrumb__wrap mb3">
						<div class="container">
							<div class="breadcrumb__block">
								
								<ul class="breadcrumb__ul pt2 mb2">
									<li><a href="#">Главная</a></li>
									<li><a href="#">Приложения</a></li>
									<li><a href="#">Мониторинг сайтов</a></li>
									<li><span>grafit.media</span></li>
								</ul>
								
								<h1 class="breadcrumb__title title fs-32 weight-700 color-green">Массовая проверка ответа сервера</h1>
							
							</div>
						</div>
					</div>
				</section>
				
				<section class="action">
					<div class="action__wrap mb5">
						<div class="container">
							<div class="action__block">
								
								<div class="action__toggle toggle mb3">
									<div class="toggle__title toggleTitle weight-700 mb1 active">
										<span>Описание параметров проверки</span>
										<img src="/app/img/toggle.svg" alt="Переключатель">
									</div>
									<div class="toggle__content editor toggleContent">
										<p><strong>Код ответа</strong> - должен быть в нормальном состоянии...</p>
										<p><strong>Canonical</strong> - должен быть в нормальном состоянии...</p>
										<p><strong>Title</strong> - должен быть в нормальном состоянии...</p>
									</div>
								</div>
								
								<form class="action__server server" id="serverForm">
									<div class="server__block">
										<div class="server__item">
											<label class="server__label label flex" for="serverSource">
												<span class="weight-700">Выбрать источник загрузки:</span>
												<select name="serverSource" id="serverSource">
													<option value="option1">Список URL-адресов</option>
													<option value="option2">Параметр 2</option>
													<option value="option3">Параметр 3</option>
												</select>
											</label>
										</div>
										
										<div class="server__item">
											<label class="server__label label" for="serverUrls">
												<textarea class="full" name="serverUrls" id="serverUrls" placeholder="Список до 1000 URL или ссылку на xml-карту"></textarea>
											</label>
										</div>
										
										<div class="server__item">
											<div class="check__list grid mb2">
												
												<div class="weight-700 mb1">Параметры проверки</div>
												
												<label class="check__label" for="serverParam1">
													<input type="checkbox" class="check__input" name="serverParam[]" id="serverParam1">
													<span>Проверять время ответа сервера</span>
												</label>
												
												<label class="check__label" for="serverParam2">
													<input type="checkbox" class="check__input" name="serverParam[]" id="serverParam2">
													<span>Следовать редиректам</span>
												</label>
												
												<label class="check__label" for="serverParam3">
													<input type="checkbox" class="check__input" name="serverParam[]" id="serverParam3">
													<span>Проверять вес страниц сайта</span>
												</label>
												
												<label class="check__label" for="serverParam4">
													<input type="checkbox" class="check__input" name="serverParam[]" id="serverParam4">
													<span>Игнорировать корректность SSL-сертификата</span>
												</label>
												
												<label class="check__label" for="serverParam5">
													<input type="checkbox" class="check__input" name="serverParam[]" id="serverParam5">
													<span>Фильтровать результаты (успешные/неуспешные)</span>
												</label>
												
												<label class="check__label" for="serverParam6">
													<input type="checkbox" class="check__input" name="serverParam[]" id="serverParam6">
													<span>Сформировать CSV-файл</span>
												</label>
												
											</div>
										</div>
										
										<div class="server__item">
											<label class="server__label label flex" for="serverUserAgent">
												<span class="weight-700">Выбрать User-Agent:</span>
												<select name="serverUserAgent" id="serverSource">
													<option value="option1">Desktop Windows</option>
													<option value="option2">Параметр 2</option>
													<option value="option3">Параметр 3</option>
												</select>
											</label>
										</div>
										
										<div class="server__item">
											<button type="submit" class="server__submit btn grey-dark">Отправить</button>
										</div>
										
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</section>
			
			</div>
		</div>
	</div>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/php/footer.php' ?>

</body>

</html>