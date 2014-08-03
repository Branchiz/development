<?php
/* $Id: korean-euc-kr.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/* Translated by WooSuhan <kjh@unews.NOSPAM.co.kr> */

$charset = 'euc-kr';
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('일', '월', '화', '수', '목', '금', '토');
$month = array('해오름달', '시샘달', '물오름달', '잎새달', '푸른달', '누리달', '견우직녀달', '타오름달', '열매달', '하늘연달', '미틈달', '매듭달');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
// $datefmt = '%y년 %B %d일 %p %I:%M ';
$datefmt = '%y-%m-%d %H:%M ';
$timespanfmt = '%s days, %s hours, %s minutes and %s seconds';

$strAccessDenied = '접근이 거부되었습니다.';
$strAction = '실행';
$strAddDeleteColumn = '열(칼럼) 추가/삭제';
$strAddDeleteRow = 'Criteria 행(레코드) 추가/삭제';
$strAddNewField = '필드 추가하기';
$strAddPrivilegesOnDb = '다음 데이터베이스에 권한 추가하기';
$strAddPrivilegesOnTbl = '다음 테이블에 권한 추가하기';
$strAddSearchConditions = '검색 조건 추가 ("where" 조건):';
$strAddToIndex = '%s개 열(칼럼)에 인덱스 추가';
$strAddUser = '새 사용자 추가';
$strAddUserMessage = '새 사용자를 추가했습니다.';
$strAffectedRows = '적용된 행(레코드):';
$strAfterInsertBack = '되돌아가기';
$strAfterInsertNewInsert = '새 행(레코드) 삽입하기';
$strAfter = '%s 다음에';
$strAllTableSameWidth = '모든 테이블을 같은 너비로 출력할까요?';
$strAlterOrderBy = '다음 순서대로 테이블 정렬(변경)';
$strAnalyzeTable = '테이블 분석';
$strAnd = '그리고';
$strAnIndex = '%s 에 인덱스가 걸렸습니다';
$strAnyHost = '아무데서나';
$strAnyUser = '아무나';
$strAPrimaryKey = ' %s에 기본 키가 추가되었습니다';
$strAscending = '오름차순';
$strAtBeginningOfTable = '테이블의 처음';
$strAtEndOfTable = '테이블의 마지막';
$strAttr = '보기';

$strBack = '뒤로';
$strBinary = '바이너리';
$strBinaryDoNotEdit = ' 바이너리 - 편집 금지 ';
$strBookmarkDeleted = '북마크를 제거했습니다.';
$strBookmarkQuery = '북마크된 SQL 질의';
$strBookmarkThis = '이 SQL 질의를 북마크함';
$strBrowse = '보기';
$strBzError = '이 php 버전의 Bz2 확장모듈이 깨졌기 때문에 phpMyAdmin이 덤프파일을 압축할 수 없습니다. 환경설정파일에서<code>$cfg[\'BZipDump\']</code>를 <code>FALSE</code>로 설정하십시오. 만약 Bz2 압축을 사용하고자 한다면, php버전을 업그레이드해야 합니다. 자세한 내용은 php 버그 리포트 %s 를 보십시오.';
$strBzip = '"bz 압축"';

$strCannotLogin = 'MySQL 서버에 로그인할 수 없습니다';
$strCantLoad = ' %s 확장모듈을 불러올 수 없습니다.<br />PHP 환경설정을 검사하십시오.';
$strCantRenameIdxToPrimary = '인덱스 이름을 기본 키로 바꿀 수 없습니다!';
$strChange = '변경';
$strChangeDisplay = '출력할 필드 선택';
$strChangePassword = '암호 변경';
$strCharsetOfFile = '파일 문자셋:';
$strCheckAll = '모두 체크';
$strCheckPrivs = '사용권한 보기';
$strCheckPrivsLong = '데이터베이스 &quot;%s&quot; 에 대한 사용권한 검사.';
$strCheckTable = '테이블 검사';
$strChoosePage = '편집할 페이지를 선택하세요';
$strColComFeat = '열(칼럼) 설명(코멘트) 출력하기';
$strColumnNames = '열(칼럼) 이름';
$strColumnPrivileges = '열(칼럼)에 관한 권한';
$strComments = '설명(코멘트)';
$strCompleteInserts = '완전한 INSERT문 작성';
$strCompression = '압축';
$strConfigFileError = 'phpMyAdmin이 환경설정 파일을 읽을 수 없습니다!<br />PHP에 에러가 있거나 실제로 그 파일이 없는 경우입니다.<br />아래 링크를 통해 환경설정 파일만 불러들여보십시오. 그리고 PHP 에러 메시지를 확인하십시오. 어딘가에 따옴표(quote)나 세미콜론(;)이 빠져있는 경우가 종종 있습니다.<br />만약 아무것도 보이지 않으면, 정상적인 것입니다.';
$strConnections = '연결 수';
$strCopyTable = '테이블 복사 (데이터베이스명<b>.</b>테이블명):';
$strCopyTableOK = '%s 테이블이 %s 으로 복사되었습니다.';
$strCreate = ' 만들기 ';
$strCreateIndex = '%s 개 열(칼럼)에 인덱스 만들기 ';
$strCreateIndexTopic = '새 인덱스 만들기';
$strCreateNewDatabase = '새 데이터베이스 만들기';
$strCreateNewTable = '데이터베이스 %s에 새로운 테이블을 만듭니다.';
$strCreatePage = '새 페이지 만들기';

$strData = '데이터';
$strDatabase = '데이터베이스';
$strDatabaseHasBeenDropped = '데이터베이스 %s 를 제거했습니다.';
$strDatabases = '데이터베이스 ';
$strDatabasesDropped = '%s 데이터베이스를 삭제했습니다.';
$strDatabasesStats = '데이터베이스 사용량 통계';
$strDatabasesStatsDisable = '통계 숨기기';
$strDatabasesStatsEnable = '통계 보기';
$strDatabasesStatsHeavyTraffic = '주의: 데이터베이스 통계 보기는 웹서버와 MySQL 서버 사이에 큰 부하를 줍니다.';
$strDataDict = '데이터 사전 (전체 구조보기)';
$strDataOnly = '데이터만';
$strDbPrivileges = '데이터베이스에 관한 권한';
$strDefault = '기본값';
$strDefaultValueHelp = '기본값에는, 역슬래시나 따옴표 없이 단 하나의 값을 넣으십시오. (예: a)';
$strDelete = '삭제';
$strDeleteAndFlush = '사용자를 삭제하고 사용권한을 갱신함.';
$strDeleteAndFlushDescr = '가장 확실한 방법이지만, 사용권한 테이블을 다시 읽어들이는데는 약간의 시간이 걸립니다.';
$strDeleted = '선택한 줄(레코드)을 삭제 하였습니다.';
$strDeletedRows = '지워진 줄(레코드):';
$strDeleting = ' %s 을 삭제합니다';
$strDescending = '내림차순(역순)';
$strDisabled = '사용불가';
$strDisplayOrder = '출력 순서:';
$strDoAQuery = '다음으로 질의를 만들기 (와일드카드: "%")';
$strDocu = '도움말';
$strDoYouReally = '정말로 다음을 실행하시겠습니까? ';
$strDrop = '삭제';
$strDropUsersDb = '사용자명과 같은 이름의 데이터베이스를 삭제';
$strDumpingData = '테이블의 덤프 데이터';
$strDumpXRows = '%s개의 행(레코드)을 덤프 (%s번째 레코드부터).';
$strDynamic = '동적(다이내믹)';

$strEdit = '수정';
$strEditPDFPages = 'PDF 페이지 편집';
$strEditPrivileges = '권한 수정';
$strEffective = '실제량';
$strEmpty = '비우기';
$strEmptyResultSet = '결과값이 없습니다. (빈 레코드 리턴.)';
$strEnabled = '사용가능';
$strEnd = '마지막';
$strEnglishPrivileges = ' 주의: MySQL 권한 이름은 영어로 표기되어야 합니다. ';
$strError = '오류';
$strExplain = 'SQL 해석';
$strExport = '내보내기';
$strExtendedInserts = '확장된 inserts';
$strExtra = '추가';

