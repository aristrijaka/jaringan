<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set('display_errors', 0);
class Re_maps{

        private $nodes;
        private $edges;
 
        public function __construct($data){
                $this->nodes = $this->re_mape($data);
        }
 
        private function re_mape($data, $level = 0){
                $x = 0.000001;
                $e = 0;
                $out = array();
                foreach ($data as $item) {
                        # code...
                        if($item->parent == $level){
 
                                $new_level = $item->parent + 1;
                                $out[$item->id] = array(
                                        'id' => $item->id,
                                        'label' => $item->nama,
                                        'x' => $x + ($x/$item->id),
                                        'y' => $new_level + ($x/$item->id),
										'size' =>3
                                );
                                $out = array_merge($out, $this->re_mape($data, $new_level));
 
                                if($level != 0){
                                        $this->edges[] = array(
                                                'id' => 'e'.$e,
                                                'source' => $level,
                                                'target' => $item->id
                                        );
                                        $e++;
                                }
                                $x++;
                        }
 
                }
 
                return $out;
        }
 
        public function output(){
                return array(
                        'nodes' => $this->nodes,
                        'edges' => $this->edges,
                );
        }
}






//eof