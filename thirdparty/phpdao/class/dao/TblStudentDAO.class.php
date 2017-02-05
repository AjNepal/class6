<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-02-03 06:56
 */
interface TblStudentDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblStudent 
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
 	 * @param tblStudent primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblStudent tblStudent
 	 */
	public function insert($tblStudent);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblStudent tblStudent
 	 */
	public function update($tblStudent);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryByEmail($value);

	public function queryByPhone($value);


	public function deleteByName($value);

	public function deleteByEmail($value);

	public function deleteByPhone($value);


}
?>