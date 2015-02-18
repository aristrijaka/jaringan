<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"> <![endif]-->
<!--[if gt IE 8]> <html class="animations ie gt-ie8 fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"> <![endif]-->
<!--[if !IE]><!--><html class="animations fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"><!-- <![endif]-->
<head>
	<title>FLAT KIT (v1.2.0)</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	
	<!-- Bootstrap -->
	<link href="{base_url}{asset_url}common/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="{base_url}{asset_url}common/bootstrap/css/responsive.css" rel="stylesheet" type="text/css" />
	
	<!-- Glyphicons Font Icons -->
	<link href="{base_url}{asset_url}common/theme/fonts/glyphicons/css/glyphicons.css" rel="stylesheet" />
	
	<link rel="stylesheet" href="{base_url}{asset_url}common/theme/fonts/font-awesome/css/font-awesome.min.css">
	<!--[if IE 7]><link rel="stylesheet" href="{base_url}{asset_url}common/theme/fonts/font-awesome/css/font-awesome-ie7.min.css"><![endif]-->
	
	<!-- Uniform Pretty Checkboxes -->
	<link href="{base_url}{asset_url}common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />
	
	<!-- PrettyPhoto -->
    <link href="{base_url}{asset_url}common/theme/scripts/plugins/gallery/prettyphoto/css/prettyPhoto.css" rel="stylesheet" />
    
    <!-- JQuery -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="{base_url}{asset_url}common/theme/scripts/plugins/system/html5shiv.js"></script>
    <![endif]-->
	
	<!-- Bootstrap Extended -->
	<link href="{base_url}{asset_url}common/bootstrap/extend/jasny-fileupload/css/fileupload.css" rel="stylesheet">
	<link href="{base_url}{asset_url}common/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
	<link href="{base_url}{asset_url}common/bootstrap/extend/bootstrap-select/bootstrap-select.css" rel="stylesheet" />
	<link href="{base_url}{asset_url}common/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" rel="stylesheet" />
	
	<!-- DateTimePicker Plugin -->
	<link href="{base_url}{asset_url}common/theme/scripts/plugins/forms/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet" />
	
	<!-- JQueryUI -->
	<link href="{base_url}{asset_url}common/theme/scripts/plugins/system/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />
	
	<!-- MiniColors ColorPicker Plugin -->
	<link href="{base_url}{asset_url}common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.css" rel="stylesheet" />
	
	<!-- Notyfy Notifications Plugin -->
	<link href="{base_url}{asset_url}common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.css" rel="stylesheet" />
	<link href="{base_url}{asset_url}common/theme/scripts/plugins/notifications/notyfy/themes/default.css" rel="stylesheet" />
	
	<!-- Gritter Notifications Plugin -->
	<link href="{base_url}{asset_url}common/theme/scripts/plugins/notifications/Gritter/css/jquery.gritter.css" rel="stylesheet" />
	
	<!-- Easy-pie Plugin -->
	<link href="{base_url}{asset_url}common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.css" rel="stylesheet" />

	<!-- Google Code Prettify Plugin -->
	<link href="{base_url}{asset_url}common/theme/scripts/plugins/other/google-code-prettify/prettify.css" rel="stylesheet" />
	
	<!-- Select2 Plugin -->
	<link href="{base_url}{asset_url}common/theme/scripts/plugins/forms/select2/select2.css" rel="stylesheet" />

	<!-- Pageguide Guided Tour Plugin -->
	<!--[if gt IE 8]><!--><link media="screen" href="{base_url}{asset_url}common/theme/scripts/plugins/other/pageguide/css/pageguide.css" rel="stylesheet" /><!--<![endif]-->

	<!-- DataTables Plugin -->
	<link href="{base_url}{asset_url}common/theme/scripts/plugins/tables/DataTables/media/css/DT_bootstrap.css" rel="stylesheet" />
	<link href="{base_url}{asset_url}common/theme/scripts/plugins/tables/DataTables/extras/TableTools/media/css/TableTools.css" rel="stylesheet" />
	<link href="{base_url}{asset_url}common/theme/scripts/plugins/tables/DataTables/extras/ColVis/media/css/ColVis.css" rel="stylesheet" />

	<!-- Main Theme Stylesheet :: CSS -->
	<link href="{base_url}{asset_url}common/theme/css/style-default-menus-light.css?1374506516" rel="stylesheet" type="text/css" />
	
	
	<!-- FireBug Lite -->
	<!-- <script src="https://getfirebug.com/firebug-lite-debug.js"></script> -->

	<!-- LESS.js Library -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/system/less.min.js"></script>
	
	<!-- Global -->
	<script>
	//<![CDATA[
	var basePath = '',
		commonPath = '{base_url}{asset_url}common/';

	// colors
	var primaryColor = '#e5412d',
		dangerColor = '#b55151',
		successColor = '#609450',
		warningColor = '#ab7a4b',
		inverseColor = '#45484d';

	var themerPrimaryColor = primaryColor;
	//]]>
	</script>