$strFailedAttempts = '실패한 시도';
$strField = '필드';
$strFieldHasBeenDropped = '필드 %s 를 제거했습니다';
$strFields = '필드';
$strFieldsEnclosedBy = '필드 감싸기';
$strFieldsEscapedBy = '필드 특수문자(escape) 처리';
$strFieldsTerminatedBy = '필드 구분자 ';
$strFileCouldNotBeRead = '파일을 읽을 수 없습니다';
$strFileNameTemplate = '파일명 템플릿';
$strFileNameTemplateRemember = '템플릿 기억';
$strFlushTable = '테이블 닫기(캐시 삭제)';
$strFunction = '함수';

$strGenTime = '처리한 시간';
$strGlobalPrivileges = '전체적 권한';
$strGo = '실행';
$strGzip = 'gz 압축';

$strHasBeenAltered = '을(를) 변경하였습니다.';
$strHasBeenCreated = '을(를) 작성하였습니다.';
$strHaveToShow = '출력하려면 적어도 1개 이상의 열(칼럼)을 선택해야 합니다.';
$strHome = '시작페이지';
$strHomepageOfficial = 'phpMyAdmin 공식 홈';
$strHost = '호스트';
$strHostEmpty = '호스트명이 없습니다!';

$strIgnore = 'Ignore';
$strImportFiles = '파일 가져오기';
$strIndex = '인덱스';
$strIndexes = '인덱스';
$strIndexHasBeenDropped = '인덱스 %s 를 제거했습니다';
$strIndexName = '인덱스 이름:';
$strIndexType = '인덱스 종류:';
$strInsecureMySQL = '환경설정파일에 MySQL 관리자 암호가 없습니다. 이같은 기본설정상태로 MySQL 서버가 작동한다면 누구나 침입할 수 있으므로, 이 보안상 허점을 수정하시기 바랍니다.';
$strInsert = '삽입';
$strInsertAsNewRow = '새 열을 삽입합니다';
$strInsertedRows = '삽입된 열:';
$strInUse = '사용중';

$strJumpToDB = '데이터베이스 &quot;%s&quot; 로 이동.';
$strJustDelete = '권한 테이블에서 사용자를 삭제하기만 함.';
$strJustDeleteDescr = '사용권한이 갱신되기까지는 &quot;삭제된&quot; 사용자들도 여전히 서버를 사용할 수 있습니다.';

$strKeepPass = '암호를 변경하지 않음';
$strKeyname = '키 이름';
$strKill = 'Kill';

$strLengthSet = '길이/값*';
$strLimitNumRows = '페이지당 레코드 수';
$strLinesTerminatedBy = '줄(열) 구분자';
$strLocalhost = 'Local';
$strLocationTextfile = 'SQL 텍스트파일의 위치';
$strLogin = '로그인';
$strLoginInformation = '로그인 정보';
$strLogout = '로그아웃';
$strLogPassword = '암호:';
$strLogUsername = '사용자명:';

$strModifications = '수정된 내용이 저장되었습니다.';
$strModify = '수정';
$strModifyIndexTopic = '인덱스 수정';
$strMoveTable = '테이블 이동 (데이터베이스명<b>.</b>테이블명):';
$strMoveTableOK = '테이블 %s 을 %s 로 옮겼습니다.';
$strMySQLCharset = 'MySQL 문자셋';
$strMySQLSaid = 'MySQL 메시지: ';
$strMySQLShowProcess = 'MySQL 프로세스 보기';
$strMySQLShowStatus = 'MySQL 런타임 상태 보기';
$strMySQLShowVars = 'MySQL 환경설정값 보기';

$strName = '이름';
$strNext = '다음';
$strNo = ' 아니오 ';
$strNoDatabases = '데이터베이스가 없습니다';
$strNoDatabasesSelected = '데이터베이스를 선택하지 않았습니다.';
$strNoDescription = '설명이 없습니다';
$strNoDropDatabases = '"DROP DATABASE" 구문은 허락되지 않습니다.';
$strNoExplain = '해석(EXPLAIN) 생략';
$strNoFrames = 'phpMyAdmin 은 <b>프레임을 지원하는</b> 브라우저에서 잘 보입니다.';
$strNoIndex = '인덱스가 설정되지 않았습니다!';
$strNoModification = '변화 없음';
$strNone = '없음';
$strNoPassword = '암호 없음';
$strNoPhp = 'PHP 코드 없이 보기';
$strNoPrivileges = '권한 없음';
$strNoRights = '어떻게 들어오셨어요? 지금 여기 있을 권한이 없습니다!';
$strNoTablesFound = '데이터베이스에 테이블이 없습니다.';
$strNotNumber = '은 숫자(번호)가 아닙니다!';
$strNoUsersFound = '사용자가 없습니다.';
$strNumTables = '테이블 수';

$strOperations = '테이블 작업';
$strOptimizeTable = '테이블 최적화';
$strOr = '또는';
$strOverhead = '부담';

$strPageNumber = '페이지:';
$strPassword = '암호';
$strPasswordChanged = '%s 의 암호가 바뀌었습니다.';
$strPasswordEmpty = '암호가 비었습니다!';
$strPasswordNotSame = '암호가 동일하지 않습니다!';
$strPdfDbSchema = '"%s" 데이터베이스의 스킴(윤곽) - 페이지 %s';
$strPdfInvalidTblName = '"%s" 테이블이 존재하지 않습니다!';
$strPdfNoTables = '테이블이 없습니다';
$strPHP40203 = 'PHP 4.2.3에는 멀티바이트 문자열(mbstring) 모듈에 버그가 있으므로 추천하지 않습니다. PHP 버그 리포트 19404를 보십시오.';
$strPhp = 'PHP 코드 보기';
$strPHPVersion = 'PHP 버전';
$strPmaDocumentation = 'phpMyAdmin 설명서';
$strPmaUriError = '환경설정 파일에서 <tt>$cfg[\'PmaAbsoluteUri\']</tt> 주소를 기입하십시오!';
$strPos1 = '처음';
$strPrevious = '이전';
$strPrimary = '기본';
$strPrimaryKeyHasBeenDropped = '기본 키를 제거했습니다';
$strPrimaryKeyName = '기본 키의 이름은 반드시 PRIMARY여야 합니다!';
$strPrimaryKeyWarning = '("PRIMARY"는 기본 키만의 <b>유일한</b> 이름입니다!)';
$strPrint = '인쇄';
$strPrintView = '인쇄용 보기';
$strPrivDescAllPrivileges = 'GRANT 이외의 모든 권한을 포함함.';
$strPrivDescAlter = '테이블 구조 변경 허용.';
$strPrivDescCreateDb = 'DB 및 테이블 생성 허용.';
$strPrivDescCreateTbl = '테이블 생성 허용.';
$strPrivDescCreateTmpTable = '임시테이블 생성 허용.';
$strPrivDescDelete = '데이터 삭제 허용.';
$strPrivDescDropDb = 'DB 및 테이블 삭제 허용.';
$strPrivDescDropTbl = '테이블 삭제 허용.';
$strPrivDescExecute = '저장프로시저(SP) 사용을 허용; 이 MySQL 버전에는 효과가 없음.';
$strPrivDescFile = '데이터를 파일에서 가져오기 및 파일로 내보내기 허용.';
$strPrivDescGrant = '권한 테이블을 갱신하지 않고 사용자와 권한 추가하기 허용.';
$strPrivDescIndex = '인덱스 생성 및 삭제 허용.';
$strPrivDescInsert = '데이터 추가(insert) 및 변경(replace) 허용.';
$strPrivDescLockTables = '현재 쓰레드에 대한 테이블 잠금(lock) 허용.';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = '다른 사용자의 프로세스 죽이기를 허용.';
$strPrivDescReferences = '이 버전의 MySQL에는 소용이 없습니다.';
$strPrivDescReload = '캐시를 비우고 서버를 재시동하는 것을 허용.';
$strPrivDescReplSlave = '복제서버(replication slaves)에 필요합니다.';
$strPrivDescSelect = '데이터 읽기 허용.';
$strPrivDescShowDb = '전체 데이터베이스 목록 접근을 허용';
$strPrivDescShutdown = '서버 종료 허용.';
$strPrivDescUpdate = '데이터 변경 허용.';
$strPrivDescUsage = '권한 없음.';
$strPrivileges = '사용권한';
$strPrivilegesReloaded = '권한을 다시 로딩했습니다.';
$strProcesses = '프로세스 목록';
$strProcesslist = '프로세스 목록';
$strPutColNames = '맨처음에 필드 이름을 출력';

