<?php

class ajak extends CI_Controller {

    public function __construct(){
	   parent::__construct();
			#uri page select
			
    }
    function index(){
        return $this->{urinext('ajak')}();
    }
    function ping(){
		$ip=out_where("select id,ipaddress from listip where is_active = 'Y'");
		$out=array('valid'=>true);
		$status=array();
		$n=1;
		foreach($ip as $row){
		$status[$row->id]=pingAddress($row->ipaddress);
			} 
		$out['status']=$status;
		echo json_encode($out) ;
    }
	function get_ip_konten(){
		$lokasi= $this->input->get('location');
		if ($lokasi < 1){
			$filter = '';
		}else{$filter = 'and lokasi = '.$lokasi;}
		$ot=array('valid'=>false);
		$slider=out_where("select*from listip where is_active = 'Y' ".$filter." ");
		$out='';
		$n=1;
		if ($slider>=1){
			$ot['valid']=true;
		}
		foreach($slider as $row){
			$out.=' <tr class="gradeX">
				<td>'.$n.'</td>
				<td>'.$row->nama.'</td>
				<td>'.$row->type.'</td>
				<td class="center">'.$row->ipaddress.'</td>';
			if ($row->status == 1){
				$out.='<td id="ip-'.$row->id.'" class="center" style="background-color: lawngreen;width: 100px;">Connected</td>';
			}else{ $out.='<td id="ip-'.$row->id.'" class="center" style="background-color: red;width: 100px;" >Not Connected</td>';
			}

			$out .='</tr>
				';
			$n++;
		}
		$ot['konten']=$out;
		echo json_encode($ot);
	}
	function pinging(){
		$ip=$this->input->get('ip');
		$ipaddr=out_row("select id,ipaddress from listip where id = '".$ip."'");
		$status = pingIp($ipaddr->ipaddress);
		if($status!=''){
			$array=array('id_ip'=>$ip,
						 'status'=>$status[0],
						 'pinging'=>$status[1],
						 'replay'=>$status[2],
						 'static'=>$status[4],
						 'paket'=>$status[5],
						 'raw_data'=>json_encode($status),
						);
		}
		pre_print($array);
		$this->db->replace('ping_result', $array, array('id' => $ip));
		return;
	}
	function get_topologi(){
		$ip=out_where("select * from listip where id <= 8");
		echo json_encode($ip);exit();

		$out=array();
		$nodes=array();
		$edges=array();
		$parrent=0;
		$n=0;
		foreach($ip as $row){
			if ($row->parent!=''){
				$x=$row->id;
				$y=$row->parent+1;
			}else{
				$x=$row->id;
				$y=$row->id;
				}
			array_push($nodes,array(
				'id'=>$row->id,
				'label'=>$row->nama,
				'x'=>$x,
				'y'=>$y,
				'type'=>'circle',
				'color'=>'#617db4',
				'borderColor'=>'#668f3c',
				'size'=>3,
			));
			array_push($nodes,array(
				  'id' => $row->id,
				  'source'=> "1",
				  'target'=> "2",
			));

	}
		echo json_encode($nodes) ;
	}
	function get_tpl()
	{
		//$ip=out_where("select id,level from listip where is_active = 'Y' ");
		$this->load->library('re_maps');
		$str = '[{"id":"1","ipaddress":"127.0.0.1","subnetmask":"255.255.255.0","gateway":"192.168.1.1","nama":"modem ADSL","type":"TPLINK","lokasi":"1","status":"1","is_active":"Y","parent":null,"child":null},{"id":"2","ipaddress":"192.168.1.100","subnetmask":"255.255.255.0","gateway":"192.168.1.1","nama":"Akses Point","type":"LINKSYS","lokasi":"2","status":"1","is_active":"Y","parent":"1","child":null},{"id":"3","ipaddress":"192.168.1.101","subnetmask":"255.255.255.0","gateway":"192.168.1.1","nama":"HP Papap","type":"Android","lokasi":"3","status":"1","is_active":"Y","parent":"1","child":null},{"id":"4","ipaddress":"192.168.1.102","subnetmask":"255.255.255.0","gateway":"192.168.1.1","nama":"HP Mamam","type":"Android","lokasi":"4","status":"1","is_active":"Y","parent":"1","child":null}]';
		$ip=out_where("select * from listip where is_active = 'Y' ");

	//	$data = json_encode($ip);
//echo $data;exit();
		$map = new Re_maps($ip);

		$out = $map->output();

		echo json_encode($out);

	}

}
//eof