</head>
<body class="document-body ">
	
		<!-- Main Container Fluid -->
	<div class="container-fluid menu-hidden sidebar-hidden-phone fluid menu-left">
		
				<!-- Sidebar menu & content wrapper -->
		<div id="wrapper">
		
		<!-- Sidebar Menu -->
		{sidebarmenu}
		<!-- // Sidebar Menu END -->
				
		<!-- Content -->
		<div id="content">
		<!-- Top navbar -->
		{topnavbar}
		<!-- Top navbar END -->
				
	<ul class="breadcrumb">
	<li>You are here</li>
	<li><a href="index.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-light&amp;sidebar_type=collapsible" class="glyphicons dashboard"><i></i> FLAT KIT</a></li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Components</li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Tables</li>
</ul>

<h1>Tables</h1>
<h3>DataTable with TableTools</h3>
<div class="innerLR">

	<!-- Widget -->
	<div class="widget widget-heading-simple widget-body-gray">
		<div class="widget-body">
		
			<!-- Table -->
			<table class="dynamicTable tableTools table table-striped table-bordered table-condensed table-white">
			
				<!-- Table heading -->
				<thead>
					<tr>
						<th>Rendering eng.</th>
						<th>Browser</th>
						<th>Platform(s)</th>
						<th>Eng. vers.</th>
						<th>CSS grade</th>
					</tr>
				</thead>
				<!-- // Table heading END -->
				
				<!-- Table body -->
				<tbody>
				
					<!-- Table row -->
					<tr class="gradeX">
						<td>Trident</td>
						<td>Internet Explorer 4.0</td>
						<td>Win 95+</td>
						<td class="center">4</td>
						<td class="center">X</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeC">
						<td>Trident</td>
						<td>Internet Explorer 5.0</td>
						<td>Win 95+</td>
						<td class="center">5</td>
						<td class="center">C</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Trident</td>
						<td>Internet Explorer 5.5</td>
						<td>Win 95+</td>
						<td class="center">5.5</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Trident</td>
						<td>Internet Explorer 6</td>
						<td>Win 98+</td>
						<td class="center">6</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Trident</td>
						<td>Internet Explorer 7</td>
						<td>Win XP SP2+</td>
						<td class="center">7</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Trident</td>
						<td>AOL browser (AOL desktop)</td>
						<td>Win XP</td>
						<td class="center">6</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 1.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 1.5</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 2.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 3.0</td>
						<td>Win 2k+ / OSX.3+</td>
						<td class="center">1.9</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Camino 1.0</td>
						<td>OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Camino 1.5</td>
						<td>OSX.3+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape 7.2</td>
						<td>Win 95+ / Mac OS 8.6-9.2</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape Browser 8</td>
						<td>Win 98SE+</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape Navigator 9</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.1</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.1</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.2</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.2</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.3</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.3</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.4</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.4</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.5</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.5</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.6</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.6</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.7</td>
						<td>Win 98+ / OSX.1+</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.8</td>
						<td>Win 98+ / OSX.1+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Seamonkey 1.1</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Epiphany 2.20</td>
						<td>Gnome</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 1.2</td>
						<td>OSX.3</td>
						<td class="center">125.5</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 1.3</td>
						<td>OSX.3</td>
						<td class="center">312.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 2.0</td>
						<td>OSX.4+</td>
						<td class="center">419.3</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 3.0</td>
						<td>OSX.4+</td>
						<td class="center">522.1</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Webkit</td>
						<td>OmniWeb 5.5</td>
						<td>OSX.4+</td>
						<td class="center">420</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Webkit</td>
						<td>iPod Touch / iPhone</td>
						<td>iPod</td>
						<td class="center">420.1</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Webkit</td>
						<td>S60</td>
						<td>S60</td>
						<td class="center">413</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 7.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 7.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 8.0</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 8.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.0</td>
						<td>Win 95+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.2</td>
						<td>Win 88+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.5</td>
						<td>Win 88+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera for Wii</td>
						<td>Wii</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Nokia N800</td>
						<td>N800</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Nintendo DS browser</td>
						<td>Nintendo DS</td>
						<td class="center">8.5</td>
						<td class="center">C/A<sup>1</sup></td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeC">
						<td>KHTML</td>
						<td>Konqureror 3.1</td>
						<td>KDE 3.1</td>
						<td class="center">3.1</td>
						<td class="center">C</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>KHTML</td>
						<td>Konqureror 3.3</td>
						<td>KDE 3.3</td>
						<td class="center">3.3</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>KHTML</td>
						<td>Konqureror 3.5</td>
						<td>KDE 3.5</td>
						<td class="center">3.5</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeX">
						<td>Tasman</td>
						<td>Internet Explorer 4.5</td>
						<td>Mac OS 8-9</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeC">
						<td>Tasman</td>
						<td>Internet Explorer 5.1</td>
						<td>Mac OS 7.6-9</td>
						<td class="center">1</td>
						<td class="center">C</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeC">
						<td>Tasman</td>
						<td>Internet Explorer 5.2</td>
						<td>Mac OS 8-X</td>
						<td class="center">1</td>
						<td class="center">C</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Misc</td>
						<td>NetFront 3.1</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center">C</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Misc</td>
						<td>NetFront 3.4</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeX">
						<td>Misc</td>
						<td>Dillo 0.8</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeX">
						<td>Misc</td>
						<td>Links</td>
						<td>Text only</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeX">
						<td>Misc</td>
						<td>Lynx</td>
						<td>Text only</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeC">
						<td>Misc</td>
						<td>IE Mobile</td>
						<td>Windows Mobile 6</td>
						<td class="center">-</td>
						<td class="center">C</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeC">
						<td>Misc</td>
						<td>PSP browser</td>
						<td>PSP</td>
						<td class="center">-</td>
						<td class="center">C</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeU">
						<td>Other browsers</td>
						<td>All others</td>
						<td>-</td>
						<td class="center">-</td>
						<td class="center">U</td>
					</tr>
					<!-- // Table row END -->
					
				</tbody>
				<!-- // Table body END -->
				
			</table>
			<!-- // Table END -->
			
		</div>
	</div>
	<div class="widget widget-heading-simple widget-body-white">
	<div class="widget-head"><h4 class="heading glyphicons circle_question_mark"><i></i>Code sample</h4></div>
	<div class="widget-body">
	
