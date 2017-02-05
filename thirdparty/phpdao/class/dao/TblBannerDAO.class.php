<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-02-03 06:56
 */
interface TblBannerDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblBanner 
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
 	 * @param tblBanner primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblBanner tblBanner
 	 */
	public function insert($tblBanner);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblBanner tblBanner
 	 */
	public function update($tblBanner);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTitle($value);

	public function queryByBtnText($value);

	public function queryByBtnLink($value);

	public function queryByMOrder($value);


	public function deleteByTitle($value);

	public function deleteByBtnText($value);

	public function deleteByBtnLink($value);

	public function deleteByMOrder($value);


}
?>