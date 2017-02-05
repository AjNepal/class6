<?php
/**
 * Class that operate on table 'tbl_banner'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-02-03 06:55
 */
class TblBannerMySqlDAO implements TblBannerDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblBannerMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_banner WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_banner';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_banner ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblBanner primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_banner WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblBannerMySql tblBanner
 	 */
	public function insert($tblBanner){
		$sql = 'INSERT INTO tbl_banner (title, btn_text, btn_link, m_order) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblBanner->title);
		$sqlQuery->set($tblBanner->btnText);
		$sqlQuery->set($tblBanner->btnLink);
		$sqlQuery->setNumber($tblBanner->mOrder);

		$id = $this->executeInsert($sqlQuery);	
		$tblBanner->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblBannerMySql tblBanner
 	 */
	public function update($tblBanner){
		$sql = 'UPDATE tbl_banner SET title = ?, btn_text = ?, btn_link = ?, m_order = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblBanner->title);
		$sqlQuery->set($tblBanner->btnText);
		$sqlQuery->set($tblBanner->btnLink);
		$sqlQuery->setNumber($tblBanner->mOrder);

		$sqlQuery->setNumber($tblBanner->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_banner';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTitle($value){
		$sql = 'SELECT * FROM tbl_banner WHERE title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBtnText($value){
		$sql = 'SELECT * FROM tbl_banner WHERE btn_text = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBtnLink($value){
		$sql = 'SELECT * FROM tbl_banner WHERE btn_link = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMOrder($value){
		$sql = 'SELECT * FROM tbl_banner WHERE m_order = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTitle($value){
		$sql = 'DELETE FROM tbl_banner WHERE title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBtnText($value){
		$sql = 'DELETE FROM tbl_banner WHERE btn_text = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBtnLink($value){
		$sql = 'DELETE FROM tbl_banner WHERE btn_link = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMOrder($value){
		$sql = 'DELETE FROM tbl_banner WHERE m_order = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblBannerMySql 
	 */
	protected function readRow($row){
		$tblBanner = new TblBanner();
		
		$tblBanner->id = $row['id'];
		$tblBanner->title = $row['title'];
		$tblBanner->btnText = $row['btn_text'];
		$tblBanner->btnLink = $row['btn_link'];
		$tblBanner->mOrder = $row['m_order'];

		return $tblBanner;
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
	 * @return TblBannerMySql 
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