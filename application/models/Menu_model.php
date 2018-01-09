<?php
class Menu_model extends CI_Model {


  		function __construct() {
  			parent::__construct();

  		}

      public function checkSubMenu($parent_id)
      {
        $querySQL = "SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=$parent_id limit 1";
        log_message('debug','CheckSubMenuExist:  '.$querySQL);
        $query = $this->db->query($querySQL);
        $sts = False;
        if($query->num_rows()>0)
        {
        //  log_message('debug','Exist '.$querySQL);
          return TRUE;
        }else {
          {
          //  log_message('debug','NotExist '.$querySQL);
            return FALSE;
          }
        }
      }
      public function subMenu($parent_id,$group_id)
  		{
  			$querySQL = "SELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu m left join group_menu gm on m.idmenu = gm.menu_id where gm.group_id in ('" . implode("','", $group_id) . "')  and parent_id=$parent_id ORDER BY menu_order ASC";
      //  log_message('debug','SubMenu Query'.$querySQL);
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

              if($this->checkSubMenu($row->idMenu)){
              //  log_message('debug','Sub Menu Exist For : '.$row->idMenu.' '.$row->menu_name.' ');
                $data['subMenu']=$this->subMenu($row->idMenu,$group_id);

              }else{

                //  log_message('debug','Sub Menu Not Exist For : '.$row->idMenu.' '.$row->menu_name.' ');
                  unset($data['subMenu']);
              }
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
  		public function menuMaster($group_id)
  		{
  			$querySQL = "SELECT distinct menu_order, idMenu, menu_name, menu_link, parent_id FROM menu m left join group_menu gm on m.idmenu = gm.menu_id where gm.group_id in ('" . implode("','", $group_id) . "')  and m.parent_id = 0 or m.parent_id is null  ORDER BY menu_order ASC";
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
              $arraySubMenu = $this->subMenu($row->idMenu,$group_id);

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
