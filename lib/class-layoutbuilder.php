<?php
 
class LayoutBuilder {
	public $meta;
	public $rows;
	public $elements;
	public $the_grid;
	public $template;
	public $bs_class;



	 // function getColClass($col) {
		// 	  $bs_col = explode('-',$col);
		//       $this->bs_col = $bs_col;
	 //  }
	 


	public function setup($array_data){
			//Setup Meta
			$the_grid = Array();
			$the_element = Array();

			foreach($array_data as $key => $value){
	 	 		if($array_data[$key]['acf_fc_layout'] == 'Meta'){
	 	 			 $this->meta = $value;
			    } else {
			    	array_push($the_grid, $value);
			    }
			}
			$this->rows = $the_grid;
			foreach($the_grid as $key => $value){
				// debug($the_grid[$key]);
	 	 		unset($the_grid[$key]['acf_fc_layout']);
			}
			//get cols and elements
			$this->grids = $the_grid;

			
	 }
	public function elements($number){
			$this->elements = $this->grids[$number];
			return $this->elements;

	}
	public function bs_class($data){
			$bs_col = explode('-',$data['acf_fc_layout'],2);
			if(isset($data['acf_fc_layout'])){
			unset($data['acf_fc_layout']);
			}
			$this->bs_class = $bs_col[1];
			$this->template = $bs_col[0];

			return $this->bs_class;

	}
	 /*======================================
	 =            Data Generator            =
	 ======================================*/
	 
	 
	 








	  	// $element_array = Array();
	 	//  	foreach($array as $key => $value){
		//    if(preg_match('/^element-/', $key)) {
		//       array_push($element_array, $value);
		//    }
		// }






} ?>