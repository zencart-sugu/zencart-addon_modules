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
//  $Id: admin_blocks.php $
//

define('HEADING_TITLE', '�֥�å�������');

define('TABLE_HEADING_BOX_NAME', '�ܥå���̾');
define('TABLE_HEADING_BLOCK_NAME', '�֥�å�̾');
define('TABLE_HEADING_BOX', '�ܥå����ե�����');
define('TABLE_HEADING_MODULE', '�⥸�塼��');
define('TABLE_HEADING_BLOCK', '�֥�å��᥽�å�');
define('TABLE_HEADING_STATUS', '���ơ�����');
define('TABLE_HEADING_LOCATION', 'ɽ������');
define('TABLE_HEADING_SORT_ORDER', '�����');
define('TABLE_HEADING_ACTION', '���');

define('TEXT_INFO_EDIT_INTRO', 'ɬ�פ��ѹ���ԤäƤ���������');
define('TEXT_INFO_MODULE_NAME', '�⥸�塼��̾: ');

define('TEXT_INFO_BOX','������Υܥå���: ');
define('TEXT_INFO_BOX_NAME', '�ܥå���̾:');
define('TEXT_INFO_BOX_LOCATION','ɽ������: ');
define('TEXT_INFO_BOX_STATUS', '�ܥå��� ���ơ�����: ');
define('TEXT_INFO_BOX_STATUS_INFO','ON= 1 OFF=0');
define('TEXT_INFO_BOX_SORT_ORDER', '�����:');
define('TEXT_INFO_BOX_VISIBLE', '�ڡ������ɽ��/��ɽ��: ');
define('TEXT_INFO_BOX_PAGES', '�ڡ���: ');
define('TEXT_INFO_INSERT_BOX_INTRO', '�������ܥå����Υǡ��������Ϥ��Ƥ���������');
define('TEXT_INFO_DELETE_BOX_INTRO', '���Υܥå����������˺�����ޤ���?');
define('TEXT_INFO_HEADING_NEW_BOX', '�������ܥå���');
define('TEXT_INFO_HEADING_EDIT_BOX', '�ܥå������Խ�');
define('TEXT_INFO_HEADING_DELETE_BOX', '�ܥå�������');
define('TEXT_INFO_DELETE_MISSING_BOX','�ƥ�ץ졼�ȥꥹ�Ȥ��������Υܥå�������: ');
define('TEXT_INFO_DELETE_MISSING_BOX_NOTE','�Ρ���: �ե����뼫�ΤϺ������ޤ��󡣥ե������ǥ��쥯�ȥ���ɲä���ȥܥå���������ɲä��뤳�Ȥ��Ǥ��ޤ���<br /><br /><strong>�������ܥå���: </strong>');
define('TEXT_INFO_BOX_DETAILS','�ܥå����ܺ�: ');

define('TEXT_INFO_BLOCK', '������Υ֥�å�: ');
define('TEXT_INFO_BLOCK_NAME', '�֥�å�̾: ');
define('TEXT_INFO_BLOCK_LOCATION', 'ɽ������: ');
define('TEXT_INFO_BLOCK_STATUS', '�֥�å� ���ơ�����: ');
define('TEXT_INFO_BLOCK_STATUS_INFO', 'ON= 1 OFF=0');
define('TEXT_INFO_BLOCK_SORT_ORDER', '�����: ');
define('TEXT_INFO_BLOCK_VISIBLE', '�ڡ������ɽ��/��ɽ��: ');
define('TEXT_INFO_BLOCK_PAGES', '�ڡ���: ');
define('TEXT_CHECK_ALL', '����');
define('TEXT_INFO_INSERT_BLOCK_INTRO', '�������֥�å��Υǡ��������Ϥ��Ƥ���������');
define('TEXT_INFO_DELETE_BLOCK_INTRO', '���Υ֥�å��������˺�����ޤ���?');
define('TEXT_INFO_HEADING_NEW_BLOCK', '�������֥�å�');
define('TEXT_INFO_HEADING_EDIT_BLOCK', '�֥�å����Խ�');
define('TEXT_INFO_HEADING_DELETE_BLOCK', '�֥�å�����');
define('TEXT_INFO_DELETE_MISSING_BLOCK', '�ƥ�ץ졼�ȥꥹ�Ȥ��������Υ֥�å�����: ');
define('TEXT_INFO_DELETE_MISSING_BLOCK_NOTE', '�Ρ���: �⥸�塼�뼫�ΤϺ������ޤ��󡣥⥸�塼��򥤥󥹥ȡ��뤷��ͭ��������ȥ֥�å�������ɲä��뤳�Ȥ��Ǥ��ޤ���<br /><br /><strong>�������֥�å�: </strong>');
define('TEXT_INFO_BLOCK_DETAILS', '�֥�å��ܺ�: ');

