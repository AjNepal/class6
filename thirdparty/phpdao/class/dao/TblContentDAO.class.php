<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-02-03 06:56
 */
interface TblContentDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblContent 
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
 	 * @param tblContent primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblContent tblContent
 	 */
	public function insert($tblContent);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblContent tblContent
 	 */
	public function update($tblContent);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTitle($value);

	public function queryByContent($value);

	public function queryByImage($value);


	public function deleteByTitle($value);

	public function deleteByContent($value);

	public function deleteByImage($value);


}
?>