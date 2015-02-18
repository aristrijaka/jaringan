<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class konten extends CI_Model {

    public function __construct() {
    }
    function footer(){
        $out=' ';
        return $out; 
    }
	function listap(){
		$slider=out_where("select*from listip where is_active = 'Y'");
		$out='';
		$n=1;
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
        return $out; 
	}
    function option_lokasi()
    {
		$row_kota = get_option(out_where("select*from lokasi where is_active='Y' order by lokasi "), array('val' => 'id', 'text' => 'lokasi'),0,true,'Pilih Lokasi (All)');
		return $row_kota;
	}
	function list_ip(){

		$array=array(
			'base_url' => base_url(),
			'asset_url'=>'assets/',
			'title'=>'Daftar IP',
			'sub_title'=>'Manage IP Listed',
		);
		$slider=out_where("select*from listip");
		$out='<thead>
					<tr>
						<th>No IP</th>
						<th>Name</th>
						<th>Type</th>
						<th>Lokasi</th>
						<th>Is Active</th>
						<th>Action</th>
					</tr>
				</thead><tbody>';
		foreach($slider as $row){
			$out.=' <tr class="gradeX">
					<td class="center">'.$row->ipaddress.'</td>
					<td>'.$row->nama.'</td>
					<td>'.$row->type.'</td>
					<td>'.out_field('lokasi', array('id' => $row->lokasi),'lokasi').'</td>
					<td>'.$row->is_active.'</td>
					<td><input type="button" id="bt_'.$row->id.'" class="btn btn-primary" value="Edit"/><input type="button" id="btd_'.$row->id.'" class="btn btn-warning" value="Delete"/></td></tr>';
			}
		$out .='</tbody>';
		$array['table']=$out;
		return $this->parser->parse('table', $array, true);
	}
	function monitor_all(){

		$array=array(
			'base_url' => base_url(),
			'asset_url'=>'assets/',
			'title'=>'Monitoring',
			'sub_title'=>'Table view Monitoring',
			'json'=>$this->get_data_ip(),
		);
		$slider=out_where("select*from listip");
		//ping_result
		$out='<thead>
					<tr>
						<th>No IP</th>
						<th>Name</th>
						<th>Type</th>
						<th>Lokasi</th>
						<th>Status</th>
					</tr>
				</thead><tbody>';
		foreach($slider as $row){
			$out.=' <tr class="gradeX">
					<td class="center">'.$row->ipaddress.'</td>
					<td>'.$row->nama.'</td>
					<td>'.$row->type.'</td>
					<td>'.out_field('lokasi', array('id' => $row->lokasi),'lokasi').'</td>
					<td>'.out_field('ping_result', array('id_ip' => $row->id),'replay').'</td>
					</tr>';
		}
		$out .='</tbody>';
		$array['table']=$out;
		return $this->parser->parse('tplg/node', $array, true);
	}
	function get_data_ip()
	{
		$this->load->library('re_maps');
		$ip=out_where("select * from listip where is_active = 'Y' ");
		$map = new Re_maps($ip);
		$out = $map->output();
		return json_encode($out);
		//return '{"nodes":[{"id":"n1","label":"modem ADSL","x":1.2,"y":1,"size":3,"color":"#666"},{"id":"n2","label":"Akses Point","x":1.2,"y":2,"size":3,"color":"#666"}]}';
		//                {"id":"1","label":"modem ADSL","x":1,"y":1,"size":3},{"id":"n2","label":"Akses Point","x":1,"y":2,"size":3}

	}
}
//eof