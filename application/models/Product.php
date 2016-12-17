<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Product extends CI_Model
{

	public static function add_product($name, $description, $img, $price, $category, $sub_category, $option_category, $size, $recommended, $pallet_amount, $on_pallet_amount)
	{
		$CI = & get_instance();
		$sql = 'INSERT INTO `products` (`name`, `description`, `date`, `image`, `price`, `category`, `block_category`, `option_category`, `size`, `recommended`, `pallet_amount`, `on_pallet_amount`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$CI->db->query($sql, array($name, $description, date('Y-m-d H:i:s'), $img, $price, $category, $sub_category, $option_category, $size, $recommended, $pallet_amount, $on_pallet_amount));
		$id = $CI->db->insert_id();

		return $id;
	}

	public static function update_product($name, $description, $img, $price, $size, $category, $sub_category, $recommended, $pallet_amount, $on_pallet_amount, $id)
	{
		$CI = & get_instance();
		$sql = "UPDATE `products` SET  `name` = ?, `description` = ?, `image` = ?, `price` = ?, `size` = ?, `category` = ?, `block_category` = ?, `recommended` = ?, `pallet_amount` = ?, `on_pallet_amount` = ? WHERE `id` = ?";
		$CI->db->query($sql, array($name, $description, $img, $price, $size, $category, $sub_category, $recommended, $pallet_amount, $on_pallet_amount, $id));
	}

	public static function delete_product($id)
	{
		$CI = &get_instance();
		$sql = "DELETE FROM `products` WHERE `id` = ?";
		$CI->db->query($sql, array($id));
	}

	public static function load_products($id = NULL)
	{
		$CI = & get_instance();
		if ($id == NULL) {
			$sql = "SELECT * FROM `products`";
			$query = $CI->db->query($sql);
			$result = $query->result_array();
		} elseif ($id != NULL) {
			$sql = "SELECT * FROM `products` WHERE id = ?";
			$query = $CI->db->query($sql, array($id));
			$result = $query->row_array();
		}

		return $result;
	}

	public static function load_block_by_category($category)
	{
		$CI = &get_instance();
		$sql = "SELECT * FROM `products` WHERE `block_category` = ?";
		$query = $CI->db->query($sql, $category);
		$result = $query->result_array();

		return $result;
	}
	public static function load_product_by_category($category)
	{
		$CI = &get_instance();
		$sql = "SELECT * FROM `products` WHERE `category` = ?";
		$query = $CI->db->query($sql, $category);
		$result = $query->result_array();

		return $result;
	}

	public static function load_products_by_type($type, $city)
	{
		$CI = & get_instance();
		$sql = "SELECT *,(SELECT `price` FROM `product_prices` `pp` WHERE `pp`.`product_id` = `p`.`id` AND `city` = ?) FROM `products` `p` WHERE `category` = ?";
		$query = $CI->db->query($sql, array($city, $category));
		$result = $query->result_array();

		return $result;
	}

	public static function add_product_category($name, $description, $img, $main_category = NULL)
	{
		$CI = & get_instance();
		$sql = 'INSERT INTO `product_category` (`name`, `description`, `img`, `main_category`, `date`) VALUES (?, ?, ?, ?, ?)';
		$CI->db->query($sql, array($name, $description, $img, $main_category, date('Y-m-d H:i:s')));
	}

	public static function update_product_category($name, $description, $img, $id)
	{
		$CI = & get_instance();
		$sql = "UPDATE `product_category` SET  `name` = ?, `description` = ?, `img` = ? WHERE `id` = ?";
		$CI->db->query($sql, array($name, $description, $img, $id));
	}

	public static function delete_product_category($id)
	{
		$CI = & get_instance();
		$sql = "DELETE FROM `product_category` WHERE `id` = ?";
		$CI->db->query($sql, array($id));
	}

	public static function load_categories($id = NULL)
	{
		$CI = & get_instance();
		if ($id == NULL) {
			$sql = "SELECT * FROM `product_category` WHERE `main_category` IS NULL";
			$query = $CI->db->query($sql);
			$rows = $query->result_array();
			$result = array();
			foreach ($rows AS $row){
				$sql = 'SELECT * FROM `product_category` WHERE `main_category` = ?';
				$query = $CI->db->query($sql, $row['id']);
				$sub_categories = $query->result_array();
				$row['sub_categories'] = $sub_categories;
				$result[] = $row;
			}
		} elseif ($id != NULL) {
			$sql = "SELECT * FROM `product_category` WHERE id = ?";
			$query = $CI->db->query($sql, array($id));
			$result = $query->row_array();
		}

		return $result;
	}
	public static function load_categories2(){
		$CI = & get_instance();
		$sql = "SELECT * FROM `product_category`";
		$query = $CI->db->query($sql);
		$result = $query->result_array();

		return $result;
	}

	public static function save_product_price($product_id, $city, $price)
	{
		$CI = & get_instance();
		$sql = 'INSERT INTO `product_prices`(`product_id`, `city`, `price`) VALUES (?,?,?)';
		$CI->db->query($sql, array($product_id, $city, $price));
	}

	public static function load_price($product_id, $city)
	{
		$CI = & get_instance();
		$sql = 'SELECT `price` FROM `product_prices` WHERE `product_id` = ? AND `city` = ?';
		$query = $CI->db->query($sql, array($product_id, $city));
		$result = $query->row_array();

		return $result;
	}

	public static function load_product_prices($product_id, $user_city = NULL)
	{
		$CI = & get_instance();
		if ($user_city == NULL) {
			$sql = 'SELECT `price`, `city` FROM `product_prices` WHERE `product_id` = ?';
			$query = $CI->db->query($sql, array($product_id));
			$result = $query->result_array();
		} else {
			$sql = 'SELECT `price`, `city` FROM `product_prices` WHERE `product_id` = ? AND `city` = ?';
			$query = $CI->db->query($sql, array($product_id, $user_city));
			$result = $query->row_array();
		}

		return $result;
	}

	public static function update_product_price($product_id, $city, $price)
	{
		$CI = & get_instance();
		//check if isset
		$sql_check = 'SELECT `id` FROM `product_prices` WHERE `product_id` = ? AND `city` = ?';
		$query = $CI->db->query($sql_check, array($product_id, $city));
		$res = $query->row_array();
		if(isset($res)){
			$sql = 'UPDATE `product_prices` SET `price` = ? WHERE `product_id` = ? AND `city` = ?';
			$CI->db->query($sql, array($price, $product_id, $city));
		}else{
			$sql = 'INSERT INTO `product_prices`(`price`, `product_id`, `city`) VALUES(?, ?, ?)';
			$CI->db->query($sql, array($price, $product_id, $city));
		}

	}

	public static function update_meta_product($title, $meta, $id){
		$CI = & get_instance();
		$sql = 'UPDATE `products` SET `title` = ?, `meta` = ? WHERE `id` = ?';
		$CI->db->query($sql, array($title, $meta, $id));
	}

	public static function update_meta_category($title, $meta, $id){
		$CI = & get_instance();
		$sql = 'UPDATE `product_category` SET `title` = ?, `meta` = ? WHERE `id` = ?';
		$CI->db->query($sql, array($title, $meta, $id));
	}

	public static function save_oneclick($block1, $block2, $block3, $block4, $block5, $block6, $slab){
		$CI = & get_instance();
		$sql = 'UPDATE `oneclick` SET `block_price_1` = ?, `block_price_2` = ?, `block_price_3` = ?, `block_price_4` = ?, `block_price_5` = ?, `block_price_6` = ?, `slab_price` = ?';
		$CI->db->query($sql, array($block1, $block2, $block3, $block4, $block5, $block6, $slab));
	}

	public static function load_oneclick(){
		$CI = & get_instance();
		$sql = 'SELECT * FROM `oneclick`';
		$query = $CI->db->query($sql);
		$result = $query->row_array();

		return $result;
	}

}