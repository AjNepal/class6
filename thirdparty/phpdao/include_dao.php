<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/TblAdminDAO.class.php');
	require_once('class/dto/TblAdmin.class.php');
	require_once('class/mysql/TblAdminMySqlDAO.class.php');
	require_once('class/mysql/ext/TblAdminMySqlExtDAO.class.php');
	require_once('class/dao/TblBannerDAO.class.php');
	require_once('class/dto/TblBanner.class.php');
	require_once('class/mysql/TblBannerMySqlDAO.class.php');
	require_once('class/mysql/ext/TblBannerMySqlExtDAO.class.php');
	require_once('class/dao/TblBoardMembersDAO.class.php');
	require_once('class/dto/TblBoardMember.class.php');
	require_once('class/mysql/TblBoardMembersMySqlDAO.class.php');
	require_once('class/mysql/ext/TblBoardMembersMySqlExtDAO.class.php');
	require_once('class/dao/TblCategoryDAO.class.php');
	require_once('class/dto/TblCategory.class.php');
	require_once('class/mysql/TblCategoryMySqlDAO.class.php');
	require_once('class/mysql/ext/TblCategoryMySqlExtDAO.class.php');
	require_once('class/dao/TblContentDAO.class.php');
	require_once('class/dto/TblContent.class.php');
	require_once('class/mysql/TblContentMySqlDAO.class.php');
	require_once('class/mysql/ext/TblContentMySqlExtDAO.class.php');
	require_once('class/dao/TblCoverageDAO.class.php');
	require_once('class/dto/TblCoverage.class.php');
	require_once('class/mysql/TblCoverageMySqlDAO.class.php');
	require_once('class/mysql/ext/TblCoverageMySqlExtDAO.class.php');
	require_once('class/dao/TblLinksDAO.class.php');
	require_once('class/dto/TblLink.class.php');
	require_once('class/mysql/TblLinksMySqlDAO.class.php');
	require_once('class/mysql/ext/TblLinksMySqlExtDAO.class.php');
	require_once('class/dao/TblMenuDAO.class.php');
	require_once('class/dto/TblMenu.class.php');
	require_once('class/mysql/TblMenuMySqlDAO.class.php');
	require_once('class/mysql/ext/TblMenuMySqlExtDAO.class.php');
	require_once('class/dao/TblNewsDAO.class.php');
	require_once('class/dto/TblNew.class.php');
	require_once('class/mysql/TblNewsMySqlDAO.class.php');
	require_once('class/mysql/ext/TblNewsMySqlExtDAO.class.php');
	require_once('class/dao/TblSettingsDAO.class.php');
	require_once('class/dto/TblSetting.class.php');
	require_once('class/mysql/TblSettingsMySqlDAO.class.php');
	require_once('class/mysql/ext/TblSettingsMySqlExtDAO.class.php');
	require_once('class/dao/TblSignupsDAO.class.php');
	require_once('class/dto/TblSignup.class.php');
	require_once('class/mysql/TblSignupsMySqlDAO.class.php');
	require_once('class/mysql/ext/TblSignupsMySqlExtDAO.class.php');
	require_once('class/dao/TblSocialDAO.class.php');
	require_once('class/dto/TblSocial.class.php');
	require_once('class/mysql/TblSocialMySqlDAO.class.php');
	require_once('class/mysql/ext/TblSocialMySqlExtDAO.class.php');
	require_once('class/dao/TblStudentDAO.class.php');
	require_once('class/dto/TblStudent.class.php');
	require_once('class/mysql/TblStudentMySqlDAO.class.php');
	require_once('class/mysql/ext/TblStudentMySqlExtDAO.class.php');

?>