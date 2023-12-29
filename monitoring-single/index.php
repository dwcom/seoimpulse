
<!DOCTYPE html>

<html lang="ru_RU">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="/app/css/style.css">
	<script src="/app/js/jquery.js"></script>
	<script src="/app/js/common.js"></script>
	<title>Seo Impulse | Мониторинг конкретного сайта</title>
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
								
								<h1 class="breadcrumb__title title fs-32 weight-700 color-green">Мониторинг сайта grafit.media</h1>
							
							</div>
						</div>
					</div>
				</section>
				
				<section class="action">
					<div class="action__wrap mb5">
						<div class="container">
							<div class="action__block">
								
								<div class="action__title fs-24 mb2">Информационная таблица</div>

								<div class="action__table table">
									<table class="min">
										<thead>
										<tr>
											<th>Главное</th>
											<th>Менеджер</th>
											<th>Окончание SSL (дни)</th>
											<th>Окончание домена (дни)</th>
											<th>Возраст (дни)</th>
											<th>проверка</th>
											<th>Крайняя проверка</th>
											<th>Всего</th>
											<th>Проблемных</th>
										</tr>
										</thead>
										<tbody>
										<tr class="ok">
											<td><a href="#">bmtech.pro</a></td>
											<td>Иванов Иван</td>
											<td>78</td>
											<td>88</td>
											<td>88</td>
											<td>26.11.2023 14:56</td>
											<td>26.11.2023 14:56</td>
											<td>3</td>
											<td>4</td>
										</tr>
										</tbody>
									</table>
								</div>
								
								<button type="submit" class="action__submit btn grey-dark mb3" id="siteReCheck">Перепроверить сайт</button>
								
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
								
								<div class="history__title weight-700 mb2">История проверок</div>
								
								<div class="action__table table">
									
									<table>
										<thead>
										<tr>
											<th>Домен</th>
											<th>Дата</th>
											<th>Менеджер</th>
											<th>Итог</th>
											<th>Ссылка</th>
											<th>Код ответа</th>
											<th>Canonical</th>
											<th>Title</th>
											<th>Description</th>
											<th>H1</th>
											<th>Главное зеркало</th>
											<th>Meta Robots</th>
											<th>Meta Yandex</th>
											<th>Meta Google</th>
											<th>Отклик сервера (сек)</th>
											<th>Robots Yandex</th>
											<th>Robots Google</th>
											<th>Индекс Яндекс</th>
											<th>Индекс Google</th>
											<th>Окончание домена (дни)</th>
											<th>Возраст (лет)</th>
											<th>-----------</th>
										</tr>
										</thead>
										<tbody>
										<tr class="ok">
											<td><a href="#">bmtech.pro</a></td>
											<td>26.11.2023 14:56</td>
											<td>Иванов Иван</td>
											<td>
												<div><img src="/app/img/ok.svg" alt="ОК"></div>
											</td>
											<td><a href="#">Перейти</a></td>
											<td>200</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>0.09</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>226</td>
											<td>3.6</td>
											<td>134</td>
										</tr>
										<tr class="error">
											<td><a href="#">bmtech.pro</a></td>
											<td>26.11.2023 14:56</td>
											<td>Иванов Иван</td>
											<td>
												<div><img src="/app/img/error.svg" alt="Ошибка"></div>
											</td>
											<td><a href="#">Перейти</a></td>
											<td>200</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>0.09</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>226</td>
											<td>3.6</td>
											<td>134</td>
										</tr>
										<tr class="ok">
											<td><a href="#">bmtech.pro</a></td>
											<td>26.11.2023 14:56</td>
											<td>Иванов Иван</td>
											<td>
												<div><img src="/app/img/ok.svg" alt="ОК"></div>
											</td>
											<td><a href="#">Перейти</a></td>
											<td>200</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>0.09</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>OK</td>
											<td>226</td>
											<td>3.6</td>
											<td>134</td>
										</tr>
										</tbody>
									</table>
								
								</div>
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