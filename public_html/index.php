<? 	require_once "init.php";
	$page = is_file($_SERVER['DOCUMENT_ROOT']."/content/pages/".$_GET["page"].".php") ? $_GET["page"] : "_index";
	$pageSource = "/content/pages/".$page.".php";
	
	$titlePostFix = '. ����������� ����� �������� ����� �����-���������.';
	$titleDefault = "������� ����� ��� � ���. ������� ������� ����.�����-���������."; 
	$desc = '����������� ������ � ����������: ���������� ����� ��� � ���.  � ��� �� ������ ������ ������� ����� ���  � �������� � ��������� ������,  ������������ � � ���������. ����������� ����� �������� �����.';
	$keywords = '������ ������� ����� ��� � ���������� � ��������, ��������� ������,  ��������� ���������� ���� ��� � ��� � �������';
	switch($page){
		case 'service/01':
			$title = '������� ����� ��� ���������� �����'.$titlePostFix;
			break;
		case 'service/02':
			$title = '������� ����� � ��������� ������'.$titlePostFix;
			break;
		case 'service/03':
			$title = '������� ����� ��� �����'.$titlePostFix;
			break;
/* 		case 'service/04':
			$title = '���������� ����� ���. ����������� ����� "������� �����" � ����������.';
			$desc = '� �������� ������������ �� ��������� �������� ����� ����� ����������� � �������������� ���������� ����� ������������ - �� �������� ����������� ���� ������� ������ � �������.';
			$keywords = '���������� ��� � �����-����������';
			break;
 */		case 'service/05':
			$title = '���������� ����������� ���������� �������������.����������� ����� "������� �����". �����-���������';
			$desc = '����������� � ���, �� ������� �������, � ������ ����� ������������� ���� �����������, ������� ��������� �������������.';
			$keywords = '���������� ����������� ����� �������������';
			break;
		case 'service/06':
			$title = '���������� ����������� ����������� �� ����������.����������� ����� "������� �����". �����-���������';
			$desc = '��������� ���������� ������� � ���������� ����������� �� ���������� ����������� ���.';
			$keywords = '���������� ����� ���������� �� ����������';
			break;
		case 'service/07':
			$title = '��������� ����������� �����������. �������������.����������� ����� "������� �����". �����-���������';
			$desc = '���������������� ������ �������� ������ ������ ���������� � ���������� ���������� � �������� ����� ��������� ����������� �����������.';
			$keywords = '����������� ������������� ��������� �����������';
			break;
		case 'service/08':
			$title = '����������� ��� � �����-����������. ����������� ����� "������� �����"';
			$desc = '�� ���������� ��������� ��� ����������� ��� � ���� ������ �� � �������������� ������ �����-����������, ����� ��������� �������� ��� �� ��������������� �������� � �������� � ��������.';
			$keywords = '����������� ��� � �����-����������';			
			break;
		case 'service/09':
			$title = '����������� ���, ��� � �����-����������. ����������� ����� "������� �����"';
			$desc = '���� ����������� ����� ���� ������������������ ��� �� ���� ��������� ����������� ��� � ��������� ����������� �������.';
			$keywords = '����������� ���, ��� � �����-����������';
			break;
		case 'service/10':
			$title = '����������� ��������������� ���������������(��)'.$titlePostFix;
			$desc = '���� ����������� ������� ��� �� �������� ���� - �� ������� ������� �� ������ � �� ������.';
			$keywords = '����������� ��������������� ��������������� � �����-����������, ����������� ��';
			break;		
		case 'service/11':
			$title = '������� ����� � �������� ��� ��� ����������. ����������� ����� "������� �����" � �����-����������.';
			$desc = '���� ��������- ������������� ���������� ��������� ����������� � ��������� ������� ����� ����� ������� ����� � �������� ��� ����������';
			$keywords = '������� ����� � �������� ��� ��� ����������';
			break;
		case 'service/12':
			$title = '������� ����� � �������� ��� ��� ���������������. ����������� ����� "������� �����" � �����-����������';
			$desc = '��� �������� ���������� � �������� ����� ���������� ��������� ������� ����� � �������� ��� ��� ���������������.';
			$keywords = '������� ����� � �������� ��� ��� ��������������';
			break;
		case 'service/13':
			$title = '������� ����� � �������� ��� ��� �����������. ����������� ����� "������� �����" � �����-����������';
			$desc = '������� ������� ����� � �������� ��� ��� ����������� ��������� �� ������� ����� �� ���������� ����� � ��������� �������, � ����� �������������� �� ������� �������.';
			$keywords = '������� ����� � �������� ��� ��� �����������.';
			break;
		case 'service/14':
			$title = '����������� ����� � �������� � ������������ ������������� � �����-����������';
			$meta = '�� ����� ���������� ��� ����� ����� ������ � ������� ��� ������� ����������� �����, ��� � ����������� � ���������� ������ �����-����������.';
			$keywords = '����������� ����� � �������� � ������������ �������������';
			break;

		case 'service/20':
			$title = '������� ����� ��� � ���������, �������� � ��������� � ����������. ����������� ����� "������� �����" � ���.';
			$desc = '������������ ������� ����� � ��������, ��������� � ��������� ���� �������� ����������� ������ ������������ ��� �� ��������� ���� ����� �������.';
			$keywords = '������� ����� ��� � ���������, �������� � ��������� � ����������';
			break;
		case 'service/21':
			$title = '�������� ��������� � ����� ���. ����������� ����� "������� �����" � �����-����������.';
			$desc = '���� ��� ���������� �������� ��������� � ����� ���- ����������� � ���. �� ������� ���������������� ��� ���������. ';
			break;
		case 'service/22':
			$title = '������� ����� � �������� ���. ����������� ����� "������� �����" � �����-����������';
			$desc = '������� ����� � �������� ��λ ��� ����������� ����, ���������� � ������������� ������� � ������ ����������� ���, ������� �������� � ����, ���� ��������� ���������������� ����������� � �������.';
			$keywords = '������� ����� � �������� ��� � �����-����������';
			break;
		case 'service/23':
			$title = '����������� ���� � ����������������. ����������� ����� ������� �����.';
			$desc = '��� ���� ����� ������ ��������� ���� ������ � �������� ������� �� ����� ���, � ������ �������, ���������� ������ ��������� ����������� � �������� ���������������, ���� ���������������� �����';
			$keywords = '����������� ���� � ����������������';
			break;
		case 'service/24':
			$title = '���������� ����� ���. ����������� ����� "������� �����" � ����������.';
			$desc = '� �������� ������������ �� ��������� �������� ����� ����� ����������� � �������������� ���������� ����� ������������ - �� �������� ����������� ���� ������� ������ � �������.';
			$keywords = '���������� ��� � �����-����������';
			break;
		case 'service/25':
			$title = '����������� ������ ��� ������� � �����-����������';
			$desc = '������� ����������� ������ ��� ������� � ���������� �������������� � ����������� ������� ����������';
			$keywords = '����������� ������ ��� �������';
			break;
		case 'contacts':
			$title = '��������'.$titlePostFix;
			break;
		case 'price':
			$title = '����'.$titlePostFix;
			break;
		case 'service':
			$title = '����������� ������ ��� �����������. ������������ ����������� ���. "������� �����". �����-���������.';
			$desc = '�� ���������� ����������� ������ ��� ����������� ����� ���� �������������.';
			$keywords = '����������� ������, ������������ ����������� ��� �����-���������';
			break;
		case 'about':
			$title = '� �������� "������� �����"';
			$desc = '������� ����� ��������������� ���� �� ����� ����������� ����� �������� ��������� � �������� ������ � ������� ������� ��������.';
			$keywords = '� �������� ������� ����� �����-���������';
			break;
		case 'sitemap':
			$title = '����� �����'.$titlePostFix;
			break;
		default :
			$title = $titleDefault;
	}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <link rel="stylesheet" type="text/css" href="/css/index.css">
    <link rel="stylesheet" type="text/css" href="/css/content.css">
    <link rel="icon" type="ico" href="/favicon.ico">
    <link rel="SHORTCUT ICON" href="/favicon.ico">
    <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="/css/index-IE.css">
    <![endif]-->
    <title><?php echo $title ?></title>
    <meta http-equiv="description" name="description" content="<?php echo $desc ?>">
    <meta name="keywords" http-equiv="keywords" content="<?php echo $keywords; ?>">

	<script type="text/javascript" src="/Scripts/jquery.js"></script>
    <script type="text/javascript" src="/Scripts/init.js"></script>
