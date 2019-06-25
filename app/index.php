<?
$arrDat = array("404-page"=>"404-page.php","503-page"=>"503-page.php","about"=>"about.php","blog-post"=>"blog-post.php","buttons"=>"buttons.php","careers"=>"careers.php","child-psychotherapy"=>"child-psychotherapy.php","classic-blog"=>"classic-blog.php","cobbles-portfolio"=>"cobbles-portfolio.php","coming-soon"=>"coming-soon.php","contacts"=>"contacts.php","forms"=>"forms.php","grid-blog"=>"grid-blog.php","grid-portfolio"=>"grid-portfolio.php","grid-without-padding-portfolio"=>"grid-without-padding-portfolio.php","grid"=>"grid.php","index"=>"index.php","login-register"=>"login-register.php","masonry-blog"=>"masonry-blog.php","masonry-portfolio"=>"masonry-portfolio.php","modern-blog"=>"modern-blog.php","online-counselling"=>"online-counselling.php","privacy-policy"=>"privacy-policy.php","progress-bars"=>"progress-bars.php","psychodynamic-therapy"=>"psychodynamic-therapy.php","psychotherapist"=>"psychotherapist.php","schema-therapy"=>"schema-therapy.php","search-results"=>"search-results.php","services"=>"services.php","sitemap"=>"sitemap.php","tables"=>"tables.php","tabs-and-accordions"=>"tabs-and-accordions.php","team-member-profile"=>"team-member-profile.php","team"=>"team.php","telephone-counselling"=>"telephone-counselling.php","terms-of-use"=>"terms-of-use.php","testimonials"=>"testimonials.php","typography"=>"typography.php","under-construction"=>"under-construction.php");

$doArr = array(
	"about"=>"about.php", //static
	"blog"=>"blog.php", 
	"contacts"=>"contacts.php", //static
	"404"=>"404.php", //static
	"sitemap"=>"sitemap.php", 
	"service"=>"service.php",
	"psychiatrist"=>"1.php",
	"psychologist"=>"2.php",
	"psychoterapist"=>"3.php",
	"narcologist"=>"4.php",
	"sexologist"=>"5.php",
);

$img = "";
$section = '';
$h1under = 'Будь красива уже сейчас';
$bg = ""; //style="bcg url"
include_once("inc/content.php");	//подключение файла с данными меню
if(count($_POST) > 0)
{/*
	if(!isset($_POST['phone']) || $_POST['phone'] == "")
	{
		echo 1; //нет телефона
	}
	else
	{
		$name = $service = "Не указано";
		$phone = $_POST['phone'];
		if(isset($_POST['name']) && $_POST['name']){$name = $_POST['name'];}
		if(isset($_POST['service']) && $_POST['service']){$service = $_POST['service'];}

		define("TO","blot-03@mail.ru, pamplemoussebeautystudio@gmail.com");
		$adds  = 'MIME-Version: 1.0' . "\r\n";
		$adds .= 'Content-type: text/html; charset=utf8' . "\r\n";
		$adds .= 'From: Pamplemousse <info@pamplemoussebeauty.ru>' . "\r\n";
		$message = "<strong>Имя</strong>: " . $name . "<br />";	
		$message .= "<strong>Телефон</strong>: " . $phone . "<br />";
		$message .= "<strong>Услуга</strong>: " . $service . "<br />";
		$message .= "<strong>Источник</strong>: " . $_POST['link'] . "<br />";
		$mailpost = mail(TO, "Заявка на Pamplemousse", $message, $adds);
		if($mailpost)
		{
			echo 0; //заявка отправлена
		}
		else
		{
			echo 2; //произошла ошибка при отправке
		}
	}
	
	exit();
	*/
}
function categories($arr, $val = '0', $col, $pcsInRow = '3'){//ЕСЛИ ТЫ УКАЗЫВАЕШЬ ЗНАЧЕНИЕ ПО УМОЛЧАНИЮ, ТО ИМЕЕТ СМЫСЛ ПОСТАВИТЬ В КОНЦЕ. ПОТОМУ ЧТО ЕСЛИ ТЫ УКАЗЫВАЕШЬ ПЕРВЫЙ И ТРЕТИЙ ЭЛЕМЕНТЫ ТО ВТОРОЙ УКАЗАТЬ ОБЯЗАН. 
	$class = 'category';
	$price = '';
	$time = '';
	$elem = 0;
	$cat = $eCat = '<div class="row">';
	if($val == '') { //ЭТО ЗАЧЕМ? ТЫ ЭТО УЖЕ УКАЗАЛ В ФУНКЦИИ
		$val = '0';
	}
	foreach($arr as $key => $value){
		if ($value['parent'] == $val){
			if ($value['prtm'] != ''){
				$prtm = explode('-',$value['prtm']);
				//if ($prtm[0]!='') {//проверка на пустату потенциально отсутствующего элемента непродуктивна
				if(isset($prtm[0])){ 
					$price = '<div class="price">' . $prtm[0] . ' руб.</div>';
				}
				/*else{//это зачем? [0] вроде и так будет)
					$price = "<div class=\"price\">".$value['prtm']." руб</div>";
				}*/
				
				//if ($prtm[1]!=''){//тоже самое
				if (isset($prtm[1])){
					$time = '<div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>' . $prtm[1] . ' мин.</div>';
				}
				else{
					$time = '';
				}
				$class = "product";	
			}

			$elem++;

			$cat .= '<div class="' . $col . '"><a href="' . values($arr, $key) . '"><div class="' . $class . '"><img src="/conts/image/' . $key . '.png" alt="" />' . $price . '<div class="h3">' . $value['name'] . '</div><div class="txt">' . $value['description'] . '</div>' . $time . '</div></a></div>' . $rowE;
			$price = '';
			if ($elem==$pcsInRow){
				$cat .= '</div><div class="row">';
				$elem = 0;
			}
		}
	}
	if($cat != $eCat)
	{
		$cat .= "</div>";
		return $cat;
	}
	else
	{
		return false;
	}
	
}

