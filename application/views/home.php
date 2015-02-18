<!DOCTYPE html>
<?php
ini_set('MAX_EXECUTION_TIME', -1);
?>
<!--[if !IE]><!--><html class="animations fluid top-full menuh-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sidebar-hat"><!-- <![endif]-->
<head>
	<title>{title}</title>
	
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
    
    <!-- JQuery ONLINE
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	-->
	<script src="{base_url}{asset_url}common/jquery-1.10.1.min.js"></script>
	<script src="{base_url}{asset_url}common/jquery-migrate-1.2.1.min.js"></script>
    
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

	<!-- FooTable Plugin -->
	<link href="{base_url}{asset_url}common/theme/scripts/plugins/tables/FooTable/css/footable-0.1.css" rel="stylesheet" />

	<!-- Main Theme Stylesheet :: CSS-->
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
	<li><a href="#" class="glyphicons dashboard"><i></i>BPTIK</a></li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Tools</li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Network Monitoring</li>
</ul>

<h1>Network Monitoring Tools</h1>
<div class="innerLR">

	<!-- Widget 
	<div class="widget widget-heading-simple widget-body-gray">
		<div class="widget-body center">
			<p class="lead margin-none">Unlimited Columns &amp; Expandable Rows. Tables for Desktop, Tablet &amp; Mobile. Resize your browser to try them.</p>
		</div>
	</div> -->
		
	<h5 class="text-uppercase strong separator bottom margin-none">Table Status Network</h5>
	<!-- Table -->
	<div class="row-fluid">
		<select class="selectpicker span6" id="lokasi" data-style="btn-default">
			{lokasi}
		</select>
	</div>
	<table class="footable table table-striped table-bordered table-white table-primary">
	
		<!-- Table heading -->
		<thead>
			<tr>
				<th data-class="expand">No</th>
				<th data-hide="phone,tablet">Name</th>
				<th data-hide="phone,tablet">Type</th>
				<th class="center" data-hide="phone">IP Address</th>
				<th>Status</th>
			</tr>
		</thead>
		<!-- // Table heading END -->
		
		<!-- Table body -->
		<tbody id="listip">
			<!-- Table row -->
			<!--{listap} -->

		</tbody>
		<!-- // Table body END -->
		
	</table>
	<!-- // Table END -->
	
	<div class="widget widget-heading-simple widget-body-white"> 
	</div>
	<!-- // Widget END -->
	
	<p class="separator text-center"><i class="icon-table icon-3x"></i></p>
	<div class="separator bottom"></div>
	
</div>	
	
		
		</div>
		<!-- // Content END -->
		
				</div>
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
				
		<div id="footer" class="hidden-print">
			
			<!--  Copyright Line -->
			<div class="copy">&copy; 2015 - <a href="#">Aris Trijaka</a> - <a href="#" target="_blank">Informatika UPGRI Semarang</a> - Current version: v0.0.1 </div>
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
	<!--[if gt IE 8]><!--><script src="{base_url}{asset_url}common/jquery-scrollto.js"></script><!--<![endif]-->
	
	<!-- History.js -->
	<!--[if gt IE 8]><!--><script src="{base_url}{asset_url}common/jquery.history.js"></script><!--<![endif]-->
	
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
	
	
	
	<!-- FooTable Plugin -->
	<script src="{base_url}{asset_url}common/theme/scripts/plugins/tables/FooTable/js/footable.js"></script>
	
	<!-- Responsive Tables Demo Script -->
	<script src="{base_url}{asset_url}common/theme/scripts/demo/tables_responsive.js"></script>
	
	<!-- Common Demo Script -->
	<script src="{base_url}{asset_url}common/theme/scripts/demo/common.js?1374506516"></script>
	<script>
	$(document).ready(function(){ 
	setInterval("get_konten()",5000);
	});
	var base_url = "{base_url}";
	var pdone=false;
	function get_data() {
		if (pdone==true){
			return;
		}
		pdone = true;
		$.get(base_url+"/ajak/ping",function(data){
		if(data.valid){				
			 for(i in data.status){
				var item = data.status[i];
				if (item==false){
				document.getElementById("ip-"+i).style.backgroundColor ="red";
				}else{
				document.getElementById("ip-"+i).style.backgroundColor ="#13F913";
				}
				
				//alert(i+'status'+item);
			 }		
		pdone = false;
		}
		},'json')
	}
	function get_konten(){
		var input={location : $('#lokasi').val()};
		var str = '';
		$.get(base_url+"/ajak/get_ip_konten",input,function(data){
			if(data.valid){
				str += data.konten;
				$('#listip').html(str);
			}
		},'json')
	}
	</script>
</body>
</html>