define('TEXT_INFO_BOX_CSS_SELECTOR', 'CSS���쥯��: ');
define('TEXT_INFO_BOX_INSERT_POSITION', '��������: ');

////////////////

// file exists
define('TEXT_GOOD_BLOCK', ' ');
define('TEXT_BAD_BLOCK', '<font color="ff0000"><b>MISSING!!</b></font><br />');


// Success message
define('SUCCESS_BLOCK_DELETED', '�֥�å��ƥ�ץ졼�Ȥκ�����������ޤ�����: ');
define('SUCCESS_BLOCK_RESET', '�֥�å��ƥ�ץ졼�Ȥ�ǥե���Ȥ�������ᤷ�ޤ�����: ');
define('SUCCESS_BLOCK_UPDATED', '�֥�å�����ι������������ޤ�����: ');
define('SUCCESS_BLOCKS_UPDATED', '�֥�å�����ι������������ޤ�����');

define('TEXT_ON', ' ON ');
define('TEXT_OFF', ' OFF ');
define('TEXT_VISIBLE_PAGES', '�ʲ��Υڡ����Τ�ɽ��');
define('TEXT_INVISIBLE_PAGES', '�ʲ��Υڡ����Τ���ɽ��');

define('TEXT_APPEND',  'ľ��');
define('TEXT_PREPEND', 'ľ��');
define('TEXT_AFTER',   '���ǳ�ľ��');
define('TEXT_BEFORE',  '���ǳ�ľ��');
define('TEXT_REPLACEWITH', '�ִ�');

define('TEXT_NO_LAYOUT_LOCATIONS', '�쥤������ɽ�����֤��������Ƥ��ޤ���');

// box names
define('BOXNAME_BANNER_BOX', '�Хʡ�');
define('BOXNAME_BANNER_BOX2', '�Хʡ�2');
define('BOXNAME_BANNER_BOX_ALL', '�Хʡ�ALL');
define('BOXNAME_BEST_SELLERS', '�٥��ȥ��顼');
define('BOXNAME_CATEGORIES', '���ƥ��꡼');
define('BOXNAME_CURRENCIES', '�̲�');
define('BOXNAME_DOCUMENT_CATEGORIES', '����');
define('BOXNAME_EZPAGES', '���פʥ��');
define('BOXNAME_FEATURED', '��������');
define('BOXNAME_INFORMATION', '����ե��᡼�����');
define('BOXNAME_LANGUAGES', '����');
define('BOXNAME_MANUFACTURER_INFO', '���ʾ���');
define('BOXNAME_MANUFACTURERS', '�᡼����');
define('BOXNAME_MORE_INFORMATION', '�ɲþ���');
define('BOXNAME_MUSIC_GENRES', '���ڥ�����');
define('BOXNAME_ORDER_HISTORY', '�Ƕ�Τ���ʸ');
define('BOXNAME_PRODUCT_NOTIFICATIONS', '���Τ餻�᡼��');
define('BOXNAME_RECORD_COMPANIES', '�쥳���ɲ��');
define('BOXNAME_REVIEWS', '��ӥ塼');
define('BOXNAME_SEARCH', '���ʸ���');
define('BOXNAME_SEARCH_HEADER', '���ʸ��� (�إå���)');
define('BOXNAME_SHOPPING_CART', '����åԥ󥰥�����');
define('BOXNAME_SPECIALS', '�ò�����');
define('BOXNAME_TELL_A_FRIEND', 'ͧã���Τ餻��');
define('BOXNAME_WHATS_NEW', '���徦��');
define('BOXNAME_WHOS_ONLINE', '����饤��Τ�����');