$strQBE = '질의 마법사';
$strQBEDel = '삭제';
$strQBEIns = '삽입';
$strQueryFrame = '질의 창';
$strQueryOnDb = '데이터베이스 <b>%s</b>에 SQL 질의:';
$strQuerySQLHistory = 'SQL 내력(히스토리)';
$strQueryStatistics = '<b>SQL 질의 통계</b>: 이 서버에 %s 번의 질의가 보내졌습니다.';
$strQueryTime = '질의 실행시간 %01.4f 초';
$strQueryType = '질의 종류';

$strReceived = '받음';
$strRecords = '레코드수';
$strReferentialIntegrity = 'referential 무결성 검사:';
$strRelationNotWorking = 'linked Tables에서 작동하는 부가기능이 사용되지 않습니다. 이유를 알려면 %s여기를 클릭%s하십시오.';
$strReloadingThePrivileges = '사용권한을 갱신합니다(Reloading the privileges)';
$strRemoveSelectedUsers = '선택한 사용자를 삭제';
$strRenameTable = '테이블 이름 바꾸기';
$strRenameTableOK = '테이블 %s을(를) %s(으)로 변경하였습니다.';
$strRepairTable = '테이블 복구';
$strReplaceTable = '파일로 테이블 대치하기';
$strReset = '리세트';
$strResourceLimits = '리소스 제한';
$strReType = '재입력';
$strRevoke = '제거';
$strRevokeAndDelete = '모든 활성화된 권한을 박탈하고 사용자를 삭제함.';
$strRevokeAndDeleteDescr = '사용권한이 다시 로딩되기까지는 이 사용자들은 여전히 USAGE 권한을 갖고 있습니다.';
$strRevokeMessage = '%s의 권한을 제거했습니다.';
$strRowLength = '행 길이';
$strRows = '행(레코드)';
$strRowsFrom = '행. 시작(행)위치';
$strRowSize = ' Row size ';
$strRowsModeFlippedHorizontal = '수평 (rotated headers)';
$strRowsModeHorizontal = '수평(가로)';
$strRowsModeOptions = ' %s 정렬 (%s 칸이 넘으면 헤더 반복)';
$strRowsModeVertical = '수직(세로)';
$strRowsStatistic = '행(레코드) 통계';
$strRunning = '입니다. (%s)';
$strRunQuery = '질의 실행';
$strRunSQLQuery = '데이터베이스 %s에 SQL 질의를 실행';

$strSave = '저장';
$strSearch = '검색';
$strSearchFormTitle = '데이터베이스 검색';
$strSearchInTables = '찾을 테이블:';
$strSearchNeedle = '찾을 단어, 값 (와일드카드: "%"):';
$strSearchOption1 = '아무 단어나';
$strSearchOption2 = '모든 단어';
$strSearchOption3 = '정확한 문구';
$strSearchOption4 = '정규표현식';
$strSearchType = '찾는 방식:';
$strSelectADb = '데이터베이스를 선택하세요';
$strSelectAll = '모두 선택';
$strSelectFields = '필드 선택 (하나 이상):';
$strSelectNumRows = '질의(in query)';
$strSend = '파일로 저장';
$strSent = '보냄';
$strServer = '서버';
$strServerChoice = '서버 선택';
$strServerStatus = '런타임 정보';
$strServerStatusUptime = '이 MySQL 서버는 %s 동안 구동되었습니다. <br/>구동 시작날짜는 %s 입니다.';
$strServerTabVariables = '환경설정값';
$strServerTrafficNotes = '<b>서버 소통량</b>: 이 테이블은 MySQL서버가 구동된 이래의 네트웍 부하 상태를 보여줍니다.';
$strServerVars = '서버의 환경설정';
$strServerVersion = '서버 버전';
$strSessionValue = '세션 값';
$strSetEnumVal = '필드 종류가 "enum"이나 "set"일 경우, 다음과 같은 형식으로 값을 입력하십시오: \'a\',\'b\',\'c\'...<br />여기에 역슬래시(\)나 작은 따옴표(\')를 넣어야 한다면, 그 앞에 역슬래시를 사용하십시오. (예: \'\\\\xyz\' 또는 \'a\\\'b\').';
$strShow = '보기';
$strShowAll = '모두 보기';
$strShowColor = '색깔 보기';
$strShowGrid = 'grid 보기';
$strShowingRecords = '행(레코드) 보기';
$strShowPHPInfo = 'PHP 정보 보기';
$strShowTables = '테이블 보기';
$strShowThisQuery = ' 이 질의를 다시 보여줌 ';
$strSingly = '(단독으로)';
$strSize = '크기';
$strSort = '정렬';
$strSpaceUsage = '공간 사용량';
$strSplitWordsWithSpace = '단어는 스페이스(" ")로 구분됩니다.';
$strSQLParserUserError = 'SQL 질의문에 에러가 있습니다. MySQL 서버가 다음과 같은 에러를 출력했습니다. 이것이 문제를 진단하는데 도움이 될 것입니다.';
$strSQLQuery = 'SQL 질의';
$strSQLResult = 'SQL 결과';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = '잘못된 식별자(Identifer)';
$strSQPBugUnclosedQuote = '따옴표(quote)가 닫히지 않았음';
$strStatCheckTime = '검사';
$strStatCreateTime = '생성';
$strStatement = '명세';
$strStatUpdateTime = '업데이트';
$strStatus = '상태';
$strStrucCSV = 'CSV 데이터';
$strStrucData = '구조와 데이터 모두';
$strStrucExcelCSV = 'MS엑셀 CSV 데이터';
$strStrucOnly = '구조만';
$strStructPropose = '제안하는 테이블 구조';
$strStructure = '구조';
$strSubmit = '확인';
$strSuccess = 'SQL 질의가 바르게 실행되었습니다.';
$strSum = '계';
$strSwitchToTable = '복사한 테이블로 옮겨감';

$strTable = '테이블 ';
$strTableComments = '테이블 설명';
$strTableEmpty = '테이블명이 없습니다!';
$strTableHasBeenDropped = '테이블 %s 을 제거했습니다.';
$strTableHasBeenEmptied = '테이블 %s 을 비웠습니다';
$strTableHasBeenFlushed = '테이블 %s 을 닫았습니다(캐시 삭제)';
$strTableMaintenance = '테이블 유지보수';
$strTables = '테이블 %s 개';
$strTableStructure = '테이블 구조';
$strTblPrivileges = '테이블에 관한 권한';
$strTextAreaLength = ' 필드의 길이 때문에,<br />이 필드를 편집할 수 없습니다 ';
$strThreadSuccessfullyKilled = '쓰레드 %s 를 죽였습니다.';
$strTime = '시간';
$strTotal = '합계';
$strTotalUC = '전체 사용량';
$strTraffic = '소통량';
$strType = '종류';

$strUncheckAll = '모두 체크안함';
$strUnique = '고유값';
$strUnselectAll = '모두 선택안함';
$strUpdatePrivMessage = '%s 의 권한을 업데이트했습니다.';
$strUpdateProfileMessage = '프로파일을 업데이트했습니다.';
$strUpdateQuery = '질의 업데이트';
$strUsage = '사용법(량)';
$strUseBackquotes = '테이블, 필드명에 백쿼터(`) 사용';
$strUser = '사용자';
$strUserAlreadyExists = '사용자 %s 가 이미 존재합니다!';
$strUserEmpty = '사용자명이 없습니다!';
$strUserName = '사용자명';
$strUserNotFound = '선택한 사용자는 사용권한 테이블에 존재하지 않습니다.';
$strUserOverview = '사용자 개요';
$strUsersDeleted = '선택한 사용자들을 삭제했습니다.';
$strUsersHavingAccessToDb = '&quot;%s&quot; 에 접근할 수 있는 사용자들';
$strUseTables = '사용할 테이블';

