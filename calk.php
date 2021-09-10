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
				<link rel = "stylesheet" type = "text/css" href = "css/calk.css">
				<script type = "text/javascript" src = "js/calcScript.js"></script>
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




										<!----Начало блока---->
										<section id = "mainContainerCalc" class = "mainContainerCalc">

							        <h5 class = "nameCalc"> Blood </h5>

							        <div class = "rowCalc">

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5>Refreshing Strikes</h5>
							              <p>
							                  Slash so quickly
							                  that it extends the reach of yuor blade.
							                  This strike deals direct damage but also applies a bleed that will deal 100% weapon
							                  damage over 12 seconds. This can stack up to 3 times refreshing previous applications. Cooldown 11s.
							              </p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/00.png" alt = "">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5>Engarde</h5>
							              <p>
															  Deal 10% more damage when your target has greater than 50% health.
							              </p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/01.png" alt = "" class = "roundImgCalc">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5></h5>
							              <p></p>
							            </div>
							            <div class = "clickCalc" noskill = "true"></div>
							            <img src = "" alt = "" class = "haveNoSkillCalc">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5>Flurry</h5>
							              <p>
							                  Enter a posed stance and unleash a series offive quick thrust attacks with each
							                  strike dealing more damage. Flurry can be dodge or canceled at any time. Cooldown 16s.
							              </p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/03.png" alt = "" class = "roundImgCalc">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5>Unerring</h5>
							              <p>
							                  Deal 5% more damage to targets with a Rapier bleed.
							              </p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/04.png" alt = "">
							          </div>

							        </div>
							        <div class = "rowCalc">

							          <div class = "onceItemCalc up">
							            <div class = "hiddenTextCalc">
							              <h5></h5>
							              <p></p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "" alt = "" class = "haveNoSkillCalc">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5>Unerring</h5>
							              <p>
							                  Deal 5% more damage to targets with a Rapier bleed.
							              </p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/11.png" alt = "" class = "roundImgCalc">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5>Flourish and Finish</h5>
							              <p>
							                Flourish performs an attack knocking back enemies. Pressing 'Light Attack' at the end of
							                Flourish will continue this ability by automatically performing 'Finish'. Finish lunges forward,
							                consuming all Rapier bleeds on any target hit dealing 110% of their damage immediately.
							                Cooldown 20s
							              </p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/12.png" alt = "">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5</h5>
							              <p></p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "" alt = "" class = "haveNoSkillCalc">
							          </div>

							          <div class = "onceItemCalc up">
							            <div class = "hiddenTextCalc">
							              <h5>Overwhelm</h5>
							              <p>
							                  Each hit of Flurry does 25% more block damage.
							              </p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/14.png" alt = "" class = "roundImgCalc">
							          </div>

							        </div>
							        <div class = "rowCalc">

							          <div class = "onceItemCalc up">
							            <div class = "hiddenTextCalc">
							              <h5>Thirst for Blood</h5>
							              <p>
							                  When applying the first bleed stack to an opponent this cooldown is reduced by 10%.
							              </p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/20.png" alt = "" class = "roundImgCalc">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5></h5>
							              <p></p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "" alt = "" class = "haveNoSkillCalc">
							          </div>

							          <div class = "onceItemCalc up">
							            <div class = "hiddenTextCalc">
							              <h5>With Flair</h5>
							              <p>
							                  Gain Grit on both Flourish and Finish.
							              </p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/22.png" alt = "" class = "roundImgCalc">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5>Light Edge</h5><p>Increase damage from both middle swipe attacks in the light attack chain by 8%.</p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/23.png" alt = "" class = "roundImgCalc">
							          </div>

							          <div class = "onceItemCalc up">
							            <div class = "hiddenTextCalc">
							              <h5>Fleeting Strikes</h5><p>Each hit of Flurry reduces the cooldown of this ability by 7%.</p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/24.png" alt = "" class = "roundImgCalc">
							          </div>

							        </div>
							        <div class = "rowCalc">

							          <div class = "onceItemCalc up">
							            <div class = "hiddenTextCalc">
							              <h5>Thirst for Blood</h5><p>When applying the first bleed stack to an opponent this cooldown is reduced by 10%.</p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/30.png" alt = "" class = "roundImgCalc">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5>Heavy Puncture</h5><p>Any heavy attack on a bleeding enemy will extend their Rapier bleeds by 2 seconds. This will also apply to future stacked applications of the same bleed extending the entire stack.</p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/31.png" alt = "" class = "roundImgCalc">
							          </div>

							          <div class = "onceItemCalc up">
							            <div class = "hiddenTextCalc">
							              <h5>Swagger</h5><p>+20 stamina when successfully hitting a target with Finish.</p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/32.png" alt = "" class = "roundImgCalc">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5></h5>
							              <p></p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "" alt = "" class = "haveNoSkillCalc">
							          </div>

							          <div class = "onceItemCalc up">
							            <div class = "hiddenTextCalc">
							              <h5>To the Bone</h5><p>Each hit of Flurry extends the Rapier's bleed by 1 seconds. This will also apply to future stacked applications of the same bleed extending the entire stack.</p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/34.png" alt = "" class = "roundImgCalc">
							          </div>

							        </div>
							        <div class = "rowCalc">

							          <div class = "onceItemCalc up">
							            <div class = "hiddenTextCalc">
							              <h5>Proper Spacing</h5><p>Improve your damage from Tondo by 100% if you are 4m away from your target or more.</p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/40.png" alt = "" class = "roundImgCalc">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5></h5>
							              <p></p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "" alt = "" class = "haveNoSkillCalc">
							          </div>

							          <div class = "onceItemCalc up">
							            <div class = "hiddenTextCalc">
							              <h5>Fuel</h5><p>Each tick of damage from Tondo's bleed reduces the cooldown of this ability by 3.5%.</p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/40.png" alt = "" class = "roundImgCalc">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5></h5>
							              <p></p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "" alt = "" class = "haveNoSkillCalc">
							          </div>

							          <div class = "onceItemCalc up">
							            <div class = "hiddenTextCalc">
							              <h5>FInalize</h5><p>The last hit of Flurry will cause the enemy to stagger.</p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/44.png" alt = "" class = "roundImgCalc">
							          </div>

							        </div>
							        <div class = "rowCalc">

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5></h5>
							              <p></p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "" alt = "" class = "haveNoSkillCalc">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5></h5>
							              <p></p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/01.png" alt = "" class = "haveNoSkillCalc">
							          </div>

							          <div class = "onceItemCalc up">
							            <div class = "hiddenTextCalc">
							              <h5>Bloody End</h5><p>Finish deals 150% of the Rapier's bleed damage instead of only 110%.</p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "images/rapire/blood/52.png" alt = "" class = "bigRoundCalc">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5></h5>
							              <p></p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "" alt = "" class = "haveNoSkillCalc">
							          </div>

							          <div class = "onceItemCalc">
							            <div class = "hiddenTextCalc">
							              <h5></h5>
							              <p></p>
							            </div>
							            <div class = "clickCalc"></div>
							            <img src = "" alt = "" class = "haveNoSkillCalc">
							          </div>

							        </div>

							      </section>
								    <!----Конец блока----->







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
