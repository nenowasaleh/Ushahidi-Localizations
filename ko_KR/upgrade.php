<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2012-09-11 12:05+0000
// PO revision date:  2012-09-02 01:15+0000
$lang = array(
	'upgrade' => array(
		'between' => '데이터가 형식에 맞지 않습니다. 아니오는 0을 예는 1을 입력해주세요.',
	) ,
	'upgrade_automatic' => '자동업그레이드',
	'upgrade_available' => '업데이트사용가능',
	'upgrade_continue_btn_text' => '계속',
	'upgrade_db_btn_text' => '업그레이드',
	'upgrade_db_text_1' => '지금부터 데이터베이스 업그레이드가 시작됩니다.',
	'upgrade_db_text_2' => '새로운 데이터베이스버전으로',
	'upgrade_db_text_3' => '업그레이드 버튼을 클릭하면 마술과 같은 일이 벌어집니다.',
	'upgrade_db_text_4' => '만약, 데이터베이스 백업을 원하면 아래 해당 사항을 체크해 주세요.',
	'upgrade_db_text_5' => '업그레이드전 데이터베이스를 백업하시겠습니까?(<strong style="color:#FF0000;">하시는 것을 강력히 추천합니다 :) </strong>)',
	'upgrade_db_title' => '우샤히디 데이터베이스 업그레이드',
	'upgrade_db_info' => '우샤히디가 업데이트되었습니다! 계속하기 전에, 데이터베이스를 가장 최신 버전으로 업데이트 해주세요(%s).',
	'upgrade_db_up_to_date' => '현재 버전이 가장 최신입니다.',
	'upgrade_failed' => '업그레이드가 특정 포인트에서 실패 했습니다',
	'upgrade_manual' => '수동 업그레이드',
	'upgrade_status' => '우샤히디 업그레이드 상태',
	'upgrade_text_1' => '아래에서 수동 업그레이드 방법을 설명해 놓았습니다.',
	'upgrade_text_2' => '<dl><dt><strong>다운로드</strong></dt>',
	'upgrade_text_3' => '<dd>- 최신 우샤히디 버전을 다운로드',
	'upgrade_text_4' => '<dt><strong>Backup</strong></dt><dd>- .htaccess, ./applications/config/config.php, ./applications/config/database.php and ./applications/config/auth.php files. </dd><dd>- 문제가 생길 수 있으므로, 사전에 백업을 하시는 것을 추천합니다.</dd><dt><strong>파일복사</strong></dt><dd>- 다운로드 된 zip 파일 압축해제</dd><dd>- 웹서버의 운영체제에 따라 원하는 도구나 모드(예. 텔넷, FTP, SSH)를 사용해서 웹서버에 로그인해서 파일과 폴더를 새로운 파일로 교체해주세요. </dd><dt><strong>업그레이드 데이터베이스</strong></dt><dd>- 가장 먼저 데이터베이스 스키마 버전 
 <strong>db_version</strong> 값을 셋팅 테이블 안에서 확인하거나 이 페이지의 상단에서 확인할 수 있습니다. </dd><dd>- 만약 25버전이면, 25-26, 26-27, 27-28 처럼 <strong>/sql</strong> 디렉토리를 가장 최근의 SQL 파일로 업그레이드 할 필요가 있습니다.</dd><dd>- 데이터베이스 클라이언트로 upgradex-x.sql를 실행하여 업그레이드 할 수도 있습니다.</dd></dl>',
	'upgrade_tables' => '<strong>Step 3:</strong> <strong>sql</strong> 를 보세요. 
<xx>-<xx>.sql을 시작시키면 가장 최근의 파일로 업그레이드 됩니다.',
	'upgrade_text_5' => '<strong>Step 4:</strong> <strong>"계속"</strong> 을 클릭하면, 필요한 테이블이 업그레이드 됩니다.',
	'upgrade_text_6' => '자동업그레이드는 아래의 버튼을 클릭해주세요.',
	'upgrade_title_text' => '현재 사용중인 우샤히디 버전은 v%s 이고, 데이터베이스 버전은 %d 이며, %s 에서 구동되고 있습니다.',
	'upgrading' => '업그레이드중',
	'upgrade_ftp_text' => '쉬운 업그레이드를 위해서는 현재 당신의 웹사이트가 호스팅되는 서버에서 사용하는 FTP 정보가 필요합니다.',
	'upgrade_ftp_hostname' => 'FTP 호스트이름: <span>예시: "localhost"</span>',
	'upgrade_ftp_password' => 'FTP 암호:',
	'upgrade_ftp_username' => 'FTP 사용자명:',
	'upgrade_status_info' => '현재 버전이 가장 최근의 우샤히디 입니다.',
	'upgrade_status_info_2' => '업그레이드 할 필요가 없습니다.',
	'upgrade_db_version' => '데이터베이스 버전: %d',
	'upgrade_warning_software_version' => '경고: version.php의 소프트웨어버전이 데이터베이스와 맞지 않습니다.',
	'upgrade_warning_db_version' => '경고: version.php의 데이터베이스버전이 데이터베이스와 맞지 않습니다.',
	'upgrade_database' => '데이터베이스:',
	'ushahidi_release_version' => '우샤히디 %s',
	'beta' => '베타!',
	'download' => '가장 최근의 우샤히디를 다운로드 중......',
	'log_file' => '로그 파일',
	'successfully_downloaded' => '다운로드 성공. 압축해제중......',
	'failed_downloading' => '다운로드 실패.',
	'successfully_unpacked' => '압축해제성공. 파일복사중......',
	'failed_unpacking' => '압축해제 실패.',
	'successfully_copied' => '파일복사 성공. 데이터베이스 업그레이드 중......',
	'failed_copying' => '파일복사 실패.',
	'backup_success' => '데이터베이스 백업 및 업그레이드 성공.',
	'backup_failed' => '데이터베이스 백업 실패.',
	'dbupgrade_success' => '데이터베이스 업그레이드 성공.',
	'deleting_files' => '다운로드 파일 삭제중......',
	'upgrade_success' => '업그레이드 성공.  <a href="%s" target="_blank">로그파일</a>',
);