$strValidateSQL = 'SQL 검사';
$strValidatorError = 'SQL 검사기가 초기화되지 않았습니다. %s문서%s에서 설명한 php 확장모듈을 설치했는지 확인해보십시오.';
$strValue = '값';
$strVar = '변수';
$strViewDump = '테이블의 덤프(스키마) 데이터 보기';
$strViewDumpDB = '데이터베이스의 덤프(스키마) 데이터 보기';

$strWebServerUploadDirectory = '웹서버 업로드 디렉토리';
$strWebServerUploadDirectoryError = '업로드 디렉토리에 접근할 수 없습니다';
$strWelcome = '%s에 오셨습니다';
$strWithChecked = '선택한 것을:';
$strWrongUser = '사용자명/암호가 틀렸습니다. 접근이 거부되었습니다.';

$strYes = ' 예 ';

$strZeroRemovesTheLimit = '주의: 이 옵션을 0으로 하면 제한이 없어집니다.';
$strZip = 'zip 압축';

// To translate:
$strAbortedClients = 'Aborted'; //to translate
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAccessDeniedExplanation = 'phpMyAdmin tried to connect to the MySQL server, and the server rejected the connection. You should check the host, username and password in your configuration and make sure that they correspond to the information given by the administrator of the MySQL server.';  //to translate
$strAddAutoIncrement = 'Add AUTO_INCREMENT value';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strAddIntoComments = 'Add into comments';//to translate
$strAdministration = 'Administration'; //to translate
$strAfterInsertNext = 'Edit next row';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
$strAll = 'All'; // To translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate
$strAndThen = 'and then';  //to translate
$strAny = 'Any'; // To translate
$strApproximateCount = 'May be approximate. See FAQ 3.11';  //to translate
$strArabic = 'Arabic';  //to translate
$strArmenian = 'Armenian';  //to translate
$strAutomaticLayout = 'Automatic layout';  //to translate

$strBaltic = 'Baltic';  //to translate
$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate
$strBinaryLog = 'Binary log';  //to translate
$strBinLogEventType = 'Event type';  //to translate
$strBinLogInfo = 'Information';  //to translate
$strBinLogName = 'Log name';  //to translate
$strBinLogOriginalPosition = 'Original position';  //to translate
$strBinLogPosition = 'Position';  //to translate
$strBinLogServerId = 'Server ID';  //to translate
$strBookmarkAllUsers = 'Let every user access this bookmark';  //to translate
$strBookmarkCreated = 'Bookmark %s created';  //to translate
$strBookmarkLabel = 'Label'; // To translate
$strBookmarkReplace = 'Replace existing bookmark of same name';  //to translate
$strBookmarkView = 'View only'; // To translate
$strBrowseDistinctValues = 'Browse distinct values';  //to translate
$strBrowseForeignValues = 'Browse foreign values';  //to translate
$strBufferPoolActivity = 'Buffer Pool Activity';  //to translate
$strBufferPool = 'Buffer Pool';  //to translate
$strBufferPoolUsage = 'Buffer Pool Usage';  //to translate
$strBufferReadMissesInPercent = 'Read misses in %';  //to translate
$strBufferReadMisses = 'Read misses';  //to translate
$strBufferWriteWaitsInPercent = 'Write waits in %';  //to translate
$strBufferWriteWaits = 'Write waits';  //to translate
$strBulgarian = 'Bulgarian';  //to translate
$strBusyPages = 'Busy pages';  //to translate

$strCalendar = 'Calendar';  //to translate
$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCantLoadRecodeIconv = 'Can not load iconv or recode extension needed for charset conversion, configure php to allow using these extensions or disable charset conversion in phpMyAdmin.';  //to translate
$strCantUseRecodeIconv = 'Can not use iconv nor libiconv nor recode_string function while extension reports to be loaded. Check your php configuration.';  //to translate
$strCardinality = 'Cardinality'; // To translate
$strCaseInsensitive = 'case-insensitive';  //to translate
$strCaseSensitive = 'case-sensitive';  //to translate
$strCentralEuropean = 'Central European';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strCharset = 'Charset';  //to translate
$strCharsetsAndCollations = 'Character Sets and Collations';  //to translate
$strCharsets = 'Charsets';  //to translate
$strCheckOverhead = 'Check tables with overhead';  //to translate
$strCollation = 'Collation';  //to translate
$strCommand = 'Command'; //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strConfigureTableCoord = 'Please configure the coordinates for table %s';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strCookiesRequired = '쿠키 사용이 가능해야 합니다 past this point.'; // To translate
$strCopy = 'Copy';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strCopyTableSameNames = 'Can\'t copy table to same one!';  //to translate
$strCouldNotKill = 'phpMyAdmin was unable to kill thread %s. It probably has already been closed.'; //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCreatePdfFeat = 'Creation of PDFs';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCriteria = 'Criteria'; // To translate
$strCroatian = 'Croatian';  //to translate
$strCSV = 'CSV';  //to translate
$strCyrillic = 'Cyrillic';  //to translate
$strCzech = 'Czech';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate

$strDanish = 'Danish';  //to translate
$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDatabaseExportOptions = 'Database export options';//to translate
$strDataPages = 'Pages containing data';  //to translate
$strDBComment = 'Database comment: ';//to translate
$strDBCopy = 'Copy database to';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strDbSpecific = 'database-specific';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strDescription = 'Description';  //to translate
$strDictionary = 'dictionary';  //to translate
$strDirtyPages = 'Dirty pages';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strDisplayFeat = 'Display Features';  //to translate
$strDisplayPDF = 'Display PDF schema';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strDumpSaved = 'Dump has been saved to file %s.';  //to translate

$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate
$strEngineAvailable = '%s is available on this MySQL server.';  //to translate
$strEngineDisabled = '%s has been disabled for this MySQL server.';  //to translate
$strEngines = 'Engines';  //to translate
$strEngineUnsupported = 'This MySQL server does not support the %s storage engine.';  //to translate
$strEnglish = 'English';  //to translate
$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strEsperanto = 'Esperanto';  //to translate
$strEstonian = 'Estonian';  //to translate
$strExcelEdition = 'Excel edition';  //to translate
$strExecuteBookmarked = 'Execute bookmarked query';  //to translate

$strFileAlreadyExists = 'File %s already exists on server, change filename or check overwrite option.';  //to translate
$strFileNameTemplateDescriptionDatabase = 'database name';  //to translate
$strFileNameTemplateDescriptionServer = 'server name';  //to translate
$strFileNameTemplateDescriptionTable = 'table name';  //to translate
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate
$strFileToImport = 'File to import';  //to translate
$strFixed = 'fixed'; // To translate
$strFlushPrivilegesNote = '주의: phpMyAdmin은 사용자의 사용권한을 MySQL의 사용권한 테이블에서 곧바로 읽어옵니다. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strFlushQueryCache = 'Flush query cache';  //to translate
$strFlushTables = 'Flush (close) all tables';  //to translate
$strFormat = 'Format'; // To translate
$strFormEmpty = 'Missing value in the form !'; // To translate
$strFreePages = 'Free pages';  //to translate
$strFullText = 'Full Texts'; // To translate

$strGenBy = 'Generated by'; //to translate
$strGeneralRelationFeat = 'General 관계 features';  //to translate
$strGenerate = 'Generate';  //to translate
$strGeneratePassword = 'Generate Password';  //to translate
$strGeorgian = 'Georgian';  //to translate
$strGerman = 'German';  //to translate
$strGlobal = 'global';  //to translate
$strGlobalValue = 'Global value'; //to translate
$strGrantOption = 'Grant'; //to translate
$strGreek = 'Greek';  //to translate

$strHandler = 'Handler';  //to translate
$strHebrew = 'Hebrew';  //to translate
$strHTMLExcel = 'Microsoft Excel 2000';  //to translate
$strHTMLWord = 'Microsoft Word 2000';  //to translate
$strHungarian = 'Hungarian';  //to translate

