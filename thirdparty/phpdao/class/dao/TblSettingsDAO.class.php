<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-02-03 06:56
 */
interface TblSettingsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblSettings 
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
 	 * @param tblSetting primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblSettings tblSetting
 	 */
	public function insert($tblSetting);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblSettings tblSetting
 	 */
	public function update($tblSetting);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByMKey($value);

	public function queryByValue($value);


	public function deleteByMKey($value);

	public function deleteByValue($value);


}
?>