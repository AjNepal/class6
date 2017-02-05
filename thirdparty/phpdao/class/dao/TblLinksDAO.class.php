<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-02-03 06:56
 */
interface TblLinksDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblLinks 
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
 	 * @param tblLink primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblLinks tblLink
 	 */
	public function insert($tblLink);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblLinks tblLink
 	 */
	public function update($tblLink);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTitle($value);

	public function queryByLinkUrl($value);


	public function deleteByTitle($value);

	public function deleteByLinkUrl($value);


}
?>