
<!DOCTYPE html>

<html lang="ru_RU">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="/app/css/style.css">
	<script src="/app/js/jquery.js"></script>
	<script src="/app/js/common.js"></script>
	<title>Seo Impulse | Автооглавление</title>
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
									<li><a href="#">Прочее</a></li>
									<li><span>Автооглавление</span></li>
								</ul>
								
								<h1 class="breadcrumb__title title fs-32 weight-700 color-green">Автооглавление HTML-документа</h1>
							
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
										<span>Когда может быть применим</span>
										<img src="/app/img/toggle.svg" alt="Переключатель">
									</div>
									<div class="toggle__content editor toggleContent">
										<p><strong>Код ответа</strong> - должен быть в нормальном состоянии...</p>
										<p><strong>Canonical</strong> - должен быть в нормальном состоянии...</p>
										<p><strong>Title</strong> - должен быть в нормальном состоянии...</p>
									</div>
								</div>
								
								<form class="action__html html" id="htmlForm">
									
									<div class="html__content grid grid-2">
										
										<div class="html__row">
											
											<div class="html__item">
												<label class="html__label label flex" for="htmlTitles">
													<span class="weight-700">Способ оглавления:</span>
													<select name="serverSource" id="htmlTitles">
														<option value="option1">Теги H2-H3</option>
														<option value="option2">Параметр 2</option>
														<option value="option3">Параметр 3</option>
													</select>
												</label>
											</div>
											
											<div class="html__item">
												<label class="html__label label" for="htmlList">
													<textarea class="full" name="serverUrls" id="htmlList" placeholder="Список до 1000 URL или ссылку на xml-карту"></textarea>
												</label>
											</div>
											
											<div class="server__item">
												<button type="submit" class="server__submit btn grey-dark">Отправить</button>
											</div>
											
										</div>
										
										<xmp class="html__code"></xmp>
										
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