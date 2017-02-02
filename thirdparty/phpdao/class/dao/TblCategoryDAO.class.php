<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-01-27 07:52
 */
interface TblCategoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblCategory 
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
 	 * @param tblCategory primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblCategory tblCategory
 	 */
	public function insert($tblCategory);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblCategory tblCategory
 	 */
	public function update($tblCategory);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTitle($value);

	public function queryByPrice($value);


	public function deleteByTitle($value);

	public function deleteByPrice($value);


}
?>