$strIcelandic = 'Icelandic';  //to translate
$strId = 'ID'; //to translate
$strIdxFulltext = 'Fulltext'; // To translate
$strIgnoreDuplicates = 'Ignore duplicate rows';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strImportFormat = 'Format of imported file';  //to translate
$strImport = 'Import';  //to translate
$strImportSuccessfullyFinished = 'Import has been successfully finished, %d queries executed.';  //to translate
$strIndexWarningTable = 'Problems with indexes of table `%s`';//to translate
$strInnoDBAutoextendIncrement = 'Autoextend increment';  //to translate
$strInnoDBAutoextendIncrementDesc = ' The increment size for extending the size of an autoextending tablespace when it becomes full.';  //to translate
$strInnoDBBufferPoolSize = 'Buffer pool size';  //to translate
$strInnoDBBufferPoolSizeDesc = 'The size of the memory buffer InnoDB uses to cache data and indexes of its tables.';  //to translate
$strInnoDBDataFilePath = 'Data files';  //to translate
$strInnoDBDataHomeDir = 'Data home directory';  //to translate
$strInnoDBDataHomeDirDesc = 'The common part of the directory path for all InnoDB data files.';  //to translate
$strInnoDBPages = 'pages';  //to translate
$strInnodbStat = 'InnoDB 상태';  //to translate
$strInsertedRowId = 'Inserted row id:';  //to translate
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
$strInternalRelations = 'Internal relations';  //to translate
$strInvalidAuthMethod = 'Invalid authentication method set in configuration:';  //to translate
$strInvalidColumnCount = 'Column count has to be larger than zero.';  //to translate
$strInvalidColumn = 'Invalid column (%s) specified!';  //to translate
$strInvalidCSVFieldCount = 'Invalid field count in CSV input on line %d.';  //to translate
$strInvalidCSVFormat = 'Invalid format of CSV input on line %d.';  //to translate
$strInvalidCSVParameter = 'Invalid parameter for CSV import: %s';  //to translate
$strInvalidFieldAddCount = 'You have to add at least one field.';  //to translate
$strInvalidFieldCount = 'Table must have at least one field.';  //to translate
$strInvalidLDIImport = 'This plugin does not support compressed imports!';  //to translate
$strInvalidRowNumber = '%d is not valid row number.';  //to translate
$strInvalidServerHostname = 'Invalid hostname for server %1$s. Please review your configuration.';  //to translate
$strInvalidServerIndex = 'Invalid server index: "%s"';  //to translate

$strJapanese = 'Japanese';  //to translate
$strJoins = 'Joins';  //to translate

$strKeyCache = 'Key cache';  //to translate
$strKorean = 'Korean';  //to translate

$strLandscape = 'Landscape';  //to translate
$strLanguageUnknown = 'Unknown language: %1$s.';  //to translate
$strLatchedPages = 'Latched pages';  //to translate
$strLatexCaption = 'Table caption';//to translate
$strLatexContent = 'Content of table __TABLE__';//to translate
$strLatexContinuedCaption = 'Continued table caption';//to translate
$strLatexContinued = '(continued)';//to translate
$strLatexIncludeCaption = 'Include table caption';//to translate
$strLatexLabel = 'Label key';//to translate
$strLaTeX = 'LaTeX';  //to translate
$strLatexStructure = 'Structure of table __TABLE__';//to translate
$strLatvian = 'Latvian';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate
$strLinkNotFound = 'Link not found';  //to translate
$strLinksTo = 'Links to';  //to translate
$strLithuanian = 'Lithuanian';  //to translate
$strLogServer = 'Server';  //to translate
$strLongOperation = 'This operation could be long. Proceed anyway?';  //to translate

$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMaximumSize = 'Maximum size: %s%s';  //to translate
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';  //to translate
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';  //to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\', 100, b,\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMoveTableSameNames = 'Can\'t move table to same one!';  //to translate
$strMultilingual = 'multilingual';  //to translate
$strMyISAMDataPointerSize = 'Data pointer size';  //to translate
$strMyISAMDataPointerSizeDesc = 'The default pointer size in bytes, to be used by CREATE TABLE for MyISAM tables when no MAX_ROWS option is specified.';  //to translate
$strMyISAMMaxExtraSortFileSizeDesc = 'If the temporary file used for fast MyISAM index creation would be larger than using the key cache by the amount specified here, prefer the key cache method.';  //to translate
$strMyISAMMaxExtraSortFileSize = 'Maximum size for temporary files on index creation';  //to translate
$strMyISAMMaxSortFileSizeDesc = 'The maximum size of the temporary file MySQL is allowed to use while re-creating a MyISAM index (during REPAIR TABLE, ALTER TABLE, or LOAD DATA INFILE).';  //to translate
$strMyISAMMaxSortFileSize = 'Maximum size for temporary sort files';  //to translate
$strMyISAMRecoverOptions = 'Automatic recovery mode';  //to translate
$strMyISAMRecoverOptionsDesc = 'The mode for automatic recovery of crashed MyISAM tables, as set via the --myisam-recover server startup option.';  //to translate
$strMyISAMRepairThreadsDesc = 'If this value is greater than 1, MyISAM table indexes are created in parallel (each index in its own thread) during the Repair by sorting process.';  //to translate
$strMyISAMRepairThreads = 'Repair threads';  //to translate
$strMyISAMSortBufferSizeDesc = 'The buffer that is allocated when sorting MyISAM indexes during a REPAIR TABLE or when creating indexes with CREATE INDEX or ALTER TABLE.';  //to translate
$strMyISAMSortBufferSize = 'Sort buffer size';  //to translate
$strMysqlClientVersion = 'MySQL client version';  //to translate
$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate

$strNoActivity = 'No activity since %s seconds or more, please login again';  //to translate
$strNoDetailsForEngine = 'There is no detailed status information available for this storage engine.';  //to translate
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate
$strNoIndexPartsDefined = 'No index parts defined!'; // To translate
$strNoOptions = 'This format has no options';//to translate
$strNoPermission = 'The web server does not have permission to save the file %s.';  //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strNoSpace = 'Insufficient space to save the file %s.';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strNotOK = 'not OK';  //to translate
$strNotSet = '<b>%s</b> 테이블이 없거나 or not set in %s';  //to translate
$strNoValidateSQL = 'Skip Validate SQL';  //to translate
$strNull = 'Null'; // To translate
$strNumberOfFields = 'Number of fields';  //to translate
$strNumSearchResultsInTable = '%s match(es) inside table <i>%s</i>';//to translate
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> match(es)';//to translate

$strOK = 'OK';  //to translate
$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate
$strOperator = 'Operator';  //to translate
$strOverwriteExisting = 'Overwrite existing file(s)';  //to translate

$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPaperSize = 'Paper size';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPartialText = 'Partial Texts'; // To translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPerHour = 'per hour'; //to translate
$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate
$strPersian = 'Persian';  //to translate
$strPhoneBook = 'phone book';  //to translate
$strPolish = 'Polish';  //to translate
$strPortrait = 'Portrait';  //to translate
$strPrintViewFull = 'Print view (with full texts)';  //to translate
$strPrivDescAlterRoutine = 'Allows altering and dropping stored routines.';  //to translate
$strPrivDescCreateRoutine = 'Allows creating stored routines.';  //to translate
$strPrivDescCreateUser = 'Allows creating, dropping and renaming user accounts.';  //to translate
$strPrivDescCreateView = 'Allows creating new views.';  //to translate
$strPrivDescExecute5 = 'Allows executing stored routines.';  //to translate
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescShowView = 'Allows performing SHOW CREATE VIEW queries.';  //to translate
$strPrivDescSuper = '최대 연결수를 초과했을 경우에도 연결을 허용; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strProtocolVersion = 'Protocol version';  //to translate

$strQueryCache = 'Query cache';  //to translate
$strQueryWindowLock = 'Do not overwrite this query from outside the window';  //to translate

$strReadRequests = 'Read requests';  //to translate
$strRefresh = 'Refresh';  //to translate
$strRelationalSchema = 'Relational schema';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strRelations = 'Relations';  //to translate
$strRelationView = 'Relation view';  //to translate
$strReloadPrivileges = 'Reload privileges';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strReplaceNULLBy = 'Replace NULL by';  //to translate
$strReplication = 'Replication';  //to translate
$strRomanian = 'Romanian';  //to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate
$strRussian = 'Russian';  //to translate