function redir301($str){

	header("HTTP/1.1 301 Moved Permanently");
	header("Location: " . $str);
}


function page404(){

	header("HTTP/1.0 404 Not Found");
	return array("Страница не найдена", "Страница не существует", "Страница не существует", "Код ошибки: 404", '<a href="/">Главная</a> &raquo; Страница не найдена');
}
function newURL($data, $key){

	if(isset($data[$key])){
	
		//$url = $data[$key]["parent"] . "/" . $key;
		$url = 	newURL($data, $data[$key]["parent"]) . "/" . $key;
	}
	return $url;
}



function values($arr,$val){
	if ($arr[$val]) {
		
		$latval = '/' . $val;

		if ($arr[$val]['parent']!='0') {

			$latval = values($arr,$arr[$val]['parent']). $latval;

		}
		
		return $latval;
	}

}

function tree($arr, $par = '0', $fl = 0){

	foreach ($arr as $key => $value) {

		if ($value['parent']==$par){

			if ($fl == 0){		//для админки, вывод дерева родителей с радио выбороом
				$tree.= '<li><input type="radio" name="cat" value="'.$key.'">'.$value['name'];
			}

			elseif ($fl == 1){		//для админки, вывод дерева с возможностью удаления страницы
				$tree.= "<li><a href=\"/edit/?e=".$key."\" title=\"".$value['h1']."\">".$value['name']."</a> [<a href=\"/edit/?e=".$key."&del\" title=\"".$value['h1']." - удалить\">X</a>]</li>"; 
			}

			elseif ($fl == 2){		//для бокового меню с дополнительным родителем

				$tree .= "<li><a href=\"".values($arr, $key)."\" title=\"".$value['title']."\">".$value['name']."</a></li>";
			}
			
		
			$tree.= tree($arr,$key,$fl);	//проверка, есть ли в массиве со следующим ключем, его потомки. Если таковые есть, то функция их склеивает вместе с тегом ли и возвращает вверх с обрамлением в тегах ул. Тем самым получается у первого значения с параметром перент 0, есть несколько потомков с пармаетром перент 1. Функция сама себя перебирает до последнего элемента.

			$tree.='</li>';		//если в тег ли закрывать до функции, то наследники ей не принадлежат. Но меню всё равно выстраевается.
		}
	}

	return '<ul>'.$tree.'</ul>';
}

function breadcrumbs($arr,$do ,$val){

	if ($arr[$val]){

		if (end($do) == $val){
			$latval = $arr[$val]['name'];
		}

		else{

			$latval = '<a href="'.values($arr, $val).'">'. $arr[$val]['name'].'</a>';
		}

		if ($arr[$val]['parent']!='0'){

			$latval = breadcrumbs($arr,$do,$arr[$val]['parent']) . $latval;

		}
		
		return $latval;
	}
}

