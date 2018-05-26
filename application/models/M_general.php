<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_general extends CI_Model
{
	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	// Query Data from Table with Order;
	public function getDataAll($table, $order_column, $order_type)
	{
	    $this->db->order_by("$order_column", "$order_type");
	    $query = $this->db->get("$table");
	    $result = $query->result();
	    $this->db->save_queries = false;

	    return $result;
	}

	// Query Data from Table with where and Order;
	public function getDataAllWhere($table, $where, $order_column, $order_type)
	{
	    foreach ($where as $key => $value) {
	    	$this->db->where($key, $value);
	    }
	    $this->db->order_by("$order_column", "$order_type");
	    $query = $this->db->get("$table");
	    $result = $query->result();
	    $this->db->save_queries = false;

	    return $result;
	}

	// Query Data from Table by One Columns;
	public function getDataOneColumn($table, $col1_name, $col1_value)
	{
	    $this->db->where("$col1_name", $col1_value);

	    $query = $this->db->get("$table");
	    $result = $query->result();
	    $this->db->save_queries = false;

	    return $result;
	}

	// Query Data from Table By two columns;
	public function getDataTwoColumn($table, $col1_name, $col1_value, $col2_name, $col2_value)
	{
	    $this->db->where("$col1_name", $col1_value);
	    $this->db->where("$col2_name", $col2_value);

	    $query = $this->db->get("$table");
	    $result = $query->result();
	    $this->db->save_queries = false;

	    return $result;
	}

	// Query Data from Table by One Columns and Sort;
	public function getDataOneColumnSortColumn($table, $col1_name, $col1_value, $sort_column, $sort_type)
	{
	    $this->db->where("$col1_name", $col1_value);

	    $this->db->order_by("$sort_column", "$sort_type");
	    $query = $this->db->get("$table");
	    $result = $query->result();
	    $this->db->save_queries = false;

	    return $result;
	}

	// Query Data from Table by One Columns and Sort;
	public function getDataTwoColumnSortColumn($table, $col1_name, $col1_value, $col2_name, $col2_value, $sort_column, $sort_type)
	{
	    $this->db->where("$col1_name", $col1_value);
	    $this->db->where("$col2_name", $col2_value);

	    $this->db->order_by("$sort_column", "$sort_type");
	    $query = $this->db->get("$table");
	    $result = $query->result();
	    $this->db->save_queries = false;

	    return $result;
	}

	// Query data all column with where
	public function getDataWhere($table, $where)
	{
		$this->db->select();
		$this->db->from("$table");
		foreach ($where as $key => $value) {
			$this->db->where($key, $value);
		}
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	// Query data for dropdown (<select> tag)
	public function getDataDropdown($table, $id, $name)
	{
		$this->db->select("
			$id as `id`,
			$name as `text`
		");
		$this->db->from("$table");
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function getDataDropdownWhere($table, $id, $name, $where)
	{
		$this->db->select("
			$id as `id`,
			$name as `text`
		");
		$this->db->from("$table");
		foreach ($where as $key => $value) {
			$this->db->where($key, $value);
		}
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	// Not Equal To;
	public function twoColumnNotEqual($table, $col1_name, $col1_value, $col2_name, $col2_value)
	{
	    $this->db->where("$col1_name", $col1_value);
	    $this->db->where("$col2_name != ", $col2_value);

	    $query = $this->db->get("$table");
	    $result = $query->result();
	    $this->db->save_queries = false;

	    return $result;
	}

	// Insert Data to Any Table;
	public function insertData($table, $data)
	{
	    return $this->db->insert("$table", $data);
	}

	// Insert Data to Any Table and get the last id;
	public function insertDataReturnLastId($table, $data)
	{
	    $this->db->insert("$table", $data);

	    return $this->db->insert_id();
	}

	// Update Data to Any Table;
	public function updateData($table, $data, $id)
	{
	    $this->db->where($id['name'], $id['id']);
	    $this->db->update("$table", $data);

	    if ($this->db->affected_rows()) {
	    	return true;
	    } else {
	    	return false;
	    }
	}

	// Delete Data from Any Table;
	public function deleteData($table, $id)
	{
	    $this->db->where($id['name'], $id['id']);
	    return $this->db->delete("$table");
	}

	public function deleteByColumn($table, $col_name, $col_value)
	{
	    $this->db->where("$col_name", $col_value);
	    return $this->db->delete("$table");
	}
}
