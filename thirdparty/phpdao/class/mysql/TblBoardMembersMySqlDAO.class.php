<?php
/**
 * Class that operate on table 'tbl_board_members'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-01-27 07:51
 */
class TblBoardMembersMySqlDAO implements TblBoardMembersDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblBoardMembersMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_board_members WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_board_members';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_board_members ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblBoardMember primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_board_members WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblBoardMembersMySql tblBoardMember
 	 */
	public function insert($tblBoardMember){
		$sql = 'INSERT INTO tbl_board_members (full_name, title, image, content) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblBoardMember->fullName);
		$sqlQuery->set($tblBoardMember->title);
		$sqlQuery->set($tblBoardMember->image);
		$sqlQuery->set($tblBoardMember->content);

		$id = $this->executeInsert($sqlQuery);	
		$tblBoardMember->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblBoardMembersMySql tblBoardMember
 	 */
	public function update($tblBoardMember){
		$sql = 'UPDATE tbl_board_members SET full_name = ?, title = ?, image = ?, content = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblBoardMember->fullName);
		$sqlQuery->set($tblBoardMember->title);
		$sqlQuery->set($tblBoardMember->image);
		$sqlQuery->set($tblBoardMember->content);

		$sqlQuery->setNumber($tblBoardMember->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_board_members';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFullName($value){
		$sql = 'SELECT * FROM tbl_board_members WHERE full_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTitle($value){
		$sql = 'SELECT * FROM tbl_board_members WHERE title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByImage($value){
		$sql = 'SELECT * FROM tbl_board_members WHERE image = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByContent($value){
		$sql = 'SELECT * FROM tbl_board_members WHERE content = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFullName($value){
		$sql = 'DELETE FROM tbl_board_members WHERE full_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTitle($value){
		$sql = 'DELETE FROM tbl_board_members WHERE title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByImage($value){
		$sql = 'DELETE FROM tbl_board_members WHERE image = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByContent($value){
		$sql = 'DELETE FROM tbl_board_members WHERE content = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblBoardMembersMySql 
	 */
	protected function readRow($row){
		$tblBoardMember = new TblBoardMember();
		
		$tblBoardMember->id = $row['id'];
		$tblBoardMember->fullName = $row['full_name'];
		$tblBoardMember->title = $row['title'];
		$tblBoardMember->image = $row['image'];
		$tblBoardMember->content = $row['content'];

		return $tblBoardMember;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return TblBoardMembersMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>