function saidMenu($arr, $arr2, $par, $start, $end){
	foreach ($arr as $key => $value)
	{
		if($value['prtm'] == '')
		{
			if($value['parent'] == $par)
			{
					$dop = $act = "";
					if($key == $arr2[$start])
					{
						$dop = saidMenu($arr, $arr2, $key, $start + 1, $end);
					}
					if($key == $end)
					{
						$act = ' class="active"';
					}

					$tree .= '<li><a href="' . values($arr, $key) . '" title="' . $value['title'] . '"' . $act. '>' . $value['name'] . '</a>' . $dop . '</li>';	
			}
		}
	}
	if($tree != "" && $tree != "<ul></ul>")
	{
		return '<ul>'.$tree.'</ul>';
	}
}	


//////////////////////////////////////////////////////////////////////

if(isset($_GET['do']) AND $_GET['do'] != ""){	//есть что-то в ссылке
	$do = explode('/', $_GET['do']);	//резбивает строку по / значение в do
	$breadcrumbs = "<a href=\"/\">Главная</a>".breadcrumbs($things,$do,end($do)) ;	//хлебные крошки
	if($do[0] == "studios")	{
		//include_once("inc/studios.php");
	}
	elseif($do[0] == "education"){
		//include_once("inc/education.php");
	}
	elseif($do[0] == 'career')	{
		//include_once("inc/career.php");
	}
	else{
		if($do[0] == "depilationcourse"){redir301("/education/depilationcourse");}
		if($do[0] == "nailcourses"){redir301("/education/nailcourses");}
		include_once("inc/service.php");
	}
}
else{include_once("inc/main.php");}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Home</title>
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<!-- Stylesheets-->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,900">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<!--[if lt IE 10]>
	<div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->
