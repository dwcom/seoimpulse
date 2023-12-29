
<!DOCTYPE html>

<html lang="ru_RU">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="/app/css/style.css">
	<script src="/app/js/jquery.js"></script>
	<script src="/app/js/common.js"></script>
	<title>Seo Impulse | Мониторинг сайтов</title>
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
									<li><span>Мониторинг сайтов</span></li>
								</ul>
								
								<h1 class="breadcrumb__title title fs-32 weight-700 color-green">Список всех сайтов</h1>
							
							</div>
						</div>
					</div>
				</section>
				
				<section class="action">
					<div class="action__wrap mb5">
						<div class="container">
							<div class="action__block">
								
								<div class="action__title fs-24 mb1">Всего сайтов на мониторинге: <span id="actionCount" class="weight-700">234</span></div>
								<div class="action__subtitle mb2">В список входят все сайты, у которых активная галочка проверки.</div>
								
								<form class="action__filter filter mb3" id="filterForm">
									<div class="filter__title weight-700 mb2">Фильтр по параметрам</div>
									<div class="filter__list grid grid-3 gap-3 mb3">
										
										<label for="filterDomain" class="filter__label">
											<span>Домен:</span>
											<input type="text" name="filterDomain" id="filterDomain" />
										</label>
										
										<label for="filterManager" class="filter__label">
											<span>Менеджер:</span>
											<select name="filterManager" id="filterManager">
												<option value="option1">Все менеджеры</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
										
										<label for="filterCheck" class="filter__label">
											<span>Проверки:</span>
											<select name="filterCheck" id="filterCheck">
												<option value="option1">Все</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
										
										<label for="filterCanonical" class="filter__label">
											<span>Canonical:</span>
											<select name="filterCanonical" id="filterCanonical">
												<option value="option1">Все</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
										
										<label for="filterTitle" class="filter__label">
											<span>Title:</span>
											<select name="filterTitle" id="filterTitle">
												<option value="option1">Все</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
										
										<label for="filterDescription" class="filter__label">
											<span>Description:</span>
											<select name="filterDescription" id="filterDescription">
												<option value="option1">Все</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
										
										<label for="filterTagH1" class="filter__label">
											<span>Тег H1:</span>
											<select name="filterTagH1" id="filterTagH1">
												<option value="option1">Все</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
										
										<label for="filterMirror" class="filter__label">
											<span>Зеркало:</span>
											<select name="filterMirror" id="filterMirror">
												<option value="option1">Все</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
										
										<label for="filterMetaYandex" class="filter__label">
											<span>Meta-Yandex:</span>
											<select name="filterMetaYandex" id="filterMetaYandex">
												<option value="option1">Все</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
										
										<label for="filterMetaGoogle" class="filter__label">
											<span>Meta-Google:</span>
											<select name="filterMetaGoogle" id="filterMetaGoogle">
												<option value="option1">Все</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
										
										<label for="filterTimeOutServer" class="filter__label">
											<span>Отклик сервера:</span>
											<select name="filterTimeOutServer" id="filterTimeOutServer">
												<option value="option1">Все</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
										
										<label for="filterRobotYandex" class="filter__label">
											<span>Robot (Yandex):</span>
											<select name="filterRobotYandex" id="filterRobotYandex">
												<option value="option1">Все</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
										
										<label for="filterIndexYandex" class="filter__label">
											<span>Индекс Yandex:</span>
											<select name="filterIndexYandex" id="filterIndexYandex">
												<option value="option1">Все</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
										
										<label for="filterRobotGoogle" class="filter__label">
											<span>Индекс Google:</span>
											<select name="filterRobotGoogle" id="filterRobotGoogle">
												<option value="option1">Все</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
										
										<div class="filter__title weight-700" style="grid-column: 1/-1">Сортировка</div>
										
										<label for="filterDomainDates" class="filter__label">
											<span>Окончание домена:</span>
											<select name="filterDomainDates" id="filterDomainDates">
												<option value="option1">Все</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
										
										<label for="filterSslDates" class="filter__label">
											<span>Окончание SSL:</span>
											<select name="filterSslDates" id="filterSslDates">
												<option value="option1">Все</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
										
										<label for="filterDomainYears" class="filter__label">
											<span>Возраст домена:</span>
											<select name="filterDomainYears" id="filterDomainYears">
												<option value="option1">Все</option>
												<option value="option2">Параметр 2</option>
												<option value="option3">Параметр 3</option>
											</select>
										</label>
									
									</div>
									<div class="filter__action">
										<div class="filter__do">
											<button type="submit" class="filter__btn btn grey-dark">Применить</button>
											<button type="button" class="filter__btn btn grey-light">Сбросить</button>
										</div>
										<div class="filter__clear" id="filterHide">Скрыть фильтр</div>
									</div>
								</form>
								<div class="action__show">
									<button type="button" class="btn grey-dark" id="filterShow">Показать фильтр</button>
								</div>
								
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
								
								<div class="action__toggle toggle mb3">
									<div class="toggle__title toggleTitle weight-700 mb1 active">
										<span>Проверить отдельные сайты</span>
										<img src="/app/img/toggle.svg" alt="Переключатель">
									</div>
									<div class="toggle__content editor toggleContent">
										<p style="max-width: 820px">Вы также можете проверить отдельные сайты. Проверка выполнится и страница
											перегрузится. В случае ошибок письма не будут приходить ответственным
											менеджерам и заместителям.</p>
										
										<form class="action__check check mt3 mb3" id="checkForm">
											<div class="check__list grid grid-4 gap-2 mb2">
												
												<label class="check__label" for="checkItem1">
													<input type="checkbox" class="check__input" name="checkItems[]" id="checkItem1">
													<span>bmtech.pro</span>
												</label>
												
												<label class="check__label" for="checkItem2">
													<input type="checkbox" class="check__input" name="checkItems[]" id="checkItem2">
													<span>bmtech.pro</span>
												</label>
												
												<label class="check__label" for="checkItem3">
													<input type="checkbox" class="check__input" name="checkItems[]" id="checkItem3">
													<span>bmtech.pro</span>
												</label>
												
												<label class="check__label" for="checkItem4">
													<input type="checkbox" class="check__input" name="checkItems[]" id="checkItem4">
													<span>bmtech.pro</span>
												</label>
												
												<label class="check__label" for="checkItem5">
													<input type="checkbox" class="check__input" name="checkItems[]" id="checkItem5">
													<span>bmtech.pro</span>
												</label>
												
												<label class="check__label" for="checkItem6">
													<input type="checkbox" class="check__input" name="checkItems[]" id="checkItem6">
													<span>bmtech.pro</span>
												</label>
												
												<label class="check__label" for="checkItem7">
													<input type="checkbox" class="check__input" name="checkItems[]" id="checkItem7">
													<span>bmtech.pro</span>
												</label>
												
												<label class="check__label" for="checkItem8">
													<input type="checkbox" class="check__input" name="checkItems[]" id="checkItem8">
													<span>bmtech.pro</span>
												</label>
											</div>
											<button type="submit" class="check__submit btn grey-dark">Проверить</button>
										</form>
										
										<div class="check__title fs-24 mb2">Найдено <strong class="weight-700" id="checkResult">1234</strong> сайтов по заданным условиям</div>
										
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
														<td><div><img src="/app/img/ok.svg" alt="ОК"></div></td>
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
														<td><div><img src="/app/img/error.svg" alt="Ошибка"></div></td>
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
														<td><div><img src="/app/img/ok.svg" alt="ОК"></div></td>
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