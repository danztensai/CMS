<?php
class Dashboard_model extends CI_Model {


		function __construct() {
			parent::__construct();

		}



		public function insertBatch($partnerDB,$table,$arrayData)
		{
			$db2 = $this->load->database($partnerDB,true);
			$db2->insert_batch($table, $arrayData);
		}

		public function getPNSByNIPNama($key)
		{
			$querySQL = "SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC";
			log_message('debug','Query Menu Root :  '.$querySQL);
			$data = array();
			$stackData = array();
			$query = $this->db->query($querySQL);

			if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['idMenu']=$row->idMenu;
						$data['menu_name']=$row->menu_name;
						$data['menu_link']=$row->menu_link;
						$data['parent_id']=$row->parent_id;
						$arraySubMenu = $this->subMenu($row->idMenu);

						$data['subMenu']=$arraySubMenu;


						array_push($stackData,$data);
					}
					$query->free_result();
					return $stackData;
				}else
				{

					$query->free_result();
					return $data;
				}
		}

	}