</head>
	<div class="text-left page">
			<!-- Page preloader-->
			<div class="page-loader">
				<div>
					<div class="page-loader-body">
						<div class="loader"><span class="block-1"></span><span class="block-2"></span><span class="block-3"></span><span class="block-4"></span><span class="block-5"></span><span class="block-6"></span><span class="block-7"></span><span class="block-8"></span><span class="block-9"></span><span class="block-10"></span><span class="block-11"></span><span class="block-12"></span><span class="block-13"></span><span class="block-14"></span><span class="block-15"></span><span class="block-16"></span></div>
					</div>
				</div>
			</div>
			<!-- Page Header-->
			<header class="page-header page-header-modern">
				<!-- RD Navbar-->
				<div class="rd-navbar-wrap">
					<nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="80px" data-lg-stick-up-offset="70px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
						<div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
						<div class="rd-navbar-top-panel rd-navbar-collapse">
							<div class="rd-navbar-top-panel-inner">
								<div class="contact-list">
									<ul class="group-lg">
										<li>
											<div class="unit unit-spacing-xxs unit-xxs-horizontal unit-xxs-middle">
												<div class="unit-left"><span class="icon icon-md icon-secondary mdi mdi-phone"></span></div>
												<div class="unit-body"><a href="callto:#">8-800-1234-567</a><span>,</span> <a href="callto:#">1-800-8655-098</a>
												</div>
											</div>
										</li>
										<li>
											<div class="unit unit-spacing-xxs unit-xxs-horizontal unit-xxs-middle">
												<div class="unit-left"><span class="icon icon-md icon-secondary mdi mdi-map-marker"></span></div>
												<div class="unit-body"><a href="index#">2130 Fulton Street San Diego, CA 94117-1080 USA</a></div>
											</div>
										</li>
										<li>
											<div class="unit unit-spacing-xxs unit-xxs-horizontal unit-xxs-middle">
												<div class="unit-left"><span class="icon icon-md icon-secondary mdi mdi-email-outline"></span></div>
												<div class="unit-body"><a href="mailto:#">info@psy03.ru</a></div>
											</div>
										</li>
									</ul>
								</div>
								<!-- Social List-->
								<ul class="inline-list-md">
									<li><a class="icon icon-sm icon-default fa-facebook" href="index#"></a></li>
									<li><a class="icon icon-sm icon-default fa-twitter" href="index#"></a></li>
									<li><a class="icon icon-sm icon-default fa-instagram" href="index#"></a></li>
									<li><a class="icon icon-sm icon-default fa-google" href="index#"></a></li>
									<li><a class="icon icon-sm icon-default fa-pinterest-p" href="index#"></a></li>
									<li><a class="icon icon-sm icon-default fa-linkedin" href="index#"></a></li>
								</ul>
							</div>
						</div>
						<div class="rd-navbar-inner">
							<!-- RD Navbar Panel-->
							<div class="rd-navbar-panel">
								<!-- RD Navbar Toggle-->
								<button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
								<!-- RD Navbar Brand-->
								<div class="rd-navbar-brand"><a class="brand-name" href="index"><img class="hidden reveal-lg-inline-block" src="images/brand-default-357x52.png" alt="" width="357" height="52"/><img class="logo-tablet" src="images/brand-default-289x52.png" alt="" width="289" height="52"/><img class="logo-mobile" src="images/brand-default-225x64.png" alt="" width="225" height="64"/></a></div>
							</div>
							<div class="rd-navbar-aside-right">
								<div class="rd-navbar-nav-wrap">
									<!-- RD Navbar Nav-->
									<ul class="rd-navbar-nav">
										<li class="active"><a href="/">Главная</a></li>
										<li><a href="/?link=about">О клинике</a>
											<!-- RD Navbar Dropdown-->
											<ul class="rd-navbar-dropdown">
												<li><a href="/?link=testimonials">Testimonials</a></li>
												<li><a href="/?link=team">Наша команда</a></li>
												<li><a href="/?link=team-member-profile">Страница врача</a></li>
											</ul>
										</li>
										<li><a href="services">Услуги</a>
											<!-- RD Navbar Dropdown-->
											<ul class="rd-navbar-dropdown">
												<li><a href="/?link=psychotherapist">Психотерапия</a></li>
												<li><a href="/?link=psychodynamic-therapy">Психодинамическая терапия</a></li>
												<li><a href="/?link=child-psychotherapy">Помощь детям</a></li>
												<li><a href="/?link=telephone-counselling">Консультация по телефону</a></li>
												<li><a href="/?link=schema-therapy">Изменение схемы терапии</a></li>
												<li><a href="/?link=online-counselling">Консультация по Скайпу</a></li>
											</ul>
										</li>
										<li><a href="index#">Статьи</a>
											<ul class="rd-navbar-dropdown">
												<li><a href="/?link=blog-post">Пример поста</a></li>
												<li><a href="/?link=classic-blog">Классический вид</a></li>
												<li><a href="/?link=grid-blog">Вид сеткой</a></li>
												<li><a href="/?link=masonry-blog">Masonry сетка</a></li>
												<li><a href="/?link=modern-blog">Modern сетка</a></li>
											</ul>
										</li>
										<li><a href="index#">Страницы</a>
											<!-- RD Navbar Megamenu-->
											<ul class="rd-navbar-megamenu">
												<li>
													<ul>
														<li><a href="/?link=buttons">Кнопки</a></li>
														<li><a href="/?link=forms">Формы</a></li>
														<li><a href="/?link=grid">Сетка</a></li>
														<li><a href="/?link=progress-bars">Полосы загрузки</a></li>
														<li><a href="/?link=tables">Таблицы</a></li>
														<li><a href="/?link=tabs-and-accordions">Табы и аккордионы</a></li>
														<li><a href="/?link=typography">Типографика</a></li>
													</ul>
												</li>
												<li>
													<ul>
														<li><a href="/?link=grid-portfolio">Grid Portfolio</a></li>
														<li><a href="/?link=masonry-portfolio">Masonry Portfolio</a></li>
														<li><a href="/?link=cobbles-portfolio">Cobbles Portfolio</a></li>
														<li><a href="/?link=grid-without-padding-portfolio">Grid without Padding Portfolio</a></li>
														<li><a href="/?link=404-page">404 страница</a></li>
														<li><a href="/?link=503-page">503 страница</a></li>
														<li><a href="/?link=under-construction">Under Construction</a></li>
													</ul>
												</li>
												<li>
													<ul>
														<li><a href="/?link=coming-soon">Coming Soon</a></li>
														<li><a href="/?link=search-results">Search Results</a></li>
														<li><a href="/?link=terms-of-use">Terms of Use</a></li>
														<li><a href="/?link=login-register">Login/Register</a></li>
														<li><a href="/?link=careers">Careers</a></li>
														<li><a href="/?link=sitemap">Sitemap</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="/?link=contacts">Contacts</a></li>
									</ul>
								</div>
								<!--RD Navbar Search-->
								<div class="rd-navbar-search"><a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="index#"><span></span></a>
									<form class="rd-search" action="search-results" data-search-live="rd-search-results-live" method="GET">
										<div class="form-wrap">
											<label class="form-label form-label" for="rd-navbar-search-form-input">Search...</label>
											<input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
											<div class="rd-search-results-live" id="rd-search-results-live"></div>
										</div>
										<button class="rd-search-form-submit fa-search"></button>
									</form>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</header>
			
			<? 
			//include_once("tpl/" . $tpl) 
			
			if(isset($_GET['link']))
			{
				include_once("tpl/" . $_GET['link'] . '.php');
			}
			else
			{
				include_once("tpl/main.php");
			}
			?>
			
			
			<!-- Page Footer-->
			<footer class="section page-footer section-md bg-gray-darker">
				<div class="shell shell-wide">
					<!-- RD Google Map-->
					<div class="rd-google-map-wrap">
						<div class="rd-google-map rd-google-map__model" data-zoom="15" data-y="40.643180" data-x="-73.9874068" data-styles="[{&quot;featureType&quot;:&quot;all&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;all&quot;,&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;all&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:17}]}]">
							<ul class="map_locations">
								<li data-y="40.643180" data-x="-73.9874068">
									<p>
										2130 Fulton Street San Diego,
										CA 94117-1080 USA
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="range range-lg range-xs-center range-xl-right range-40 range-lg-60 range-xl-80">
						<!-- Contact Information-->
						<div class="cell-sm-5 cell-md-4 cell-lg-4 cell-xl-3">
							<h5>Contact Information</h5>
							<div class="heading-divider"></div>
							<ul class="list contact-list">
								<li>
									<div class="unit unit-spacing-xs unit-xxs-horizontal">
										<div class="unit-left"><span class="icon icon-md icon-secondary mdi mdi-map-marker"></span></div>
										<div class="unit-body"><a href="index#">2130 Fulton Street San Diego,<br>CA 94117-1080 USA</a></div>
									</div>
								</li>
								<li>
									<div class="unit unit-spacing-xs unit-xxs-horizontal">
										<div class="unit-left"><span class="icon icon-md icon-secondary mdi mdi-phone"></span></div>
										<div class="unit-body"><a href="callto:#">1-800-1234-567</a></div>
									</div>
								</li>
								<li>
									<div class="unit unit-spacing-xs unit-xxs-horizontal">
										<div class="unit-left"><span class="icon icon-md icon-secondary mdi mdi-email-outline"></span></div>
										<div class="unit-body"><a href="mailto:#">info@demolink.org</a></div>
									</div>
								</li>
							</ul>
							<!-- Inline List-->
							<ul class="inline-list-md">
								<li><a class="icon icon-sm icon-default fa-facebook" href="index#"></a></li>
								<li><a class="icon icon-sm icon-default fa-twitter" href="index#"></a></li>
								<li><a class="icon icon-sm icon-default fa-instagram" href="index#"></a></li>
								<li><a class="icon icon-sm icon-default fa-google" href="index#"></a></li>
								<li><a class="icon icon-sm icon-default fa-pinterest-p" href="index#"></a></li>
								<li><a class="icon icon-sm icon-default fa-linkedin" href="index#"></a></li>
							</ul>
						</div>
						<!-- Quick Links-->
						<div class="cell-sm-5 cell-md-3 cell-lg-4 cell-xl-2">
							<h5>Quick Links</h5>
							<div class="heading-divider"></div>
							<ul class="list list-marked">
								<li><a href="about">About</a></li>
								<li><a href="services">Services</a></li>
								<li><a href="team">Our Team</a></li>
								<li><a href="classic-blog">Blog</a></li>
								<li><a href="contacts">Contacts</a></li>
							</ul>
						</div>
						<!-- Newsletter-->
						<div class="cell-sm-10 cell-md-5 cell-lg-4 cell-xl-3">
							<h5>Newsletter</h5>
							<div class="heading-divider"></div>
							<p>Keep up with our latest news, updates, special offers, and discounts. Enter your e-mail and subscribe to our newsletter in a couple of clicks.</p>
							<!-- Mailchimp-->
							<form class="rd-mailform rd-mailform-inline text-left" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="https://livedemo00.template-help.com/wt_62461/bat/rd-mailform.php">
								<div class="form-wrap form-wrap-validation">
									<label class="form-label form-label-sm" for="forms-newsletter-email">Enter your e-mail</label>
									<input class="form-input form-input-sm" id="forms-newsletter-email" type="email" name="email" data-constraints="@Email @Required">
								</div>
								<button class="button button-xs button-primary-accent" type="submit">Subscribe</button>
							</form>
						</div>
						<div class="cell-xs-12 cell-sm-10 cell-md-12 cell-xl-8">
							<p class="copyright">&#169; <span id="copyright-year"></span> All Rights Reserved <a href="terms-of-use">Terms of Use</a> and <a href="privacy-policy">Privacy Policy</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<div class="snackbars" id="form-output-global"></div>
		<script src="/js/core.min.js"></script>
		<script src="/js/script.js"></script>
		<? 
		foreach ($arrDat as $key => $value) {
			echo '<a href="?link=' . $key . '">' . $value . '</a><br>';
		}
		?>
</html>
