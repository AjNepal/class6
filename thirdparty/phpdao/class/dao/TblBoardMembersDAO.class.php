<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-01-27 07:52
 */
interface TblBoardMembersDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblBoardMembers 
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
 	 * @param tblBoardMember primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblBoardMembers tblBoardMember
 	 */
	public function insert($tblBoardMember);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblBoardMembers tblBoardMember
 	 */
	public function update($tblBoardMember);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFullName($value);

	public function queryByTitle($value);

	public function queryByImage($value);

	public function queryByContent($value);


	public function deleteByFullName($value);

	public function deleteByTitle($value);

	public function deleteByImage($value);

	public function deleteByContent($value);


}
?>