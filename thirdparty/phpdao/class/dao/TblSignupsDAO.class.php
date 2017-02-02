<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-01-27 07:52
 */
interface TblSignupsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblSignups 
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
 	 * @param tblSignup primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblSignups tblSignup
 	 */
	public function insert($tblSignup);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblSignups tblSignup
 	 */
	public function update($tblSignup);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByEmail($value);

	public function queryBySignupDate($value);


	public function deleteByEmail($value);

	public function deleteBySignupDate($value);


}
?>