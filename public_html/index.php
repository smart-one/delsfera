<? 	require_once "init.php";
	$page = is_file($_SERVER['DOCUMENT_ROOT']."/content/pages/".$_GET["page"].".php") ? $_GET["page"] : "_index";
	$pageSource = "/content/pages/".$page.".php";
	
	$titlePostFix = '. Юридическая фирма «Деловая Сфера» Санкт-Петербург.';
	$titleDefault = "Готовые фирмы ООО в СПб. Продажа готовых фирм.Санкт-Петербург."; 
	$desc = 'Юридические услуги в Петербурге: Ликвидация фирмы ООО в СПб.  У нас Вы можете купить готовые фирмы ООО  с историей и расчетным счетом,  строительные и с лицензией. Юридическая фирма «Деловая сфера».';
	$keywords = 'купить готовые фирмы ООО в Петербурге с историей, расчетным счетом,  оборотами ликвидация фирм ООО в СПб с долгами';
	switch($page){
		case 'service/01':
			$title = 'Готовые фирмы без расчетного счета'.$titlePostFix;
			break;
		case 'service/02':
			$title = 'Готовые фирмы с расчетным счетом'.$titlePostFix;
			break;
		case 'service/03':
			$title = 'Готовые фирмы «на заказ»'.$titlePostFix;
			break;
  /* 		case 'service/04':
			$title = 'Ликвидация фирмы ООО. Юридическая фирма "Деловая сфера" в Петербурге.';
			$desc = 'В процессе деятельности по различным причинам фирма может столкнуться с необходимостью ликвидации своей деятельности - мы помогаем осуществить этот процесс быстро и надежно.';
			$keywords = 'Ликвидация ООО в Санкт-Петербурге';
			break;
 */		case 'service/05':
			$title = 'Ликвидация предприятия процедурой реорганизации.Юридическая фирма "Деловая Сфера". Санкт-Петербург';
			$desc = 'Обратившись к нам, Вы сможете законно, в сжатые сроки ликвидировать свое предприятие, проведя процедуру реорганизации.';
			$keywords = 'ликвидация предприятия путем реорганизации';
			break;
		case 'service/06':
			$title = 'Ликвидация предприятия исключением из госреестра.Юридическая фирма "Деловая Сфера". Санкт-Петербург';
			$desc = 'Процедура ликвидации состоит в исключении организации из госреестра юридических лиц.';
			$keywords = 'Ликвидация путем изключения из госреестра';
			break;
		case 'service/07':
			$title = 'Процедура банкротства предприятия. Сопровождение.Юридическая фирма "Деловая Сфера". Санкт-Петербург';
			$desc = 'Профессиональные юристы «Деловой Сферы» окажут содействие в разработке безопасной и законной схемы процедуры банкротства предприятия.';
			$keywords = 'юридическое сопровождение процедуры банкротства';
			break;
		case 'service/08':
			$title = 'Регистрация ООО в Санкт-Петербурге. Юридическая фирма "Деловая Сфера"';
			$desc = 'Мы подготовим документы для регистрации ООО и сами сдадим их в регистрирующие органы Санкт-Петербурга, чтобы полностью избавить Вас от бюрократических процедур и ожидания в очередях.';
			$keywords = 'регистрация ООО в Санкт-Петербурге';			
			break;
		case 'service/09':
			$title = 'Регистрация ОАО, ЗАО в Санкт-Петербурге. Юридическая фирма "Деловая Сфера"';
			$desc = 'Наши специалисты будут рады проконсультировать Вас по всем тонкостям регистрации ОАО и подскажут оптимальные решения.';
			$keywords = 'Регистрация ОАО, ЗАО в Санкт-Петербурге';
			break;
		case 'service/10':
			$title = 'Регистрация индивидуального предпринимателя(ИП)'.$titlePostFix;
			$desc = 'Наши специалисты избавят Вас от головной боли - мы поможем открыть ИП быстро и не дорого.';
			$keywords = 'регистрация индивидуального предпринимателя в Санкт-Петербурге, регистрация ИП';
			break;		
		case 'service/11':
			$title = 'Готовая Фирма с допуском СРО для строителей. Юридическая фирма "Деловая сфера" в Санкт-Петербурге.';
			$desc = 'Мета описание- Альтернативой длительной процедуре регистрации и получения допуска может стать покупка фирмы с допуском СРО строителей';
			$keywords = 'готовая фирма с допуском СРО для строителей';
			break;
		case 'service/12':
			$title = 'Готовая фирма с допуском СРО для проектировщиков. Юридическая фирма "Деловая сфера" в Санкт-Петербурге';
			$desc = 'Без задержек приступить к оказанию услуг заказчикам позволяет покупка фирмы с допуском СРО для проектировщиков.';
			$keywords = 'готовая фирма с допуском СРО для пректировщиков';
			break;
		case 'service/13':
			$title = 'Готовая фирма с допуском СРО для изыскателей. Юридическая фирма "Деловая сфера" в Санкт-Петербурге';
			$desc = 'Покупка готовой фирмы с допуском СРО для изыскателей позволяет не тратить время на оформление фирмы и получение допуска, а сразу сосредоточится на ведении бизнеса.';
			$keywords = 'готовая фирма с допуском СРО для изыскателей.';
			break;
		case 'service/14':
			$title = 'Юридический адрес с почтовым и секретарским обслуживанием в Санкт-Петербурге';
			$meta = 'Мы можем предложить Вам любой район города и выбрать как простой юридический адрес, так и находящейся в престижных местах Санкт-Петербурга.';
			$keywords = 'Юридический адрес с почтовым и секретарским обслуживанием';
			break;

		case 'service/20':
			$title = 'Готовые фирмы ООО с лицензией, историей и оборотами в Петербурге. Юридическая фирма "Деловая сфера" в СПб.';
			$desc = 'Приобретение готовой фирмы с историей, лицензией и оборотами дает реальную возможность начать зарабатывать уже на следующий день после покупки.';
			$keywords = 'Готовые фирмы ООО с лицензией, историей и оборотами в Петербурге';
			break;
		case 'service/21':
			$title = 'Внесение изменений в Устав ООО. Юридическая фирма "Деловая Сфера" в Санкт-Петербурге.';
			$desc = 'если Вам необходимо Внесение изменений в Устав ООО- обращайтесь к нам. Мы поможем зарегистрировать все изменения. ';
			break;
		case 'service/22':
			$title = 'Готовые фирмы с допуском СРО. Юридическая фирма "Деловая сфера" в Санкт-Петербурге';
			$desc = 'Готовые фирмы с допуском СРО» Это юридические лица, включенные в установленном порядке в реестр юридических лиц, которые вступили в одну, либо несколько саморегулируемых организаций в отрасли.';
			$keywords = 'готовые фирмы с допуском сро в санкт-петербурге';
			break;
		case 'service/23':
			$title = 'Регистрация фирм и предпринимателей. Юридическая фирма Деловая сфера.';
			$desc = 'Для того чтобы начать развивать свой бизнес и получать прибыль от этого Вам, в первую очередь, необходимо пройти процедуру регистрации в качестве предпринимателя, либо зарегистрировать фирму';
			$keywords = 'регистрация фирм и предпринимателей';
			break;
		case 'service/24':
			$title = 'Ликвидация фирмы ООО. Юридическая фирма "Деловая сфера" в Петербурге.';
			$desc = 'В процессе деятельности по различным причинам фирма может столкнуться с необходимостью ликвидации своей деятельности - мы помогаем осуществить этот процесс быстро и надежно.';
			$keywords = 'Ликвидация ООО в Санкт-Петербурге';
			break;
		case 'service/25':
			$title = 'Юридические адреса для бизнеса в Санкт-Петербурге';
			$desc = 'Готовые юридические адреса для бизнеса в Петербурге представляются с необходимым пакетом документов';
			$keywords = 'Юридические адреса для бизнеса';
			break;
		case 'contacts':
			$title = 'Контакты'.$titlePostFix;
			break;
		case 'price':
			$title = 'Цены'.$titlePostFix;
			break;
		case 'service':
			$title = 'Юридические услуги для организаций. Обслуживание юридических лиц. "Деловая Сфера". Санкт-Петербург.';
			$desc = 'мы предлагаем юридические услуги для организаций любых форм собственности.';
			$keywords = 'юридические услуги, обслуживание юридических лиц санкт-петербург';
			break;
		case 'about':
			$title = 'о Компании "Деловая Сфера"';
			$desc = 'Деловая Сфера зарекомендовала себя на рынке юридических услуг надежным партнером с солидным опытом в решении сложных вопросов.';
			$keywords = 'о компании Деловая Сфера Санкт-Петербург';
			break;
		case 'sitemap':
			$title = 'Карта сайта'.$titlePostFix;
			break;
		default :
			$title = $titleDefault;
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="/css/index.css">
  <link rel="stylesheet" type="text/css" href="/css/content.css">
  <link rel="icon" type="ico" href="/favicon.ico">
  <link rel="SHORTCUT ICON" href="/favicon.ico">
  <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="/css/index-IE.css">
  <![endif]-->
  <title><?= $title ?></title>
  <meta http-equiv="description" name="description" content="<?= $desc ?>">
  <meta name="keywords" http-equiv="keywords" content="<?= $keywords; ?>">
	<script type="text/javascript" src="/Scripts/jquery.js"></script>
  <script type="text/javascript" src="/Scripts/init.js"></script>
</head>

<body>
  <center>
    <table class="bodyBlock_01">
      <tr>
        <td>
          <div class="bodyBlock_02">	        
            <div class="phone-box">
              <div class="header-phone"><span class="small">тел.:</span><?= CONTACT_PHONE ?></div>
              <div class="blink_text-box">ДОСТАВКА ДОКУМЕНТОВ БЕСПЛАТНО!</div>
            </div>
    			</div>
    
          <div class="navigationBlockContainer">
            <? if(strstr($_SERVER['REQUEST_URI'],"/service")) { ?>
              <img src="/content/images/service_bg.jpg" usemap="#navigationBlock" class="navigationBlock" vspace="0">
            <? } elseif(strstr($_SERVER['REQUEST_URI'],"/contacts")) { ?>
              <img src="/content/images/contact_bg.jpg" usemap="#navigationBlock" class="navigationBlock" vspace="0">
            <? } elseif(strstr($_SERVER['REQUEST_URI'],"/price")) { ?>
              <img src="/content/images/price_bg.jpg" usemap="#navigationBlock" class="navigationBlock" vspace="0">
            <? } else { ?>
              <img src="/content/images/index_bg.jpg" usemap="#navigationBlock" class="navigationBlock" vspace="0">
            <? } ?>
          </div>
    
          <div class="contentBlock_01">
            <div class="contentBlock_02">
              <? require $_SERVER['DOCUMENT_ROOT'].$pageSource; ?>
              <br>
              <br>
              <span id="ssilki"><a href="/likvidacia.php">Ликвидация ООО</a> | <a href="/gotoviyfirms.php">Купить готовую фирму</a> | <a href="/sitemap" title="Карта сайта">Карта сайта</a> | <a href="/about" title="О компании">О компании</a></span>
            </div>
    
            <map name="navigationBlock">
              <area shape="poly" coords="234,11,330,33,320,56,224,36" href="/">
              <area shape="poly" coords="380,45,466,65,457,91,373,71" href="/service">
              <area shape="poly" coords="520,73,594,97,590,122,511,101" href="/price">
              <area shape="poly" coords="648,107,749,130,745,152,638,126" href="/contacts">
            </map>
          </div>
        </td>
      </tr>	
    
      <tr>
        <td>
          <br>
          <br>

          <!--LiveInternet counter-->
          <script type="text/javascript"><!--
            document.write("<a href='http://www.liveinternet.ru/click' "+
            
            "target=_blank><img src='//counter.yadro.ru/hit?t26.11;r"+
            
            escape(document.referrer)+((typeof(screen)=="undefined")?"":
            
            ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
            
            screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
            
            ";"+Math.random()+
            
            "' alt='' title='LiveInternet: показано число посетителей за"+
            
            " сегодня' "+
            
            "border='0' width='88' height='15'><\/a>")
          //--></script><!--/LiveInternet-->
          <br>
          <br>
        </td>
      </tr>
    </table>  
  </center>
    
  <!-- Yandex.Metrika counter --><script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script><script type="text/javascript">try { var yaCounter15461140 = new Ya.Metrika({id:15461140, enableAll: true, webvisor:true});} catch(e) { }</script><noscript><div><img src="//mc.yandex.ru/watch/15461140" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
    
  <!-- begin of Top100 code -->
  <script id="top100Counter" type="text/javascript" src="http://counter.rambler.ru/top100.jcn?2915922"></script>
  <noscript>
    <a href="http://top100.rambler.ru/navi/2915922/">
    <img src="http://counter.rambler.ru/top100.cnt?2915922" alt="Rambler's Top100" border="0" />
    </a>
  </noscript>
  <!-- end of Top100 code -->
</body>

</html>

