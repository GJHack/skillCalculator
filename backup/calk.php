<?php
	include('../newworldbot/run-core.php');
	global $defaultGameFolder;
	$currentSubjectId = 30;
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
        <title>Калькулятор скилов</title>
        <meta name="description" content="Калькулятор скилов"/>
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
                    <h1>Калькулятор скилов</h1>
                    
                    
                    
                    
                    
                    
                    <!--СЮДА КОПИРУЕМ КАЛЬКУЛЯТОР-->
                    
                    
                    
                    
                    
                    
                    
                    
                    <p>
                    <p>1</p>

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
                            <h2>новые отзывы</h2>
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