$strSaveOnServer = 'Save on server in %s directory';  //to translate
$strScaleFactorSmall = 'The scale factor is too small to fit the schema on one page';  //to translate
$strSearchResultsFor = 'Search results for "<i>%s</i>" %s:';//to translate
$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';  //to translate
$strSelectBinaryLog = 'Select binary log to view';  //to translate
$strSelectTables = 'Select Tables';  //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
$strServerStatusDelayedInserts = 'Delayed inserts';  //to translate
$strShowDatadictAs = 'Data Dictionary Format';  //to translate
$strShowFullQueries = 'Show Full Queries';  //to translate
$strShowingBookmark = 'Showing bookmark';  //to translate
$strShowOpenTables = 'Show open tables';  //to translate
$strShowSlaveHosts = 'Show slave hosts';  //to translate
$strShowSlaveStatus = 'Show slave status';  //to translate
$strShowStatusBinlog_cache_disk_useDescr = 'The number of transactions that used the temporary binary log cache but that exceeded the value of binlog_cache_size and used a temporary file to store statements from the transaction.';  //to translate
$strShowStatusBinlog_cache_useDescr = 'The number of transactions that used the temporary binary log cache.';  //to translate
$strShowStatusCreated_tmp_disk_tablesDescr = 'The number of temporary tables on disk created automatically by the server while executing statements. If Created_tmp_disk_tables is big, you may want to increase the tmp_table_size  value to cause temporary tables to be memory-based instead of disk-based.';  //to translate
$strShowStatusCreated_tmp_filesDescr = 'How many temporary files mysqld has created.';  //to translate
$strShowStatusCreated_tmp_tablesDescr = 'The number of in-memory temporary tables created automatically by the server while executing statements.';  //to translate
$strShowStatusDelayed_errorsDescr = 'The number of rows written with INSERT DELAYED for which some error occurred (probably duplicate key).';  //to translate
$strShowStatusDelayed_insert_threadsDescr = 'The number of INSERT DELAYED handler threads in use. Every different table on which one uses INSERT DELAYED gets its own thread.';  //to translate
$strShowStatusDelayed_writesDescr = 'The number of INSERT DELAYED rows written.';  //to translate
$strShowStatusFlush_commandsDescr  = 'The number of executed FLUSH statements.';  //to translate
$strShowStatusHandler_commitDescr = 'The number of internal COMMIT statements.';  //to translate
$strShowStatusHandler_deleteDescr = 'The number of times a row was deleted from a table.';  //to translate
$strShowStatusHandler_discoverDescr = 'The MySQL server can ask the NDB Cluster storage engine if it knows about a table with a given name. This is called discovery. Handler_discover indicates the number of time tables have been discovered.';  //to translate
$strShowStatusHandler_read_firstDescr = 'The number of times the first entry was read from an index. If this is high, it suggests that the server is doing a lot of full index scans; for example, SELECT col1 FROM foo, assuming that col1 is indexed.';  //to translate
$strShowStatusHandler_read_keyDescr = 'The number of requests to read a row based on a key. If this is high, it is a good indication that your queries and tables are properly indexed.';  //to translate
$strShowStatusHandler_read_nextDescr = 'The number of requests to read the next row in key order. This is incremented if you are querying an index column with a range constraint or if you are doing an index scan.';  //to translate
$strShowStatusHandler_read_prevDescr = 'The number of requests to read the previous row in key order. This read method is mainly used to optimize ORDER BY ... DESC.';  //to translate
$strShowStatusHandler_read_rndDescr = 'The number of requests to read a row based on a fixed position. This is high if you are doing a lot of queries that require sorting of the result. You probably have a lot of queries that require MySQL to scan whole tables or you have joins that don\'t use keys properly.';  //to translate
$strShowStatusHandler_read_rnd_nextDescr = 'The number of requests to read the next row in the data file. This is high if you are doing a lot of table scans. Generally this suggests that your tables are not properly indexed or that your queries are not written to take advantage of the indexes you have.';  //to translate
$strShowStatusHandler_rollbackDescr = 'The number of internal ROLLBACK statements.';  //to translate
$strShowStatusHandler_updateDescr = 'The number of requests to update a row in a table.';  //to translate
$strShowStatusHandler_writeDescr = 'The number of requests to insert a row in a table.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'The number of pages containing data (dirty or clean).';  //to translate
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'The number of pages currently dirty.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'The number of buffer pool pages that have been requested to be flushed.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'The number of free pages.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'The number of latched pages in InnoDB buffer pool. These are pages currently being read or written or that can\'t be flushed or removed for some other reason.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'The number of pages busy because they have been allocated for administrative overhead such as row locks or the adaptive hash index. This value can also be calculated as Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Total size of buffer pool, in pages.';  //to translate
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'The number of "random" read-aheads InnoDB initiated. This happens when a query is to scan a large portion of a table but in random order.';  //to translate
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'The number of sequential read-aheads InnoDB initiated. This happens when InnoDB does a sequential full table scan.';  //to translate
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'The number of logical read requests InnoDB has done.';  //to translate
$strShowStatusInnodb_buffer_pool_readsDescr = 'The number of logical reads that InnoDB could not satisfy from buffer pool and had to do a single-page read.';  //to translate
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normally, writes to the InnoDB buffer pool happen in the background. However, if it\'s necessary to read or create a page and no clean pages are available, it\'s necessary to wait for pages to be flushed first. This counter counts instances of these waits. If the buffer pool size was set properly, this value should be small.';  //to translate
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'The number writes done to the InnoDB buffer pool.';  //to translate
$strShowStatusInnodb_data_fsyncsDescr = 'The number of fsync() operations so far.';  //to translate
$strShowStatusInnodb_data_pending_fsyncsDescr = 'The current number of pending fsync() operations.';  //to translate
$strShowStatusInnodb_data_pending_readsDescr = 'The current number of pending reads.';  //to translate
$strShowStatusInnodb_data_pending_writesDescr = 'The current number of pending writes.';  //to translate
$strShowStatusInnodb_data_readDescr = 'The amount of data read so far, in bytes.';  //to translate
$strShowStatusInnodb_data_readsDescr = 'The total number of data reads.';  //to translate
$strShowStatusInnodb_data_writesDescr = 'The total number of data writes.';  //to translate
$strShowStatusInnodb_data_writtenDescr = 'The amount of data written so far, in bytes.';  //to translate
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'The number of doublewrite writes that have been performed and the number of pages that have been written for this purpose.';  //to translate
$strShowStatusInnodb_dblwr_writesDescr = 'The number of doublewrite writes that have been performed and the number of pages that have been written for this purpose.';  //to translate
$strShowStatusInnodb_log_waitsDescr = 'The number of waits we had because log buffer was too small and we had to wait for it to be flushed before continuing.';  //to translate
$strShowStatusInnodb_log_write_requestsDescr = 'The number of log write requests.';  //to translate
$strShowStatusInnodb_log_writesDescr = 'The number of physical writes to the log file.';  //to translate
$strShowStatusInnodb_os_log_fsyncsDescr = 'The number of fsyncs writes done to the log file.';  //to translate
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'The number of pending log file fsyncs.';  //to translate
$strShowStatusInnodb_os_log_pending_writesDescr = 'Pending log file writes.';  //to translate
$strShowStatusInnodb_os_log_writtenDescr = 'The number of bytes written to the log file.';  //to translate
$strShowStatusInnodb_pages_createdDescr = 'The number of pages created.';  //to translate
$strShowStatusInnodb_page_sizeDescr = 'The compiled-in InnoDB page size (default 16KB). Many values are counted in pages; the page size allows them to be easily converted to bytes.';  //to translate
$strShowStatusInnodb_pages_readDescr = 'The number of pages read.';  //to translate
$strShowStatusInnodb_pages_writtenDescr = 'The number of pages written.';  //to translate
$strShowStatusInnodb_row_lock_current_waitsDescr = 'The number of row locks currently being waited for.';  //to translate
$strShowStatusInnodb_row_lock_time_avgDescr = 'The average time to acquire a row lock, in milliseconds.';  //to translate
$strShowStatusInnodb_row_lock_timeDescr = 'The total time spent in acquiring row locks, in milliseconds.';  //to translate
$strShowStatusInnodb_row_lock_time_maxDescr = 'The maximum time to acquire a row lock, in milliseconds.';  //to translate
$strShowStatusInnodb_row_lock_waitsDescr = 'The number of times a row lock had to be waited for.';  //to translate
$strShowStatusInnodb_rows_deletedDescr = 'The number of rows deleted from InnoDB tables.';  //to translate
$strShowStatusInnodb_rows_insertedDescr = 'The number of rows inserted in InnoDB tables.';  //to translate
$strShowStatusInnodb_rows_readDescr = 'The number of rows read from InnoDB tables.';  //to translate
$strShowStatusInnodb_rows_updatedDescr = 'The number of rows updated in InnoDB tables.';  //to translate
$strShowStatusKey_blocks_not_flushedDescr = 'The number of key blocks in the key cache that have changed but haven\'t yet been flushed to disk. It used to be known as Not_flushed_key_blocks.';  //to translate
$strShowStatusKey_blocks_unusedDescr = 'The number of unused blocks in the key cache. You can use this value to determine how much of the key cache is in use.';  //to translate
$strShowStatusKey_blocks_usedDescr = 'The number of used blocks in the key cache. This value is a high-water mark that indicates the maximum number of blocks that have ever been in use at one time.';  //to translate
$strShowStatusKey_read_requestsDescr = 'The number of requests to read a key block from the cache.';  //to translate
$strShowStatusKey_readsDescr = 'The number of physical reads of a key block from disk. If Key_reads is big, then your key_buffer_size value is probably too small. The cache miss rate can be calculated as Key_reads/Key_read_requests.';  //to translate
$strShowStatusKey_write_requestsDescr = 'The number of requests to write a key block to the cache.';  //to translate
$strShowStatusKey_writesDescr = 'The number of physical writes of a key block to disk.';  //to translate
$strShowStatusLast_query_costDescr = 'The total cost of the last compiled query as computed by the query optimizer. Useful for comparing the cost of different query plans for the same query. The default value of 0 means that no query has been compiled yet.';  //to translate
$strShowStatusNot_flushed_delayed_rowsDescr = 'The number of rows waiting to be written in INSERT DELAYED queues.';  //to translate
$strShowStatusOpened_tablesDescr = 'The number of tables that have been opened. If opened tables is big, your table cache value is probably too small.';  //to translate
$strShowStatusOpen_filesDescr = 'The number of files that are open.';  //to translate
$strShowStatusOpen_streamsDescr = 'The number of streams that are open (used mainly for logging).';  //to translate
$strShowStatusOpen_tablesDescr = 'The number of tables that are open.';  //to translate
$strShowStatusQcache_free_blocksDescr = 'The number of free memory blocks in query cache.';  //to translate
$strShowStatusQcache_free_memoryDescr = 'The amount of free memory for query cache.';  //to translate
$strShowStatusQcache_hitsDescr = 'The number of cache hits.';  //to translate
$strShowStatusQcache_insertsDescr = 'The number of queries added to the cache.';  //to translate
$strShowStatusQcache_lowmem_prunesDescr = 'The number of queries that have been removed from the cache to free up memory for caching new queries. This information can help you tune the query cache size. The query cache uses a least recently used (LRU) strategy to decide which queries to remove from the cache.';  //to translate
$strShowStatusQcache_not_cachedDescr = 'The number of non-cached queries (not cachable, or not cached due to the query_cache_type setting).';  //to translate
$strShowStatusQcache_queries_in_cacheDescr = 'The number of queries registered in the cache.';  //to translate
$strShowStatusQcache_total_blocksDescr = 'The total number of blocks in the query cache.';  //to translate
$strShowStatusReset = 'Reset';  //to translate
$strShowStatusRpl_statusDescr = 'The status of failsafe replication (not yet implemented).';  //to translate
$strShowStatusSelect_full_joinDescr = 'The number of joins that do not use indexes. If this value is not 0, you should carefully check the indexes of your tables.';  //to translate
$strShowStatusSelect_full_range_joinDescr = 'The number of joins that used a range search on a reference table.';  //to translate
$strShowStatusSelect_range_checkDescr = 'The number of joins without keys that check for key usage after each row. (If this is not 0, you should carefully check the indexes of your tables.)';  //to translate
$strShowStatusSelect_rangeDescr = 'The number of joins that used ranges on the first table. (It\'s normally not critical even if this is big.)';  //to translate
$strShowStatusSelect_scanDescr = 'The number of joins that did a full scan of the first table.';  //to translate
$strShowStatusSlave_open_temp_tablesDescr = 'The number of temporary tables currently open by the slave SQL thread.';  //to translate
$strShowStatusSlave_retried_transactionsDescr = 'Total (since startup) number of times the replication slave SQL thread has retried transactions.';  //to translate
$strShowStatusSlave_runningDescr = 'This is ON if this server is a slave that is connected to a master.';  //to translate
$strShowStatusSlow_launch_threadsDescr = 'The number of threads that have taken more than slow_launch_time seconds to create.';  //to translate
$strShowStatusSlow_queriesDescr = 'The number of queries that have taken more than long_query_time seconds.';  //to translate
$strShowStatusSort_merge_passesDescr = 'The number of merge passes the sort algorithm has had to do. If this value is large, you should consider increasing the value of the sort_buffer_size system variable.';  //to translate
$strShowStatusSort_rangeDescr = 'The number of sorts that were done with ranges.';  //to translate
$strShowStatusSort_rowsDescr = 'The number of sorted rows.';  //to translate
$strShowStatusSort_scanDescr = 'The number of sorts that were done by scanning the table.';  //to translate
$strShowStatusTable_locks_immediateDescr = 'The number of times that a table lock was acquired immediately.';  //to translate
$strShowStatusTable_locks_waitedDescr = 'The number of times that a table lock could not be acquired immediately and a wait was needed. If this is high, and you have performance problems, you should first optimize your queries, and then either split your table or tables or use replication.';  //to translate
$strShowStatusThreads_cachedDescr = 'The number of threads in the thread cache. The cache hit rate can be calculated as Threads_created/Connections. If this value is red you should raise your thread_cache_size.';  //to translate
$strShowStatusThreads_connectedDescr = 'The number of currently open connections.';  //to translate
$strShowStatusThreads_createdDescr = 'The number of threads created to handle connections. If Threads_created is big, you may want to increase the thread_cache_size value. (Normally this doesn\'t give a notable performance improvement if you have a good thread implementation.)';  //to translate
$strShowStatusThreads_runningDescr = 'The number of threads that are not sleeping.';  //to translate
$strShowTableDimension = 'Show dimension of tables';  //to translate
$strSimplifiedChinese = 'Simplified Chinese';  //to translate
$strSkipQueries = 'Number of records(queries) to skip from start';  //to translate
$strSlovak = 'Slovak';  //to translate
$strSlovenian = 'Slovenian';  //to translate
$strSocketProblem = '(or the local MySQL server\'s socket is not correctly configured)';  //to translate
$strSortByKey = 'Sort by key';  //to translate
$strSorting = 'Sorting';  //to translate
$strSpanish = 'Spanish';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strSQLExportType = 'Export type';  //to translate
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate
$strStorageEngines = 'Storage Engines';  //to translate
$strStorageEngine = 'Storage Engine';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strSwedish = 'Swedish';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate

