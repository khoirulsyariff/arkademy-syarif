<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Arkademy_model extends CI_Model {

	public function get_all_data($table) {
		$this->db->get($table);
	}

	public function get_data_id($table, $where) {
		$this->db->get_where($table, $where);
	}

	public function get_data() {
		$query = "SELECT `product`.`id` AS `ID`, `cashier`.`name` AS `Cashier`, 
		`product`.`name` AS `Product`, `category`.`name` AS `Category`, `product`.`price` AS `Price`
            FROM `product`
            INNER JOIN `category` ON `product`.`id_category`=`category`.`id`
            INNER JOIN `cashier` ON `product`.`id_cashier`=`cashier`.`id` ";
		return $this->db->query($query)->result_array();
	}

	public function update_data($table, $data, $where, $id_unit) {
		$this->db->where($where, $id_unit);
		$this->db->update($table, $data);
	}
	
	public function delete_data($table, $where) {
		$this->db->delete($table, $where);
	}
}
?>