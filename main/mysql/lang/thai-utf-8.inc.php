<?php
/* $Id: thai-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

// first created 2002/04/29 Arthit Suriyawongkul & Warit Wanasathian
// last modified 2004/08/22 Arthit Suriyawongkul

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('ไบต์', 'กิโลไบต์', 'เมกกะไบต์', 'กิกะไบต์', 'เทอราไบต์', 'เพตตะไบต์', 'เอกซะไบต์');

$day_of_week = array('อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.');
$month = array('ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y  %Rน.';

$timespanfmt = '%s วัน, %s ชั่วโมง, %s นาที, %s วินาที';

$strAbortedClients = 'ยกเลิก';
$strAccessDenied = 'ไม่อนุญาตให้ใช้งาน';
$strAction = 'กระทำการ';
$strAddAutoIncrement = 'เพิ่มค่า AUTO_INCREMENT';
$strAddDeleteColumn = 'เพิ่ม/ลบ คอลัมน์ (ฟิลด์)';
$strAddDeleteRow = 'เพิ่ม/ลบ แถว';
$strAddNewField = 'เพิ่มฟิลด์ใหม่';
$strAddPrivilegesOnDb = 'เพิ่มสิทธิของฐานข้อมูลต่อไปนี้';
$strAddPrivilegesOnTbl = 'เพิ่มสิทธิของตารางต่อไปนี้';
$strAddSearchConditions = 'เพิ่มเงื่อนไขในการค้นหา:';
$strAddToIndex = 'เพิ่มดัชนีคอลัมน์ %s';
$strAddUser = 'เพิ่มผู้ใช้ใหม่';
$strAddUserMessage = 'เพิ่มผู้ใช้ใหม่เรียบร้อยแล้ว';
$strAdministration = 'การดูแลระบบ';
$strAffectedRows = 'แถวที่มีผล:';
$strAfterInsertBack = 'ส่งกลับ';
$strAfterInsertNewInsert = 'แทรกระเบียนใหม่';
$strAfter = 'หลัง %s';
$strAll = 'ทั้งหมด';
$strAllTableSameWidth = 'ให้แสดงตารางทุกอัน ด้วยความกว้างเท่ากันหรือไม่?';
$strAlterOrderBy = 'เรียงค่าในตารางตาม';
$strAnalyzeTable = 'วิเคราะห์ตาราง';
$strAnd = 'และ';
$strAnIndex = 'ได้เพิ่มดัชนีแล้วใน %s';
$strAny = 'ใดๆ';
$strAnyHost = 'โฮสต์ใดๆ';
$strAnyUser = 'ผู้ใช้ใดๆ';
$strAPrimaryKey = 'ได้เพิ่มไพรมารีคีย์แล้วใน %s';
$strArabic = 'อารบิค'; 
$strArmenian = 'อาร์เมเนีย';
$strAscending = 'น้อยไปมาก';
$strAtBeginningOfTable = 'ที่จุดเริ่มต้นของตาราง';
$strAtEndOfTable = 'ที่จุดสุดท้ายของตาราง';
$strAttr = 'แอตทริบิวต์';
$strAutomaticLayout = 'จัดตำแหน่งอัตโนมัติ';

$strBack = 'ย้อนกลับ';
$strBaltic = 'บอลติก';
$strBeginCut = 'เริ่มจุดตัด';
$strBeginRaw = 'เริ่มข้อมูลดิบ';
$strBinary = ' ข้อมูลไบนารี ';
$strBinaryDoNotEdit = ' ข้อมูลไบนารี - ห้ามแก้ไข ';
$strBookmarkDeleted = 'ลบคำค้นที่จดไว้เรียบร้อยแล้ว';
$strBookmarkLabel = 'ป้ายชื่อ';
$strBookmarkQuery = 'คำค้นนี้ถูกจดไว้แล้ว';
$strBookmarkThis = 'จดคำค้นนี้ไว้';
$strBookmarkView = 'ดูอย่างเดียว';
$strBrowse = 'เปิดดู';
$strBulgarian = 'บัลเกเรีย';
$strBzError = 'phpMyAdmin ไม่สามารถบีบอัดข้อมูล dump ได้ เนื่องจากส่วนขยาย Bz2 ใน php รุ่นนี้นั้นเสีย. ขอแนะนำเป็นอย่างยิ่งให้ตั้งไดเรกทีฟ <code>$cfg[\'BZipDump\']</code> ในไฟล์คอนฟิกของ phpMyAdmin เป็น <code>FALSE</code>. ถ้าคุณต้องการที่จะใช้ความสามารถของส่วนขยายการบีบอัด Bz2, คุณควรจะอัพเกรด php เป็นรุ่นถัดไป. รายละเอียดดูได้ที่ php bug report %s.';
$strBzip = '"bzipped"';

$strCalendar = 'ปฏิทิน';
$strCannotLogin = 'ไม่สามารถล็อกอินเข้าเซิร์ฟเวอร์ MySQL ได้';
$strCantLoadRecodeIconv = 'ไม่สามารถเรียกใช้ตัวช่วย iconv หรือ recode เพื่อแปลงชุดตัวอักษร, ทางเลือก: 1) ตั้งค่าให้ PHP สามารถใช้ตัวช่วยเหล่านี้ได้ หรือ 2) ตั้งค่าให้ phpMyAdmin ไม่ต้องแปลงชุดตัวอักษร';
$strCantLoad = 'ไม่สามารถเรียกส่วนขยาย %s,<br />กรุณาตรวจสอบการตั้งค่าของ PHP';
$strCantRenameIdxToPrimary = 'เปลี่ยนชื่อดัชนีเป็น PRIMARY ไม่ได้!';
$strCantUseRecodeIconv = 'ไม่สามารถใช้ฟังก์ชั่น iconv หรือ libiconv หรือ recode_string ทั้งๆ ที่สามารถเรียกตัวช่วย สำหรับฟังก์ชั่นเหล่านั้นขึ้นมาได้แล้ว. ลองตรวจสอบการตั้งค่าของ PHP';
$strCardinality = 'Cardinality';
$strCaseInsensitive = 'ไม่สนใจตัวเล็กตัวใหญ่';
$strCaseSensitive = 'สนใจตัวเล็กตัวใหญ่';
$strCentralEuropean = 'ยุโรปกลาง';
$strChange = 'เปลี่ยน';
$strChangeCopyMode = 'สร้างผู้ใช้ใหม่ ให้มีสิทธิเหมือนกัน และ ...';
$strChangeCopyModeCopy = '... เก็บของเก่าไว้.';
$strChangeCopyModeDeleteAndReload = ' ... ลบของเก่าจากตารางผู้ใช้ แล้วเรียกใช้รายการสิทธิ์ใหม่หลังจากนั้น.';
$strChangeCopyModeJustDelete = ' ... ลบของเก่าทิ้งไปจากตารางผู้ใช้.';
$strChangeCopyModeRevoke = ' ... เรียกคืนสิทธิ์ทั้งหมดจากเดิม แล้วลบมันหลังจากนั้น.';
$strChangeCopyUser = 'เปลี่ยนข้อมูลล็อกอิน / ทำสำเนาผู้ใช้';
$strChangeDisplay = 'เลือกฟิลด์ที่ต้องการแสดง';
$strChangePassword = 'เปลี่ยนรหัสผ่าน';
$strCharset = 'ชุดตัวอักษร';
$strCharsetOfFile = 'ชุดอักขระของไฟล์ (character set):';
$strCharsets = 'ชุดตัวอักษร';
$strCharsetsAndCollations = 'ชุดตัวอักษร และการเรียงลำดับ';
$strCheckAll = 'เลือกทั้งหมด';
$strCheckPrivs = 'ตรวจสอบสิทธิ';
$strCheckPrivsLong = 'ตรวจสอบสิทธิสำหรับฐานข้อมูล &quot;%s&quot;.';
$strCheckTable = 'ตรวจสอบตาราง';
$strChoosePage = 'เลือกหน้าที่ต้องการแก้ไข';
$strColComFeat = 'แสดงหมายเหตุของคอลัมน์';
$strCollation = 'การเรียงลำดับ';
$strColumnNames = 'ชื่อคอลัมน์';
$strColumnPrivileges = 'สิทธิเฉพาะคอลัมน์';
$strCommand = 'คำสั่ง';
$strComments = 'หมายเหตุ';
$strCompleteInserts = 'คำสั่ง INSERT เต็มรูปแบบ';
$strCompression = 'บีบอัดข้อมูล';
$strConfigFileError = 'phpMyAdmin ไม่สามารถอ่านแฟ้มคอนฟิกูเรชั่นของคุณได้<br />โดยปกติ อาจจะเป็นเพราะตัว PHP หาไฟล์ไม่เจอ หรือไม่สามารถประมวลผล (parse) ไฟล์ได้<br />ลองเรียกไฟล์คอนฟิกูเรชั่นขึ้นมาโดยตรง (กดลิงค์ด้านล่าง) และดูว่ามี error message อะไรหรือไม่  ลองตรวจสอบดูเครื่องหมาย quote หรือ semicolon ว่าใส่ครบหรือเปล่า<br />ถ้าคุณเห็นหน้าว่างๆ แสดงว่าทุกอย่างเป็นปกติดี';
$strConfigureTableCoord = 'กรุณาตั้งค่าโคออร์ดิเนตของตาราง %s';
$strConnections = 'การเชื่อมต่อ';
$strCookiesRequired = 'ต้องอนุญาตใช้ใช้ \'คุ๊กกี้\' (cookie) เสียก่อน จึงจะผ่านจุดนี้ไปได้';
$strCopyTable = 'คัดลอกตารางไปยัง (ฐานข้อมูล<b>.</b>ตาราง):';
$strCopyTableOK =  'คัดลอกตาราง %s ไปเก็บในชื่อ %s เรียบร้อยแล้ว.';
$strCopyTableSameNames = 'คัดลอกตารางไปที่เดิมไม่ได้';
$strCouldNotKill = 'phpMyAdmin ไม่สามารถฆ่าเธรด %s. บางทีมันอาจจะถูกปิดไปแล้วก็ได้.';
$strCreate = 'สร้าง';
$strCreateIndex = 'สร้างดัชนีโดยคอลัมน์ %s';
$strCreateIndexTopic = 'สร้างดัชนีใหม่';
$strCreateNewDatabase = 'สร้างฐานข้อมูลใหม่';
$strCreateNewTable = 'สร้างตารางในฐานข้อมูลนี้ %s';
$strCreatePage = 'เริ่มหน้าใหม่';
$strCreatePdfFeat = 'การสร้างเอกสาร PDF';
$strCriteria = 'เงื่อนไข';
$strCroatian = 'โครเอเชีย';
$strCyrillic = 'ซิริลิค';
$strCzech = 'เช็ค';
$strCzechSlovak = 'เช็ค-สโลวัก';

$strDanish = 'เดนมาร์ก';
$strData = 'ข้อมูล';
$strDatabase = 'ฐานข้อมูล';
$strDatabaseHasBeenDropped = 'โยนฐานข้อมูล %s ทิ้งไปเรียบร้อยแล้ว';
$strDatabases = 'ฐานข้อมูล';
$strDatabasesDropped = '%s ฐานข้อมูลได้ถูกทิ้งไปเรียบร้อยแล้ว.';
$strDatabasesStats = 'สถิติฐานข้อมูล';
$strDatabasesStatsDisable = 'ยกเลิกการเก็บสถิติ';
$strDatabasesStatsEnable = 'ให้มีการเก็บสถิติ';
$strDatabasesStatsHeavyTraffic = 'โปรดทราบ: การเปิดใช้การเก็บสถิติของฐานข้อมูล อาจจะทำให้มีปริมาณการถ่ายโอนข้อมูลจำนวนมาก ระหว่างเว็บเซิร์ฟเวอร์ และเซิร์ฟเวอร์ MySQL.';
$strDataDict = 'พจนานุกรมข้อมูล';
$strDataOnly = 'เฉพาะข้อมูล';
$strDBComment = 'หมายเหตุของฐานข้อมูล: ';
$strDbPrivileges = 'สิทธิเจาะจงเฉพาะฐานข้อมูล';
$strDBRename = 'เปลี่ยนชื่อฐานข้อมูลเป็น';
$strDbSpecific = 'เฉพาะฐานข้อมูล';
$strDefault = 'ค่าปริยาย';
$strDefragment = 'จัดระเบียบตาราง';
$strDelete = 'ลบ';
$strDeleteAndFlush = 'ลบผู้ใช้ และเรียกใช้รายการสิทธิ์ใหม่หลังจากนั้น.';
$strDeleteAndFlushDescr = 'นี่เป็นวิธีที่หมดจดที่สุด แต่การโหลดสิทธิใช้งานใหม่ จะต้องใช้เวลาสักระยะ.';
$strDeleted = 'ลบเรียบร้อยแล้ว';
$strDeletedRows = 'แถวที่ถูกลบ:';
$strDeleting = 'กำลังลบ %s';
$strDescending = 'มากไปน้อย';
$strDescription = 'รายละเอียด';
$strDictionary = 'พจนานุกรม';
$strDisabled = 'ระงับการใช้อยู่';
$strDisplayFeat = 'ความสามารถด้านการแสดงผล';
$strDisplayOrder = 'ลำดับการแสดง:';
$strDisplayPDF = 'แสดงสกีมาของ PDF';
$strDoAQuery = 'ทำ "คำค้นจากตัวอย่าง" (wildcard: "%")';
$strDocu = 'เอกสารอ้างอิง';
$strDoYouReally = 'ต้องการจะ ';
$strDrop = 'โยนทิ้ง';
$strDropUsersDb = 'โยนฐานข้อมูลที่มีชื่อเดียวกับผู้ใช้ทิ้ง.';
$strDumpingData = 'dump ตาราง';
$strDumpXRows = 'ดัมพ์แถว %s แถว เริ่มที่แถว %s';
$strDynamic = 'ไม่คงที่';

$strEdit = 'แก้ไข';
$strEditPDFPages = 'แก้ไขหน้า PDF';
$strEditPrivileges = 'แก้ไขสิทธิ';
$strEffective = 'มีผล';
$strEmpty = 'ลบข้อมูล';
$strEmptyResultSet = 'MySQL คืนผลลัพธ์ว่างเปล่ากลับมา (null / 0 แถว).';
$strEnabled = 'เปิดใช้อยู่';
$strEnd = 'ท้ายสุด';
$strEndCut = 'สิ้นสุดจุดตัด';
$strEndRaw = 'สิ้นสุดข้อมูลดิบ';
$strEnglish = 'อังกฤษ';
$strEnglishPrivileges = ' โปรดทราบ: ชื่อของสิทธิใน MySQL จะแสดงเป็นภาษาอังกฤษ ';
$strError = 'ผิดพลาด';
$strEstonian = 'เอสโตเนีย';
$strExplain = 'อธิบาย SQL';
$strExport = 'ส่งออก';
$strExtendedInserts = 'แทรกหลายระเบียนในคราวเดียว';
$strExtra = 'เพิ่มเติม';

$strFailedAttempts = 'ความพยายามล้มเหลว';
$strField = 'ฟิลด์';
$strFieldHasBeenDropped = 'โยนฟิลด์ %s ทิ้งไปเรียบร้อยแล้ว';
$strFields = 'จำนวนฟิลด์';
$strFieldsEnclosedBy = 'คร่อมฟิลด์ด้วย';
$strFieldsEscapedBy = 'เครื่องหมายสำหรับ escape char';
$strFieldsTerminatedBy = 'จบฟิลด์ด้วย';
$strFileCouldNotBeRead = 'อ่านไฟล์ไม่ได้';
$strFileNameTemplate = 'รูปแบบของชื่อไฟล์';
$strFileNameTemplateRemember = 'จำรูปแบบ';
$strFixed = 'คงที่';
$strFlushTable = 'ล้างตาราง (flush)';
$strFormat = 'รูปแบบ';
$strFormEmpty = 'ค่าในแบบฟอร์มหายไป !';
$strFullText = 'ทั้งข้อความ';
$strFunction = 'ฟังก์ชั่น';

$strGenBy = 'สร้างโดย';
$strGeneralRelationFeat = 'ความสามารถด้านรีเลชันทั่วไป';
$strGenTime = 'เวลาในการสร้าง';
$strGeorgian = 'จอร์เจีย';
$strGerman = 'เยอรมัน';
$strGlobal = 'โกลบอล';
$strGlobalPrivileges = 'สิทธิแบบโกลบอล';
$strGlobalValue = 'ค่าแบบโกลบอล';
$strGo = 'ลงมือ';
$strGrantOption = 'มอบสิทธิ';
$strGreek = 'กรีก';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'เปลี่ยนเสร็จแล้ว';
$strHasBeenCreated = 'สร้างเสร็จแล้ว';
$strHaveToShow = 'ต้องเลือกให้แสดงอย่างน้อยหนึ่งคอลัมน์';
$strHebrew = 'ฮิบรู';
$strHome = 'หน้าบ้าน';
$strHomepageOfficial = 'โฮมเพจอย่างเป็นทางการของ phpMyAdmin';
$strHost = 'โฮสต์';
$strHostEmpty = 'ชื่อโฮสต์ยังว่างอยู่!';
$strHungarian = 'ฮังการี';

$strIcelandic = 'ไอซ์แลนด์';
$strId = 'ID';
$strIdxFulltext = 'ข้อความเต็ม (fulltext)';
$strIgnore = 'ไม่สนใจ';
$strImportFiles = 'นำเข้าไฟล์';
$strIndex = 'ดัชนี';
$strIndexes = 'ดัชนี';
$strIndexHasBeenDropped = 'โยนดัชนี %s ทิ้งไปเรียบร้อยแล้ว';
$strIndexName = 'ชื่อดัชนี :';
$strIndexType = 'ชนิดของดัชนี :';
$strInnodbStat = 'สถานะของ InnoDB';
$strInsecureMySQL = 'จากไฟล์เก็บค่ากำหนดของคุณ คุณไม่ได้ตั้งรหัสผ่านสำหรับ root ซึ่งจะถูกใช้เป็นชื่อปริยายซึ่งมีสิทธิพิเศษ.  เซิร์ฟเวอร์ MySQL ที่ทำงานด้วยค่าปริยายนี้ อาจถูกบุกรุกได้ คุณควรจะแก้ไขรูรั่วอันนี้ทันที เพื่อความปลอดภัย';
$strInsert = 'แทรก';
$strInsertAsNewRow = 'แทรกเป็นแถวใหม่';
$strInsertedRowId = 'แทรกเลขประจำแถว:';
$strInsertedRows = 'แถวที่ถูกแทรก:';
$strInternalRelations = 'รีเลชันภายใน';
$strInUse = 'ใช้อยู่';

$strJapanese = 'ญี่ปุ่น';
$strJumpToDB = 'กระโดดไปที่ฐานข้อมูล &quot;%s&quot;.';
$strJustDelete = 'แค่ลบผู้ใช้ออกจากตารางแสดงสิทธิเข้าถึง';

$strKeepPass = 'กรุณาอย่าเปลี่ยนรหัสผ่าน';
$strKeyname = 'ชื่อคีย์';
$strKill = 'ฆ่าทิ้ง';
$strKorean = 'เกาหลี';

$strLandscape = 'แนวนอน';
$strLatexCaption = 'คำอธิบายตาราง';
$strLatexContinued = '(ต่อ)';
$strLaTeX = 'LaTeX';
$strLatvian = 'ลัตเวีย';
$strLengthSet = 'ความยาว/เซต*';
$strLimitNumRows = 'ระเบียนต่อหน้า';
$strLinesTerminatedBy = 'จบแถวด้วย';
$strLinkNotFound = 'ไม่พบลิงก์';
$strLinksTo = 'เชื่อมไปยัง';
$strLithuanian = 'ลิธัวเนีย';
$strLocalhost = 'โลคอล';
$strLocationTextfile = 'เลือกไฟล์ข้อความจาก';
$strLogin = 'เข้าสู่ระบบ';
$strLoginInformation = 'ข้อมูลล็อกอิน';
$strLogout = 'ออกจากระบบ';
$strLogPassword = 'รหัสผ่าน:';
$strLogServer = 'เซิร์ฟเวอร์';
$strLogUsername = 'ชื่อผู้ใช้:';

$strMaximumSize = 'ขนาดใหญ่สุด: %s%s';
$strMIME_available_mime = 'MIME-types ที่มีอยู่';
$strMIME_available_transform = 'การแปลงที่เรียกใช้ได้';
$strMIME_description = 'รายละเอียด';
$strMIME_MIMEtype = 'MIME-type';
$strMIME_nodescription = 'ไม่ปรากฏรายละเอียดสำหรับการแปลงนี้.<br />กรุณาสอบถามผู้เขียนว่า,  %s ทำอะไร.';
$strMIME_transformation_options = 'ตัวเลือกการแปลง';
$strModifications = 'บันทึกการแก้ไขเรียบร้อยแล้ว';
$strModify = 'แก้ไข';
$strModifyIndexTopic = 'แก้ไขดัชนี';
$strMoveTable = 'ย้ายตารางไป (database<b>.</b>table):';
$strMoveTableOK = 'ตาราง %s ถูกย้ายไป %s แล้ว';
$strMoveTableSameNames = 'ย้ายตารางไปที่เดิมไม่ได้';
$strMultilingual = 'หลายภาษา';
$strMySQLCharset = 'ชุดตัวอักษร (charset) ของ MySQL';
$strMySQLSaid = 'MySQL แสดง: ';
$strMySQLShowProcess = 'แสดงงานที่ทำอยู่ของ MySQL';
$strMySQLShowStatus = 'แสดงสถานะของ MySQL';
$strMySQLShowVars = 'แสดงตัวแปรระบบของ MySQL';

$strName = 'ชื่อ';
$strNext = 'ต่อไป';
$strNo = 'ไม่';
$strNoDatabases = 'ไม่มีฐานข้อมูล';
$strNoDatabasesSelected = 'ยังไม่ได้เลือกฐานข้อมูล.';
$strNoDescription = 'ไม่มีรายละเอียด';
$strNoDropDatabases = 'คำสั่ง "DROP DATABASE" ถูกปิดไว้';
$strNoExplain = 'ไม่ต้องอธิบาย SQL';
$strNoFrames = 'เบราเซอร์ที่<b>ใช้เฟรมได้</b> จะช่วยให้ใช้ phpMyAdmin ได้ง่ายขึ้น';
$strNoIndex = 'ยังไม่ได้กำหนดดัชนีใดๆ!';
$strNoIndexPartsDefined = 'ไม่ได้กำหนดส่วนใดๆ ของดัชนี!';
$strNoModification = 'ไม่มีการเปลี่ยนแปลง';
$strNone = 'ไม่มี';
$strNoOptions = 'รูปแบบนี้ไม่มีตัวเลือก';
$strNoPassword = 'ไม่มีรหัสผ่าน';
$strNoPhp = 'ไม่เอาโค้ด PHP';
$strNoPrivileges = 'ไม่มีสิทธิ';
$strNoRights = 'คุณไม่มีสิทธิที่จะเข้ามาตรงนี้!';
$strNoRowsSelected = 'ยังไม่ได้เลือกแถว';
$strNoTablesFound = 'ไม่พบตารางใด ๆ ในฐานข้อมูล';
$strNotNumber = 'ค่านี้ไม่ใช่ตัวเลข!';
$strNotOK = 'ไม่ตกลง';
$strNotSet = 'ไม่พบตาราง <b>%s</b> ใน %s';
$strNoUsersFound = 'ไม่พบผู้ใช้ใดๆ.';
$strNoValidateSQL = 'ไม่ต้องตรวจสอบ SQL';
$strNull = 'ว่างเปล่า (null)';
$strNumSearchResultsInTable = 'พบ %s ผลลัพธ์ที่ตรงในตาราง <i>%s</i>';
$strNumSearchResultsTotal = '<b>รวม:</b> <i>%s</i> ผลลัพธ์ที่ตรง';
$strNumTables = 'ตาราง';

$strOK = 'ตกลง';
$strOperations = 'กระบวนการ';
$strOptimizeTable = 'ปรับแต่งตาราง';
$strOr = 'หรือ';
$strOverhead = 'เกินความจำเป็น';
$strOverwriteExisting = 'เขียนทับแฟ้มที่มีอยู่แล้ว';

$strPageNumber = 'หมายเลขหน้า:';
$strPaperSize = 'ขนาดกระดาษ';
$strPartialText = 'ข้อความบางส่วน';
$strPassword = 'รหัสผ่าน';
$strPasswordChanged = 'เปลี่ยนรหัสผ่านของ %s เรียบร้อยแล้ว';
$strPasswordEmpty = 'รหัสผ่านยังว่างอยู่!';
$strPasswordNotSame = 'รหัสผ่านไม่ตรงกัน!';
$strPdfDbSchema = 'schema ของฐานข้อมูล "%s" - หน้า %s';
$strPdfInvalidTblName = 'ไม่มีตาราง "%s"!';
$strPdfNoTables = 'ไม่มีตาราง';
$strPerHour = 'ต่อชั่วโมง';
$strPerMinute = 'ต่อนาที';
$strPerSecond = 'ต่อวินาที';
$strPhoneBook = 'สมุดโทรศัพท์';
$strPHP40203 = 'คุณกำลังใช้ PHP รุ่น 4.2.3, ซึ่งมีบั๊กร้ายแรงเกี่ยวกับ multi-byte strings (mbstring). กรุณาดูรายงานบั๊ก PHP หมายเลข 19404. เราไม่แนะนำให้คุณใช้ PHP รุ่นนี้กับ phpMyAdmin.';
$strPhp = 'สร้างโค้ด PHP';
$strPHPVersion = 'รุ่นของ PHP';
$strPmaDocumentation = 'เอกสารการใช้ phpMyAdmin';
$strPmaUriError = '<b>ต้อง</b>กำหนดค่า <tt>$cfg[\'PmaAbsoluteUri\']</tt> ในไฟล์คอนฟิกูเรชั่นเสียก่อน';
$strPolish = 'โปแลนด์';
$strPortrait = 'แนวตั้ง';
$strPos1 = 'จุดเริ่มต้น';
$strPrevious = 'ก่อนหน้า';
$strPrimary = 'ไพรมารี';
$strPrimaryKeyHasBeenDropped = 'โยนไพรมารีคีย์ทิ้งไปเรียบร้อยแล้ว';
$strPrimaryKeyName = 'ชื่อของไพรมารีคีย์ จะต้องเป็น PRIMARY เท่านั้น';
$strPrimaryKeyWarning = '(ชื่อของไพรมารีคีย์<b>จะต้องเป็น</b> "PRIMARY" เท่านั้น!)';
$strPrint = 'พิมพ์';
$strPrintView = 'แสดง';
$strPrivDescAllPrivileges = 'ให้สิทธิทุกอย่าง ยกเว้นการให้สิทธิแก่ผู้อื่น (GRANT).';
$strPrivDescAlter = 'อนุญาตให้เปลี่ยนโครงสร้างของตารางที่มีอยู่เดิม.';
$strPrivDescCreateDb = 'อนุญาตให้สร้างฐานข้อมูล และตารางใหม่.';
$strPrivDescCreateTbl = 'อนุญาตให้สร้างตารางใหม่.';
$strPrivDescCreateTmpTable = 'อนุญาตให้สร้างตารางชั่วคราว.';
$strPrivDescDelete = 'อนุญาตให้ลบข้อมูล';
$strPrivDescDropDb = 'อนุญาตให้ทิ้งฐานข้อมูล และตาราง';
$strPrivDescDropTbl = 'อนุญาตให้ทิ้งตาราง';
$strPrivDescExecute = 'อนุญาตให้รัน stored procedure (ไม่มีผลใน MySQL รุ่นนี้)';
$strPrivDescFile = 'อนุญาตให้นำเข้าข้อมูล และส่งออกข้อมูล ไปที่ไฟล์';
$strPrivDescGrant = 'อนุญาตให้เพิ่มผู้ใช้ และสิทธิเข้าถึง โดยไม่ต้องเรียกใช้ตารางสิทธิใหม่';
$strPrivDescIndex = 'อนุญาตให้สร้าง และทิ้ง ดัชนี';
$strPrivDescInsert = 'อนุญาตให้เพิ่ม และแทนที่ ข้อมูล';
$strPrivDescLockTables = 'อนุญาตให้ล็อกตารางสำหรับเธรดปัจจุบัน';
$strPrivDescMaxConnections = 'จำกัดจำนวนการเชื่อมต่อใหม่ ที่ผู้ใช้จะสามารถเปิดได้ ต่อชั่วโมง';
$strPrivDescMaxQuestions = 'จำกัดจำนวนของคำค้น ที่ผู้ใช้จะสามารถส่งมาที่เซิร์ฟเวอร์ได้ ต่อชั่วโมง';
$strPrivDescMaxUpdates = 'จำกัดจำนวนของคำสั่ง ที่จะเปลี่ยนแปลงตาราง หรือฐานข้อมูลใดๆ ที่ผู้ใช้จะสามารถสั่งได้ ต่อชั่วโมง';
$strPrivDescProcess3 = 'อนุญาตให้ทำลายโพรเซสของผู้ใช้อื่น';
$strPrivDescProcess4 = 'อนุญาตให้ดูคำค้นทั้งหมดในรายการโพรเซส';
$strPrivDescReferences = 'ไม่มีผลใน MySQL รุ่นนี้';
$strPrivDescReload = 'อนุญาตให้เรียกใช้ค่ากำหนดของเซิร์ฟเวอร์ใหม่ และล้างแคชของเซิร์ฟเวอร์';
$strPrivDescReplClient = 'มอบสิทธิให้ผู้ใช้ ในการถามว่า slaves หรือ masters อยู่ที่ไหน.';
$strPrivDescSelect = 'อนุญาตให้อ่านข้อมูลได้.';
$strPrivDescShowDb = 'สามารถเรียกดูรายการฐานข้อมูลทั้งหมดได้';
$strPrivDescShutdown = 'อนุญาตให้ปิดเซิร์ฟเวอร์ได้';
$strPrivDescUpdate = 'อนุญาตให้เปลี่ยนข้อมูลได้.';
$strPrivDescUsage = 'ไม่มีสิทธิใดๆ.';
$strPrivileges = 'สิทธิ';
$strPrivilegesReloaded = 'สิทธิได้ถูกเรียกใช้ใหม่เรียบร้อยแล้ว';
$strProcesses = 'โพรเซส';
$strProcesslist = 'รายการโพรเซส';
$strPutColNames = 'ใส่ชื่อฟิลด์ที่แถวแรก';

$strQBE = 'คำค้นจากตัวอย่าง';
$strQBEDel = 'ลบ';
$strQBEIns = 'เพิ่ม';
$strQueryFrame = 'หน้าต่างคำค้น';
$strQueryOnDb = 'คำค้นบนฐานข้อมูล <b>%s</b>:';
$strQuerySQLHistory = 'SQL-history';
$strQueryStatistics = '<b>สถิติคำค้น</b>: มี %s คำค้น ถูกส่งไปที่เซิร์ฟเวอร์ นับตั้งแต่เริ่มระบบ.';
$strQueryTime = 'คำค้นใช้เวลา %01.4f วินาที';
$strQueryType = 'ชนิดคำค้น';

$strReceived = 'ได้รับ';
$strRecords = 'ระเบียน';
$strReferentialIntegrity = 'ตรวจสอบความสมบูรณ์ของการอ้างถึง:';
$strRefresh = 'เรียกใหม่';
$strRelationalSchema = 'รีเลชันแนล สกีมา';
$strRelationNotWorking = 'ความสามารถเพิ่มเติมสำหรับ linked Tables ได้ถูกระงับเอาไว้ ตามเหตุผลที่แจ้งไว้ใน %shere%s';
$strRelations = 'รีเลชัน';
$strRelationView = 'มุมมองรีเลชัน';
$strReloadingThePrivileges = 'ปรับปรุงสิทธิเข้าถึงใหม่อีกรอบ';
$strRemoveSelectedUsers = 'ถอนผู้ใช้ที่เลือก';
$strRenameTable = 'เปลี่ยนชื่อตารางเป็น';
$strRenameTableOK = 'ตาราง %s ได้ถูกเปลี่ยนชื่อเป็น %s';
$strRepairTable = 'ซ่อมแซมตาราง';
$strReplaceNULLBy = 'แทนที่ NULL เป็น';
$strReplaceTable = 'เขียนทับด้วยข้อมูลจากไฟล์';
$strReset = 'เริ่มใหม่';
$strResourceLimits = 'ขีดจำกัดของทรัพยากร';
$strReType = 'พิมพ์ใหม่';
$strRevoke = 'เพิกถอน';
$strRevokeAndDelete = 'เพิกถอน active privileges ทั้งหมดจากผู้ใช้ และลบผู้ใช้ทิ้งหลังจากนั้น.';
$strRevokeAndDeleteDescr = 'ผู้ใช้ต่างๆ ยังคงมีสิทธิ USAGE จนกว่า ข้อมูลสิทธิ จะถูกเรียกใช้ใหม่อีกที.';
$strRevokeMessage = 'คุณได้เพิกถอนสิทธิของ %s';
$strRomanian = 'โรมาเนีย';
$strRowLength = 'ความยาวแถว';
$strRows = 'แถว';
$strRowsFrom = 'แถว เริ่มจากแถวที่';
$strRowSize = ' ขนาดแถว ';
$strRowsModeFlippedHorizontal = 'แนวนอน (หมุนหัวเรื่อง)';
$strRowsModeHorizontal = 'แนวนอน';
$strRowsModeOptions = 'อยู่ใน %s และซ้ำหัวแถวทุกๆ %s เซลล์';
$strRowsModeVertical = 'แนวตั้ง';
$strRowsStatistic = 'สถิติของแถว';
$strRunning = 'ทำงานอยู่บน %s';
$strRunQuery = 'ประมวลผลคำค้น';
$strRunSQLQuery = 'ประมวลผลคำค้นบนฐานข้อมูล %s';
$strRussian = 'รัสเซีย';

$strSave = 'บันทึก';
$strScaleFactorSmall = 'อัตราย่อน้อยเกินไป ที่จะจัดให้สกีมาอยู่ในหน้าเดียว';
$strSearch = 'ค้นหา';
$strSearchFormTitle = 'ค้นหาในฐานข้อมูล';
$strSearchInTables = 'ในตาราง:';
$strSearchNeedle = 'คำ หรือ ค่าที่ต้องการค้นหา (wildcard: "%"):';
$strSearchOption1 = 'อย่างน้อยหนึ่งคำ';
$strSearchOption2 = 'ทุกคำ';
$strSearchOption3 = 'เหมือนทั้งวลี';
$strSearchOption4 = 'รูปแบบคำพ้อง (regular expression)';
$strSearchResultsFor = 'ผลการค้นหา "<i>%s</i>" %s:';
$strSearchType = 'ค้น:';
$strSelectADb = 'โปรดเลือกฐานข้อมูล';
$strSelectAll = 'เลือกทั้งหมด';
$strSelectFields = 'เลือกฟิลด์ (อย่างน้อยหนึ่งฟิลด์):';
$strSelectNumRows = 'ในคำค้น';
$strSelectTables = 'เลือกตาราง';
$strSend = 'ส่งมาเป็นไฟล์';
$strSent = 'ถูกส่ง';
$strServer = 'เซิร์ฟเวอร์';
$strServerChoice = 'ตัวเลือกเซิร์ฟเวอร์';
$strServerNotResponding = 'เซิร์ฟเวอร์ดังกล่าวไม่ตอบสนอง';
$strServerStatus = 'ข้อมูลรันไทม์';
$strServerStatusUptime = 'เซิร์ฟเวอร์ MySQL นี้รันมาเป็นเวลา %s. เริ่มตอน %s.';
$strServerTabVariables = 'ตัวแปร';
$strServerTrafficNotes = '<b>การจราจรของเซิร์ฟเวอร์</b>: ตารางนี้แสดงสถิติของการจราจรบนเครือข่าย สำหรับเซิร์ฟเวอร์ MySQL นี้ ตั้งแต่มันเริ่มทำงาน.';
$strServerVars = 'ตัวแปร และค่ากำหนด ของเซิร์ฟเวอร์';
$strServerVersion = 'รุ่นของเซิร์ฟเวอร์';
$strSessionValue = 'ค่าเซสชั่น';
$strSetEnumVal = 'ถ้าชนิดของฟิลด์เป็น "enum" หรือ "set" โปรดใส่ค่าตามรูปแบบ: \'a\',\'b\',\'c\'...<br />ถ้าต้องการใส่เครื่องหมาย backslash ("\\") หรือ อัญประกาศเดี่ยว ("\'") เข้าไปในค่าเหล่านั้น ให้ใส่เครื่องหมาย แบ๊กแสลช นำหน้า (ตัวอย่าง: \'\\\\xyz\' or \'a\\\'b\')';
$strShow = 'แสดง';
$strShowAll = 'แสดงทั้งหมด';
$strShowColor = 'แสดงสี';
$strShowDatadictAs = 'รูปแบบพจนานุกรมข้อมูล';
$strShowFullQueries = 'แสดงคำค้นแบบเต็ม';
$strShowGrid = 'แสดงกริด';
$strShowingRecords = 'แสดงระเบียนที่ ';
$strShowPHPInfo = 'แสดงข้อมูลของ PHP';
$strShowTableDimension = 'แสดงมิติของตาราง';
$strShowTables = 'แสดงตาราง';
$strShowThisQuery = ' แสดงคำค้นนี้อีกที ';
$strSimplifiedChinese = 'จีน (แผ่นดินใหญ่)';
$strSingly = '(เดี่ยว)';
$strSize = 'ขนาด';
$strSlovak = 'สโลวัก';
$strSlovenian = 'สโลเวเนีย';
$strSort = 'เรียง';
$strSortByKey = 'เรียงโดยคีย์';
$strSpaceUsage = 'เนื้อที่ที่ใช้';
$strSpanish = 'สเปน';
$strSplitWordsWithSpace = 'คำถูกแบ่งด้วยช่องว่าง (" ").';
$strSQLParserBugMessage = 'อาจจะมีการเปลี่ยนแปลงบางอย่าง ที่คุณพบว่ามันเป็นข้อผิดพลาดของตัวอ่านคำสั่ง SQL. กรุณาตรวจสอบคำค้นของคุณให้ถี่ถ้วน โดยเฉพาะการเปิด/ปิดเครื่องหมายคำพูด (quotes) ให้ถูกต้อง. อีกสาเหตุหนึ่งที่เป็นไปได้คือ คุณอาจจะอัพโหลดแฟ้มไบนารีข้างนอกช่วงของเครื่องหมายคำพูด. คุณสามารถที่จะลองคำค้นของคุณที่คอมมานด์ไลน์ของ MySQL ซึ่งคุณอาจจะพบข้อผิดพลาดบางอย่างในนั้น. หากเซิร์ฟเวอร์ MySQL แจ้งข้อผิดพลาดมา, ให้ลองอ่านดู มันอาจจะช่วยให้คุณวินิจฉัยปัญหาได้ดีขึ้น. ถ้าคุณยังพบปัญหากับ parser ใน phpMyAdmin อยู่ แต่ไม่พบปัญหากับ parser ในคอมมานด์ไลน์, ให้ลองลดความยาวของคำค้น SQL ลง จนกระทั่งเหลือคำค้น SQL เดี่ยวๆ ที่ยังทำให้เกิดปัญหาอยู่อีก, แล้วแจ้งข้อผิดพลาดดังกล่าวมาที่เรา, ส่งมันมาพร้อมกับตัวข้อมูลที่คุณค้น ซึ่งได้จากส่วนของ CUT ด้านล่าง.';
$strSQLParserUserError = 'อาจจะมีข้อผิดพลาดบางอย่างในคำค้น SQL ของคุณ. หาก MySQL server ได้แจ้งข้อผิดพลาดมาด้านล่างนี้ ให้ลองอ่านดู มันอาจจะช่วยให้คุณวินิจฉัยปัญหาได้ดีขึ้น';
$strSQLQuery = 'คำค้น SQL';
$strSQLResult = 'ผลลัพธ์ SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'ชื่อตัวแปรไม่ถูกต้อง';
$strSQPBugUnclosedQuote = 'ไม่ได้ปิดเครื่องหมายคำพูด';
$strSQPBugUnknownPunctuation = 'มีเครื่องหมายวรรคตอนที่ไม่รู้จัก';
$strStatCheckTime = 'ตรวจสอบครั้งสุดท้ายเมื่อ';
$strStatCreateTime = 'สร้างเมื่อ';
$strStatement = 'คำสั่ง';
$strStatUpdateTime = 'ปรับปรุงครั้งสุดท้ายเมื่อ';
$strStatus = 'สถานะ';
$strStrucCSV = 'ข้อมูล CSV (คั่นด้วยเครื่องหมายลูกน้ำ ",")';
$strStrucData = 'ทั้งโครงสร้างและข้อมูล';
$strStrucExcelCSV = 'ข้อมูล CSV สำหรับไมโครซอฟต์เอ็กเซล';
$strStrucOnly = 'เฉพาะโครงสร้าง';
$strStructPropose = 'เสนอโครงสร้างตาราง';
$strStructure = 'โครงสร้าง';
$strSubmit = 'ส่ง';
$strSuccess = 'ทำคำค้นเสร็จเรียบร้อยแล้ว';
$strSum = 'ผลรวม';
$strSwedish = 'สวีเดน';
$strSwitchToTable = 'สลับไปที่ตารางที่ถูกทำสำเนาไว้';

$strTable = 'ตาราง ';
$strTableComments = 'หมายเหตุของตาราง';
$strTableEmpty = 'ชื่อตารางยังว่างอยู่!';
$strTableHasBeenDropped = 'โยนตาราง %s ทิ้งไปเรียบร้อยแล้ว';
$strTableHasBeenEmptied = 'ลบข้อมูลในตาราง %s เรียบร้อยแล้ว';
$strTableHasBeenFlushed = 'ล้างตาราง %s เรียบร้อยแล้ว';
$strTableMaintenance = 'การดูแลรักษาตาราง';
$strTableOfContents = 'สารบัญ';
$strTableOptions = 'ตัวเลือกตาราง';
$strTables = '%s ตาราง';
$strTableStructure = 'โครงสร้างตาราง';
$strTblPrivileges = 'สิทธิเจาะจงเฉพาะตาราง';
$strTextAreaLength = 'เนื่องจากความยาวของมัน <br />ฟิลด์นี้ ไม่อาจแก้ไขได้';
$strThai = 'ไทย';
$strTheme = 'หน้าตา';
$strThisHost = 'โฮสต์นี้';
$strThreadSuccessfullyKilled = 'เธรด %s ถูกทำลายเรียบร้อยแล้ว.';
$strTime = 'เวลา';
$strTotal = 'ทั้งหมด';
$strTotalUC = 'รวม';
$strTraditionalChinese = 'จีน (ไต้หวัน)';
$strTraditionalSpanish = 'สเปน (ดั้งเดิม)';
$strTraffic = 'การจราจร';
$strTransformation_image_jpeg__inline = 'แสดงรูปขนาดเล็กที่กดเข้าไปดูภาพใหญ่ได้; ตัวเลือก: ความกว้าง, ความสูง หน่วยเป็นพิกเซล (คงสัดส่วนเดิม)';
$strTransformation_image_jpeg__link = 'แสดงลิงก์ไปยังรูป (ดาวน์โหลดข้อมูลไบนารีโดยตรง/blob).';
$strTransformation_image_png__inline = 'ดูรูปชนิด image/jpeg ทันที';
$strTransformation_text_plain__formatted = 'สงวนการจัดรูปแบบเดิมในฟิลด์ไว้ -- ไม่แทรก escape character.';
$strTruncateQueries = 'ตัดทอนคำค้นที่แสดง';
$strTurkish = 'ตุรกี';
$strType = 'ชนิด';

$strUkrainian = 'ยูเครน';
$strUncheckAll = 'ไม่เลือกเลย';
$strUnicode = 'ยูนิโค้ด';
$strUnique = 'เอกลักษณ์';
$strUnknown = 'ไม่ระบุ';
$strUnselectAll = 'ไม่เลือกเลย';
$strUpdatePrivMessage = 'คุณได้ปรับปรุงสิทธิสำหรับ %s แล้ว';
$strUpdateProfileMessage = 'ปรับปรุงโพรไฟล์เรียบร้อยแล้ว';
$strUpdateQuery = 'ปรับปรุงคำค้น';
$strUpdComTab = 'โปรดอ่านเอกสารเกี่ยวกับ วิธีการปรับปรุงตาราง Column_comments (เก็บหมายเหตุของคอลัมน์) ของคุณ';
$strUsage = 'ใช้งาน';
$strUseBackquotes = 'ใส่ \'backqoute\' ให้กับชื่อตารางและฟิลด์';
$strUser = 'ผู้ใช้';
$strUserAlreadyExists = 'มีผู้ใช้ %s อยู่แล้ว!';
$strUserEmpty = 'ชื่อผู้ใช้ยังว่างอยู่!';
$strUserName = 'ชื่อผู้ใช้';
$strUserNotFound = 'ไม่พบผู้ใช้ที่เลือกในตารางแสดงสิทธิ';
$strUserOverview = 'ข้อมูลทั่วไปของผู้ใช้';
$strUsersDeleted = 'ลบผู้ใช้ที่เลือกไว้เรียบร้อยแล้ว.';
$strUsersHavingAccessToDb = 'ผู้ใช้มีสิทธิเข้าถึงฐานข้อมูล &quot;%s&quot;';
$strUseTables = 'ใช้ตาราง';
$strUseTextField = 'ใช้ช่องใส่ข้อความ (text field)';
$strUseThisValue = 'ใช้ค่านี้';

$strValidateSQL = 'ตรวจสอบ SQL';
$strValidatorError = 'ไม่สามารถเริ่มตัวตรวจสอบ SQL ได้. กรุณาตรวจสอบว่า คุณได้ติดตั้ง php extensions ที่จำเป็น ดังที่อธิบายไว้ใน %sdocumentation%s เรียบร้อยแล้ว';
$strValue = 'ค่า';
$strVar = 'ตัวแปร';
$strViewDump = 'ดูโครงสร้างของตาราง';
$strViewDumpDB = 'ดูโครงสร้างของฐานข้อมูล';

$strWebServerUploadDirectory = 'ไดเรกทอรีสำหรับอัพโหลด ที่เว็บเซิร์ฟเวอร์';
$strWebServerUploadDirectoryError = 'ไม่สามารถใช้งาน ไดเรกทอรีที่ตั้งไว้สำหรับอัพโหลดได้';
$strWelcome = '%s ยินดีต้อนรับ';
$strWestEuropean = 'ยุโรปตะวันตก';
$strWildcard = 'ไวล์การ์ด';
$strWithChecked = 'ทำกับที่เลือก:';
$strWrongUser = 'อนุญาตให้เข้าใช้ไม่ได้ ชื่อผู้ใช้หรือรหัสผ่านผิด';

$strXML = 'XML';

$strYes = 'ใช่';

$strZeroRemovesTheLimit = 'โปรดทราบ: ถ้าเปลี่ยนค่าเหล่านี้เป็น 0 (ศูนย์) จะหมายถึง ไม่มีขีดจำกัด.';
$strZip = '"ถูกบีบอัดอยู่ (zip)"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAccessDeniedExplanation = 'phpMyAdmin tried to connect to the MySQL server, and the server rejected the connection. You should check the host, username and password in your configuration and make sure that they correspond to the information given by the administrator of the MySQL server.';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strAddIntoComments = 'Add into comments';//to translate
$strAfterInsertNext = 'Edit next row';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate
$strAndThen = 'and then';  //to translate
$strApproximateCount = 'May be approximate. See FAQ 3.11';  //to translate

$strBinaryLog = 'Binary log';  //to translate
$strBinLogEventType = 'Event type';  //to translate
$strBinLogInfo = 'Information';  //to translate
$strBinLogName = 'Log name';  //to translate
$strBinLogOriginalPosition = 'Original position';  //to translate
$strBinLogPosition = 'Position';  //to translate
$strBinLogServerId = 'Server ID';  //to translate
$strBookmarkAllUsers = 'Let every user access this bookmark';  //to translate
$strBookmarkCreated = 'Bookmark %s created';  //to translate
$strBookmarkReplace = 'Replace existing bookmark of same name';  //to translate
$strBrowseDistinctValues = 'Browse distinct values';  //to translate
$strBrowseForeignValues = 'Browse foreign values';  //to translate
$strBufferPoolActivity = 'Buffer Pool Activity';  //to translate
$strBufferPool = 'Buffer Pool';  //to translate
$strBufferPoolUsage = 'Buffer Pool Usage';  //to translate
$strBufferReadMissesInPercent = 'Read misses in %';  //to translate
$strBufferReadMisses = 'Read misses';  //to translate
$strBufferWriteWaitsInPercent = 'Write waits in %';  //to translate
$strBufferWriteWaits = 'Write waits';  //to translate
$strBusyPages = 'Busy pages';  //to translate

$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCheckOverhead = 'Check tables with overhead';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strCopy = 'Copy';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCSV = 'CSV';  //to translate

$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDatabaseExportOptions = 'Database export options';//to translate
$strDataPages = 'Pages containing data';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strDelayedInserts = 'ใช้ delayed inserts';  //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strDirtyPages = 'Dirty pages';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strDumpSaved = 'Dump has been saved to file %s.';  //to translate

$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strEngineAvailable = '%s is available on this MySQL server.';  //to translate
$strEngineDisabled = '%s has been disabled for this MySQL server.';  //to translate
$strEngines = 'Engines';  //to translate
$strEngineUnsupported = 'This MySQL server does not support the %s storage engine.';  //to translate
$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strEsperanto = 'Esperanto';  //to translate
$strExcelEdition = 'Excel edition';  //to translate
$strExecuteBookmarked = 'Execute bookmarked query';  //to translate

$strFileAlreadyExists = 'File %s already exists on server, change filename or check overwrite option.';  //to translate
$strFileNameTemplateDescriptionDatabase = 'database name';  //to translate
$strFileNameTemplateDescriptionServer = 'server name';  //to translate
$strFileNameTemplateDescriptionTable = 'table name';  //to translate
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate
$strFileToImport = 'File to import';  //to translate
$strFlushPrivilegesNote = 'โปรดทราบ: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strFlushQueryCache = 'Flush query cache';  //to translate
$strFlushTables = 'Flush (close) all tables';  //to translate
$strFreePages = 'Free pages';  //to translate

$strGenerate = 'Generate';  //to translate
$strGeneratePassword = 'Generate Password';  //to translate

$strHandler = 'Handler';  //to translate
$strHTMLExcel = 'Microsoft Excel 2000';  //to translate
$strHTMLWord = 'Microsoft Word 2000';  //to translate

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
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
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

$strJoins = 'Joins';  //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate

$strKeyCache = 'Key cache';  //to translate

$strLanguageUnknown = 'Unknown language: %1$s.';  //to translate
$strLatchedPages = 'Latched pages';  //to translate
$strLatexContent = 'Content of table __TABLE__';//to translate
$strLatexContinuedCaption = 'Continued table caption';//to translate
$strLatexIncludeCaption = 'Include table caption';//to translate
$strLatexLabel = 'Label key';//to translate
$strLatexStructure = 'Structure of table __TABLE__';//to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate
$strLongOperation = 'This operation could be long. Proceed anyway?';  //to translate

$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';  //to translate
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';  //to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\', 100, b,\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
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
$strNoPermission = 'The web server does not have permission to save the file %s.';  //to translate
$strNoSpace = 'Insufficient space to save the file %s.';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strNumberOfFields = 'Number of fields';  //to translate

$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate
$strOperator = 'Operator';  //to translate

$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPersian = 'Persian';  //to translate
$strPrintViewFull = 'Print view (with full texts)';  //to translate
$strPrivDescAlterRoutine = 'Allows altering and dropping stored routines.';  //to translate
$strPrivDescCreateRoutine = 'Allows creating stored routines.';  //to translate
$strPrivDescCreateUser = 'Allows creating, dropping and renaming user accounts.';  //to translate
$strPrivDescCreateView = 'Allows creating new views.';  //to translate
$strPrivDescExecute5 = 'Allows executing stored routines.';  //to translate
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescShowView = 'Allows performing SHOW CREATE VIEW queries.';  //to translate
$strPrivDescSuper = 'อนุญาตให้เชื่อมต่อ, แม้ว่าจำนวนการเชื่อมต่อจะถึงระดับสูงสุดแล้ว; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strProtocolVersion = 'Protocol version';  //to translate

$strQueryCache = 'Query cache';  //to translate
$strQueryWindowLock = 'Do not overwrite this query from outside the window';  //to translate

$strReadRequests = 'Read requests';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strReloadPrivileges = 'Reload privileges';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strReplication = 'Replication';  //to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate

$strSaveOnServer = 'Save on server in %s directory';  //to translate
$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';  //to translate
$strSelectBinaryLog = 'Select binary log to view';  //to translate
$strServerStatusDelayedInserts = 'Delayed inserts';  //to translate
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
$strSkipQueries = 'Number of records(queries) to skip from start';  //to translate
$strSocketProblem = '(or the local MySQL server\'s socket is not correctly configured)';  //to translate
$strSorting = 'Sorting';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strSQLExportType = 'Export type';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate
$strStorageEngines = 'Storage Engines';  //to translate
$strStorageEngine = 'Storage Engine';  //to translate
$strStrucNativeExcel = 'ข้อมูล Native MS Excel';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate

$strTableAlreadyExists = 'Table %s already exists!';  //to translate
$strTakeIt = 'take it';  //to translate
$strTempData = 'Temporary data';  //to translate
$strThemeDefaultNotFound = 'Default theme %s not found!';  //to translate
$strThemeNoPreviewAvailable = 'No preview available.';  //to translate
$strThemeNotFound = 'Theme %s not found!';  //to translate
$strThemeNoValidImgPath = 'No valid image path for theme %s found!';  //to translate
$strThemePathNotFound = 'Theme path not found for theme %s!';  //to translate
$strThreads = 'Threads';  //to translate
$strTimeoutInfo = 'Previous import timed out, after resubmitting will continue from position %d.';  //to translate
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';  //to translate
$strTimeoutPassed = 'Script timeout passed, if you want to finish import, please resubmit same file and import will resume.';  //to translate
$strToggleScratchboard = 'toggle scratchboard';  //to translate
$strTransactionCoordinator = 'Transaction coordinator';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_text_plain__external = 'สำหรับ ลีนุกซ์ เท่านั้น: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate
$strTransformation_text_plain__substr = 'แสดงข้อความบางส่วนเท่านั้น. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate

$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate
$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUsedPhpExtensions = 'Used PHP extensions';  //to translate
$strUseHostTable = 'ใช้ Host Table';  //to translate
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate

$strVersionInformation = 'Version information';  //to translate
$strViewDumpDatabases = 'View dump (schema) of databases';//to translate
$strViewHasBeenDropped = 'View %s has been dropped';  //to translate
$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate
$strView = 'View';  //to translate

$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window or your browser is blocking cross-window updates of your security settings';  //to translate
$strWriteRequests = 'Write requests';  //to translate

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