<div class="code visible">
<p><span class="label">Note:</span> For TableTools to work correctly, make sure you load the TableTools CSS & JavaScript plugin located in the <code>scripts/plugins/tables/DataTables/extras/TableTools/media</code> folder.</p>
<p><span class="label">Code sample:</span><p>
<pre class="prettyprint margin-none">
$('.dynamicTable.tableTools').dataTable({
	"sPaginationType": "bootstrap",
	"sDom": "<'row-fluid'<'span5'T><'span3'l><'span4'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
	"oLanguage": {
		"sLengthMenu": "_MENU_ per page"
	},
	"oTableTools": {
		"sSwfPath": "/path/to/theme/scripts/plugins/tables/DataTables/extras/TableTools/media/swf/copy_csv_xls_pdf.swf"
	}
});
</pre>
</div>
	
	</div>
	</div>
	<!-- // Widget END -->
	
	<p class="separator text-center"><i class="icon-table icon-3x"></i></p>
	<div class="separator bottom"></div>
	
	<h3 class="separator bottom">DataTable with Show/Hide columns</h3>
	
	<!-- Widget -->
	<div class="widget widget-heading-simple widget-body-gray">
		<div class="widget-body">
		
			<!-- Table -->
			<table class="dynamicTable colVis table table-striped table-bordered table-condensed table-white">
			
				<!-- Table heading -->
				<thead>
					<tr>
						<th>Rendering eng.</th>
						<th>Browser</th>
						<th>Platform(s)</th>
						<th>Eng. vers.</th>
						<th>CSS grade</th>
					</tr>
				</thead>
				<!-- // Table heading END -->
				
				<!-- Table body -->
				<tbody>
				
					<!-- Table row -->
					<tr class="gradeX">
						<td>Trident</td>
						<td>Internet Explorer 4.0</td>
						<td>Win 95+</td>
						<td class="center">4</td>
						<td class="center">X</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeC">
						<td>Trident</td>
						<td>Internet Explorer 5.0</td>
						<td>Win 95+</td>
						<td class="center">5</td>
						<td class="center">C</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Trident</td>
						<td>Internet Explorer 5.5</td>
						<td>Win 95+</td>
						<td class="center">5.5</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Trident</td>
						<td>Internet Explorer 6</td>
						<td>Win 98+</td>
						<td class="center">6</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Trident</td>
						<td>Internet Explorer 7</td>
						<td>Win XP SP2+</td>
						<td class="center">7</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Trident</td>
						<td>AOL browser (AOL desktop)</td>
						<td>Win XP</td>
						<td class="center">6</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 1.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 1.5</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 2.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 3.0</td>
						<td>Win 2k+ / OSX.3+</td>
						<td class="center">1.9</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Camino 1.0</td>
						<td>OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Camino 1.5</td>
						<td>OSX.3+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape 7.2</td>
						<td>Win 95+ / Mac OS 8.6-9.2</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape Browser 8</td>
						<td>Win 98SE+</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape Navigator 9</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.1</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.1</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.2</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.2</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.3</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.3</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.4</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.4</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.5</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.5</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.6</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.6</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.7</td>
						<td>Win 98+ / OSX.1+</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.8</td>
						<td>Win 98+ / OSX.1+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Seamonkey 1.1</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Epiphany 2.20</td>
						<td>Gnome</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 1.2</td>
						<td>OSX.3</td>
						<td class="center">125.5</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 1.3</td>
						<td>OSX.3</td>
						<td class="center">312.8</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 2.0</td>
						<td>OSX.4+</td>
						<td class="center">419.3</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 3.0</td>
						<td>OSX.4+</td>
						<td class="center">522.1</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Webkit</td>
						<td>OmniWeb 5.5</td>
						<td>OSX.4+</td>
						<td class="center">420</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Webkit</td>
						<td>iPod Touch / iPhone</td>
						<td>iPod</td>
						<td class="center">420.1</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Webkit</td>
						<td>S60</td>
						<td>S60</td>
						<td class="center">413</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 7.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 7.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 8.0</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 8.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.0</td>
						<td>Win 95+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.2</td>
						<td>Win 88+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.5</td>
						<td>Win 88+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera for Wii</td>
						<td>Wii</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Nokia N800</td>
						<td>N800</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Presto</td>
						<td>Nintendo DS browser</td>
						<td>Nintendo DS</td>
						<td class="center">8.5</td>
						<td class="center">C/A<sup>1</sup></td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeC">
						<td>KHTML</td>
						<td>Konqureror 3.1</td>
						<td>KDE 3.1</td>
						<td class="center">3.1</td>
						<td class="center">C</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>KHTML</td>
						<td>Konqureror 3.3</td>
						<td>KDE 3.3</td>
						<td class="center">3.3</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>KHTML</td>
						<td>Konqureror 3.5</td>
						<td>KDE 3.5</td>
						<td class="center">3.5</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeX">
						<td>Tasman</td>
						<td>Internet Explorer 4.5</td>
						<td>Mac OS 8-9</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeC">
						<td>Tasman</td>
						<td>Internet Explorer 5.1</td>
						<td>Mac OS 7.6-9</td>
						<td class="center">1</td>
						<td class="center">C</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeC">
						<td>Tasman</td>
						<td>Internet Explorer 5.2</td>
						<td>Mac OS 8-X</td>
						<td class="center">1</td>
						<td class="center">C</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Misc</td>
						<td>NetFront 3.1</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center">C</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeA">
						<td>Misc</td>
						<td>NetFront 3.4</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeX">
						<td>Misc</td>
						<td>Dillo 0.8</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeX">
						<td>Misc</td>
						<td>Links</td>
						<td>Text only</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeX">
						<td>Misc</td>
						<td>Lynx</td>
						<td>Text only</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeC">
						<td>Misc</td>
						<td>IE Mobile</td>
						<td>Windows Mobile 6</td>
						<td class="center">-</td>
						<td class="center">C</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeC">
						<td>Misc</td>
						<td>PSP browser</td>
						<td>PSP</td>
						<td class="center">-</td>
						<td class="center">C</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr class="gradeU">
						<td>Other browsers</td>
						<td>All others</td>
						<td>-</td>
						<td class="center">-</td>
						<td class="center">U</td>
					</tr>
					<!-- // Table row END -->
					
				</tbody>
				<!-- // Table body END -->
				
			</table>
			<!-- // Table END -->
			
		</div>
	</div>
	<div class="widget widget-heading-simple widget-body-white">
	<div class="widget-head"><h4 class="heading glyphicons circle_question_mark"><i></i>Code sample</h4></div>
	<div class="widget-body">
	
