<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return TblBannerDAO
	 */
	public static function getTblBannerDAO(){
		return new TblBannerMySqlExtDAO();
	}

	/**
	 * @return TblBoardMembersDAO
	 */
	public static function getTblBoardMembersDAO(){
		return new TblBoardMembersMySqlExtDAO();
	}

	/**
	 * @return TblCategoryDAO
	 */
	public static function getTblCategoryDAO(){
		return new TblCategoryMySqlExtDAO();
	}

	/**
	 * @return TblContentDAO
	 */
	public static function getTblContentDAO(){
		return new TblContentMySqlExtDAO();
	}

	/**
	 * @return TblCoverageDAO
	 */
	public static function getTblCoverageDAO(){
		return new TblCoverageMySqlExtDAO();
	}

	/**
	 * @return TblLinksDAO
	 */
	public static function getTblLinksDAO(){
		return new TblLinksMySqlExtDAO();
	}

	/**
	 * @return TblMenuDAO
	 */
	public static function getTblMenuDAO(){
		return new TblMenuMySqlExtDAO();
	}

	/**
	 * @return TblNewsDAO
	 */
	public static function getTblNewsDAO(){
		return new TblNewsMySqlExtDAO();
	}

	/**
	 * @return TblSettingsDAO
	 */
	public static function getTblSettingsDAO(){
		return new TblSettingsMySqlExtDAO();
	}

	/**
	 * @return TblSignupsDAO
	 */
	public static function getTblSignupsDAO(){
		return new TblSignupsMySqlExtDAO();
	}

	/**
	 * @return TblSocialDAO
	 */
	public static function getTblSocialDAO(){
		return new TblSocialMySqlExtDAO();
	}

	/**
	 * @return TblStudentDAO
	 */
	public static function getTblStudentDAO(){
		return new TblStudentMySqlExtDAO();
	}


}
?>