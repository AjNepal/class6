<?php
/**
 * Class that operate on table 'tbl_coverage'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-01-27 07:51
 */
class TblCoverageMySqlDAO implements TblCoverageDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblCoverageMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_coverage WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_coverage';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_coverage ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblCoverage primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_coverage WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblCoverageMySql tblCoverage
 	 */
	public function insert($tblCoverage){
		$sql = 'INSERT INTO tbl_coverage (location_name, lat, lng, infowindo_text) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblCoverage->locationName);
		$sqlQuery->set($tblCoverage->lat);
		$sqlQuery->set($tblCoverage->lng);
		$sqlQuery->set($tblCoverage->infowindoText);

		$id = $this->executeInsert($sqlQuery);	
		$tblCoverage->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblCoverageMySql tblCoverage
 	 */
	public function update($tblCoverage){
		$sql = 'UPDATE tbl_coverage SET location_name = ?, lat = ?, lng = ?, infowindo_text = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblCoverage->locationName);
		$sqlQuery->set($tblCoverage->lat);
		$sqlQuery->set($tblCoverage->lng);
		$sqlQuery->set($tblCoverage->infowindoText);

		$sqlQuery->setNumber($tblCoverage->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_coverage';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByLocationName($value){
		$sql = 'SELECT * FROM tbl_coverage WHERE location_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLat($value){
		$sql = 'SELECT * FROM tbl_coverage WHERE lat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLng($value){
		$sql = 'SELECT * FROM tbl_coverage WHERE lng = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInfowindoText($value){
		$sql = 'SELECT * FROM tbl_coverage WHERE infowindo_text = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByLocationName($value){
		$sql = 'DELETE FROM tbl_coverage WHERE location_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLat($value){
		$sql = 'DELETE FROM tbl_coverage WHERE lat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLng($value){
		$sql = 'DELETE FROM tbl_coverage WHERE lng = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInfowindoText($value){
		$sql = 'DELETE FROM tbl_coverage WHERE infowindo_text = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblCoverageMySql 
	 */
	protected function readRow($row){
		$tblCoverage = new TblCoverage();
		
		$tblCoverage->id = $row['id'];
		$tblCoverage->locationName = $row['location_name'];
		$tblCoverage->lat = $row['lat'];
		$tblCoverage->lng = $row['lng'];
		$tblCoverage->infowindoText = $row['infowindo_text'];

		return $tblCoverage;
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
	 * @return TblCoverageMySql 
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