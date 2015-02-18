<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
        parent::__construct();  
       $this->load->model('konten');
    }

	public function index()
	{ 
		$thme='home';
		$array=array(
            'base_url' => base_url(),
			'title'=> 'INFORMATIKA',
			'asset_url'=>'assets/', 
			'listap'=> $this->konten->listap(),
			'sidebarmenu'=> $this->sidebarmenu(),
			'topnavbar'=> $this->topnavbar(),
			'lokasi'=> $this->konten->option_lokasi(),
			);
		if(urinext('spage') != ''){
			$thme='spage';
			$array['konten'] = '';
			$array['sub_title'] = '';
			$array['page'] = urinext('spage');
			$a=str_replace('.html', '', urinext('spage'));
			if ($a=='iplist'){
				$array['konten']= $this->konten->monitor_all();
			}else{

			}
		}
		 echo $this->parser->parse($thme, $array, true);
	}

	function sidebarmenu(){
		$out='<div id="menu" class="hidden-print">
				<!-- Brand -->
				<a href="'.base_url().'" class="appbrand"><span class="text-primary">INFORMATIKA</span> <span></span></a>
				<!-- Scrollable menu wrapper with Maximum height -->
				<div class="slim-scroll" data-scroll-height="800px">
					<!-- Menu Toggle Button -->
					<button type="button" class="btn btn-navbar">
						<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
					</button>
					<!-- // Menu Toggle Button END -->
					<!-- Sidebar Profile -->
					<span class="profile center">
						<a href="#"><img src="'.base_url().'assets/network.png" alt="Avatar" /></a>
					</span>
					<!-- // Sidebar Profile END -->
					<!-- Menu -->
					<ul>
						<li><a href="'.base_url().'" class="glyphicons dashboard"><i></i><span>Dashboard</span></a></li>
				<li class="hasSubmenu active">
				<a href="#menu_components" data-toggle="collapse" class="glyphicons router"><i></i><span>Notifikasi</span><span class="icon-chevron-down"></span></a>
				<ul class="collapse in" id="menu_components">
				</ul>
					<div class="clearfix"></div>
					<!-- // Menu END -->
					<div class="menu-hidden-element alert alert-primary">
						<a class="close" data-dismiss="alert">&times;</a>
						<p></p>
					</div>

				</div>
					</div>
		';
		return $out;
	}
 	function topnavbar(){
		$out='
			<div class="navbar main">

			<!-- Menu Toggle Button -->
			<button type="button" class="btn btn-navbar pull-left visible-phone">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<ul class="topnav pull-left">
				<li class="dropdown dd-1 ">
					<a href="" data-toggle="dropdown" class="glyphicons settings"><i></i>Tools <span class="caret"></span></a>
					<ul class="dropdown-menu pull-left">
						<li class="dropdown submenu">
							<a data-toggle="dropdown" class="dropdown-toggle">Assets</a>
							<ul class="dropdown-menu submenu-show submenu-hide pull-right">
								<li class=""><a href="'.base_url().'spage/iplist.html">IP List</a></li>
								<li class=""><a href="'.base_url().'spage/aplist.html">Access Point List</a></li>
								<li class=""><a href="'.base_url().'spage/router.html">Router List</a></li>
							</ul>
						</li>

						<li class="dropdown submenu">
							<a data-toggle="dropdown" class="dropdown-toggle">Monitoring</a>
							<ul class="dropdown-menu submenu-show submenu-hide pull-right">
								<li class=""><a href="'.base_url().'">Table View</a></li>
								<li class=""><a href="'.base_url().'spage/topologic.html">Topological View</a></li>
								<li class=""><a href="'.base_url().'spage/graph.html">Graphical View</a></li>
							</ul>
						</li>

					</ul>
				</li>
				<li class="mega-menu">
					<a href="#" class="glyphicons sheriffs_star"><i></i> Help</a>
					<div class="mega-sub">
						<div class="mega-sub-inner">
							<div class="row-fluid">
								<div class="span2">
									<h4><i class="icon-book icon-fixed-width text-primary"></i> Monitoring</h4>
									<ul class="icons-ul">
										<li><a href="#"><span class="icon-li icon-arrow-right"></span> Table View</a></li>
										<li><a href="#"><span class="icon-li icon-arrow-right"></span> Grafical View</a></li>
										<li><a href="#"><span class="icon-li icon-arrow-right"></span> Topological View</a></li>
									</ul>
								</div>
								<div class="span2">
									<h4><i class="icon-wrench icon-fixed-width text-primary"></i> Configuration</h4>
									<ul class="icons-ul">
										<li><a href="#"><span class="icon-li icon-arrow-right"></span> Add IP Address</a></li>
										<li><a href="#"><span class="icon-li icon-arrow-right"></span> Change IP / Name</a></li>
										<li><a href="#"><span class="icon-li icon-arrow-right"></span> List Type Hardware</a></li>
									</ul>
								</div>
								<div class="span3">
									<h4><i class="icon-android icon-fixed-width text-primary"></i> Location</h4>
									<ul class="icons-ul">
										<li><a href="#"><span class="icon-li icon-arrow-right"></span> Gedung Pusat</a></li>
										<li><a href="#"><span class="icon-li icon-arrow-right"></span> Gedung B</a></li>
										<li><a href="#"><span class="icon-li icon-arrow-right"></span> Gedung U</a></li>
									</ul>
									<h4><i class="icon-apple icon-fixed-width text-primary"></i> Process</h4>
									<ul class="icons-ul">
										<li><a href="#"><span class="icon-li icon-arrow-right"></span> Realtime</a></li>
										<li><a href="#"><span class="icon-li icon-arrow-right"></span> Delayed</a></li>
									</ul>
								</div>
								<div class="span5">
									<div class="innerTB innerR">
									    <div class="glyphicons glyphicon-xlarge glyphicon-top sheriffs_star glyphicon-primary">
								        	<i></i>
								        	<h4>Support for any network type</h4>
									        <p class="margin-none">This tool only use for monitoring network base on ping result, cannot control netwok , bandwith and other networking fuction
									            <br> <a href="">Informatika Team</a>
									        </p>
									    </div>
									</div>
								</div>
							</div>
						</div><!-- /cbp-hrsub-inner -->
					</div><!-- /cbp-hrsub -->
				</li>
			</ul>
			<ul class="topnav pull-right hidden-phone">

								<!-- Themer -->
				<li><a href="#themer" data-toggle="collapse" class="glyphicons eyedropper single-icon"><i></i></a></li>
				<!-- // Themer END


				<!-- Profile / Logout menu -->
				<li class="account dropdown dd-1">
										<a data-toggle="dropdown" href="#" class="glyphicons logout lock"><span class="hidden-tablet hidden-phone hidden-desktop-1">Admin</span><i></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="#" class="glyphicons cogwheel">Settings<i></i></a></li>
						<li><a href="#" class="glyphicons camera">My Photos<i></i></a></li>
						<li class="profile">
							<span>
								<span class="heading">Profile <a href="#" class="pull-right text-primary text-weight-regular">edit</a></span>
								<a href="#" class="img thumb">
									<img data-src="holder.js/51x51/dark" alt="Avatar" />
								</a>
								<span class="details">
									<a href="#" class="strong text-regular">Admin</a>
								</span>
								<span class="clearfix"></span>
							</span>
						</li>
						<li>
							<span>
								<a class="#">Sign Out</a>
							</span>
						</li>
					</ul>
									</li>
				<!-- // Profile / Logout menu END -->

			</ul>
			<!-- // Top Menu Right END

			<ul class="topnav pull-right hidden-phone">
				<li><a href="" class="glyphicons envelope single-icon"><i></i><span class="badge fix badge-primary">5</span></a></li>
				<li><a href="" class="glyphicons cup single-icon"><i></i><span class="badge fix badge-primary">7</span></a></li>
				<li class="hidden-tablet"><a href="" class="glyphicons comments single-icon"><i></i><span class="badge fix badge-primary">3</span></a></li>
			</ul>
			-->			<div class="clearfix"></div>

		</div>';
		return $out;

	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */