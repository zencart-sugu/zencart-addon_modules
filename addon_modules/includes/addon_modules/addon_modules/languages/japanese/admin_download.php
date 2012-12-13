<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2009 Liquid System Technology, Inc.                    |
// | Author Koji Sasaki                                                   |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 The zen-cart developers                  |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: admin_download.php 184 2011-11-22 01:33:14Z s.kohata $
//

define('HEADING_TITLE',                  'addon�⥸�塼�� ���������');
define('HEADING_INFOBOX_TITLE',          '�⥸�塼��ܺ�');

define('TABLE_HEADING_MODULE_NAME',      '�⥸�塼��̾');
define('TABLE_HEADING_DESCRIPTION',      '����');
define('TABLE_HEADING_VERSION',          '�С������');
define('TABLE_HEADING_ACTION',           '���');

define('TEXT_BACK',                      '���');
define('TEXT_DOWNLOAD',                  '���������');

define('TEXT_INFO_BOX_MODULE_NAME',      '�⥸�塼��̾: ');
define('TEXT_INFO_BOX_FILENAME',         '�ե�����̾: ');
define('TEXT_INFO_BOX_DISTRIBUTION_URL', '���۸�URL: ');
define('TEXT_INFO_BOX_AUTHOR',           '���: ');
define('TEXT_INFO_BOX_VERSION',          '�С������: ');
define('TEXT_INFO_BOX_REQUIRE_ZENCART',  '�б�ZenCart: ');
define('TEXT_INFO_BOX_REQUIRE_ADDON',    '�б�addon�⥸�塼�륳��: ');
define('TEXT_INFO_BOX_DESCRIPTION',      '�⥸�塼������: ');

define('ERROR_NOT_PERMISSION_ADDON_DIR', MODULE_ADDON_MODULES_DOWNLOAD_DIRECTORY.'�˽񤭹��߸��¤�����ޤ���');
define('ERROR_NOT_PERMISSION_TEMP',      MODULE_ADDON_MODULES_DOWNLOAD_TEMP_DIRECTORY.'�˽񤭹��߸��¤�����ޤ���');
define('ERROR_NO_FILE',                  '%s�⥸�塼���¸�ߤ��ޤ���');
define('ERROR_CANNOT_DOWNLOAD',          '%s�⥸�塼����������ɤǤ��ޤ���Ǥ�����');
define('ERROR_DOWNLOADED',               '%s�⥸�塼��ϴ��˥�������ɺѤǤ���');
define('ERROR_VERSION',                  '%s�⥸�塼��� ZenCart %s addon�⥸�塼�륳�� %s ��ư��ޤ���');
define('SUCCESS_EXTRACT',                '%s�⥸�塼�뤬��������ɤ���ޤ�����');
define('ERROR_EXTRACT',                  '%s�⥸�塼���Ÿ�����뤳�Ȥ��Ǥ��ޤ���Ǥ�����');