$strTableAlreadyExists = 'Table %s already exists!';  //to translate
$strTableOfContents = 'Table of contents';  //to translate
$strTableOptions = 'Table options';  //to translate
$strTakeIt = 'take it';  //to translate
$strTempData = 'Temporary data';  //to translate
$strThai = 'Thai';  //to translate
$strThemeDefaultNotFound = 'Default theme %s not found!';  //to translate
$strThemeNoPreviewAvailable = 'No preview available.';  //to translate
$strThemeNotFound = 'Theme %s not found!';  //to translate
$strThemeNoValidImgPath = 'No valid image path for theme %s found!';  //to translate
$strThemePathNotFound = 'Theme path not found for theme %s!';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strThisHost = 'This Host'; //to translate
$strThreads = 'Threads';  //to translate
$strTimeoutInfo = 'Previous import timed out, after resubmitting will continue from position %d.';  //to translate
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';  //to translate
$strTimeoutPassed = 'Script timeout passed, if you want to finish import, please resubmit same file and import will resume.';  //to translate
$strToggleScratchboard = 'toggle scratchboard';  //to translate
$strTraditionalChinese = 'Traditional Chinese';  //to translate
$strTraditionalSpanish = 'Traditional Spanish';  //to translate
$strTransactionCoordinator = 'Transaction coordinator';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strTransformation_text_plain__external = 'LINUX ONLY: 외부 프로그램을 실행하고 표준 입력으로 fielddata 를 공급합니다. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTruncateQueries = 'Truncate Shown Queries';  //to translate
$strTurkish = 'Turkish';  //to translate

