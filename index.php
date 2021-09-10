<?php
	include('../newworldbot/run-core.php');
	global $defaultGameFolder;
	
	$currentSubjectId = 1;
	$currentSubjectType = 'page';
	$moduleQuery = sprintf('1 and `subject_id` = %d and `subject_type` = "%s"', $currentSubjectId, $currentSubjectType);
	$menuQuery = '1 and `show_in_menu` = 1 ORDER BY `priority` DESC';
	$commentsLimit = $sqli->selectData('settings', '`name` = "comments-count"', 'value');
	$commentsQuery = sprintf('1 ORDER BY `date` DESC LIMIT %d', $commentsLimit);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>NewWorld - Главная</title>
        <meta name="description" content=""/>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="styles/main.css" type="text/css"/>
        <link rel="stylesheet" href="styles/style.css" type="text/css"/>
        <link rel="icon" href="favicon.gif" type="image/gif" />
        <link rel="shortcut icon" href="favicon.gif" type="image/gif" />
        <link type="text/css" rel="stylesheet" href="css/simplePagination.css"/>
        <link href="css/swipebox.css" rel="stylesheet" type="text/css">
        <script src="scripts/jquery.min.js" type="text/javascript"></script>
        <script src="scripts/jquery.min.js" type="text/javascript"></script>
        <script src="scripts/hammer.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-min.js" type="text/javascript"></script>
        <script src="scripts/subscribe.js" type="text/javascript"></script>
        <script src="scripts/contact.js" type="text/javascript"></script>
        <script src="scripts/jquery.swipebox.js" type="text/javascript"></script>
        <script src="scripts/bxslider.js" type="text/javascript"></script>
        <script src="scripts/colorbox.js" type="text/javascript"></script>
        <script src="scripts/retina.js" type="text/javascript"></script>
        <script src="scripts/custom.js" type="text/javascript"></script>
        <script src="scripts/framework.js" type="text/javascript"></script>
        <script src="scripts/jquery.query-object.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="sitebox">
            <div id="header">
                <div id="head-left">
                    <div id="logo-box">
                        <a href="/<?=$defaultGameFolder?>" title="">
                        <img src="images/logo.png" alt="" /></a>
                    </div>
                    <div id="slogan-box">
                        <p>Скупка игровой валюты в игре New World</p>
                    </div>
                </div>
                <div id="head-right">
                    <div id="top-tel">
                        <h3><img class="tgg2" src="images/tg.png" />Telegram: <a href="https://t.me/NewWorldFansRu">@NewWorldFansRu</a></h3>
                    </div>
                    <div class="work-time">
                    </div>
                </div>
            </div>
            <div id="top-nav-box">
                <div id="top-nav">
                    <ul>
                        <?php foreach($sqli->getArrayData('pages', $menuQuery) as $page) : ?>
							<li><a href="/<?=$defaultGameFolder?>/<?=$page['url']?>.php"><?=base64_decode($page['name'])?></a></li>
						<?php endforeach ?>
                    </ul>
                </div>
                <div id="top-nav-button">
                    <a href="#" class="deploy-navigation">МЕНЮ</a>
                    <div class="navigation" style="overflow:visible;z-index:100500;">
					<?php foreach($sqli->getArrayData('pages', $menuQuery) as $page) : ?>
						<a href="/<?=$defaultGameFolder?>/<?=$page['url']?>.php"><?=base64_decode($page['name'])?></a>
					<?php endforeach ?>
                    </div>
                </div>
            </div>
            <div id="container">
                <div id="left-bar">
                    <div class="module">
                        <div id="search-bar">
                            <div class="search-box-title">
                                <h2>скупка игровой валюты</h2>
                                <span class="title-icon"><img src="images/lupe-icon.png" alt="" /></span>
                            </div>
                            <div class="search-box-cont">
                                <form action="" name='search'>
                                    <div class="search-box-col">
                                        <span class="select" id="selectcategory">Выберите игру </span>
                                        <select name="mark"  class="styled" onchange="window.location = this.options[this.selectedIndex].value;">
                                            <option  selected="selected"  value="" >Выберите игру</option>
                                            <?php foreach($sqli->getArrayData('games', '1') as $game) : ?>
												<option value="/<?=$defaultGameFolder?>/<?=$game['url']?>.php">
													<?=base64_decode($game['name'])?>
												</option>
											<?php endforeach ?>
                                        </select>
                                    </div>
                                </form>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="search-cont">
                            <p>
                            </p>
                        </div>
                    </div>
                    <h1>@NewWorldBot - первый телеграмм бот для продажи золота и других игровых ценностей в игре New World</h1>
                    <p>
                    <p>Мы открываем скупку и любой игрок&nbsp;может продать за реальные деньги игровое золото и другие игровые ценности&nbsp;из&nbsp;игры&nbsp;New World. Сотрудничаем с крафтерами на постоянной основе и на особых условиях!</p>
                    <p><strong>Для обеспечения сбыта мы активно привлекаем европейских и англоязычных игроков - это основная аудитория Покупателей!</strong></p>
                    <h2>Хотите зарабатывать на продаже золота&nbsp;в игре New World?</h2>
                    <p>Все просто&nbsp;-&nbsp;установите мессенджер Телеграмм на свой телефон, планшет или ПК,&nbsp;авторизуйтесь,&nbsp;добавьте нашего бота <a href="https://t.me/NewWorldBot"><strong>@NewWorldBot</strong></a>
                        &nbsp;в список контактов, перейдите в чат с ботом и нажмите &quot;Запустить&quot; или отправьте в чат команду /start, если пользовались ботом ранее. <strong>Далее обязательно зарегистрируйтесь на своем сервере, 
                        кликнув&nbsp;меню &quot;Регистрация&quot; и выполните дальнейшие шаги - только в этом случае Вы будете получать рассылку по своему серверу!</strong><br />
                        <br />
                    <div style="width:100%"><img class="ttgg" src="images/b01.gif" /></div>
                    </p>
                    &nbsp;<strong style="color:red; font-weight:bold">До 28 сентября бот функционирует в тестовом режиме!</strong></p>
                    <h2>Сколько можно заработать на продаже золота? (актуально для ЗБТ)</h2>
                    <table class="tables">
                        <tbody>
                            <tr>
                                <th class="table-sub-title">РЕГИОН</th>
                                <th class="table-title">Цена за 1000 золота</th>
                            </tr>
                            <tr>
                                <td class="table-sub-title">EU Central</td>
                                <td>от 70-150р</td>
                            </tr>
                            <tr>
                                <td class="table-sub-title">US East</td>
                                <td>от 150-220р</td>
                            </tr>
                            <tr>
                                <td class="table-sub-title">US West</td>
                                <td>от 150-220р</td>
                            </tr>
                            <tr>
                                <td class="table-sub-title">SA East</td>
                                <td>от 180-300р</td>
                            </tr>
                            <tr>
                                <td class="table-sub-title">AP Southeast</td>
                                <td>от 300</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>&nbsp;</p>
                    <h2>Правила работы:</h2>
                    <p>1. Цена&nbsp;на Золото (Coins) не является статичной, она постоянно меняется и зависит, в первую очередь, от спроса и предложения на конкретном сервере. Поэтому каждая сделка индивидуальна и&nbsp;мы обсуждаем с вами стоимость до передачи золота в игре.</p>
                    <p>2. У нас достаточно репутации и отзывов, поэтому мы не переводим деньги первыми. Обычно расчет после передачи происходит в течении 10 минут.&nbsp;Если все же у вас есть сомнения, мы можем провести сделку через&nbsp;фанпей, однако в этом случае всю комиссию биржи оплачиваете вы.</p>
                    <p>3.&nbsp;Выслали золото не на тот ник / передали его не туда / на другом сервере, то вся вина лежит исключительно на вас.</p>
                    <p>4. Работаем только с&nbsp;ответственными людьми, не задерживающими передачу, точно выполняющие взятые на себя обязательства. С неадекватами расстаемся быстро, без обид.</p>
                    <p>5. Продавец обязан записать на видео&nbsp;передачу лота в игре&nbsp;(хотя бы на телефон, но с нормальным качеством) и предъявить ее после проведения передачи.&nbsp;При отсутствии видео шансов решить любую претензию&nbsp;в свою пользу будет не много.&nbsp;</p>
                    <h2>Контакты:</h2>
                    <p><img class="tgg" src="images/tg.png" />Telegram: <a href="https://t.me/NewWorldFansRu">@NewWorldFansRu</a> - пишите по любым вопросам</p>
                    </p>  
                </div>
                <div id="right-bar">
                    <?php foreach($sqli->getArrayData('modules_relations', $moduleQuery) as $moduleRel) : ?>
					<?php
						$module = $sqli->selectData('modules', '`id` = ' . $moduleRel['module_id']);
					?>
						<div class="module">
							<div class="module-title-right">
								<h2><?=base64_decode($module['header'])?></h2>
								<span class="title-icon"><img src="images/map-icon.png" alt="" /></span>
							</div>
							<div class="module-cont-right2">
							<?php if(strlen($module['image']) > 1 && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . $module['image'])) : ?>
								<a href="<?=$module['link']?>"><img src="<?=$module['image']?>" alt="" /></a>
							<?php endif ?>
							<p><?=base64_decode($module['description'])?></p>
							</div>
						</div>
					<?php endforeach ?>
                    <div class="module">
                        <div class="module-title-right">
                            <h2>Новые отзывы</h2>
                            <span class="title-icon"><img src="images/map-icon.png" alt="" /></span>
                        </div>
						<?php foreach($sqli->getArrayData('comments' , $commentsQuery) as $comment) : ?>
							<div class="module-cont-right">
								<span><?=$comment['date']?></span>
								<a href="https://t.me/<?=$comment['usrname']?>">@<?=$comment['username']?></a>
								<p>
									<?php if(!empty($comment['image'])) : ?>
										<a class="swipebox cboxElement" href="<?=base64_decode($comment['image'])?>">
										<img class="imag responsive-image" src="<?=base64_decode($comment['image'])?>">
										</a>
									<?php endif; ?>
									<?=$comment['commentText']?>
								</p>
								<div class="clear"></div>
							</div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div id="bot-bar">
            <div id="footer">
                <div class="copy-box">
                    <p>
                        2021 | NewWorldBot | newworldfans.ru
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>