<div class="code visible">
<p><span class="label">Note:</span> For ColVis to work correctly, make sure you load the ColVis CSS &amp; JavaScript plugin located in the <code>scripts/plugins/tables/DataTables/extras/ColVis/media</code> folder.</p>
<p><span class="label">Code sample:</span><p>
<pre class="prettyprint margin-none">
$('.dynamicTable.colVis').dataTable({
	"sPaginationType": "bootstrap",
	"sDom": "<'row-fluid'<'span3'f><'span3'l><'span6'C>r>t<'row-fluid'<'span6'i><'span6'p>>",
	"oLanguage": {
		"sLengthMenu": "_MENU_ per page"
	}
});
</pre>
</div>
	
	</div>
	</div>
	<!-- // Widget END -->
	
	<p class="separator text-center"><i class="icon-table icon-3x"></i></p>
	<div class="separator bottom"></div>
	
	<h3 class="separator bottom">Classic Tables</h3>
	
	<!-- Widget -->
	<div class="widget widget-heading-simple widget-body-white">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading">Minimal Table</h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body" data-toggle="source-code">
		
			<!-- Table -->
			<table class="table table-condensed">
			
				<!-- Table heading -->
				<thead>
					<tr>
						<th class="center">No.</th>
						<th>Column Heading</th>
					</tr>
				</thead>
				<!-- // Table heading END -->
				
				<!-- Table body -->
				<tbody>
					
					<!-- Table row -->
					<tr>
						<td class="center">1</td>
						<td>Lorem ipsum dolor</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr>
						<td class="center">2</td>
						<td>Lorem ipsum dolor</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr>
						<td class="center">3</td>
						<td>Lorem ipsum dolor</td>
					</tr>
					<!-- // Table row END -->
					
				</tbody>
				<!-- // Table body END -->
				
			</table>
			<!-- // Table END -->
			
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- Widget -->
	<div class="widget widget-heading-simple widget-body-gray">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading">Bordered Table</h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body" data-toggle="source-code">
		
			<!-- Table -->
			<table class="table table-bordered table-white">
				
				<!-- Table heading -->
				<thead>
					<tr>
						<th class="center">No.</th>
						<th>Column Heading</th>
					</tr>
				</thead>
				<!-- // Table heading END -->
				
				<!-- Table body -->
				<tbody>
				
					<!-- Table row -->
					<tr>
						<td class="center">1</td>
						<td>Lorem ipsum dolor</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr>
						<td class="center">2</td>
						<td>Lorem ipsum dolor</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr>
						<td class="center">3</td>
						<td>Lorem ipsum dolor</td>
					</tr>
					<!-- // Table row END -->
					
				</tbody>
				<!-- // Table body END -->
				
			</table>
			<!-- // Table END -->
			
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- Widget -->
	<div class="widget widget-heading-simple widget-body-white">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading">Condensed Table</h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body" data-toggle="source-code">
		
			<!-- Table -->
			<table class="table table-bordered table-condensed">
				
				<!-- Table heading -->
				<thead>
					<tr>
						<th class="center">No.</th>
						<th>Column Heading</th>
					</tr>
				</thead>
				<!-- // Table heading END -->
				
				<!-- Table body -->
				<tbody>
				
					<!-- Table row -->
					<tr>
						<td class="center">1</td>
						<td>Lorem ipsum dolor</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr>
						<td class="center">2</td>
						<td>Lorem ipsum dolor</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr>
						<td class="center">3</td>
						<td>Lorem ipsum dolor</td>
					</tr>
					<!-- // Table row END -->
					
				</tbody>
				<!-- // Table body END -->
				
			</table>
			<!-- // Table END -->
			
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- Widget -->
	<div class="widget widget-heading-simple widget-body-gray">
		
		<!-- Widget heading -->
		<div class="widget-head">
			<h4 class="heading">Striped Table</h4>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body" data-toggle="source-code">
		
			<!-- Table -->
			<table class="table table-bordered table-striped table-white">
				
				<!-- Table heading -->
				<thead>
					<tr>
						<th class="center">No.</th>
						<th>Column Heading</th>
					</tr>
				</thead>
				<!-- // Table heading END -->
				
				<!-- Table body -->
				<tbody>
					
					<!-- Table row -->
					<tr>
						<td class="center">1</td>
						<td>Lorem ipsum dolor</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr>
						<td class="center">2</td>
						<td>Lorem ipsum dolor</td>
					</tr>
					<!-- // Table row END -->
					
					<!-- Table row -->
					<tr>
						<td class="center">3</td>
						<td>Lorem ipsum dolor</td>
					</tr>
					<!-- // Table row END -->
					
				</tbody>
				<!-- // Table body END -->
				
			</table>
			<!-- // Table END -->
			
		</div>
	</div>
	<!-- // Widget END -->
	