$strUkrainian = 'Ukrainian';  //to translate
$strUnicode = 'Unicode';  //to translate
$strUnknown = 'unknown';  //to translate
$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate
$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUsedPhpExtensions = 'Used PHP extensions';  //to translate
$strUseHostTable = 'Use Host Table';  //to translate
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate
$strUseTextField = 'Use text field'; //to translate
$strUseThisValue = 'Use this value';  //to translate

$strVersionInformation = 'Version information';  //to translate
$strViewDumpDatabases = 'View dump (schema) of databases';//to translate
$strViewHasBeenDropped = 'View %s has been dropped';  //to translate
$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate
$strView = 'View';  //to translate

$strWestEuropean = 'West European';  //to translate
$strWildcard = 'wildcard';  //to translate
$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window or your browser is blocking cross-window updates of your security settings';  //to translate
$strWriteRequests = 'Write requests';  //to translate

$strXML = 'XML';//to translate

$strQueryResultsOperations = 'Query results operations';  //to translate
$strAddClause = 'Add %s';  //to translate
$strUploadsNotAllowed = 'File uploads are not allowed on this server.';  //to translate
$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';  //to translate
$strExportMustBeFile = 'Selected export type has to be saved in file!';  //to translate
$strCreateUserDatabase = 'Database for user';  //to translate
$strCreateUserDatabaseNone = 'None';  //to translate
$strCreateUserDatabaseName = 'Create database with same name and grant all privileges';  //to translate
$strCreateUserDatabaseWildcard = 'Grant all privileges on wildcard name (username\_%)';  //to translate
$strOpenDocumentText = 'Open Document Text';  //to translate
$strNoDataReceived = 'No data was received to import. Either no file name was submitted, or the file size exceeded the maximum size permitted by your PHP configuration. See FAQ 1.16.';  //to translate
$strCanNotLoadExportPlugins = 'Could not load export plugins, please check your installation!';  //to translate
$strErrorRenamingTable = 'Error renaming table %1$s to %2$s';  //to translate
$strInvalidTableName = 'Invalid table name';  //to translate
$strInvalidDatabase = 'Invalid database';  //to translate
$strServers = 'Servers';  //to translate
$strDelimiter = 'Delimiter';  //to translate
$strFunctions = 'Functions';  //to translate
$strProcedures = 'Procedures';  //to translate
$strPDFReportExplanation = '(Generates a report containing the data of a single table)';  //to translate
$strFontSize = 'Font size';  //to translate
$strLanguage = 'Language';  //to translate
$strPmaWiki = 'phpMyAdmin wiki';  //to translate
$strTransformation_text_plain__dateformat = 'Displays a TIME, TIMESTAMP, DATETIME or numeric unix timestamp field as formatted date. The first option is the offset (in hours) which will be added to the timestamp (Default: 0). Use second option to specify a different date/time format string. Third option determines whether you want to see local date or UTC one (use "local" or "utc" strings) for that. According to that, date format has different value - for "local" see the documentation for PHP\'s strftime() function and for "utc" it is done using gmdate() function.';  //to translate
$strDocSQL = 'DocSQL';  //to translate
$strTableName = 'Table name';  //to translate
$strTableIsEmpty = 'Table seems to be empty!';  //to translate
$strDbIsEmpty = 'Database seems to be empty!';  //to translate
$strShowingPhp = 'Showing as PHP code';  //to translate
$strShowingSQL = 'Showing SQL query';  //to translate
$strDesigner = 'Designer';  //to translate
$strNumberOfTables = 'Number of tables';  //to translate
$strCreateTable  = 'Create table';  //to translate
$strCreateRelation = 'Create relation';  //to translate
$strSavePosition = 'Save position';  //to translate
$strSelectForeignKey = 'Select Foreign Key';  //to translate
$strHide         = 'Hide';  //to translate
$strShowHideLeftMenu = 'Show/Hide left menu';  //to translate
$strReload = 'Reload';  //to translate
$strSmallBigAll = 'Small/Big All';  //to translate
$strImportExportCoords = 'Import/Export coordinates for PDF schema';  //to translate
$strMoveMenu = 'Move Menu';  //to translate
$strAngularLinks = 'Angular links';  //to translate
$strDirectLinks = 'Direct links';  //to translate
$strHideShowAll = 'Hide/Show all';  //to translate
$strHideShowNoRelation = 'Hide/Show Tables with no relation';  //to translate
$strInternalRelationAdded = 'Internal relation added';  //to translate
$strInnoDBRelationAdded = 'InnoDB relation added';  //to translate
$strRelationDeleted = 'Relation deleted';  //to translate
$strToSelectRelation = 'To select relation, click :';  //to translate
$strExportImportToScale = 'Export/Import to scale';  //to translate
$strRecommended = 'recommended';  //to translate
$strToFromPage = 'to/from page';  //to translate
$strSelectReferencedKey = 'Select referenced key';  //to translate
$strPleaseSelectPrimaryOrUniqueKey = 'Please select the primary key or a unique key';  //to translate
$strForeignKeyError = 'Error creating foreign key (check data types)';  //to translate
$strHelp = 'Help';  //to translate
$strCancel = 'Cancel';  //to translate
$strDeleteRelation = 'Delete relation';  //to translate
$strKnownExternalBug = 'The %s functionality is affected by a known bug, see %s';  //to translate
$strStructureForView = 'Structure for view';  //to translate
$strStandInStructureForView = 'Stand-in structure for view';  //to translate
$strToggleSmallBig = 'Toggle small/big';  //to translate
$strIEUnsupported = 'Internet Explorer does not support this function.';  //to translate
$strErrorRelationAdded = 'Error: Relation not added.';  //to translate
$strErrorRelationExists = 'Error: relation already exists.';  //to translate
$strErrorSaveTable = 'Error saving coordinates for Designer.';  //to translate
$strSnapToGrid = 'Snap to grid';  //to translate
$strDesignerHelpDisplayField = 'The display field is shown in pink. To set/unset a field as the display field, click the "Choose field to display" icon, then click on the appropriate field name.';  //to translate
$strUploadErrorIniSize = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';  //to translate
$strUploadErrorFormSize = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';  //to translate
$strUploadErrorPartial = 'The uploaded file was only partially uploaded.';  //to translate
$strUploadErrorNoTempDir = 'Missing a temporary folder.';  //to translate
$strUploadErrorCantWrite = 'Failed to write file to disk.';  //to translate
$strUploadErrorExtension = 'File upload stopped by extension.';  //to translate
$strUploadErrorUnknown = 'Unknown error in file upload.';  //to translate
$strSessionStartupErrorGeneral = 'Cannot start session without errors, please check errors given in your PHP and/or webserver log file and configure your PHP installation properly.';  //to translate
$strFieldInsertFromFileTempDirNotExists = 'Error moving the uploaded file, see FAQ 1.11';  //to translate
$strViewName = 'VIEW name';  //to translate
$strOptions = 'Options';  //to translate
$strFiles = 'Files';  //to translate
$strIndexesSeemEqual = 'The following indexes appear to be equal and one of them should be removed:';  //to translate
$strMysqlLibDiffersServerVersion = 'Your PHP MySQL library version %s differs from your MySQL server version %s. This may cause unpredictable behavior.';  //to translate
$strRoutines = 'Routines';  //to translate
$strRoutineReturnType = 'Return type';  //to translate
$strControluserFailed = 'Connection for controluser as defined in your configuration failed.';  //to translate
$strHexForBLOB = 'Use hexadecimal for BLOB';  //to translate
$strRestartInsertion = 'Restart insertion with %s rows';  //to translate
$strTriggers = 'Triggers';  //to translate
$strEvent = 'Event';  //to translate
$strProfiling = 'Profiling';  //to translate
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>
