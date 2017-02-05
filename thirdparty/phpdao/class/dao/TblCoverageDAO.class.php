<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-02-03 06:56
 */
interface TblCoverageDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblCoverage 
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
 	 * @param tblCoverage primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblCoverage tblCoverage
 	 */
	public function insert($tblCoverage);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblCoverage tblCoverage
 	 */
	public function update($tblCoverage);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByLocationName($value);

	public function queryByLat($value);

	public function queryByLng($value);

	public function queryByInfowindowText($value);


	public function deleteByLocationName($value);

	public function deleteByLat($value);

	public function deleteByLng($value);

	public function deleteByInfowindowText($value);


}
?>