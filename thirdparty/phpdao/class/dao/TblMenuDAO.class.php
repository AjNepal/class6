<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-02-03 06:56
 */
interface TblMenuDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblMenu 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param tblMenu primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblMenu tblMenu
 	 */
	public function insert($tblMenu);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblMenu tblMenu
 	 */
	public function update($tblMenu);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTitle($value);

	public function queryByLink($value);

	public function queryByPosition($value);

	public function queryByImage($value);


	public function deleteByTitle($value);

	public function deleteByLink($value);

	public function deleteByPosition($value);

	public function deleteByImage($value);


}
?>