</div>	
	
		
		</div>
		<!-- // Content END -->
		
				</div>
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
				
		<div id="footer" class="hidden-print">
			
			<!--  Copyright Line -->
			<div class="copy">&copy; 2012 - 2013 - <a href="http://www.mosaicpro.biz">MosaicPro</a> - All Rights Reserved. <a href="http://themeforest.net/?ref=mosaicpro" target="_blank">Purchase FLAT KIT on ThemeForest</a> - Current version: v1.2.0 / <a target="_blank" href="http://demo.mosaicpro.biz/flatkit/CHANGELOG">changelog</a></div>
			<!--  End Copyright Line -->
	
		</div>
		<!-- // Footer END -->
		
	</div>
	<!-- // Main Container Fluid END -->
	
<!-- Themer -->
<div id="themer" class="collapse">
	<div class="wrapper">
		<span class="close2">&times; close</span>
		<h4>Themer <span>color options</span></h4>
		<ul>
			<li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
			<li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
			<li>
				<span class="link" id="themer-custom-reset">reset theme</span>
				<span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
			</li>
		</ul>
		<div id="themer-getcode" class="hide">
			<hr class="separator" />
			<button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
			<button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- // Themer END -->

	
	<!-- jQuery Event Move -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/system/jquery.event.move/js/jquery.event.move.js"></script>
	
	<!-- jQuery Event Swipe -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/system/jquery.event.swipe/js/jquery.event.swipe.js"></script>
	
	<!-- jQuery ScrollTo Plugin -->
	<!--[if gt IE 8]><!--><script src="http://balupton.github.io/jquery-scrollto/lib/jquery-scrollto.js"></script><!--<![endif]-->
	
	<!-- History.js -->
	<!--[if gt IE 8]><!--><script src="http://browserstate.github.io/history.js/scripts/bundled/html4+html5/jquery.history.js"></script><!--<![endif]-->
	
	<!-- jQuery Ajaxify -->
	<!--[if gt IE 8]><!--><script src="{base_url}{asset_url}common/theme/scripts/plugins/system/jquery-ajaxify/ajaxify-html5.js"></script><!--<![endif]-->
	
	
	<!-- Code Beautify -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/other/js-beautify/beautify.js"></script>
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/other/js-beautify/beautify-html.js"></script>
	
	<!-- PrettyPhoto -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/gallery/prettyphoto/js/jquery.prettyPhoto.js"></script>
	
	<!-- JQueryUI -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/system/jquery-ui/js/jquery-ui-1.9.2.custom.min.js"></script>
	
	<!-- JQueryUI Touch Punch -->
	<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/system/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	
	<!-- Modernizr -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/system/modernizr.js"></script>
	
	<!-- Bootstrap -->
	<script src="{base_url}{asset_url}common/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll Plugin -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.js"></script>
	
	<!-- Holder Plugin -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/other/holder/holder.js?1374506516"></script>
	
	<!-- Uniform Forms Plugin -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>
	
	<!-- MegaMenu -->
	<script src="{base_url}{asset_url}common/theme/scripts/demo/megamenu.js?1374506516"></script>

	<!-- Bootstrap Extended -->
	<script src="{base_url}{asset_url}common/bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
	<script src="{base_url}{asset_url}common/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
	<script src="{base_url}{asset_url}common/bootstrap/extend/jasny-fileupload/js/bootstrap-fileupload.js"></script>
	<script src="{base_url}{asset_url}common/bootstrap/extend/bootbox.js"></script>
	<script src="{base_url}{asset_url}common/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js"></script>
	<script src="{base_url}{asset_url}common/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js"></script>
	
	<!-- Google Code Prettify -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/other/google-code-prettify/prettify.js"></script>
	
	<!-- Gritter Notifications Plugin -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/notifications/Gritter/js/jquery.gritter.min.js"></script>
	
	<!-- Notyfy Notifications Plugin -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.js"></script>
	
	<!-- MiniColors Plugin -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.js"></script>
	
	<!-- DateTimePicker Plugin -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/forms/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Cookie Plugin -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/system/jquery.cookie.js"></script>
	
	<!-- Select2 Plugin -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/forms/select2/select2.js"></script>
	
	<!-- Themer -->
	<script src="{base_url}{asset_url}common/theme/scripts/demo/themer.js"></script>
	
	<!-- Twitter Feed -->
	<script src="{base_url}{asset_url}common/theme/scripts/demo/twitter.js"></script>
	
	<!-- Easy-pie Plugin -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.js"></script>
	
	<!-- Sparkline Charts Plugin -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/charts/sparkline/jquery.sparkline.min.js"></script>
	
	<!-- Ba-Resize Plugin -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/other/jquery.ba-resize.js"></script>
	
	
	
	
	<!-- DataTables Tables Plugin -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/tables/DataTables/media/js/jquery.dataTables.min.js"></script>
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/tables/DataTables/extras/TableTools/media/js/TableTools.min.js"></script>
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/tables/DataTables/extras/ColVis/media/js/ColVis.min.js"></script>
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/tables/DataTables/media/js/DT_bootstrap.js"></script>
	
	<!-- Tables Demo Script -->
	<script src="{base_url}{asset_url}common/theme/scripts/demo/tables.js"></script>

	<!-- Common Demo Script -->
	<script src="{base_url}{asset_url}common/theme/scripts/demo/common.js?1374506516"></script>
	
</body>
</html>