</head>
<body>
    <center>
    <table class="bodyBlock_01" >
    
    <tr>
    
        <td>
    
            <div class="bodyBlock_02">	        
    
                <div class="phone-box">
    
                    <div class="blink_text-box">�������� ���������� ���������!</div>
    				
                </div>
    			
                
                
    
            </div>
    
            <div class="navigationBlockContainer">
    
            <? 
    
                if(strstr($_SERVER['REQUEST_URI'],"/service"))
    
                {
    
                    ?>
    
                    <img src="/content/images/service_bg.jpg" usemap="#navigationBlock" class="navigationBlock" vspace="0">
    
                    <?
    
                }
    
                elseif(strstr($_SERVER['REQUEST_URI'],"/contacts"))
    
                {
    
                    ?>
    
                    <img src="/content/images/contact_bg.jpg" usemap="#navigationBlock" class="navigationBlock" vspace="0">
    
                    <?
    
                }
    
                elseif(strstr($_SERVER['REQUEST_URI'],"/price"))
    
                {
    
                    ?>
    
                    <img src="/content/images/price_bg.jpg" usemap="#navigationBlock" class="navigationBlock" vspace="0">
    
                    <?
    
                }
    
                else
    
                {
    
                    ?>
    
                    <img src="/content/images/index_bg.jpg" usemap="#navigationBlock" class="navigationBlock" vspace="0">
    
                    <?
    
                }
    
    
    
            ?>
    
                
    
            
    
            </div>
    
            <div class="contentBlock_01">
    
                <div class="contentBlock_02">
    
                <?	require $_SERVER['DOCUMENT_ROOT'].$pageSource;		?>
    
    <br>
<br>

                <span id="ssilki"><a href="/likvidacia.html">���������� ���</a> | <a href="/gotoviyfirms.html">������ ������� �����</a> | <a href="/sitemap" title="����� �����">����� �����</a> | <a href="/about" title="� ��������">� ��������</a></span>
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

                <!--LiveInternet counter--><script type="text/javascript"><!--
    
    document.write("<a href='http://www.liveinternet.ru/click' "+
    
    "target=_blank><img src='//counter.yadro.ru/hit?t26.11;r"+
    
    escape(document.referrer)+((typeof(screen)=="undefined")?"":
    
    ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
    
    screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
    
    ";"+Math.random()+
    
    "' alt='' title='LiveInternet: �������� ����� ����������� ��"+
    
    " �������' "+
    
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