// page names
define('PAGENAME_ACCOUNT', '�ޥ��ڡ���');
define('PAGENAME_ACCOUNT_EDIT', '��Ͽ�����ѹ�');
define('PAGENAME_ACCOUNT_HISTORY', '����ʸ����');
define('PAGENAME_ACCOUNT_HISTORY_INFO', '����ʸ����');
define('PAGENAME_ACCOUNT_NEWSLETTERS', '�˥塼���쥿������');
define('PAGENAME_ACCOUNT_NOTIFICATIONS', '���Τ餻�᡼�����');
define('PAGENAME_ACCOUNT_PASSWORD', '�ѥ�����ѹ�');
define('PAGENAME_ADDRESS_BOOK', '���ɥ쥹Ģ');
define('PAGENAME_ADDRESS_BOOK_PROCESS', '����');
define('PAGENAME_ADVANCED_SEARCH', '�������');
define('PAGENAME_ADVANCED_SEARCH_RESULT', '�ܺٸ���');
define('PAGENAME_CHECKOUT_CONFIRMATION', '����ʸ���Ƥ��ǧ���Ƥ�������');
define('PAGENAME_CHECKOUT_PAYMENT', '����ʧ������������Ƥ�������');
define('PAGENAME_CHECKOUT_PAYMENT_ADDRESS', '�����轻����ѹ����Ƥ�������');
define('PAGENAME_CHECKOUT_SHIPPING', '���Ϥ����������ˡ�������Ƥ�������');
define('PAGENAME_CHECKOUT_SHIPPING_ADDRESS', '���Ϥ��轻����ѹ����Ƥ�������');
define('PAGENAME_CHECKOUT_SUCCESS', '����ʸ�μ�³������λ���ޤ�����');
define('PAGENAME_CONDITIONS', '�����ѵ���');
define('PAGENAME_CONTACT_US', '���䤤��碌');
define('PAGENAME_COOKIE_USAGE', '���å���(Cookie)�λ��ѤˤĤ���');
define('PAGENAME_CREATE_ACCOUNT', '��������Ⱥ���');
define('PAGENAME_CREATE_ACCOUNT_SUCCESS', '�����ͤΥ�������Ȥ�����������ޤ�����');
define('PAGENAME_CUSTOMERS_AUTHORIZATION', '��ǧ��³���� ...');
define('PAGENAME_DISCOUNT_COUPON', '��������ݥ�');
define('PAGENAME_DOCUMENT_GENERAL_INFO', '����ܺ� (�̾�)');
define('PAGENAME_DOCUMENT_PRODUCT_INFO', '����ܺ� (����)');
define('PAGENAME_DOWN_FOR_MAINTENANCE', '���ƥʥ���...');
define('PAGENAME_DOWNLOAD_TIME_OUT', '��������� ...');
define('PAGENAME_FEATURED_PRODUCTS', '�������ᾦ��');
define('PAGENAME_GV_FAQ', '���եȷ��ˤĤ��Ƥ褯������������');
define('PAGENAME_GV_REDEEM', '���եȷ���������');
define('PAGENAME_GV_SEND', '���եȷ�����');
define('PAGENAME_INDEX', '�ȥåץڡ���');
define('PAGENAME_INDEX_CATEGORIES', '���ƥ��꡼���֥��ƥ��꡼�����ڡ���');
define('PAGENAME_INDEX_PRODUCTS', '���ƥ��꡼���ʰ����ڡ���');
define('PAGENAME_INFO_SHOPPING_CART', '�ӥ������������� / ���С���������');
define('PAGENAME_LOGIN', '������');
define('PAGENAME_LOGOFF', '��������');
define('PAGENAME_PAGE', 'EZ�ڡ���');
define('PAGENAME_PAGE_2', '�ڡ���2');
define('PAGENAME_PAGE_3', '�ڡ���3');
define('PAGENAME_PAGE_4', '�ڡ���4');
define('PAGENAME_PAGE_NOT_FOUND', '�ڡ��������Ĥ���ޤ���');
define('PAGENAME_PASSWORD_FORGOTTEN', '�ѥ���ɤ�˺��Ǥ���?');
define('PAGENAME_PRIVACY', '�Ŀ;����ݸ�����');
define('PAGENAME_PRODUCT_FREE_SHIPPING_INFO', '���ʾܺ� (̵������)');
define('PAGENAME_PRODUCT_INFO', '���ʾܺ� (�̾�)');
define('PAGENAME_PRODUCT_MUSIC_INFO', '���ʾܺ� (����)');
define('PAGENAME_PRODUCT_REVIEWS', '��ӥ塼');
define('PAGENAME_PRODUCT_REVIEWS_INFO', '��ӥ塼');
define('PAGENAME_PRODUCT_REVIEWS_WRITE', '��ӥ塼');
define('PAGENAME_PRODUCTS_ALL', '������');
define('PAGENAME_PRODUCTS_NEW', '���徦��');
define('PAGENAME_REVIEWS', '��ӥ塼');
define('PAGENAME_SHIPPINGINFO', '���������ʤˤĤ���');
define('PAGENAME_SHOPPING_CART', '�����Ȥ�����');
define('PAGENAME_SITE_MAP', '�����ȥޥå�');
define('PAGENAME_SPECIALS', '�ò�����');
define('PAGENAME_SSL_CHECK', '�������ƥ������å�');
define('PAGENAME_TELL_A_FRIEND', '���ʤˤĤ���ͧã�˶�����');
define('PAGENAME_TIME_OUT', '��³�����Ǥ����Ƥ��������ޤ���');
define('PAGENAME_UNSUBSCRIBE', '�˥塼���쥿���ۿ����');
