<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2017-11-15 08:59:53 --> Config Class Initialized
INFO - 2017-11-15 08:59:53 --> Hooks Class Initialized
DEBUG - 2017-11-15 08:59:53 --> UTF-8 Support Enabled
INFO - 2017-11-15 08:59:53 --> Utf8 Class Initialized
INFO - 2017-11-15 08:59:53 --> URI Class Initialized
INFO - 2017-11-15 08:59:53 --> Router Class Initialized
INFO - 2017-11-15 08:59:53 --> Output Class Initialized
INFO - 2017-11-15 08:59:53 --> Security Class Initialized
DEBUG - 2017-11-15 08:59:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 08:59:53 --> Input Class Initialized
INFO - 2017-11-15 08:59:53 --> Language Class Initialized
INFO - 2017-11-15 08:59:53 --> Loader Class Initialized
INFO - 2017-11-15 08:59:53 --> Helper loaded: url_helper
INFO - 2017-11-15 08:59:53 --> Database Driver Class Initialized
INFO - 2017-11-15 08:59:54 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 08:59:54 --> Controller Class Initialized
DEBUG - 2017-11-15 08:59:54 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 08:59:54 --> Email Class Initialized
INFO - 2017-11-15 08:59:54 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 08:59:54 --> Helper loaded: cookie_helper
INFO - 2017-11-15 08:59:54 --> Helper loaded: language_helper
DEBUG - 2017-11-15 08:59:54 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 08:59:54 --> Model Class Initialized
INFO - 2017-11-15 08:59:54 --> Helper loaded: date_helper
INFO - 2017-11-15 08:59:54 --> Model Class Initialized
INFO - 2017-11-15 08:59:54 --> Model Class Initialized
INFO - 2017-11-15 08:59:54 --> Model Class Initialized
INFO - 2017-11-15 08:59:54 --> Model Class Initialized
INFO - 2017-11-15 08:59:54 --> Helper loaded: form_helper
INFO - 2017-11-15 08:59:54 --> Form Validation Class Initialized
INFO - 2017-11-15 08:59:54 --> is admin? :1
DEBUG - 2017-11-15 08:59:54 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 1
            [name] => admin
            [description] => Administrator
        )

)

DEBUG - 2017-11-15 08:59:54 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=1
DEBUG - 2017-11-15 08:59:54 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 08:59:54 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 08:59:54 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 08:59:54 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 08:59:54 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 08:59:54 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 08:59:54 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 08:59:54 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 08:59:54 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 08:59:54 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 08:59:54 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 08:59:54 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 08:59:54 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 08:59:54 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 08:59:54 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 08:59:54 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 08:59:55 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 08:59:55 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 08:59:55 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 08:59:55 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 08:59:55 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 08:59:55 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 08:59:55 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 08:59:55 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 08:59:55 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 08:59:55 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 08:59:55 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 08:59:55 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 08:59:55 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 08:59:55 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 08:59:55 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 08:59:55 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 08:59:55 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 08:59:55 --> User Id : 1
INFO - 2017-11-15 08:59:55 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 08:59:55 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 08:59:55 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 08:59:55 --> templates/auth_master_view
INFO - 2017-11-15 08:59:55 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 08:59:55 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 08:59:55 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 08:59:55 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 08:59:55 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 08:59:55 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 08:59:55 --> Final output sent to browser
DEBUG - 2017-11-15 08:59:55 --> Total execution time: 1.6939
INFO - 2017-11-15 11:51:56 --> Config Class Initialized
INFO - 2017-11-15 11:51:56 --> Hooks Class Initialized
DEBUG - 2017-11-15 11:51:56 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:51:56 --> Utf8 Class Initialized
INFO - 2017-11-15 11:51:56 --> URI Class Initialized
INFO - 2017-11-15 11:51:56 --> Router Class Initialized
INFO - 2017-11-15 11:51:56 --> Output Class Initialized
INFO - 2017-11-15 11:51:56 --> Security Class Initialized
DEBUG - 2017-11-15 11:51:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:51:56 --> Input Class Initialized
INFO - 2017-11-15 11:51:56 --> Language Class Initialized
INFO - 2017-11-15 11:51:56 --> Loader Class Initialized
INFO - 2017-11-15 11:51:57 --> Helper loaded: url_helper
INFO - 2017-11-15 11:51:57 --> Database Driver Class Initialized
INFO - 2017-11-15 11:51:58 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 11:51:58 --> Controller Class Initialized
DEBUG - 2017-11-15 11:51:58 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:51:58 --> Email Class Initialized
INFO - 2017-11-15 11:51:58 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:51:58 --> Helper loaded: cookie_helper
INFO - 2017-11-15 11:51:58 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:51:58 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:51:58 --> Model Class Initialized
INFO - 2017-11-15 11:51:59 --> Helper loaded: date_helper
INFO - 2017-11-15 11:51:59 --> Config Class Initialized
INFO - 2017-11-15 11:51:59 --> Hooks Class Initialized
DEBUG - 2017-11-15 11:51:59 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:51:59 --> Utf8 Class Initialized
INFO - 2017-11-15 11:51:59 --> URI Class Initialized
INFO - 2017-11-15 11:51:59 --> Router Class Initialized
INFO - 2017-11-15 11:51:59 --> Output Class Initialized
INFO - 2017-11-15 11:51:59 --> Security Class Initialized
DEBUG - 2017-11-15 11:51:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:51:59 --> Input Class Initialized
INFO - 2017-11-15 11:51:59 --> Language Class Initialized
INFO - 2017-11-15 11:51:59 --> Loader Class Initialized
INFO - 2017-11-15 11:51:59 --> Helper loaded: url_helper
INFO - 2017-11-15 11:51:59 --> Database Driver Class Initialized
INFO - 2017-11-15 11:52:00 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 11:52:00 --> Controller Class Initialized
DEBUG - 2017-11-15 11:52:00 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:52:00 --> Email Class Initialized
INFO - 2017-11-15 11:52:00 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:52:00 --> Helper loaded: cookie_helper
INFO - 2017-11-15 11:52:00 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:52:00 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:52:00 --> Model Class Initialized
INFO - 2017-11-15 11:52:00 --> Helper loaded: date_helper
INFO - 2017-11-15 11:52:00 --> Helper loaded: form_helper
INFO - 2017-11-15 11:52:00 --> Form Validation Class Initialized
INFO - 2017-11-15 11:52:00 --> Inside MY_Controller : public_master
INFO - 2017-11-15 11:52:00 --> inside Else user/login_view
INFO - 2017-11-15 11:52:00 --> templates/public_master_view
INFO - 2017-11-15 11:52:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\user/login_view.php
INFO - 2017-11-15 11:52:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/public_master_header_view.php
INFO - 2017-11-15 11:52:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/public_master_footer_view.php
INFO - 2017-11-15 11:52:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/public_master_view.php
INFO - 2017-11-15 11:52:00 --> Final output sent to browser
DEBUG - 2017-11-15 11:52:00 --> Total execution time: 1.4119
INFO - 2017-11-15 11:52:03 --> Config Class Initialized
INFO - 2017-11-15 11:52:03 --> Hooks Class Initialized
DEBUG - 2017-11-15 11:52:03 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:52:03 --> Utf8 Class Initialized
INFO - 2017-11-15 11:52:03 --> URI Class Initialized
INFO - 2017-11-15 11:52:03 --> Router Class Initialized
INFO - 2017-11-15 11:52:03 --> Output Class Initialized
INFO - 2017-11-15 11:52:03 --> Security Class Initialized
DEBUG - 2017-11-15 11:52:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:52:03 --> Input Class Initialized
INFO - 2017-11-15 11:52:03 --> Language Class Initialized
INFO - 2017-11-15 11:52:03 --> Loader Class Initialized
INFO - 2017-11-15 11:52:03 --> Helper loaded: url_helper
INFO - 2017-11-15 11:52:03 --> Database Driver Class Initialized
INFO - 2017-11-15 11:52:04 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 11:52:04 --> Controller Class Initialized
DEBUG - 2017-11-15 11:52:04 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:52:04 --> Email Class Initialized
INFO - 2017-11-15 11:52:04 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:52:04 --> Helper loaded: cookie_helper
INFO - 2017-11-15 11:52:04 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:52:04 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:52:04 --> Model Class Initialized
INFO - 2017-11-15 11:52:04 --> Helper loaded: date_helper
INFO - 2017-11-15 11:52:04 --> Helper loaded: form_helper
INFO - 2017-11-15 11:52:04 --> Form Validation Class Initialized
INFO - 2017-11-15 11:52:04 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2017-11-15 11:52:04 --> Config Class Initialized
INFO - 2017-11-15 11:52:04 --> Hooks Class Initialized
DEBUG - 2017-11-15 11:52:04 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:52:04 --> Utf8 Class Initialized
INFO - 2017-11-15 11:52:04 --> URI Class Initialized
INFO - 2017-11-15 11:52:04 --> Router Class Initialized
INFO - 2017-11-15 11:52:04 --> Output Class Initialized
INFO - 2017-11-15 11:52:04 --> Security Class Initialized
DEBUG - 2017-11-15 11:52:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:52:04 --> Input Class Initialized
INFO - 2017-11-15 11:52:04 --> Language Class Initialized
INFO - 2017-11-15 11:52:04 --> Loader Class Initialized
INFO - 2017-11-15 11:52:04 --> Helper loaded: url_helper
INFO - 2017-11-15 11:52:04 --> Database Driver Class Initialized
INFO - 2017-11-15 11:52:05 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 11:52:05 --> Controller Class Initialized
DEBUG - 2017-11-15 11:52:05 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:52:05 --> Email Class Initialized
INFO - 2017-11-15 11:52:05 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:52:05 --> Helper loaded: cookie_helper
INFO - 2017-11-15 11:52:05 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:52:05 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:52:05 --> Model Class Initialized
INFO - 2017-11-15 11:52:05 --> Helper loaded: date_helper
INFO - 2017-11-15 11:52:05 --> Helper loaded: form_helper
INFO - 2017-11-15 11:52:05 --> Form Validation Class Initialized
INFO - 2017-11-15 11:52:05 --> Inside MY_Controller : public_master
INFO - 2017-11-15 11:52:05 --> inside Else user/login_view
INFO - 2017-11-15 11:52:05 --> templates/public_master_view
INFO - 2017-11-15 11:52:05 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\user/login_view.php
INFO - 2017-11-15 11:52:05 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/public_master_header_view.php
INFO - 2017-11-15 11:52:05 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/public_master_footer_view.php
INFO - 2017-11-15 11:52:05 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/public_master_view.php
INFO - 2017-11-15 11:52:05 --> Final output sent to browser
DEBUG - 2017-11-15 11:52:05 --> Total execution time: 1.2717
INFO - 2017-11-15 11:52:13 --> Config Class Initialized
INFO - 2017-11-15 11:52:13 --> Hooks Class Initialized
DEBUG - 2017-11-15 11:52:13 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:52:13 --> Utf8 Class Initialized
INFO - 2017-11-15 11:52:13 --> URI Class Initialized
INFO - 2017-11-15 11:52:13 --> Router Class Initialized
INFO - 2017-11-15 11:52:13 --> Output Class Initialized
INFO - 2017-11-15 11:52:13 --> Security Class Initialized
DEBUG - 2017-11-15 11:52:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:52:13 --> Input Class Initialized
INFO - 2017-11-15 11:52:13 --> Language Class Initialized
ERROR - 2017-11-15 11:52:13 --> 404 Page Not Found: Dashboard/profile
INFO - 2017-11-15 11:52:34 --> Config Class Initialized
INFO - 2017-11-15 11:52:34 --> Hooks Class Initialized
DEBUG - 2017-11-15 11:52:34 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:52:35 --> Utf8 Class Initialized
INFO - 2017-11-15 11:52:35 --> URI Class Initialized
INFO - 2017-11-15 11:52:35 --> Router Class Initialized
INFO - 2017-11-15 11:52:35 --> Output Class Initialized
INFO - 2017-11-15 11:52:35 --> Security Class Initialized
DEBUG - 2017-11-15 11:52:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:52:35 --> Input Class Initialized
INFO - 2017-11-15 11:52:35 --> Language Class Initialized
INFO - 2017-11-15 11:52:35 --> Loader Class Initialized
INFO - 2017-11-15 11:52:35 --> Helper loaded: url_helper
INFO - 2017-11-15 11:52:35 --> Database Driver Class Initialized
INFO - 2017-11-15 11:52:36 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 11:52:36 --> Controller Class Initialized
DEBUG - 2017-11-15 11:52:36 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:52:36 --> Email Class Initialized
INFO - 2017-11-15 11:52:36 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:52:36 --> Helper loaded: cookie_helper
INFO - 2017-11-15 11:52:36 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:52:36 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:52:36 --> Model Class Initialized
INFO - 2017-11-15 11:52:36 --> Helper loaded: date_helper
INFO - 2017-11-15 11:52:36 --> Config Class Initialized
INFO - 2017-11-15 11:52:36 --> Hooks Class Initialized
DEBUG - 2017-11-15 11:52:36 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:52:36 --> Utf8 Class Initialized
INFO - 2017-11-15 11:52:36 --> URI Class Initialized
INFO - 2017-11-15 11:52:36 --> Router Class Initialized
INFO - 2017-11-15 11:52:36 --> Output Class Initialized
INFO - 2017-11-15 11:52:36 --> Security Class Initialized
DEBUG - 2017-11-15 11:52:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:52:36 --> Input Class Initialized
INFO - 2017-11-15 11:52:36 --> Language Class Initialized
INFO - 2017-11-15 11:52:36 --> Loader Class Initialized
INFO - 2017-11-15 11:52:36 --> Helper loaded: url_helper
INFO - 2017-11-15 11:52:36 --> Database Driver Class Initialized
INFO - 2017-11-15 11:52:37 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 11:52:37 --> Controller Class Initialized
DEBUG - 2017-11-15 11:52:37 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:52:37 --> Email Class Initialized
INFO - 2017-11-15 11:52:37 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:52:37 --> Helper loaded: cookie_helper
INFO - 2017-11-15 11:52:37 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:52:37 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:52:37 --> Model Class Initialized
INFO - 2017-11-15 11:52:37 --> Helper loaded: date_helper
INFO - 2017-11-15 11:52:37 --> Helper loaded: form_helper
INFO - 2017-11-15 11:52:37 --> Form Validation Class Initialized
INFO - 2017-11-15 11:52:37 --> Inside MY_Controller : public_master
INFO - 2017-11-15 11:52:37 --> inside Else user/login_view
INFO - 2017-11-15 11:52:37 --> templates/public_master_view
INFO - 2017-11-15 11:52:37 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\user/login_view.php
INFO - 2017-11-15 11:52:37 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/public_master_header_view.php
INFO - 2017-11-15 11:52:37 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/public_master_footer_view.php
INFO - 2017-11-15 11:52:37 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/public_master_view.php
INFO - 2017-11-15 11:52:37 --> Final output sent to browser
DEBUG - 2017-11-15 11:52:37 --> Total execution time: 1.3111
INFO - 2017-11-15 11:52:43 --> Config Class Initialized
INFO - 2017-11-15 11:52:43 --> Hooks Class Initialized
DEBUG - 2017-11-15 11:52:43 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:52:43 --> Utf8 Class Initialized
INFO - 2017-11-15 11:52:43 --> URI Class Initialized
INFO - 2017-11-15 11:52:43 --> Router Class Initialized
INFO - 2017-11-15 11:52:43 --> Output Class Initialized
INFO - 2017-11-15 11:52:43 --> Security Class Initialized
DEBUG - 2017-11-15 11:52:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:52:43 --> Input Class Initialized
INFO - 2017-11-15 11:52:43 --> Language Class Initialized
INFO - 2017-11-15 11:52:43 --> Loader Class Initialized
INFO - 2017-11-15 11:52:43 --> Helper loaded: url_helper
INFO - 2017-11-15 11:52:43 --> Database Driver Class Initialized
INFO - 2017-11-15 11:52:44 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 11:52:44 --> Controller Class Initialized
DEBUG - 2017-11-15 11:52:44 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:52:44 --> Email Class Initialized
INFO - 2017-11-15 11:52:45 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:52:45 --> Helper loaded: cookie_helper
INFO - 2017-11-15 11:52:45 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:52:45 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:52:45 --> Model Class Initialized
INFO - 2017-11-15 11:52:45 --> Helper loaded: date_helper
INFO - 2017-11-15 11:52:45 --> Helper loaded: form_helper
INFO - 2017-11-15 11:52:45 --> Form Validation Class Initialized
INFO - 2017-11-15 11:52:45 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2017-11-15 11:52:45 --> Config Class Initialized
INFO - 2017-11-15 11:52:45 --> Hooks Class Initialized
DEBUG - 2017-11-15 11:52:45 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:52:45 --> Utf8 Class Initialized
INFO - 2017-11-15 11:52:45 --> URI Class Initialized
INFO - 2017-11-15 11:52:45 --> Router Class Initialized
INFO - 2017-11-15 11:52:45 --> Output Class Initialized
INFO - 2017-11-15 11:52:45 --> Security Class Initialized
DEBUG - 2017-11-15 11:52:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:52:45 --> Input Class Initialized
INFO - 2017-11-15 11:52:45 --> Language Class Initialized
INFO - 2017-11-15 11:52:45 --> Loader Class Initialized
INFO - 2017-11-15 11:52:45 --> Helper loaded: url_helper
INFO - 2017-11-15 11:52:45 --> Database Driver Class Initialized
INFO - 2017-11-15 11:52:46 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 11:52:46 --> Controller Class Initialized
DEBUG - 2017-11-15 11:52:46 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:52:46 --> Email Class Initialized
INFO - 2017-11-15 11:52:46 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:52:46 --> Helper loaded: cookie_helper
INFO - 2017-11-15 11:52:46 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:52:46 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:52:46 --> Model Class Initialized
INFO - 2017-11-15 11:52:46 --> Helper loaded: date_helper
INFO - 2017-11-15 11:52:46 --> Model Class Initialized
INFO - 2017-11-15 11:52:46 --> Model Class Initialized
INFO - 2017-11-15 11:52:46 --> Model Class Initialized
INFO - 2017-11-15 11:52:46 --> Model Class Initialized
INFO - 2017-11-15 11:52:46 --> Helper loaded: form_helper
INFO - 2017-11-15 11:52:46 --> Form Validation Class Initialized
INFO - 2017-11-15 11:52:46 --> is admin? :1
DEBUG - 2017-11-15 11:52:46 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 1
            [name] => admin
            [description] => Administrator
        )

)

DEBUG - 2017-11-15 11:52:46 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=1
DEBUG - 2017-11-15 11:52:46 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 11:52:46 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 11:52:46 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 11:52:46 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 11:52:46 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 11:52:46 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 11:52:46 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 11:52:46 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 11:52:46 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 11:52:46 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 11:52:46 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 11:52:46 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 11:52:46 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 11:52:46 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 11:52:46 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 11:52:46 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 11:52:46 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 11:52:46 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 11:52:46 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 11:52:46 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 11:52:46 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 11:52:46 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 11:52:46 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 11:52:46 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 11:52:46 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 11:52:46 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 11:52:46 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 11:52:46 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 11:52:46 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 11:52:46 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 11:52:46 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 11:52:46 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 11:52:46 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 11:52:46 --> User Id : 1
INFO - 2017-11-15 11:52:46 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 11:52:46 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 11:52:46 --> inside Else dashboard/index_view
INFO - 2017-11-15 11:52:46 --> templates/auth_master_view
INFO - 2017-11-15 11:52:46 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/index_view.php
INFO - 2017-11-15 11:52:46 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 11:52:46 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 11:52:46 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 11:52:46 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 11:52:46 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 11:52:46 --> Final output sent to browser
DEBUG - 2017-11-15 11:52:46 --> Total execution time: 1.8216
INFO - 2017-11-15 11:52:47 --> Config Class Initialized
INFO - 2017-11-15 11:52:47 --> Hooks Class Initialized
DEBUG - 2017-11-15 11:52:47 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:52:47 --> Utf8 Class Initialized
INFO - 2017-11-15 11:52:47 --> URI Class Initialized
INFO - 2017-11-15 11:52:47 --> Router Class Initialized
INFO - 2017-11-15 11:52:47 --> Output Class Initialized
INFO - 2017-11-15 11:52:47 --> Security Class Initialized
INFO - 2017-11-15 11:52:47 --> Config Class Initialized
INFO - 2017-11-15 11:52:47 --> Hooks Class Initialized
DEBUG - 2017-11-15 11:52:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:52:47 --> Config Class Initialized
INFO - 2017-11-15 11:52:47 --> Config Class Initialized
INFO - 2017-11-15 11:52:47 --> Hooks Class Initialized
INFO - 2017-11-15 11:52:47 --> Hooks Class Initialized
INFO - 2017-11-15 11:52:47 --> Input Class Initialized
DEBUG - 2017-11-15 11:52:47 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:52:47 --> Utf8 Class Initialized
INFO - 2017-11-15 11:52:47 --> Language Class Initialized
DEBUG - 2017-11-15 11:52:47 --> UTF-8 Support Enabled
DEBUG - 2017-11-15 11:52:47 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:52:47 --> Utf8 Class Initialized
INFO - 2017-11-15 11:52:47 --> Utf8 Class Initialized
INFO - 2017-11-15 11:52:47 --> URI Class Initialized
INFO - 2017-11-15 11:52:47 --> Loader Class Initialized
INFO - 2017-11-15 11:52:47 --> Router Class Initialized
INFO - 2017-11-15 11:52:47 --> Helper loaded: url_helper
INFO - 2017-11-15 11:52:47 --> URI Class Initialized
INFO - 2017-11-15 11:52:47 --> URI Class Initialized
INFO - 2017-11-15 11:52:47 --> Router Class Initialized
INFO - 2017-11-15 11:52:47 --> Router Class Initialized
INFO - 2017-11-15 11:52:47 --> Output Class Initialized
INFO - 2017-11-15 11:52:47 --> Database Driver Class Initialized
INFO - 2017-11-15 11:52:47 --> Security Class Initialized
INFO - 2017-11-15 11:52:47 --> Output Class Initialized
INFO - 2017-11-15 11:52:47 --> Output Class Initialized
INFO - 2017-11-15 11:52:47 --> Security Class Initialized
INFO - 2017-11-15 11:52:47 --> Security Class Initialized
DEBUG - 2017-11-15 11:52:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:52:47 --> Input Class Initialized
DEBUG - 2017-11-15 11:52:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-15 11:52:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:52:47 --> Input Class Initialized
INFO - 2017-11-15 11:52:47 --> Input Class Initialized
INFO - 2017-11-15 11:52:47 --> Language Class Initialized
INFO - 2017-11-15 11:52:47 --> Language Class Initialized
INFO - 2017-11-15 11:52:47 --> Language Class Initialized
INFO - 2017-11-15 11:52:47 --> Loader Class Initialized
INFO - 2017-11-15 11:52:47 --> Helper loaded: url_helper
INFO - 2017-11-15 11:52:47 --> Loader Class Initialized
INFO - 2017-11-15 11:52:47 --> Loader Class Initialized
INFO - 2017-11-15 11:52:47 --> Helper loaded: url_helper
INFO - 2017-11-15 11:52:47 --> Helper loaded: url_helper
INFO - 2017-11-15 11:52:47 --> Database Driver Class Initialized
INFO - 2017-11-15 11:52:47 --> Database Driver Class Initialized
INFO - 2017-11-15 11:52:47 --> Database Driver Class Initialized
INFO - 2017-11-15 11:52:48 --> Config Class Initialized
INFO - 2017-11-15 11:52:48 --> Hooks Class Initialized
DEBUG - 2017-11-15 11:52:48 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:52:48 --> Utf8 Class Initialized
INFO - 2017-11-15 11:52:48 --> URI Class Initialized
INFO - 2017-11-15 11:52:48 --> Router Class Initialized
INFO - 2017-11-15 11:52:48 --> Output Class Initialized
INFO - 2017-11-15 11:52:48 --> Security Class Initialized
INFO - 2017-11-15 11:52:48 --> Session: Class initialized using 'database' driver.
DEBUG - 2017-11-15 11:52:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:52:48 --> Input Class Initialized
INFO - 2017-11-15 11:52:48 --> Controller Class Initialized
INFO - 2017-11-15 11:52:48 --> Language Class Initialized
DEBUG - 2017-11-15 11:52:48 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:52:48 --> Email Class Initialized
INFO - 2017-11-15 11:52:48 --> Loader Class Initialized
INFO - 2017-11-15 11:52:48 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:52:48 --> Helper loaded: url_helper
INFO - 2017-11-15 11:52:48 --> Helper loaded: cookie_helper
INFO - 2017-11-15 11:52:48 --> Database Driver Class Initialized
INFO - 2017-11-15 11:52:48 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:52:48 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:52:48 --> Model Class Initialized
INFO - 2017-11-15 11:52:48 --> Helper loaded: date_helper
INFO - 2017-11-15 11:52:48 --> Model Class Initialized
INFO - 2017-11-15 11:52:48 --> Model Class Initialized
INFO - 2017-11-15 11:52:48 --> Model Class Initialized
INFO - 2017-11-15 11:52:48 --> Model Class Initialized
INFO - 2017-11-15 11:52:48 --> Helper loaded: form_helper
INFO - 2017-11-15 11:52:48 --> Form Validation Class Initialized
DEBUG - 2017-11-15 11:52:48 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/grocery_crud.php
INFO - 2017-11-15 11:52:48 --> Model Class Initialized
INFO - 2017-11-15 11:52:48 --> Model Class Initialized
INFO - 2017-11-15 11:52:48 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/grid.php
INFO - 2017-11-15 11:52:48 --> Final output sent to browser
DEBUG - 2017-11-15 11:52:48 --> Total execution time: 1.5292
INFO - 2017-11-15 11:52:48 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 11:52:48 --> Controller Class Initialized
DEBUG - 2017-11-15 11:52:48 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:52:48 --> Email Class Initialized
INFO - 2017-11-15 11:52:48 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:52:48 --> Helper loaded: cookie_helper
INFO - 2017-11-15 11:52:48 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:52:49 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Helper loaded: date_helper
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Helper loaded: form_helper
INFO - 2017-11-15 11:52:49 --> Form Validation Class Initialized
INFO - 2017-11-15 11:52:49 --> is admin? : Menu Management1
DEBUG - 2017-11-15 11:52:49 --> User Group : Menu Management Array
(
    [0] => stdClass Object
        (
            [id] => 1
            [name] => admin
            [description] => Administrator
        )

)

DEBUG - 2017-11-15 11:52:49 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/grocery_crud.php
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/grid.php
INFO - 2017-11-15 11:52:49 --> Final output sent to browser
DEBUG - 2017-11-15 11:52:49 --> Total execution time: 1.8244
INFO - 2017-11-15 11:52:49 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 11:52:49 --> Controller Class Initialized
DEBUG - 2017-11-15 11:52:49 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:52:49 --> Email Class Initialized
INFO - 2017-11-15 11:52:49 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:52:49 --> Helper loaded: cookie_helper
INFO - 2017-11-15 11:52:49 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:52:49 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Helper loaded: date_helper
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Helper loaded: form_helper
INFO - 2017-11-15 11:52:49 --> Form Validation Class Initialized
INFO - 2017-11-15 11:52:49 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 11:52:49 --> Controller Class Initialized
DEBUG - 2017-11-15 11:52:49 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/grocery_crud.php
DEBUG - 2017-11-15 11:52:49 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Email Class Initialized
INFO - 2017-11-15 11:52:49 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:52:49 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/grid.php
INFO - 2017-11-15 11:52:49 --> Final output sent to browser
INFO - 2017-11-15 11:52:49 --> Helper loaded: cookie_helper
DEBUG - 2017-11-15 11:52:49 --> Total execution time: 2.2117
INFO - 2017-11-15 11:52:49 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:52:49 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 11:52:49 --> Controller Class Initialized
INFO - 2017-11-15 11:52:49 --> Helper loaded: date_helper
DEBUG - 2017-11-15 11:52:49 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:52:49 --> Helper loaded: form_helper
INFO - 2017-11-15 11:52:49 --> Form Validation Class Initialized
INFO - 2017-11-15 11:52:49 --> Email Class Initialized
INFO - 2017-11-15 11:52:49 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:52:49 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2017-11-15 11:52:49 --> Helper loaded: cookie_helper
INFO - 2017-11-15 11:52:49 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:52:49 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Helper loaded: date_helper
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Config Class Initialized
INFO - 2017-11-15 11:52:49 --> Helper loaded: form_helper
INFO - 2017-11-15 11:52:49 --> Form Validation Class Initialized
INFO - 2017-11-15 11:52:49 --> Hooks Class Initialized
DEBUG - 2017-11-15 11:52:49 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/grocery_crud.php
DEBUG - 2017-11-15 11:52:49 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:52:49 --> Utf8 Class Initialized
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> Model Class Initialized
INFO - 2017-11-15 11:52:49 --> URI Class Initialized
INFO - 2017-11-15 11:52:49 --> Router Class Initialized
INFO - 2017-11-15 11:52:49 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/grid.php
INFO - 2017-11-15 11:52:49 --> Final output sent to browser
INFO - 2017-11-15 11:52:49 --> Output Class Initialized
DEBUG - 2017-11-15 11:52:49 --> Total execution time: 2.4525
INFO - 2017-11-15 11:52:49 --> Security Class Initialized
DEBUG - 2017-11-15 11:52:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:52:49 --> Input Class Initialized
INFO - 2017-11-15 11:52:49 --> Language Class Initialized
INFO - 2017-11-15 11:52:49 --> Loader Class Initialized
INFO - 2017-11-15 11:52:49 --> Helper loaded: url_helper
INFO - 2017-11-15 11:52:49 --> Database Driver Class Initialized
INFO - 2017-11-15 11:52:50 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 11:52:50 --> Controller Class Initialized
DEBUG - 2017-11-15 11:52:50 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:52:50 --> Email Class Initialized
INFO - 2017-11-15 11:52:50 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:52:50 --> Helper loaded: cookie_helper
INFO - 2017-11-15 11:52:50 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:52:50 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:52:50 --> Model Class Initialized
INFO - 2017-11-15 11:52:50 --> Helper loaded: date_helper
INFO - 2017-11-15 11:52:51 --> Model Class Initialized
INFO - 2017-11-15 11:52:51 --> Model Class Initialized
INFO - 2017-11-15 11:52:51 --> Model Class Initialized
INFO - 2017-11-15 11:52:51 --> Model Class Initialized
INFO - 2017-11-15 11:52:51 --> Helper loaded: form_helper
INFO - 2017-11-15 11:52:51 --> Form Validation Class Initialized
INFO - 2017-11-15 11:52:51 --> is admin? :
DEBUG - 2017-11-15 11:52:51 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 11:52:51 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 11:52:51 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 11:52:51 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 11:52:51 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 11:52:51 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 11:52:51 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 11:52:51 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 11:52:51 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 11:52:51 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 11:52:51 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 11:52:51 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 11:52:51 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 11:52:51 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 11:52:51 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 11:52:51 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 11:52:51 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 11:52:51 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 11:52:51 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 11:52:51 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 11:52:51 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 11:52:51 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 11:52:51 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 11:52:51 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 11:52:51 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 11:52:51 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 11:52:51 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 11:52:51 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 11:52:51 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 11:52:51 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 11:52:51 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 11:52:51 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 11:52:51 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 11:52:51 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 11:52:51 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 11:52:51 --> User Id : 12
DEBUG - 2017-11-15 11:52:51 --> inside Not Admin
INFO - 2017-11-15 11:52:51 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 11:52:51 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 11:52:51 --> inside Else dashboard/member_index_view
INFO - 2017-11-15 11:52:51 --> templates/auth_master_view
INFO - 2017-11-15 11:52:51 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/member_index_view.php
INFO - 2017-11-15 11:52:51 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 11:52:51 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 11:52:51 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 11:52:51 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 11:52:51 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 11:52:51 --> Final output sent to browser
DEBUG - 2017-11-15 11:52:51 --> Total execution time: 1.6877
INFO - 2017-11-15 11:52:51 --> Config Class Initialized
INFO - 2017-11-15 11:52:52 --> Hooks Class Initialized
DEBUG - 2017-11-15 11:52:52 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:52:52 --> Utf8 Class Initialized
INFO - 2017-11-15 11:52:52 --> URI Class Initialized
INFO - 2017-11-15 11:52:52 --> Router Class Initialized
INFO - 2017-11-15 11:52:52 --> Output Class Initialized
INFO - 2017-11-15 11:52:52 --> Security Class Initialized
DEBUG - 2017-11-15 11:52:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:52:52 --> Input Class Initialized
INFO - 2017-11-15 11:52:52 --> Language Class Initialized
INFO - 2017-11-15 11:52:52 --> Loader Class Initialized
INFO - 2017-11-15 11:52:52 --> Helper loaded: url_helper
INFO - 2017-11-15 11:52:52 --> Database Driver Class Initialized
INFO - 2017-11-15 11:52:53 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 11:52:53 --> Controller Class Initialized
DEBUG - 2017-11-15 11:52:53 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:52:53 --> Email Class Initialized
INFO - 2017-11-15 11:52:53 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:52:53 --> Helper loaded: cookie_helper
INFO - 2017-11-15 11:52:53 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:52:53 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:52:53 --> Model Class Initialized
INFO - 2017-11-15 11:52:53 --> Helper loaded: date_helper
INFO - 2017-11-15 11:52:53 --> Model Class Initialized
INFO - 2017-11-15 11:52:53 --> Model Class Initialized
INFO - 2017-11-15 11:52:53 --> Model Class Initialized
INFO - 2017-11-15 11:52:53 --> Model Class Initialized
INFO - 2017-11-15 11:52:53 --> Helper loaded: form_helper
INFO - 2017-11-15 11:52:53 --> Form Validation Class Initialized
DEBUG - 2017-11-15 11:52:53 --> Isi Draw : 1
DEBUG - 2017-11-15 11:52:53 --> Isi limitStart :0
DEBUG - 2017-11-15 11:52:53 --> Isi limitLength :10
DEBUG - 2017-11-15 11:52:53 --> Isi $column0Searchable :true
DEBUG - 2017-11-15 11:52:53 --> Isi $orderByColumn :0
INFO - 2017-11-15 11:52:53 --> Database Driver Class Initialized
DEBUG - 2017-11-15 11:52:54 --> Query getCurrentBirthday :  select du.nipBaru as nip,du.nama as nama,k2.nunker as instansi,k1.nunker as subUnit ,ja.NJAB as jabatan,DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(DU.TLAHIR)), '%Y')+0 AS age
                    from datautama du
                    left join jakhir ja on du.nipBaru = ja.nip
                    left join unkerja k1 on k1.kunker = ja.kunkers
                    left join unkerja k2 on k2.kunker = ja.kunkersInduk
                    where du.kedudukanHukum=1  and MONTH(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = MONTH(NOW()) and day(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = day(NOW()) and
                    du.nama like '%%'  limit 0,10
INFO - 2017-11-15 11:52:54 --> Database Driver Class Initialized
DEBUG - 2017-11-15 11:52:55 --> Query TotalCountRow GetPegawaiUmum :select count(*) as total
                  from datautama du
                  left join jakhir ja on du.nipBaru = ja.nip
                  left join unkerja k1 on k1.kunker = ja.kunkers
                  left join unkerja k2 on k2.kunker = ja.kunkersInduk
                  where du.kedudukanHukum=1  and MONTH(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = MONTH(NOW()) and day(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = day(NOW()) and
                  du.nama like '%%' 
INFO - 2017-11-15 11:52:56 --> Database Driver Class Initialized
DEBUG - 2017-11-15 11:52:57 --> Query TotalCountRow GetPegawaiUmum :select count(*) as total
                  from datautama du
                  left join jakhir ja on du.nipBaru = ja.nip
                  left join unkerja k1 on k1.kunker = ja.kunkers
                  left join unkerja k2 on k2.kunker = ja.kunkersInduk
                  where du.kedudukanHukum=1  and MONTH(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = MONTH(NOW()) and day(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = day(NOW()) and
                  du.nama like '%%' 
DEBUG - 2017-11-15 11:52:57 --> {"draw":1,"recordsTotal":"64","recordsFiltered":"64","data":[["010135299","SUPU RUDOLF M.L","64",null,"BADAN KESATUAN BANGSA DAN POLITIK","PELAKSANA PADA BIDANG KETAHANAN BANGSA BADAN KESATUAN BANGSA DAN PERLINDUNGAN MASYARAKAT DAERAH"],["195711151982031005","SAWADI","60","DINAS PEMBERDAYAAN MASYARAKAT DAN DESA","SEKSI BINA LEMBAGA USAHA EKONOMI MASYARAKAT","PENYUSUN BAHAN KEBIJAKAN TEKNIS SUBBIDANG PENINGKATAN PRODUKSI, MUTU DAN PEMASARAN PADA BIDANG PEMBARDAYAAN EKONOMI MASYARAKAT BADAN PEMBERDAYAAN MASYARAKAT DAN PEMERINTAHAN DESA PROVINSI JAWA BARAT"],["195812151984112001","SAMSINAH","59","SEKRETARIAT DAERAH",null,"PELAKSANA PADA SUBAG TU BAGIAN PROTOKOL, TU DAN KEPEGAWIAN BIRO HUMAS, PROTOKOL DAN UMUM"],["196511151994031003","SUHERMAN","52","SEKRETARIAT DPRD","SUB BAGIAN PUBLIKASI DAN INFORMASI","PELAKSANA SUBBAGIAN PUBLIKASI PADA BAGIAN HUBUNGAN MASYARAKAT DAN PROTOKOL SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH PROVINSI JAWA BARAT"],["195511151982031005","ADAM YAIH","62","DINAS KOPERASI DAN USAHA KECIL",null,"WIDYAISWARA MADYA PADA DINAS KOPERASI DAN USAHA MIKRO, KECIL DAN MENENGAH PROVINSI JAWA BARAT"],["196211151987032006","ATI SUZANAWATI GANTINI","55","DINAS TANAMAN PANGAN DAN HORTIKULTURA","SUB BAGIAN TATA USAHA","PENGADMINISTRASI KEUANGAN SUB  UNIT PELAYAN PTPH WILAYAH IV PADA SUB BAGIAN TATA USAHA PADA BALAI PROTEKSI TANAMAN PANGAN DAN HORTIKULTURA DINAS TANAMAN PANGAN DAN HORTIKULTURAPROVINSI JAWA BARAT"],["196311151999031003","KUSNANDAR","54","DINAS TANAMAN PANGAN DAN HORTIKULTURA","SUB BAGIAN TATA USAHA","PEMROSES MUTASI PEGAWAI SUBBAGIAN TATA USAHA PADA BALAI PELATIHAN PERTANIAN DINAS PERTANIAN TANAMAN PANGAN PROVINSI JAWA BARAT"],["195511151981111001","ADE RUSTANDI","62","DINAS SUMBER DAYA AIR","SEKSI IRIGASI","KEPALA SEKSI IRIGASI PADA BALAI PENDAYAGUNAAN SUMBER DAYA AIR WILAYAH SUNGAI CIWULAN-CILAKI DINAS PENGELOLAAN SUMBER DAYA AIR PROVINSI JAWA BARAT"],["195411151980021001","YAYAT RUHIYAT","63","DINAS KOMUNIKASI DAN INFORMATIKA","SEKSI INTEGRASI DAN INTEROPERABILITAS","OPERATOR KOMPUTER SEKSI MONITORING DAN PENERTIBAN SPEKTRUM FREKUENSI PADA BIDANG POS DAN TELEKOMUNIKASI DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI JAWA BARAT"],["195411151977022003","MAIMUNAH","63","DINAS PERPUSTAKAAN DAN KEARSIPAN DAERAH","KELOMPOK JABATAN FUNGSIONAL","PUSTAKAWAN MADYA PADA BADAN PERPUSTAKAAN DAN KEARSIPAN DAERAH PROVINSI JAWA BARAT"]]}
INFO - 2017-11-15 11:52:57 --> Final output sent to browser
DEBUG - 2017-11-15 11:52:57 --> Total execution time: 5.5177
INFO - 2017-11-15 11:52:58 --> Config Class Initialized
INFO - 2017-11-15 11:52:58 --> Hooks Class Initialized
DEBUG - 2017-11-15 11:52:58 --> UTF-8 Support Enabled
INFO - 2017-11-15 11:52:58 --> Utf8 Class Initialized
INFO - 2017-11-15 11:52:58 --> URI Class Initialized
INFO - 2017-11-15 11:52:58 --> Router Class Initialized
INFO - 2017-11-15 11:52:58 --> Output Class Initialized
INFO - 2017-11-15 11:52:58 --> Security Class Initialized
DEBUG - 2017-11-15 11:52:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 11:52:58 --> Input Class Initialized
INFO - 2017-11-15 11:52:58 --> Language Class Initialized
INFO - 2017-11-15 11:52:58 --> Loader Class Initialized
INFO - 2017-11-15 11:52:58 --> Helper loaded: url_helper
INFO - 2017-11-15 11:52:58 --> Database Driver Class Initialized
INFO - 2017-11-15 11:52:59 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 11:52:59 --> Controller Class Initialized
DEBUG - 2017-11-15 11:52:59 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 11:52:59 --> Email Class Initialized
INFO - 2017-11-15 11:52:59 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 11:52:59 --> Helper loaded: cookie_helper
INFO - 2017-11-15 11:52:59 --> Helper loaded: language_helper
DEBUG - 2017-11-15 11:52:59 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 11:52:59 --> Model Class Initialized
INFO - 2017-11-15 11:52:59 --> Helper loaded: date_helper
INFO - 2017-11-15 11:52:59 --> Model Class Initialized
INFO - 2017-11-15 11:52:59 --> Model Class Initialized
INFO - 2017-11-15 11:52:59 --> Model Class Initialized
INFO - 2017-11-15 11:52:59 --> Model Class Initialized
INFO - 2017-11-15 11:52:59 --> Helper loaded: form_helper
INFO - 2017-11-15 11:52:59 --> Form Validation Class Initialized
INFO - 2017-11-15 11:52:59 --> is admin? :1
DEBUG - 2017-11-15 11:52:59 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 1
            [name] => admin
            [description] => Administrator
        )

)

DEBUG - 2017-11-15 11:52:59 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=1
DEBUG - 2017-11-15 11:52:59 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 11:52:59 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 11:52:59 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 11:52:59 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 11:52:59 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 11:52:59 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 11:52:59 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 11:52:59 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 11:52:59 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 11:52:59 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 11:52:59 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 11:52:59 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 11:52:59 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 11:52:59 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 11:52:59 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 11:52:59 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 11:52:59 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 11:52:59 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 11:52:59 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 11:52:59 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 11:52:59 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 11:52:59 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 11:52:59 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 11:52:59 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 11:52:59 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 11:52:59 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 11:52:59 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 11:52:59 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 11:52:59 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 11:52:59 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 11:52:59 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 11:52:59 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 11:52:59 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 11:52:59 --> User Id : 1
INFO - 2017-11-15 11:52:59 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 11:52:59 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 11:52:59 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 11:52:59 --> templates/auth_master_view
INFO - 2017-11-15 11:52:59 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 11:52:59 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 11:52:59 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 11:52:59 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 11:52:59 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 11:52:59 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 11:52:59 --> Final output sent to browser
DEBUG - 2017-11-15 11:52:59 --> Total execution time: 1.8077
INFO - 2017-11-15 18:20:04 --> Config Class Initialized
INFO - 2017-11-15 18:20:04 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:20:04 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:20:04 --> Utf8 Class Initialized
INFO - 2017-11-15 18:20:04 --> URI Class Initialized
INFO - 2017-11-15 18:20:05 --> Router Class Initialized
INFO - 2017-11-15 18:20:05 --> Output Class Initialized
INFO - 2017-11-15 18:20:05 --> Security Class Initialized
DEBUG - 2017-11-15 18:20:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:20:05 --> Input Class Initialized
INFO - 2017-11-15 18:20:05 --> Language Class Initialized
INFO - 2017-11-15 18:20:05 --> Loader Class Initialized
INFO - 2017-11-15 18:20:05 --> Helper loaded: url_helper
INFO - 2017-11-15 18:20:05 --> Database Driver Class Initialized
INFO - 2017-11-15 18:20:06 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:20:06 --> Controller Class Initialized
DEBUG - 2017-11-15 18:20:06 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:20:06 --> Email Class Initialized
INFO - 2017-11-15 18:20:06 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:20:06 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:20:06 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:20:06 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:20:06 --> Model Class Initialized
INFO - 2017-11-15 18:20:06 --> Helper loaded: date_helper
INFO - 2017-11-15 18:20:06 --> Config Class Initialized
INFO - 2017-11-15 18:20:06 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:20:06 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:20:06 --> Utf8 Class Initialized
INFO - 2017-11-15 18:20:06 --> URI Class Initialized
INFO - 2017-11-15 18:20:06 --> Router Class Initialized
INFO - 2017-11-15 18:20:06 --> Output Class Initialized
INFO - 2017-11-15 18:20:06 --> Security Class Initialized
DEBUG - 2017-11-15 18:20:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:20:06 --> Input Class Initialized
INFO - 2017-11-15 18:20:06 --> Language Class Initialized
INFO - 2017-11-15 18:20:06 --> Loader Class Initialized
INFO - 2017-11-15 18:20:06 --> Helper loaded: url_helper
INFO - 2017-11-15 18:20:06 --> Database Driver Class Initialized
INFO - 2017-11-15 18:20:08 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:20:08 --> Controller Class Initialized
DEBUG - 2017-11-15 18:20:08 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:20:08 --> Email Class Initialized
INFO - 2017-11-15 18:20:08 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:20:08 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:20:08 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:20:08 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:20:08 --> Model Class Initialized
INFO - 2017-11-15 18:20:08 --> Helper loaded: date_helper
INFO - 2017-11-15 18:20:08 --> Helper loaded: form_helper
INFO - 2017-11-15 18:20:08 --> Form Validation Class Initialized
INFO - 2017-11-15 18:20:08 --> Inside MY_Controller : public_master
INFO - 2017-11-15 18:20:08 --> inside Else user/login_view
INFO - 2017-11-15 18:20:08 --> templates/public_master_view
INFO - 2017-11-15 18:20:08 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\user/login_view.php
INFO - 2017-11-15 18:20:08 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/public_master_header_view.php
INFO - 2017-11-15 18:20:08 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/public_master_footer_view.php
INFO - 2017-11-15 18:20:08 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/public_master_view.php
INFO - 2017-11-15 18:20:08 --> Final output sent to browser
DEBUG - 2017-11-15 18:20:08 --> Total execution time: 1.3914
INFO - 2017-11-15 18:21:15 --> Config Class Initialized
INFO - 2017-11-15 18:21:15 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:21:15 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:21:15 --> Utf8 Class Initialized
INFO - 2017-11-15 18:21:15 --> URI Class Initialized
INFO - 2017-11-15 18:21:15 --> Router Class Initialized
INFO - 2017-11-15 18:21:15 --> Output Class Initialized
INFO - 2017-11-15 18:21:15 --> Security Class Initialized
DEBUG - 2017-11-15 18:21:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:21:15 --> Input Class Initialized
INFO - 2017-11-15 18:21:15 --> Language Class Initialized
INFO - 2017-11-15 18:21:15 --> Loader Class Initialized
INFO - 2017-11-15 18:21:15 --> Helper loaded: url_helper
INFO - 2017-11-15 18:21:15 --> Database Driver Class Initialized
INFO - 2017-11-15 18:21:16 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:21:17 --> Controller Class Initialized
DEBUG - 2017-11-15 18:21:17 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:21:17 --> Email Class Initialized
INFO - 2017-11-15 18:21:17 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:21:17 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:21:17 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:21:17 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:21:17 --> Model Class Initialized
INFO - 2017-11-15 18:21:17 --> Helper loaded: date_helper
INFO - 2017-11-15 18:21:17 --> Helper loaded: form_helper
INFO - 2017-11-15 18:21:17 --> Form Validation Class Initialized
INFO - 2017-11-15 18:21:17 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2017-11-15 18:21:17 --> Config Class Initialized
INFO - 2017-11-15 18:21:17 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:21:17 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:21:17 --> Utf8 Class Initialized
INFO - 2017-11-15 18:21:17 --> URI Class Initialized
INFO - 2017-11-15 18:21:17 --> Router Class Initialized
INFO - 2017-11-15 18:21:17 --> Output Class Initialized
INFO - 2017-11-15 18:21:17 --> Security Class Initialized
DEBUG - 2017-11-15 18:21:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:21:17 --> Input Class Initialized
INFO - 2017-11-15 18:21:17 --> Language Class Initialized
INFO - 2017-11-15 18:21:17 --> Loader Class Initialized
INFO - 2017-11-15 18:21:17 --> Helper loaded: url_helper
INFO - 2017-11-15 18:21:17 --> Database Driver Class Initialized
INFO - 2017-11-15 18:21:18 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:21:18 --> Controller Class Initialized
DEBUG - 2017-11-15 18:21:18 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:21:18 --> Email Class Initialized
INFO - 2017-11-15 18:21:18 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:21:18 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:21:18 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:21:18 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:21:18 --> Model Class Initialized
INFO - 2017-11-15 18:21:18 --> Helper loaded: date_helper
INFO - 2017-11-15 18:21:18 --> Model Class Initialized
INFO - 2017-11-15 18:21:18 --> Model Class Initialized
INFO - 2017-11-15 18:21:18 --> Model Class Initialized
INFO - 2017-11-15 18:21:18 --> Model Class Initialized
INFO - 2017-11-15 18:21:18 --> Helper loaded: form_helper
INFO - 2017-11-15 18:21:18 --> Form Validation Class Initialized
INFO - 2017-11-15 18:21:18 --> is admin? :
DEBUG - 2017-11-15 18:21:18 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:21:18 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:21:18 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:21:18 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:21:18 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:21:18 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:21:18 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:21:18 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:21:18 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:21:18 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:21:18 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:21:18 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:21:18 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:21:18 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:21:18 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:21:18 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:21:18 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:21:18 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:21:18 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:21:18 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:21:18 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:21:18 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:21:18 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:21:18 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:21:18 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:21:18 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:21:18 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:21:18 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:21:18 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:21:18 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:21:18 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:21:18 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:21:18 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:21:18 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:21:18 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:21:18 --> User Id : 12
DEBUG - 2017-11-15 18:21:18 --> inside Not Admin
INFO - 2017-11-15 18:21:18 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:21:18 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:21:19 --> inside Else dashboard/member_index_view
INFO - 2017-11-15 18:21:19 --> templates/auth_master_view
INFO - 2017-11-15 18:21:19 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/member_index_view.php
INFO - 2017-11-15 18:21:19 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:21:19 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:21:19 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:21:19 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:21:19 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:21:19 --> Final output sent to browser
DEBUG - 2017-11-15 18:21:19 --> Total execution time: 1.9995
INFO - 2017-11-15 18:21:19 --> Config Class Initialized
INFO - 2017-11-15 18:21:19 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:21:19 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:21:19 --> Utf8 Class Initialized
INFO - 2017-11-15 18:21:19 --> URI Class Initialized
INFO - 2017-11-15 18:21:19 --> Router Class Initialized
INFO - 2017-11-15 18:21:19 --> Output Class Initialized
INFO - 2017-11-15 18:21:19 --> Security Class Initialized
DEBUG - 2017-11-15 18:21:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:21:19 --> Input Class Initialized
INFO - 2017-11-15 18:21:19 --> Language Class Initialized
INFO - 2017-11-15 18:21:19 --> Loader Class Initialized
INFO - 2017-11-15 18:21:19 --> Helper loaded: url_helper
INFO - 2017-11-15 18:21:19 --> Database Driver Class Initialized
INFO - 2017-11-15 18:21:20 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:21:20 --> Controller Class Initialized
DEBUG - 2017-11-15 18:21:20 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:21:20 --> Email Class Initialized
INFO - 2017-11-15 18:21:20 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:21:20 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:21:20 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:21:20 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:21:20 --> Model Class Initialized
INFO - 2017-11-15 18:21:20 --> Helper loaded: date_helper
INFO - 2017-11-15 18:21:20 --> Model Class Initialized
INFO - 2017-11-15 18:21:20 --> Model Class Initialized
INFO - 2017-11-15 18:21:20 --> Model Class Initialized
INFO - 2017-11-15 18:21:20 --> Model Class Initialized
INFO - 2017-11-15 18:21:20 --> Helper loaded: form_helper
INFO - 2017-11-15 18:21:20 --> Form Validation Class Initialized
DEBUG - 2017-11-15 18:21:20 --> Isi Draw : 1
DEBUG - 2017-11-15 18:21:20 --> Isi limitStart :0
DEBUG - 2017-11-15 18:21:20 --> Isi limitLength :10
DEBUG - 2017-11-15 18:21:20 --> Isi $column0Searchable :true
DEBUG - 2017-11-15 18:21:20 --> Isi $orderByColumn :0
INFO - 2017-11-15 18:21:20 --> Database Driver Class Initialized
DEBUG - 2017-11-15 18:21:21 --> Query getCurrentBirthday :  select du.nipBaru as nip,du.nama as nama,k2.nunker as instansi,k1.nunker as subUnit ,ja.NJAB as jabatan,DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(DU.TLAHIR)), '%Y')+0 AS age
                    from datautama du
                    left join jakhir ja on du.nipBaru = ja.nip
                    left join unkerja k1 on k1.kunker = ja.kunkers
                    left join unkerja k2 on k2.kunker = ja.kunkersInduk
                    where du.kedudukanHukum=1  and MONTH(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = MONTH(NOW()) and day(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = day(NOW()) and
                    du.nama like '%%'  limit 0,10
INFO - 2017-11-15 18:21:21 --> Database Driver Class Initialized
DEBUG - 2017-11-15 18:21:22 --> Query TotalCountRow GetPegawaiUmum :select count(*) as total
                  from datautama du
                  left join jakhir ja on du.nipBaru = ja.nip
                  left join unkerja k1 on k1.kunker = ja.kunkers
                  left join unkerja k2 on k2.kunker = ja.kunkersInduk
                  where du.kedudukanHukum=1  and MONTH(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = MONTH(NOW()) and day(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = day(NOW()) and
                  du.nama like '%%' 
INFO - 2017-11-15 18:21:23 --> Database Driver Class Initialized
DEBUG - 2017-11-15 18:21:24 --> Query TotalCountRow GetPegawaiUmum :select count(*) as total
                  from datautama du
                  left join jakhir ja on du.nipBaru = ja.nip
                  left join unkerja k1 on k1.kunker = ja.kunkers
                  left join unkerja k2 on k2.kunker = ja.kunkersInduk
                  where du.kedudukanHukum=1  and MONTH(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = MONTH(NOW()) and day(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = day(NOW()) and
                  du.nama like '%%' 
DEBUG - 2017-11-15 18:21:24 --> {"draw":1,"recordsTotal":"47","recordsFiltered":"47","data":[["196111161983031008","R. ARIE SABIR","56","BADAN KESATUAN BANGSA DAN POLITIK","SUB BIDANG FASILITASI PARTAI POLITIK DAN PEMILIHAN UMUM","KEPALA SUB BIDANG FASILITASI PARTAI POLITIK DAN PEMILIHAN UMUM PADA BIDANG POLITIK DALAM NEGERI BADAN KESATUAN BANGSA DAN POLITIK PROVINSI JAWA BARAT"],["010173241","PANDI PRIATNA","64",null,null,"PELAKSANA"],["195611161977122001","SITI RODIAH","60","BADAN KEPEGAWAIAN DAERAH","UPTB KORPS APARATUR SIPIL NEGARA","ARSIPARIS MADYA PADA BADAN KEPEGAWAIAN DAERAH PROVINSI JAWA BARAT"],["195811161980031004","DEDI ROHADI","59","SATUAN POLISI PAMONG PRAJA","BIDANG PEMBINAAN MASYARAKAT DAN APARATUR","KEPALA BIDANG KETERTIBAN UMUM DAN KETENTRAMAN MASYARAKAT PADA SATUAN POLISI PAMONG PRAJA PROVINSI JAWA BARAT"],["196711161994031004","ARIP AHMAD RIPAI","50","SEKRETARIAT DPRD","SUB BAGIAN RISALAH DAN DOKUMENTASI HUKUM","KEPALA SUB BAGIAN RISALAH DAN DOKUMENTASI HUKUM PADA BAGIAN PERSIDANGAN DAN PERUNDANG-UNDANGAN SEKRETARIAT DPRD PROVINSI JAWA BARAT"],["195711161982021003","ASEP SOPIAN SARI","60","DINAS TANAMAN PANGAN DAN HORTIKULTURA","BALAI PELATIHAN TANAMAN PANGAN DAN HORTIKULTURA","PENGENDALI OPT PENYELIA"],["110016479","SUROTO","68",null,"DINAS SUMBER DAYA AIR","PENSIUN TMT 01-12-2005"],["110021930","DAYAT HIDAYAT","68",null,null,"PELAKSANA"],["195311161982111002","DEDDY RUSTANDI","64","DINAS PERUMAHAN DAN PERMUKIMAN","SUB BAGIAN KEPEGAWAIAN DAN UMUM","PELAKSANA SUBBAGIAN KEPEGAWAIAN DAN UMUM  PADA SEKRETARIAT DINAS PERMUKIMAN DAN PERUMAHAN PROV JABAR"],["196211161989032004","TATI ROHAYATI","55","DINAS PERUMAHAN DAN PERMUKIMAN","SEKSI SARANA KAWASAN PERMUKIMAN","PENGADMINISTRASI UMUM  SEKSI SARANA KAWASAN PERMUKIMAN PADA BIDANG KAWASAN PERMUKIMAN DINAS PERUMAHAN DAN PERMUKIMAN PROVINSI JAWA BARAT"]]}
INFO - 2017-11-15 18:21:24 --> Final output sent to browser
DEBUG - 2017-11-15 18:21:24 --> Total execution time: 5.0210
INFO - 2017-11-15 18:21:31 --> Config Class Initialized
INFO - 2017-11-15 18:21:31 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:21:31 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:21:31 --> Utf8 Class Initialized
INFO - 2017-11-15 18:21:31 --> URI Class Initialized
INFO - 2017-11-15 18:21:31 --> Router Class Initialized
INFO - 2017-11-15 18:21:31 --> Output Class Initialized
INFO - 2017-11-15 18:21:31 --> Security Class Initialized
DEBUG - 2017-11-15 18:21:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:21:31 --> Input Class Initialized
INFO - 2017-11-15 18:21:31 --> Language Class Initialized
INFO - 2017-11-15 18:21:31 --> Loader Class Initialized
INFO - 2017-11-15 18:21:31 --> Helper loaded: url_helper
INFO - 2017-11-15 18:21:32 --> Database Driver Class Initialized
INFO - 2017-11-15 18:21:33 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:21:33 --> Controller Class Initialized
DEBUG - 2017-11-15 18:21:33 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:21:33 --> Email Class Initialized
INFO - 2017-11-15 18:21:33 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:21:33 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:21:33 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:21:33 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:21:33 --> Model Class Initialized
INFO - 2017-11-15 18:21:33 --> Helper loaded: date_helper
INFO - 2017-11-15 18:21:33 --> Model Class Initialized
INFO - 2017-11-15 18:21:33 --> Model Class Initialized
INFO - 2017-11-15 18:21:33 --> Model Class Initialized
INFO - 2017-11-15 18:21:33 --> Model Class Initialized
INFO - 2017-11-15 18:21:33 --> Helper loaded: form_helper
INFO - 2017-11-15 18:21:33 --> Form Validation Class Initialized
INFO - 2017-11-15 18:21:33 --> is admin? :
DEBUG - 2017-11-15 18:21:33 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:21:33 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:21:33 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:21:33 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:21:33 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:21:33 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:21:33 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:21:33 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:21:33 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:21:33 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:21:33 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:21:33 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:21:33 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:21:33 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:21:33 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:21:33 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:21:33 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:21:33 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:21:33 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:21:33 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:21:33 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:21:33 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:21:33 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:21:33 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:21:33 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:21:33 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:21:33 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:21:33 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:21:33 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:21:33 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:21:33 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:21:33 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:21:33 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:21:33 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:21:33 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:21:33 --> User Id : 12
INFO - 2017-11-15 18:21:33 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:21:33 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:21:33 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:21:33 --> templates/auth_master_view
INFO - 2017-11-15 18:21:33 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:21:33 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:21:33 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:21:33 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:21:33 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:21:33 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:21:33 --> Final output sent to browser
DEBUG - 2017-11-15 18:21:33 --> Total execution time: 1.6923
INFO - 2017-11-15 18:22:29 --> Config Class Initialized
INFO - 2017-11-15 18:22:29 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:22:29 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:22:29 --> Utf8 Class Initialized
INFO - 2017-11-15 18:22:29 --> URI Class Initialized
INFO - 2017-11-15 18:22:29 --> Router Class Initialized
INFO - 2017-11-15 18:22:29 --> Output Class Initialized
INFO - 2017-11-15 18:22:29 --> Security Class Initialized
DEBUG - 2017-11-15 18:22:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:22:29 --> Input Class Initialized
INFO - 2017-11-15 18:22:29 --> Language Class Initialized
INFO - 2017-11-15 18:22:29 --> Loader Class Initialized
INFO - 2017-11-15 18:22:29 --> Helper loaded: url_helper
INFO - 2017-11-15 18:22:29 --> Database Driver Class Initialized
INFO - 2017-11-15 18:22:30 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:22:30 --> Controller Class Initialized
DEBUG - 2017-11-15 18:22:30 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:22:30 --> Email Class Initialized
INFO - 2017-11-15 18:22:30 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:22:30 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:22:30 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:22:30 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:22:30 --> Model Class Initialized
INFO - 2017-11-15 18:22:30 --> Helper loaded: date_helper
INFO - 2017-11-15 18:22:30 --> Model Class Initialized
INFO - 2017-11-15 18:22:30 --> Model Class Initialized
INFO - 2017-11-15 18:22:30 --> Model Class Initialized
INFO - 2017-11-15 18:22:30 --> Model Class Initialized
INFO - 2017-11-15 18:22:30 --> Helper loaded: form_helper
INFO - 2017-11-15 18:22:30 --> Form Validation Class Initialized
INFO - 2017-11-15 18:22:30 --> is admin? :
DEBUG - 2017-11-15 18:22:30 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:22:30 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:22:30 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:22:30 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:22:30 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:22:30 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:22:30 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:22:30 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:22:30 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:22:30 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:22:30 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:22:30 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:22:30 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:22:30 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:22:30 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:22:30 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:22:30 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:22:30 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:22:30 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:22:30 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:22:31 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:22:31 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:22:31 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:22:31 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:22:31 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:22:31 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:22:31 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:22:31 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:22:31 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:22:31 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:22:31 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:22:31 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:22:31 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:22:31 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:22:31 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:22:31 --> User Id : 12
INFO - 2017-11-15 18:22:31 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:22:31 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:22:31 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:22:31 --> templates/auth_master_view
INFO - 2017-11-15 18:22:31 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:22:31 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:22:31 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:22:31 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:22:31 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:22:31 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:22:31 --> Final output sent to browser
DEBUG - 2017-11-15 18:22:31 --> Total execution time: 1.7196
INFO - 2017-11-15 18:24:38 --> Config Class Initialized
INFO - 2017-11-15 18:24:38 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:24:38 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:24:38 --> Utf8 Class Initialized
INFO - 2017-11-15 18:24:38 --> URI Class Initialized
INFO - 2017-11-15 18:24:38 --> Router Class Initialized
INFO - 2017-11-15 18:24:38 --> Output Class Initialized
INFO - 2017-11-15 18:24:38 --> Security Class Initialized
DEBUG - 2017-11-15 18:24:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:24:38 --> Input Class Initialized
INFO - 2017-11-15 18:24:38 --> Language Class Initialized
INFO - 2017-11-15 18:24:39 --> Loader Class Initialized
INFO - 2017-11-15 18:24:39 --> Helper loaded: url_helper
INFO - 2017-11-15 18:24:39 --> Database Driver Class Initialized
INFO - 2017-11-15 18:24:40 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:24:40 --> Controller Class Initialized
DEBUG - 2017-11-15 18:24:40 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:24:40 --> Email Class Initialized
INFO - 2017-11-15 18:24:40 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:24:40 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:24:40 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:24:40 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:24:40 --> Model Class Initialized
INFO - 2017-11-15 18:24:40 --> Helper loaded: date_helper
INFO - 2017-11-15 18:24:40 --> Model Class Initialized
INFO - 2017-11-15 18:24:40 --> Model Class Initialized
INFO - 2017-11-15 18:24:40 --> Model Class Initialized
INFO - 2017-11-15 18:24:40 --> Model Class Initialized
INFO - 2017-11-15 18:24:40 --> Helper loaded: form_helper
INFO - 2017-11-15 18:24:40 --> Form Validation Class Initialized
INFO - 2017-11-15 18:24:40 --> is admin? :
DEBUG - 2017-11-15 18:24:40 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:24:40 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:24:40 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:24:40 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:24:40 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:24:40 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:24:40 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:24:40 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:24:40 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:24:40 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:24:40 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:24:40 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:24:40 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:24:40 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:24:40 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:24:40 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:24:40 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:24:40 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:24:40 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:24:40 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:24:40 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:24:40 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:24:40 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:24:40 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:24:40 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:24:40 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:24:40 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:24:40 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:24:40 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:24:40 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:24:40 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:24:40 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:24:40 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:24:40 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:24:40 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:24:40 --> User Id : 12
INFO - 2017-11-15 18:24:40 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:24:40 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:24:40 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:24:40 --> templates/auth_master_view
INFO - 2017-11-15 18:24:40 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:24:40 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:24:40 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:24:40 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:24:40 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:24:40 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:24:40 --> Final output sent to browser
DEBUG - 2017-11-15 18:24:40 --> Total execution time: 1.7220
INFO - 2017-11-15 18:26:11 --> Config Class Initialized
INFO - 2017-11-15 18:26:11 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:26:11 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:26:11 --> Utf8 Class Initialized
INFO - 2017-11-15 18:26:11 --> URI Class Initialized
INFO - 2017-11-15 18:26:11 --> Router Class Initialized
INFO - 2017-11-15 18:26:11 --> Output Class Initialized
INFO - 2017-11-15 18:26:11 --> Security Class Initialized
DEBUG - 2017-11-15 18:26:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:26:11 --> Input Class Initialized
INFO - 2017-11-15 18:26:11 --> Language Class Initialized
INFO - 2017-11-15 18:26:11 --> Loader Class Initialized
INFO - 2017-11-15 18:26:11 --> Helper loaded: url_helper
INFO - 2017-11-15 18:26:11 --> Database Driver Class Initialized
INFO - 2017-11-15 18:26:12 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:26:12 --> Controller Class Initialized
DEBUG - 2017-11-15 18:26:12 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:26:12 --> Email Class Initialized
INFO - 2017-11-15 18:26:12 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:26:12 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:26:12 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:26:12 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:26:12 --> Model Class Initialized
INFO - 2017-11-15 18:26:12 --> Helper loaded: date_helper
INFO - 2017-11-15 18:26:12 --> Model Class Initialized
INFO - 2017-11-15 18:26:12 --> Model Class Initialized
INFO - 2017-11-15 18:26:12 --> Model Class Initialized
INFO - 2017-11-15 18:26:12 --> Model Class Initialized
INFO - 2017-11-15 18:26:12 --> Helper loaded: form_helper
INFO - 2017-11-15 18:26:12 --> Form Validation Class Initialized
INFO - 2017-11-15 18:26:12 --> is admin? :
DEBUG - 2017-11-15 18:26:12 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:26:12 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:26:12 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:26:12 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:26:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:26:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:26:12 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:26:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:26:12 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:26:12 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:26:12 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:26:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:26:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:26:12 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:26:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:26:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:26:12 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:26:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:26:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:26:12 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:26:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:26:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:26:12 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:26:12 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:26:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:26:12 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:26:12 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:26:12 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:26:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:26:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:26:12 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:26:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:26:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:26:12 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:26:12 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:26:12 --> User Id : 12
INFO - 2017-11-15 18:26:12 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:26:12 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:26:12 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:26:12 --> templates/auth_master_view
INFO - 2017-11-15 18:26:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:26:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:26:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:26:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:26:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:26:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:26:12 --> Final output sent to browser
DEBUG - 2017-11-15 18:26:12 --> Total execution time: 1.7368
INFO - 2017-11-15 18:27:15 --> Config Class Initialized
INFO - 2017-11-15 18:27:15 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:27:15 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:27:15 --> Utf8 Class Initialized
INFO - 2017-11-15 18:27:15 --> URI Class Initialized
INFO - 2017-11-15 18:27:15 --> Router Class Initialized
INFO - 2017-11-15 18:27:15 --> Output Class Initialized
INFO - 2017-11-15 18:27:15 --> Security Class Initialized
DEBUG - 2017-11-15 18:27:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:27:15 --> Input Class Initialized
INFO - 2017-11-15 18:27:15 --> Language Class Initialized
INFO - 2017-11-15 18:27:15 --> Loader Class Initialized
INFO - 2017-11-15 18:27:15 --> Helper loaded: url_helper
INFO - 2017-11-15 18:27:15 --> Database Driver Class Initialized
INFO - 2017-11-15 18:27:16 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:27:16 --> Controller Class Initialized
DEBUG - 2017-11-15 18:27:16 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:27:16 --> Email Class Initialized
INFO - 2017-11-15 18:27:16 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:27:16 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:27:16 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:27:16 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:27:16 --> Model Class Initialized
INFO - 2017-11-15 18:27:16 --> Helper loaded: date_helper
INFO - 2017-11-15 18:27:16 --> Model Class Initialized
INFO - 2017-11-15 18:27:16 --> Model Class Initialized
INFO - 2017-11-15 18:27:16 --> Model Class Initialized
INFO - 2017-11-15 18:27:16 --> Model Class Initialized
INFO - 2017-11-15 18:27:16 --> Helper loaded: form_helper
INFO - 2017-11-15 18:27:16 --> Form Validation Class Initialized
INFO - 2017-11-15 18:27:16 --> is admin? :
DEBUG - 2017-11-15 18:27:16 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:27:16 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:27:16 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:27:16 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:27:16 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:27:16 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:27:17 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:27:17 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:27:17 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:27:17 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:27:17 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:27:17 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:27:17 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:27:17 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:27:17 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:27:17 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:27:17 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:27:17 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:27:17 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:27:17 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:27:17 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:27:17 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:27:17 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:27:17 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:27:17 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:27:17 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:27:17 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:27:17 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:27:17 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:27:17 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:27:17 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:27:17 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:27:17 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:27:17 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:27:17 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:27:17 --> User Id : 12
INFO - 2017-11-15 18:27:17 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:27:17 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:27:17 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:27:17 --> templates/auth_master_view
INFO - 2017-11-15 18:27:17 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:27:17 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:27:17 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:27:17 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:27:17 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:27:17 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:27:17 --> Final output sent to browser
DEBUG - 2017-11-15 18:27:17 --> Total execution time: 1.7693
INFO - 2017-11-15 18:28:05 --> Config Class Initialized
INFO - 2017-11-15 18:28:05 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:28:05 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:28:05 --> Utf8 Class Initialized
INFO - 2017-11-15 18:28:05 --> URI Class Initialized
INFO - 2017-11-15 18:28:05 --> Router Class Initialized
INFO - 2017-11-15 18:28:05 --> Output Class Initialized
INFO - 2017-11-15 18:28:05 --> Security Class Initialized
DEBUG - 2017-11-15 18:28:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:28:05 --> Input Class Initialized
INFO - 2017-11-15 18:28:05 --> Language Class Initialized
INFO - 2017-11-15 18:28:05 --> Loader Class Initialized
INFO - 2017-11-15 18:28:05 --> Helper loaded: url_helper
INFO - 2017-11-15 18:28:05 --> Database Driver Class Initialized
INFO - 2017-11-15 18:28:06 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:28:06 --> Controller Class Initialized
DEBUG - 2017-11-15 18:28:06 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:28:06 --> Email Class Initialized
INFO - 2017-11-15 18:28:06 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:28:06 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:28:06 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:28:06 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:28:06 --> Model Class Initialized
INFO - 2017-11-15 18:28:06 --> Helper loaded: date_helper
INFO - 2017-11-15 18:28:06 --> Model Class Initialized
INFO - 2017-11-15 18:28:06 --> Model Class Initialized
INFO - 2017-11-15 18:28:06 --> Model Class Initialized
INFO - 2017-11-15 18:28:06 --> Model Class Initialized
INFO - 2017-11-15 18:28:06 --> Helper loaded: form_helper
INFO - 2017-11-15 18:28:06 --> Form Validation Class Initialized
INFO - 2017-11-15 18:28:06 --> is admin? :
DEBUG - 2017-11-15 18:28:06 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:28:06 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:28:06 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:28:06 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:28:06 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:28:06 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:28:06 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:28:06 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:28:06 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:28:06 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:28:06 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:28:06 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:28:06 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:28:06 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:28:06 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:28:06 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:28:06 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:28:06 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:28:06 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:28:06 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:28:06 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:28:06 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:28:06 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:28:07 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:28:07 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:28:07 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:28:07 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:28:07 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:28:07 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:28:07 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:28:07 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:28:07 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:28:07 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:28:07 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:28:07 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:28:07 --> User Id : 12
INFO - 2017-11-15 18:28:07 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:28:07 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:28:07 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:28:07 --> templates/auth_master_view
INFO - 2017-11-15 18:28:07 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:28:07 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:28:07 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:28:07 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:28:07 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:28:07 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:28:07 --> Final output sent to browser
DEBUG - 2017-11-15 18:28:07 --> Total execution time: 1.7769
INFO - 2017-11-15 18:45:55 --> Config Class Initialized
INFO - 2017-11-15 18:45:55 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:45:55 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:45:55 --> Utf8 Class Initialized
INFO - 2017-11-15 18:45:55 --> URI Class Initialized
INFO - 2017-11-15 18:45:55 --> Router Class Initialized
INFO - 2017-11-15 18:45:55 --> Output Class Initialized
INFO - 2017-11-15 18:45:55 --> Security Class Initialized
DEBUG - 2017-11-15 18:45:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:45:55 --> Input Class Initialized
INFO - 2017-11-15 18:45:55 --> Language Class Initialized
INFO - 2017-11-15 18:45:55 --> Loader Class Initialized
INFO - 2017-11-15 18:45:55 --> Helper loaded: url_helper
INFO - 2017-11-15 18:45:55 --> Database Driver Class Initialized
INFO - 2017-11-15 18:45:56 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:45:56 --> Controller Class Initialized
DEBUG - 2017-11-15 18:45:56 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:45:56 --> Email Class Initialized
INFO - 2017-11-15 18:45:56 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:45:56 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:45:56 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:45:56 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:45:56 --> Model Class Initialized
INFO - 2017-11-15 18:45:56 --> Helper loaded: date_helper
INFO - 2017-11-15 18:45:56 --> Model Class Initialized
INFO - 2017-11-15 18:45:56 --> Model Class Initialized
INFO - 2017-11-15 18:45:56 --> Model Class Initialized
INFO - 2017-11-15 18:45:56 --> Model Class Initialized
INFO - 2017-11-15 18:45:56 --> Helper loaded: form_helper
INFO - 2017-11-15 18:45:56 --> Form Validation Class Initialized
INFO - 2017-11-15 18:45:56 --> is admin? :
DEBUG - 2017-11-15 18:45:56 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:45:56 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:45:56 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:45:56 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:45:56 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:45:56 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:45:56 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:45:56 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:45:56 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:45:57 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:45:57 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:45:57 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:45:57 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:45:57 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:45:57 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:45:57 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:45:57 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:45:57 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:45:57 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:45:57 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:45:57 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:45:57 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:45:57 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:45:57 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:45:57 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:45:57 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:45:57 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:45:57 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:45:57 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:45:57 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:45:57 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:45:57 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:45:57 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:45:57 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:45:57 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:45:57 --> User Id : 12
INFO - 2017-11-15 18:45:57 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:45:57 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:45:57 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:45:57 --> templates/auth_master_view
INFO - 2017-11-15 18:45:57 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:45:57 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:45:57 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:45:57 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:45:57 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:45:57 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:45:57 --> Final output sent to browser
DEBUG - 2017-11-15 18:45:57 --> Total execution time: 1.7647
INFO - 2017-11-15 18:48:26 --> Config Class Initialized
INFO - 2017-11-15 18:48:26 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:48:26 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:48:26 --> Utf8 Class Initialized
INFO - 2017-11-15 18:48:26 --> URI Class Initialized
INFO - 2017-11-15 18:48:26 --> Router Class Initialized
INFO - 2017-11-15 18:48:26 --> Output Class Initialized
INFO - 2017-11-15 18:48:26 --> Security Class Initialized
DEBUG - 2017-11-15 18:48:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:48:26 --> Input Class Initialized
INFO - 2017-11-15 18:48:27 --> Language Class Initialized
INFO - 2017-11-15 18:48:27 --> Loader Class Initialized
INFO - 2017-11-15 18:48:27 --> Helper loaded: url_helper
INFO - 2017-11-15 18:48:27 --> Database Driver Class Initialized
INFO - 2017-11-15 18:48:28 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:48:28 --> Controller Class Initialized
DEBUG - 2017-11-15 18:48:28 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:48:28 --> Email Class Initialized
INFO - 2017-11-15 18:48:28 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:48:28 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:48:28 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:48:28 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:48:28 --> Model Class Initialized
INFO - 2017-11-15 18:48:28 --> Helper loaded: date_helper
INFO - 2017-11-15 18:48:28 --> Model Class Initialized
INFO - 2017-11-15 18:48:28 --> Model Class Initialized
INFO - 2017-11-15 18:48:28 --> Model Class Initialized
INFO - 2017-11-15 18:48:28 --> Model Class Initialized
INFO - 2017-11-15 18:48:28 --> Helper loaded: form_helper
INFO - 2017-11-15 18:48:28 --> Form Validation Class Initialized
INFO - 2017-11-15 18:48:28 --> is admin? :
DEBUG - 2017-11-15 18:48:28 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:48:28 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:48:28 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:48:28 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:48:28 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:48:28 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:48:28 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:48:28 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:48:28 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:48:28 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:48:28 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:48:28 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:48:28 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:48:28 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:48:28 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:48:28 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:48:28 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:48:28 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:48:28 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:48:28 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:48:28 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:48:28 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:48:28 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:48:28 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:48:28 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:48:28 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:48:28 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:48:28 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:48:28 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:48:28 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:48:28 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:48:28 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:48:28 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:48:28 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:48:28 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:48:28 --> User Id : 12
INFO - 2017-11-15 18:48:28 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:48:28 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:48:28 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:48:28 --> templates/auth_master_view
INFO - 2017-11-15 18:48:28 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:48:28 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:48:28 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:48:28 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:48:28 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:48:28 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:48:28 --> Final output sent to browser
DEBUG - 2017-11-15 18:48:28 --> Total execution time: 1.8033
INFO - 2017-11-15 18:50:22 --> Config Class Initialized
INFO - 2017-11-15 18:50:22 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:50:22 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:50:22 --> Utf8 Class Initialized
INFO - 2017-11-15 18:50:22 --> URI Class Initialized
INFO - 2017-11-15 18:50:22 --> Router Class Initialized
INFO - 2017-11-15 18:50:22 --> Output Class Initialized
INFO - 2017-11-15 18:50:22 --> Security Class Initialized
DEBUG - 2017-11-15 18:50:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:50:22 --> Input Class Initialized
INFO - 2017-11-15 18:50:22 --> Language Class Initialized
INFO - 2017-11-15 18:50:22 --> Loader Class Initialized
INFO - 2017-11-15 18:50:22 --> Helper loaded: url_helper
INFO - 2017-11-15 18:50:22 --> Database Driver Class Initialized
INFO - 2017-11-15 18:50:23 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:50:23 --> Controller Class Initialized
DEBUG - 2017-11-15 18:50:23 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:50:23 --> Email Class Initialized
INFO - 2017-11-15 18:50:23 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:50:24 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:50:24 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:50:24 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:50:24 --> Model Class Initialized
INFO - 2017-11-15 18:50:24 --> Helper loaded: date_helper
INFO - 2017-11-15 18:50:24 --> Model Class Initialized
INFO - 2017-11-15 18:50:24 --> Model Class Initialized
INFO - 2017-11-15 18:50:24 --> Model Class Initialized
INFO - 2017-11-15 18:50:24 --> Model Class Initialized
INFO - 2017-11-15 18:50:24 --> Helper loaded: form_helper
INFO - 2017-11-15 18:50:24 --> Form Validation Class Initialized
INFO - 2017-11-15 18:50:24 --> is admin? :
DEBUG - 2017-11-15 18:50:24 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:50:24 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:50:24 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:50:24 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:50:24 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:50:24 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:50:24 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:50:24 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:50:24 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:50:24 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:50:24 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:50:24 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:50:24 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:50:24 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:50:24 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:50:24 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:50:24 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:50:24 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:50:24 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:50:24 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:50:24 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:50:24 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:50:24 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:50:24 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:50:24 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:50:24 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:50:24 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:50:24 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:50:24 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:50:24 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:50:24 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:50:24 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:50:24 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:50:24 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:50:24 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:50:25 --> User Id : 12
INFO - 2017-11-15 18:50:25 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:50:25 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:50:25 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:50:25 --> templates/auth_master_view
INFO - 2017-11-15 18:50:25 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:50:25 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:50:25 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:50:25 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:50:25 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:50:25 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:50:25 --> Final output sent to browser
DEBUG - 2017-11-15 18:50:25 --> Total execution time: 3.0844
INFO - 2017-11-15 18:51:12 --> Config Class Initialized
INFO - 2017-11-15 18:51:12 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:51:12 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:51:12 --> Utf8 Class Initialized
INFO - 2017-11-15 18:51:12 --> URI Class Initialized
INFO - 2017-11-15 18:51:12 --> Router Class Initialized
INFO - 2017-11-15 18:51:12 --> Output Class Initialized
INFO - 2017-11-15 18:51:12 --> Security Class Initialized
DEBUG - 2017-11-15 18:51:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:51:12 --> Input Class Initialized
INFO - 2017-11-15 18:51:12 --> Language Class Initialized
INFO - 2017-11-15 18:51:12 --> Loader Class Initialized
INFO - 2017-11-15 18:51:12 --> Helper loaded: url_helper
INFO - 2017-11-15 18:51:12 --> Database Driver Class Initialized
INFO - 2017-11-15 18:51:13 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:51:14 --> Controller Class Initialized
DEBUG - 2017-11-15 18:51:14 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:51:14 --> Email Class Initialized
INFO - 2017-11-15 18:51:14 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:51:14 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:51:14 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:51:14 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:51:14 --> Model Class Initialized
INFO - 2017-11-15 18:51:14 --> Helper loaded: date_helper
INFO - 2017-11-15 18:51:14 --> Model Class Initialized
INFO - 2017-11-15 18:51:14 --> Model Class Initialized
INFO - 2017-11-15 18:51:14 --> Model Class Initialized
INFO - 2017-11-15 18:51:14 --> Model Class Initialized
INFO - 2017-11-15 18:51:14 --> Helper loaded: form_helper
INFO - 2017-11-15 18:51:14 --> Form Validation Class Initialized
INFO - 2017-11-15 18:51:14 --> is admin? :
DEBUG - 2017-11-15 18:51:14 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:51:14 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:51:14 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:51:14 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:51:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:51:14 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:51:14 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:51:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:51:14 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:51:14 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:51:14 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:51:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:51:14 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:51:14 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:51:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:51:14 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:51:14 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:51:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:51:14 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:51:14 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:51:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:51:14 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:51:14 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:51:14 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:51:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:51:14 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:51:14 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:51:14 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:51:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:51:14 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:51:14 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:51:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:51:14 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:51:14 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:51:14 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:51:14 --> User Id : 12
INFO - 2017-11-15 18:51:14 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:51:14 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:51:14 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:51:14 --> templates/auth_master_view
INFO - 2017-11-15 18:51:14 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:51:14 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:51:14 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:51:14 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:51:14 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:51:14 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:51:14 --> Final output sent to browser
DEBUG - 2017-11-15 18:51:14 --> Total execution time: 1.8329
INFO - 2017-11-15 18:52:13 --> Config Class Initialized
INFO - 2017-11-15 18:52:13 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:52:13 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:52:13 --> Utf8 Class Initialized
INFO - 2017-11-15 18:52:13 --> URI Class Initialized
INFO - 2017-11-15 18:52:13 --> Router Class Initialized
INFO - 2017-11-15 18:52:13 --> Output Class Initialized
INFO - 2017-11-15 18:52:13 --> Security Class Initialized
DEBUG - 2017-11-15 18:52:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:52:13 --> Input Class Initialized
INFO - 2017-11-15 18:52:13 --> Language Class Initialized
INFO - 2017-11-15 18:52:13 --> Loader Class Initialized
INFO - 2017-11-15 18:52:13 --> Helper loaded: url_helper
INFO - 2017-11-15 18:52:13 --> Database Driver Class Initialized
INFO - 2017-11-15 18:52:14 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:52:14 --> Controller Class Initialized
DEBUG - 2017-11-15 18:52:14 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:52:14 --> Email Class Initialized
INFO - 2017-11-15 18:52:14 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:52:14 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:52:14 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:52:14 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:52:14 --> Model Class Initialized
INFO - 2017-11-15 18:52:14 --> Helper loaded: date_helper
INFO - 2017-11-15 18:52:14 --> Model Class Initialized
INFO - 2017-11-15 18:52:14 --> Model Class Initialized
INFO - 2017-11-15 18:52:15 --> Model Class Initialized
INFO - 2017-11-15 18:52:15 --> Model Class Initialized
INFO - 2017-11-15 18:52:15 --> Helper loaded: form_helper
INFO - 2017-11-15 18:52:15 --> Form Validation Class Initialized
INFO - 2017-11-15 18:52:15 --> is admin? :
DEBUG - 2017-11-15 18:52:15 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:52:15 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:52:15 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:52:15 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:52:15 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:52:15 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:52:15 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:52:15 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:52:15 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:52:15 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:52:15 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:52:15 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:52:15 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:52:15 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:52:15 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:52:15 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:52:15 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:52:15 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:52:15 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:52:15 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:52:15 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:52:15 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:52:15 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:52:15 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:52:15 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:52:15 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:52:15 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:52:15 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:52:15 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:52:15 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:52:15 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:52:15 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:52:15 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:52:15 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:52:15 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:52:15 --> User Id : 12
INFO - 2017-11-15 18:52:15 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:52:15 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:52:15 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:52:15 --> templates/auth_master_view
INFO - 2017-11-15 18:52:15 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:52:15 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:52:15 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:52:15 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:52:15 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:52:15 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:52:15 --> Final output sent to browser
DEBUG - 2017-11-15 18:52:15 --> Total execution time: 1.7984
INFO - 2017-11-15 18:52:37 --> Config Class Initialized
INFO - 2017-11-15 18:52:37 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:52:37 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:52:37 --> Utf8 Class Initialized
INFO - 2017-11-15 18:52:37 --> URI Class Initialized
INFO - 2017-11-15 18:52:37 --> Router Class Initialized
INFO - 2017-11-15 18:52:37 --> Output Class Initialized
INFO - 2017-11-15 18:52:37 --> Security Class Initialized
DEBUG - 2017-11-15 18:52:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:52:37 --> Input Class Initialized
INFO - 2017-11-15 18:52:37 --> Language Class Initialized
INFO - 2017-11-15 18:52:37 --> Loader Class Initialized
INFO - 2017-11-15 18:52:37 --> Helper loaded: url_helper
INFO - 2017-11-15 18:52:37 --> Database Driver Class Initialized
INFO - 2017-11-15 18:52:38 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:52:38 --> Controller Class Initialized
DEBUG - 2017-11-15 18:52:38 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:52:38 --> Email Class Initialized
INFO - 2017-11-15 18:52:38 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:52:38 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:52:38 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:52:38 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:52:38 --> Model Class Initialized
INFO - 2017-11-15 18:52:38 --> Helper loaded: date_helper
INFO - 2017-11-15 18:52:38 --> Model Class Initialized
INFO - 2017-11-15 18:52:38 --> Model Class Initialized
INFO - 2017-11-15 18:52:38 --> Model Class Initialized
INFO - 2017-11-15 18:52:38 --> Model Class Initialized
INFO - 2017-11-15 18:52:38 --> Helper loaded: form_helper
INFO - 2017-11-15 18:52:38 --> Form Validation Class Initialized
INFO - 2017-11-15 18:52:38 --> is admin? :
DEBUG - 2017-11-15 18:52:38 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:52:38 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:52:38 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:52:38 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:52:38 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:52:38 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:52:38 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:52:38 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:52:38 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:52:38 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:52:38 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:52:38 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:52:38 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:52:38 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:52:38 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:52:38 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:52:38 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:52:38 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:52:38 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:52:38 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:52:38 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:52:38 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:52:38 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:52:38 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:52:38 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:52:38 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:52:38 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:52:38 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:52:38 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:52:38 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:52:38 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:52:38 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:52:38 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:52:38 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:52:38 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:52:38 --> User Id : 12
INFO - 2017-11-15 18:52:38 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:52:38 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:52:38 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:52:38 --> templates/auth_master_view
INFO - 2017-11-15 18:52:38 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:52:38 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:52:38 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:52:38 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:52:38 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:52:38 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:52:38 --> Final output sent to browser
DEBUG - 2017-11-15 18:52:38 --> Total execution time: 1.8110
INFO - 2017-11-15 18:55:38 --> Config Class Initialized
INFO - 2017-11-15 18:55:38 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:55:38 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:55:38 --> Utf8 Class Initialized
INFO - 2017-11-15 18:55:38 --> URI Class Initialized
INFO - 2017-11-15 18:55:38 --> Router Class Initialized
INFO - 2017-11-15 18:55:38 --> Output Class Initialized
INFO - 2017-11-15 18:55:38 --> Security Class Initialized
DEBUG - 2017-11-15 18:55:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:55:38 --> Input Class Initialized
INFO - 2017-11-15 18:55:38 --> Language Class Initialized
INFO - 2017-11-15 18:55:38 --> Loader Class Initialized
INFO - 2017-11-15 18:55:38 --> Helper loaded: url_helper
INFO - 2017-11-15 18:55:38 --> Database Driver Class Initialized
INFO - 2017-11-15 18:55:39 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:55:39 --> Controller Class Initialized
DEBUG - 2017-11-15 18:55:39 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:55:39 --> Email Class Initialized
INFO - 2017-11-15 18:55:39 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:55:39 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:55:39 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:55:39 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:55:39 --> Model Class Initialized
INFO - 2017-11-15 18:55:39 --> Helper loaded: date_helper
INFO - 2017-11-15 18:55:39 --> Model Class Initialized
INFO - 2017-11-15 18:55:39 --> Model Class Initialized
INFO - 2017-11-15 18:55:39 --> Model Class Initialized
INFO - 2017-11-15 18:55:39 --> Model Class Initialized
INFO - 2017-11-15 18:55:39 --> Helper loaded: form_helper
INFO - 2017-11-15 18:55:39 --> Form Validation Class Initialized
INFO - 2017-11-15 18:55:39 --> is admin? :
DEBUG - 2017-11-15 18:55:39 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:55:39 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:55:39 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:55:39 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:55:39 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:55:39 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:55:39 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:55:39 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:55:39 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:55:39 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:55:39 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:55:39 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:55:39 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:55:39 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:55:39 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:55:39 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:55:39 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:55:39 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:55:39 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:55:39 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:55:39 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:55:39 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:55:39 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:55:39 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:55:39 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:55:39 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:55:39 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:55:39 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:55:39 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:55:39 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:55:39 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:55:39 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:55:39 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:55:39 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:55:39 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:55:39 --> User Id : 12
INFO - 2017-11-15 18:55:39 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:55:39 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:55:39 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:55:39 --> templates/auth_master_view
INFO - 2017-11-15 18:55:39 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:55:39 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:55:39 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:55:39 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:55:39 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:55:39 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:55:39 --> Final output sent to browser
DEBUG - 2017-11-15 18:55:39 --> Total execution time: 1.8180
INFO - 2017-11-15 18:56:10 --> Config Class Initialized
INFO - 2017-11-15 18:56:10 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:56:10 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:56:10 --> Utf8 Class Initialized
INFO - 2017-11-15 18:56:10 --> URI Class Initialized
INFO - 2017-11-15 18:56:10 --> Router Class Initialized
INFO - 2017-11-15 18:56:10 --> Output Class Initialized
INFO - 2017-11-15 18:56:10 --> Security Class Initialized
DEBUG - 2017-11-15 18:56:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:56:10 --> Input Class Initialized
INFO - 2017-11-15 18:56:10 --> Language Class Initialized
INFO - 2017-11-15 18:56:10 --> Loader Class Initialized
INFO - 2017-11-15 18:56:10 --> Helper loaded: url_helper
INFO - 2017-11-15 18:56:10 --> Database Driver Class Initialized
INFO - 2017-11-15 18:56:11 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:56:11 --> Controller Class Initialized
DEBUG - 2017-11-15 18:56:11 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:56:11 --> Email Class Initialized
INFO - 2017-11-15 18:56:11 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:56:11 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:56:11 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:56:11 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:56:11 --> Model Class Initialized
INFO - 2017-11-15 18:56:11 --> Helper loaded: date_helper
INFO - 2017-11-15 18:56:11 --> Model Class Initialized
INFO - 2017-11-15 18:56:11 --> Model Class Initialized
INFO - 2017-11-15 18:56:11 --> Model Class Initialized
INFO - 2017-11-15 18:56:11 --> Model Class Initialized
INFO - 2017-11-15 18:56:11 --> Helper loaded: form_helper
INFO - 2017-11-15 18:56:11 --> Form Validation Class Initialized
INFO - 2017-11-15 18:56:11 --> is admin? :
DEBUG - 2017-11-15 18:56:11 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:56:11 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:56:11 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:56:11 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:56:11 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:56:11 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:56:11 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:56:11 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:56:11 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:56:11 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:56:11 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:56:11 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:56:11 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:56:11 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:56:11 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:56:11 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:56:11 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:56:11 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:56:11 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:56:11 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:56:11 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:56:11 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:56:11 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:56:11 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:56:11 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:56:11 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:56:12 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:56:12 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:56:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:56:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:56:12 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:56:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:56:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:56:12 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:56:12 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:56:12 --> User Id : 12
INFO - 2017-11-15 18:56:12 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:56:12 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:56:12 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:56:12 --> templates/auth_master_view
INFO - 2017-11-15 18:56:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:56:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:56:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:56:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:56:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:56:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:56:12 --> Final output sent to browser
DEBUG - 2017-11-15 18:56:12 --> Total execution time: 1.8710
INFO - 2017-11-15 18:57:02 --> Config Class Initialized
INFO - 2017-11-15 18:57:02 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:57:02 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:57:02 --> Utf8 Class Initialized
INFO - 2017-11-15 18:57:02 --> URI Class Initialized
INFO - 2017-11-15 18:57:02 --> Router Class Initialized
INFO - 2017-11-15 18:57:02 --> Output Class Initialized
INFO - 2017-11-15 18:57:02 --> Security Class Initialized
DEBUG - 2017-11-15 18:57:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:57:02 --> Input Class Initialized
INFO - 2017-11-15 18:57:02 --> Language Class Initialized
INFO - 2017-11-15 18:57:02 --> Loader Class Initialized
INFO - 2017-11-15 18:57:02 --> Helper loaded: url_helper
INFO - 2017-11-15 18:57:02 --> Database Driver Class Initialized
INFO - 2017-11-15 18:57:03 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:57:03 --> Controller Class Initialized
DEBUG - 2017-11-15 18:57:03 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:57:03 --> Email Class Initialized
INFO - 2017-11-15 18:57:03 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:57:03 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:57:03 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:57:03 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:57:03 --> Model Class Initialized
INFO - 2017-11-15 18:57:03 --> Helper loaded: date_helper
INFO - 2017-11-15 18:57:03 --> Model Class Initialized
INFO - 2017-11-15 18:57:03 --> Model Class Initialized
INFO - 2017-11-15 18:57:03 --> Model Class Initialized
INFO - 2017-11-15 18:57:03 --> Model Class Initialized
INFO - 2017-11-15 18:57:03 --> Helper loaded: form_helper
INFO - 2017-11-15 18:57:03 --> Form Validation Class Initialized
INFO - 2017-11-15 18:57:03 --> is admin? :
DEBUG - 2017-11-15 18:57:04 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:57:04 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:57:04 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:57:04 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:57:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:57:04 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:57:04 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:57:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:57:04 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:57:04 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:57:04 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:57:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:57:04 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:57:04 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:57:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:57:04 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:57:04 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:57:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:57:04 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:57:04 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:57:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:57:04 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:57:04 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:57:04 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:57:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:57:04 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:57:04 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:57:04 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:57:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:57:04 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:57:04 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:57:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:57:04 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:57:04 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:57:04 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:57:04 --> User Id : 12
INFO - 2017-11-15 18:57:04 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:57:04 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:57:04 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:57:04 --> templates/auth_master_view
INFO - 2017-11-15 18:57:04 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:57:04 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:57:04 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:57:04 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:57:04 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:57:04 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:57:04 --> Final output sent to browser
DEBUG - 2017-11-15 18:57:04 --> Total execution time: 1.8780
INFO - 2017-11-15 18:57:42 --> Config Class Initialized
INFO - 2017-11-15 18:57:42 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:57:42 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:57:42 --> Utf8 Class Initialized
INFO - 2017-11-15 18:57:42 --> URI Class Initialized
INFO - 2017-11-15 18:57:42 --> Router Class Initialized
INFO - 2017-11-15 18:57:42 --> Output Class Initialized
INFO - 2017-11-15 18:57:42 --> Security Class Initialized
DEBUG - 2017-11-15 18:57:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:57:42 --> Input Class Initialized
INFO - 2017-11-15 18:57:42 --> Language Class Initialized
INFO - 2017-11-15 18:57:42 --> Loader Class Initialized
INFO - 2017-11-15 18:57:42 --> Helper loaded: url_helper
INFO - 2017-11-15 18:57:42 --> Database Driver Class Initialized
INFO - 2017-11-15 18:57:43 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:57:43 --> Controller Class Initialized
DEBUG - 2017-11-15 18:57:43 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:57:43 --> Email Class Initialized
INFO - 2017-11-15 18:57:43 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:57:43 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:57:43 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:57:43 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:57:43 --> Model Class Initialized
INFO - 2017-11-15 18:57:43 --> Helper loaded: date_helper
INFO - 2017-11-15 18:57:43 --> Model Class Initialized
INFO - 2017-11-15 18:57:43 --> Model Class Initialized
INFO - 2017-11-15 18:57:43 --> Model Class Initialized
INFO - 2017-11-15 18:57:43 --> Model Class Initialized
INFO - 2017-11-15 18:57:43 --> Helper loaded: form_helper
INFO - 2017-11-15 18:57:43 --> Form Validation Class Initialized
INFO - 2017-11-15 18:57:43 --> is admin? :
DEBUG - 2017-11-15 18:57:43 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:57:43 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:57:43 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:57:43 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:57:43 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:57:43 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:57:43 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:57:43 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:57:43 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:57:43 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:57:43 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:57:43 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:57:43 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:57:43 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:57:43 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:57:43 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:57:43 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:57:43 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:57:43 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:57:43 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:57:43 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:57:44 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:57:44 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:57:44 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:57:44 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:57:44 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:57:44 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:57:44 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:57:44 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:57:44 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:57:44 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:57:44 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:57:44 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:57:44 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:57:44 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:57:44 --> User Id : 12
INFO - 2017-11-15 18:57:44 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:57:44 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:57:44 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:57:44 --> templates/auth_master_view
INFO - 2017-11-15 18:57:44 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:57:44 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:57:44 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:57:44 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:57:44 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:57:44 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:57:44 --> Final output sent to browser
DEBUG - 2017-11-15 18:57:44 --> Total execution time: 1.8682
INFO - 2017-11-15 18:58:53 --> Config Class Initialized
INFO - 2017-11-15 18:58:53 --> Hooks Class Initialized
DEBUG - 2017-11-15 18:58:53 --> UTF-8 Support Enabled
INFO - 2017-11-15 18:58:53 --> Utf8 Class Initialized
INFO - 2017-11-15 18:58:53 --> URI Class Initialized
INFO - 2017-11-15 18:58:53 --> Router Class Initialized
INFO - 2017-11-15 18:58:53 --> Output Class Initialized
INFO - 2017-11-15 18:58:53 --> Security Class Initialized
DEBUG - 2017-11-15 18:58:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 18:58:53 --> Input Class Initialized
INFO - 2017-11-15 18:58:53 --> Language Class Initialized
INFO - 2017-11-15 18:58:53 --> Loader Class Initialized
INFO - 2017-11-15 18:58:53 --> Helper loaded: url_helper
INFO - 2017-11-15 18:58:53 --> Database Driver Class Initialized
INFO - 2017-11-15 18:58:54 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 18:58:54 --> Controller Class Initialized
DEBUG - 2017-11-15 18:58:54 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 18:58:54 --> Email Class Initialized
INFO - 2017-11-15 18:58:54 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 18:58:54 --> Helper loaded: cookie_helper
INFO - 2017-11-15 18:58:54 --> Helper loaded: language_helper
DEBUG - 2017-11-15 18:58:54 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 18:58:54 --> Model Class Initialized
INFO - 2017-11-15 18:58:54 --> Helper loaded: date_helper
INFO - 2017-11-15 18:58:54 --> Model Class Initialized
INFO - 2017-11-15 18:58:54 --> Model Class Initialized
INFO - 2017-11-15 18:58:54 --> Model Class Initialized
INFO - 2017-11-15 18:58:54 --> Model Class Initialized
INFO - 2017-11-15 18:58:54 --> Helper loaded: form_helper
INFO - 2017-11-15 18:58:54 --> Form Validation Class Initialized
INFO - 2017-11-15 18:58:54 --> is admin? :
DEBUG - 2017-11-15 18:58:54 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 18:58:54 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 18:58:54 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:58:54 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:58:54 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:58:54 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 18:58:54 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 18:58:54 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:58:54 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 18:58:54 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 18:58:54 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:58:54 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:58:54 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 18:58:54 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 18:58:54 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:58:54 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 18:58:54 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 18:58:54 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:58:54 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 18:58:54 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 18:58:54 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:58:54 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 18:58:54 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 18:58:54 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:58:54 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:58:54 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 18:58:54 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 18:58:54 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 18:58:54 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:58:54 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 18:58:54 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 18:58:54 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:58:54 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 18:58:54 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 18:58:55 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 18:58:55 --> User Id : 12
INFO - 2017-11-15 18:58:55 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 18:58:55 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 18:58:55 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 18:58:55 --> templates/auth_master_view
INFO - 2017-11-15 18:58:55 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 18:58:55 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 18:58:55 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 18:58:55 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 18:58:55 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 18:58:55 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 18:58:55 --> Final output sent to browser
DEBUG - 2017-11-15 18:58:55 --> Total execution time: 1.8773
INFO - 2017-11-15 19:00:12 --> Config Class Initialized
INFO - 2017-11-15 19:00:12 --> Hooks Class Initialized
DEBUG - 2017-11-15 19:00:12 --> UTF-8 Support Enabled
INFO - 2017-11-15 19:00:12 --> Utf8 Class Initialized
INFO - 2017-11-15 19:00:12 --> URI Class Initialized
INFO - 2017-11-15 19:00:12 --> Router Class Initialized
INFO - 2017-11-15 19:00:12 --> Output Class Initialized
INFO - 2017-11-15 19:00:12 --> Security Class Initialized
DEBUG - 2017-11-15 19:00:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 19:00:12 --> Input Class Initialized
INFO - 2017-11-15 19:00:12 --> Language Class Initialized
INFO - 2017-11-15 19:00:12 --> Loader Class Initialized
INFO - 2017-11-15 19:00:12 --> Helper loaded: url_helper
INFO - 2017-11-15 19:00:12 --> Database Driver Class Initialized
INFO - 2017-11-15 19:00:13 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 19:00:13 --> Controller Class Initialized
DEBUG - 2017-11-15 19:00:13 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 19:00:13 --> Email Class Initialized
INFO - 2017-11-15 19:00:13 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 19:00:13 --> Helper loaded: cookie_helper
INFO - 2017-11-15 19:00:13 --> Helper loaded: language_helper
DEBUG - 2017-11-15 19:00:13 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 19:00:13 --> Model Class Initialized
INFO - 2017-11-15 19:00:14 --> Helper loaded: date_helper
INFO - 2017-11-15 19:00:14 --> Model Class Initialized
INFO - 2017-11-15 19:00:14 --> Model Class Initialized
INFO - 2017-11-15 19:00:14 --> Model Class Initialized
INFO - 2017-11-15 19:00:14 --> Model Class Initialized
INFO - 2017-11-15 19:00:14 --> Helper loaded: form_helper
INFO - 2017-11-15 19:00:14 --> Form Validation Class Initialized
INFO - 2017-11-15 19:00:14 --> is admin? :
DEBUG - 2017-11-15 19:00:14 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 19:00:14 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 19:00:14 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:00:14 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:00:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:00:14 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:00:14 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 19:00:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:00:14 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:00:14 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 19:00:14 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:00:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:00:14 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:00:14 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 19:00:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:00:14 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:00:14 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 19:00:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:00:14 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:00:14 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 19:00:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:00:14 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:00:14 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 19:00:14 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:00:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:00:14 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:00:14 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 19:00:14 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:00:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:00:14 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:00:14 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 19:00:14 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:00:14 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:00:14 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 19:00:14 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 19:00:14 --> User Id : 12
INFO - 2017-11-15 19:00:14 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 19:00:14 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 19:00:14 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 19:00:14 --> templates/auth_master_view
INFO - 2017-11-15 19:00:14 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 19:00:14 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 19:00:14 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 19:00:14 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 19:00:14 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 19:00:14 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 19:00:14 --> Final output sent to browser
DEBUG - 2017-11-15 19:00:14 --> Total execution time: 1.9323
INFO - 2017-11-15 19:36:00 --> Config Class Initialized
INFO - 2017-11-15 19:36:00 --> Hooks Class Initialized
DEBUG - 2017-11-15 19:36:00 --> UTF-8 Support Enabled
INFO - 2017-11-15 19:36:00 --> Utf8 Class Initialized
INFO - 2017-11-15 19:36:00 --> URI Class Initialized
INFO - 2017-11-15 19:36:00 --> Router Class Initialized
INFO - 2017-11-15 19:36:00 --> Output Class Initialized
INFO - 2017-11-15 19:36:00 --> Security Class Initialized
DEBUG - 2017-11-15 19:36:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 19:36:00 --> Input Class Initialized
INFO - 2017-11-15 19:36:00 --> Language Class Initialized
INFO - 2017-11-15 19:36:00 --> Loader Class Initialized
INFO - 2017-11-15 19:36:00 --> Helper loaded: url_helper
INFO - 2017-11-15 19:36:00 --> Database Driver Class Initialized
INFO - 2017-11-15 19:36:01 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 19:36:01 --> Controller Class Initialized
DEBUG - 2017-11-15 19:36:01 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 19:36:01 --> Email Class Initialized
INFO - 2017-11-15 19:36:01 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 19:36:01 --> Helper loaded: cookie_helper
INFO - 2017-11-15 19:36:01 --> Helper loaded: language_helper
DEBUG - 2017-11-15 19:36:01 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 19:36:01 --> Model Class Initialized
INFO - 2017-11-15 19:36:01 --> Helper loaded: date_helper
INFO - 2017-11-15 19:36:02 --> Model Class Initialized
INFO - 2017-11-15 19:36:02 --> Model Class Initialized
INFO - 2017-11-15 19:36:02 --> Model Class Initialized
INFO - 2017-11-15 19:36:02 --> Model Class Initialized
INFO - 2017-11-15 19:36:02 --> Helper loaded: form_helper
INFO - 2017-11-15 19:36:02 --> Form Validation Class Initialized
INFO - 2017-11-15 19:36:02 --> is admin? :
DEBUG - 2017-11-15 19:36:02 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 19:36:02 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 19:36:02 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:36:02 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:36:02 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:36:02 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:36:02 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 19:36:02 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:36:02 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:36:02 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 19:36:02 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:36:02 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:36:02 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:36:02 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 19:36:02 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:36:02 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:36:02 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 19:36:02 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:36:02 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:36:02 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 19:36:02 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:36:02 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:36:02 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 19:36:02 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:36:02 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:36:02 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:36:02 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 19:36:02 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:36:02 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:36:02 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:36:02 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 19:36:02 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:36:02 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:36:02 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 19:36:02 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 19:36:02 --> User Id : 12
INFO - 2017-11-15 19:36:02 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 19:36:02 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 19:36:02 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 19:36:02 --> templates/auth_master_view
INFO - 2017-11-15 19:36:02 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 19:36:02 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 19:36:02 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 19:36:02 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 19:36:02 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 19:36:02 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 19:36:02 --> Final output sent to browser
DEBUG - 2017-11-15 19:36:02 --> Total execution time: 2.7742
INFO - 2017-11-15 19:36:23 --> Config Class Initialized
INFO - 2017-11-15 19:36:23 --> Hooks Class Initialized
DEBUG - 2017-11-15 19:36:23 --> UTF-8 Support Enabled
INFO - 2017-11-15 19:36:23 --> Utf8 Class Initialized
INFO - 2017-11-15 19:36:23 --> URI Class Initialized
INFO - 2017-11-15 19:36:23 --> Router Class Initialized
INFO - 2017-11-15 19:36:23 --> Output Class Initialized
INFO - 2017-11-15 19:36:23 --> Security Class Initialized
DEBUG - 2017-11-15 19:36:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 19:36:23 --> Input Class Initialized
INFO - 2017-11-15 19:36:23 --> Language Class Initialized
INFO - 2017-11-15 19:36:23 --> Loader Class Initialized
INFO - 2017-11-15 19:36:23 --> Helper loaded: url_helper
INFO - 2017-11-15 19:36:23 --> Database Driver Class Initialized
INFO - 2017-11-15 19:36:24 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 19:36:24 --> Controller Class Initialized
DEBUG - 2017-11-15 19:36:24 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 19:36:24 --> Email Class Initialized
INFO - 2017-11-15 19:36:24 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 19:36:24 --> Helper loaded: cookie_helper
INFO - 2017-11-15 19:36:24 --> Helper loaded: language_helper
DEBUG - 2017-11-15 19:36:24 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 19:36:24 --> Model Class Initialized
INFO - 2017-11-15 19:36:24 --> Helper loaded: date_helper
INFO - 2017-11-15 19:36:24 --> Model Class Initialized
INFO - 2017-11-15 19:36:24 --> Model Class Initialized
INFO - 2017-11-15 19:36:24 --> Model Class Initialized
INFO - 2017-11-15 19:36:24 --> Model Class Initialized
INFO - 2017-11-15 19:36:24 --> Helper loaded: form_helper
INFO - 2017-11-15 19:36:24 --> Form Validation Class Initialized
INFO - 2017-11-15 19:36:24 --> is admin? :
DEBUG - 2017-11-15 19:36:24 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 19:36:24 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 19:36:24 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:36:25 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:36:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:36:25 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:36:25 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 19:36:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:36:25 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:36:25 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 19:36:25 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:36:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:36:25 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:36:25 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 19:36:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:36:25 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:36:25 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 19:36:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:36:25 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:36:25 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 19:36:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:36:25 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:36:25 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 19:36:25 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:36:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:36:25 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:36:25 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 19:36:25 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:36:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:36:25 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:36:25 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 19:36:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:36:25 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:36:25 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 19:36:25 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 19:36:25 --> User Id : 12
INFO - 2017-11-15 19:36:25 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 19:36:25 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 19:36:25 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 19:36:25 --> templates/auth_master_view
INFO - 2017-11-15 19:36:25 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 19:36:25 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 19:36:25 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 19:36:25 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 19:36:25 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 19:36:25 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 19:36:25 --> Final output sent to browser
DEBUG - 2017-11-15 19:36:25 --> Total execution time: 1.9028
INFO - 2017-11-15 19:36:42 --> Config Class Initialized
INFO - 2017-11-15 19:36:42 --> Hooks Class Initialized
DEBUG - 2017-11-15 19:36:42 --> UTF-8 Support Enabled
INFO - 2017-11-15 19:36:42 --> Utf8 Class Initialized
INFO - 2017-11-15 19:36:42 --> URI Class Initialized
INFO - 2017-11-15 19:36:42 --> Router Class Initialized
INFO - 2017-11-15 19:36:42 --> Output Class Initialized
INFO - 2017-11-15 19:36:42 --> Security Class Initialized
DEBUG - 2017-11-15 19:36:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 19:36:42 --> Input Class Initialized
INFO - 2017-11-15 19:36:42 --> Language Class Initialized
INFO - 2017-11-15 19:36:42 --> Loader Class Initialized
INFO - 2017-11-15 19:36:42 --> Helper loaded: url_helper
INFO - 2017-11-15 19:36:42 --> Database Driver Class Initialized
INFO - 2017-11-15 19:36:43 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 19:36:44 --> Controller Class Initialized
DEBUG - 2017-11-15 19:36:44 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 19:36:44 --> Email Class Initialized
INFO - 2017-11-15 19:36:44 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 19:36:44 --> Helper loaded: cookie_helper
INFO - 2017-11-15 19:36:44 --> Helper loaded: language_helper
DEBUG - 2017-11-15 19:36:44 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 19:36:44 --> Model Class Initialized
INFO - 2017-11-15 19:36:44 --> Helper loaded: date_helper
INFO - 2017-11-15 19:36:44 --> Model Class Initialized
INFO - 2017-11-15 19:36:44 --> Model Class Initialized
INFO - 2017-11-15 19:36:44 --> Model Class Initialized
INFO - 2017-11-15 19:36:44 --> Model Class Initialized
INFO - 2017-11-15 19:36:44 --> Helper loaded: form_helper
INFO - 2017-11-15 19:36:44 --> Form Validation Class Initialized
INFO - 2017-11-15 19:36:44 --> is admin? :
DEBUG - 2017-11-15 19:36:44 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 19:36:44 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 19:36:44 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:36:44 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:36:44 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:36:44 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:36:44 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 19:36:44 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:36:44 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:36:44 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 19:36:44 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:36:44 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:36:44 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:36:44 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 19:36:44 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:36:44 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:36:44 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 19:36:44 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:36:44 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:36:44 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 19:36:44 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:36:44 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:36:44 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 19:36:44 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:36:44 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:36:44 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:36:44 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 19:36:44 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:36:44 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:36:44 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:36:44 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 19:36:44 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:36:44 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:36:44 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 19:36:44 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 19:36:44 --> User Id : 12
INFO - 2017-11-15 19:36:44 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 19:36:44 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 19:36:44 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 19:36:44 --> templates/auth_master_view
INFO - 2017-11-15 19:36:44 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 19:36:44 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 19:36:44 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 19:36:44 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 19:36:44 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 19:36:44 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 19:36:44 --> Final output sent to browser
DEBUG - 2017-11-15 19:36:44 --> Total execution time: 1.9957
INFO - 2017-11-15 19:37:11 --> Config Class Initialized
INFO - 2017-11-15 19:37:11 --> Hooks Class Initialized
DEBUG - 2017-11-15 19:37:11 --> UTF-8 Support Enabled
INFO - 2017-11-15 19:37:11 --> Utf8 Class Initialized
INFO - 2017-11-15 19:37:11 --> URI Class Initialized
INFO - 2017-11-15 19:37:11 --> Router Class Initialized
INFO - 2017-11-15 19:37:11 --> Output Class Initialized
INFO - 2017-11-15 19:37:11 --> Security Class Initialized
DEBUG - 2017-11-15 19:37:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 19:37:11 --> Input Class Initialized
INFO - 2017-11-15 19:37:11 --> Language Class Initialized
INFO - 2017-11-15 19:37:11 --> Loader Class Initialized
INFO - 2017-11-15 19:37:11 --> Helper loaded: url_helper
INFO - 2017-11-15 19:37:11 --> Database Driver Class Initialized
INFO - 2017-11-15 19:37:12 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 19:37:12 --> Controller Class Initialized
DEBUG - 2017-11-15 19:37:12 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 19:37:12 --> Email Class Initialized
INFO - 2017-11-15 19:37:12 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 19:37:12 --> Helper loaded: cookie_helper
INFO - 2017-11-15 19:37:12 --> Helper loaded: language_helper
DEBUG - 2017-11-15 19:37:12 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 19:37:12 --> Model Class Initialized
INFO - 2017-11-15 19:37:12 --> Helper loaded: date_helper
INFO - 2017-11-15 19:37:12 --> Model Class Initialized
INFO - 2017-11-15 19:37:12 --> Model Class Initialized
INFO - 2017-11-15 19:37:12 --> Model Class Initialized
INFO - 2017-11-15 19:37:12 --> Model Class Initialized
INFO - 2017-11-15 19:37:12 --> Helper loaded: form_helper
INFO - 2017-11-15 19:37:12 --> Form Validation Class Initialized
INFO - 2017-11-15 19:37:12 --> is admin? :
DEBUG - 2017-11-15 19:37:12 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 19:37:12 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 19:37:12 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:37:12 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:37:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:37:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:37:12 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 19:37:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:37:12 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:37:12 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 19:37:12 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:37:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:37:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:37:12 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 19:37:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:37:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:37:12 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 19:37:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:37:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:37:12 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 19:37:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:37:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:37:12 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 19:37:12 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:37:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:37:12 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:37:12 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 19:37:12 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:37:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:37:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:37:12 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 19:37:12 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:37:12 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:37:12 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 19:37:12 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 19:37:12 --> User Id : 12
INFO - 2017-11-15 19:37:12 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 19:37:12 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 19:37:12 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 19:37:12 --> templates/auth_master_view
INFO - 2017-11-15 19:37:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 19:37:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 19:37:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 19:37:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 19:37:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 19:37:12 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 19:37:12 --> Final output sent to browser
DEBUG - 2017-11-15 19:37:12 --> Total execution time: 1.8871
INFO - 2017-11-15 19:37:31 --> Config Class Initialized
INFO - 2017-11-15 19:37:31 --> Hooks Class Initialized
DEBUG - 2017-11-15 19:37:31 --> UTF-8 Support Enabled
INFO - 2017-11-15 19:37:31 --> Utf8 Class Initialized
INFO - 2017-11-15 19:37:31 --> URI Class Initialized
INFO - 2017-11-15 19:37:31 --> Router Class Initialized
INFO - 2017-11-15 19:37:31 --> Output Class Initialized
INFO - 2017-11-15 19:37:31 --> Security Class Initialized
DEBUG - 2017-11-15 19:37:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 19:37:31 --> Input Class Initialized
INFO - 2017-11-15 19:37:31 --> Language Class Initialized
INFO - 2017-11-15 19:37:31 --> Loader Class Initialized
INFO - 2017-11-15 19:37:31 --> Helper loaded: url_helper
INFO - 2017-11-15 19:37:31 --> Database Driver Class Initialized
INFO - 2017-11-15 19:37:32 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 19:37:32 --> Controller Class Initialized
DEBUG - 2017-11-15 19:37:32 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 19:37:32 --> Email Class Initialized
INFO - 2017-11-15 19:37:32 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 19:37:32 --> Helper loaded: cookie_helper
INFO - 2017-11-15 19:37:32 --> Helper loaded: language_helper
DEBUG - 2017-11-15 19:37:32 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 19:37:32 --> Model Class Initialized
INFO - 2017-11-15 19:37:32 --> Helper loaded: date_helper
INFO - 2017-11-15 19:37:32 --> Model Class Initialized
INFO - 2017-11-15 19:37:32 --> Model Class Initialized
INFO - 2017-11-15 19:37:32 --> Model Class Initialized
INFO - 2017-11-15 19:37:32 --> Model Class Initialized
INFO - 2017-11-15 19:37:32 --> Helper loaded: form_helper
INFO - 2017-11-15 19:37:32 --> Form Validation Class Initialized
INFO - 2017-11-15 19:37:32 --> is admin? :
DEBUG - 2017-11-15 19:37:32 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 19:37:32 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 19:37:32 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:37:32 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:37:32 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:37:32 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:37:32 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 19:37:32 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:37:32 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:37:32 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 19:37:32 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:37:32 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:37:32 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:37:32 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 19:37:32 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:37:32 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:37:32 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 19:37:32 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:37:32 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:37:32 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 19:37:32 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:37:32 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:37:32 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 19:37:32 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:37:32 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:37:32 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:37:32 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 19:37:32 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:37:32 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:37:32 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:37:32 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 19:37:32 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:37:32 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:37:32 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 19:37:33 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 19:37:33 --> User Id : 12
INFO - 2017-11-15 19:37:33 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 19:37:33 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 19:37:33 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 19:37:33 --> templates/auth_master_view
INFO - 2017-11-15 19:37:33 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 19:37:33 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 19:37:33 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 19:37:33 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 19:37:33 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 19:37:33 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 19:37:33 --> Final output sent to browser
DEBUG - 2017-11-15 19:37:33 --> Total execution time: 1.9277
INFO - 2017-11-15 19:38:07 --> Config Class Initialized
INFO - 2017-11-15 19:38:07 --> Hooks Class Initialized
DEBUG - 2017-11-15 19:38:07 --> UTF-8 Support Enabled
INFO - 2017-11-15 19:38:07 --> Utf8 Class Initialized
INFO - 2017-11-15 19:38:07 --> URI Class Initialized
INFO - 2017-11-15 19:38:07 --> Router Class Initialized
INFO - 2017-11-15 19:38:07 --> Output Class Initialized
INFO - 2017-11-15 19:38:07 --> Security Class Initialized
DEBUG - 2017-11-15 19:38:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 19:38:07 --> Input Class Initialized
INFO - 2017-11-15 19:38:07 --> Language Class Initialized
INFO - 2017-11-15 19:38:07 --> Loader Class Initialized
INFO - 2017-11-15 19:38:07 --> Helper loaded: url_helper
INFO - 2017-11-15 19:38:07 --> Database Driver Class Initialized
INFO - 2017-11-15 19:38:08 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 19:38:08 --> Controller Class Initialized
DEBUG - 2017-11-15 19:38:08 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 19:38:08 --> Email Class Initialized
INFO - 2017-11-15 19:38:08 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 19:38:08 --> Helper loaded: cookie_helper
INFO - 2017-11-15 19:38:08 --> Helper loaded: language_helper
DEBUG - 2017-11-15 19:38:08 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 19:38:08 --> Model Class Initialized
INFO - 2017-11-15 19:38:08 --> Helper loaded: date_helper
INFO - 2017-11-15 19:38:08 --> Model Class Initialized
INFO - 2017-11-15 19:38:08 --> Model Class Initialized
INFO - 2017-11-15 19:38:08 --> Model Class Initialized
INFO - 2017-11-15 19:38:08 --> Model Class Initialized
INFO - 2017-11-15 19:38:08 --> Helper loaded: form_helper
INFO - 2017-11-15 19:38:08 --> Form Validation Class Initialized
INFO - 2017-11-15 19:38:08 --> is admin? :
DEBUG - 2017-11-15 19:38:08 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 19:38:08 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 19:38:08 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:38:08 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:38:08 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:38:08 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:38:08 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 19:38:08 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:38:08 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:38:08 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 19:38:08 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:38:08 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:38:08 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:38:08 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 19:38:08 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:38:08 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:38:08 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 19:38:08 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:38:08 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:38:08 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 19:38:08 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:38:08 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:38:08 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 19:38:08 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:38:08 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:38:09 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:38:09 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 19:38:09 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:38:09 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:38:09 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:38:09 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 19:38:09 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:38:09 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:38:09 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 19:38:09 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 19:38:09 --> User Id : 12
INFO - 2017-11-15 19:38:09 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 19:38:09 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 19:38:09 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 19:38:09 --> templates/auth_master_view
INFO - 2017-11-15 19:38:09 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 19:38:09 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 19:38:09 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 19:38:09 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 19:38:09 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 19:38:09 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 19:38:09 --> Final output sent to browser
DEBUG - 2017-11-15 19:38:09 --> Total execution time: 1.9049
INFO - 2017-11-15 19:38:20 --> Config Class Initialized
INFO - 2017-11-15 19:38:20 --> Hooks Class Initialized
DEBUG - 2017-11-15 19:38:20 --> UTF-8 Support Enabled
INFO - 2017-11-15 19:38:20 --> Utf8 Class Initialized
INFO - 2017-11-15 19:38:20 --> URI Class Initialized
INFO - 2017-11-15 19:38:20 --> Router Class Initialized
INFO - 2017-11-15 19:38:20 --> Output Class Initialized
INFO - 2017-11-15 19:38:20 --> Security Class Initialized
DEBUG - 2017-11-15 19:38:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 19:38:20 --> Input Class Initialized
INFO - 2017-11-15 19:38:20 --> Language Class Initialized
INFO - 2017-11-15 19:38:20 --> Loader Class Initialized
INFO - 2017-11-15 19:38:20 --> Helper loaded: url_helper
INFO - 2017-11-15 19:38:20 --> Database Driver Class Initialized
INFO - 2017-11-15 19:38:21 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 19:38:21 --> Controller Class Initialized
DEBUG - 2017-11-15 19:38:21 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 19:38:21 --> Email Class Initialized
INFO - 2017-11-15 19:38:21 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 19:38:21 --> Helper loaded: cookie_helper
INFO - 2017-11-15 19:38:21 --> Helper loaded: language_helper
DEBUG - 2017-11-15 19:38:21 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 19:38:21 --> Model Class Initialized
INFO - 2017-11-15 19:38:21 --> Helper loaded: date_helper
INFO - 2017-11-15 19:38:21 --> Model Class Initialized
INFO - 2017-11-15 19:38:21 --> Model Class Initialized
INFO - 2017-11-15 19:38:21 --> Model Class Initialized
INFO - 2017-11-15 19:38:21 --> Model Class Initialized
INFO - 2017-11-15 19:38:21 --> Helper loaded: form_helper
INFO - 2017-11-15 19:38:21 --> Form Validation Class Initialized
INFO - 2017-11-15 19:38:21 --> is admin? :
DEBUG - 2017-11-15 19:38:21 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 19:38:21 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 19:38:21 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:38:21 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:38:21 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:38:21 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:38:21 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 19:38:21 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:38:21 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:38:21 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 19:38:21 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:38:21 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:38:21 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:38:21 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 19:38:21 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:38:21 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:38:21 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 19:38:21 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:38:21 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:38:21 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 19:38:21 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:38:21 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:38:21 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 19:38:21 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:38:21 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:38:21 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:38:21 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 19:38:21 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:38:21 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:38:21 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:38:21 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 19:38:21 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:38:21 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:38:21 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 19:38:21 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 19:38:22 --> User Id : 12
INFO - 2017-11-15 19:38:22 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 19:38:22 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 19:38:22 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 19:38:22 --> templates/auth_master_view
INFO - 2017-11-15 19:38:22 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 19:38:22 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 19:38:22 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 19:38:22 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 19:38:22 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 19:38:22 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 19:38:22 --> Final output sent to browser
DEBUG - 2017-11-15 19:38:22 --> Total execution time: 1.9321
INFO - 2017-11-15 19:38:58 --> Config Class Initialized
INFO - 2017-11-15 19:38:58 --> Hooks Class Initialized
DEBUG - 2017-11-15 19:38:58 --> UTF-8 Support Enabled
INFO - 2017-11-15 19:38:58 --> Utf8 Class Initialized
INFO - 2017-11-15 19:38:58 --> URI Class Initialized
INFO - 2017-11-15 19:38:58 --> Router Class Initialized
INFO - 2017-11-15 19:38:58 --> Output Class Initialized
INFO - 2017-11-15 19:38:58 --> Security Class Initialized
DEBUG - 2017-11-15 19:38:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 19:38:58 --> Input Class Initialized
INFO - 2017-11-15 19:38:58 --> Language Class Initialized
INFO - 2017-11-15 19:38:58 --> Loader Class Initialized
INFO - 2017-11-15 19:38:58 --> Helper loaded: url_helper
INFO - 2017-11-15 19:38:58 --> Database Driver Class Initialized
INFO - 2017-11-15 19:38:59 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 19:38:59 --> Controller Class Initialized
DEBUG - 2017-11-15 19:38:59 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 19:38:59 --> Email Class Initialized
INFO - 2017-11-15 19:38:59 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 19:38:59 --> Helper loaded: cookie_helper
INFO - 2017-11-15 19:39:00 --> Helper loaded: language_helper
DEBUG - 2017-11-15 19:39:00 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 19:39:00 --> Model Class Initialized
INFO - 2017-11-15 19:39:00 --> Helper loaded: date_helper
INFO - 2017-11-15 19:39:00 --> Model Class Initialized
INFO - 2017-11-15 19:39:00 --> Model Class Initialized
INFO - 2017-11-15 19:39:00 --> Model Class Initialized
INFO - 2017-11-15 19:39:00 --> Model Class Initialized
INFO - 2017-11-15 19:39:00 --> Helper loaded: form_helper
INFO - 2017-11-15 19:39:00 --> Form Validation Class Initialized
INFO - 2017-11-15 19:39:00 --> is admin? :
DEBUG - 2017-11-15 19:39:00 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 19:39:00 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 19:39:00 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:39:00 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:39:00 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:39:00 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:39:00 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 19:39:00 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:39:00 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:39:00 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 19:39:00 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:39:00 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:39:00 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:39:00 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 19:39:00 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:39:00 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:39:00 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 19:39:00 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:39:00 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:39:00 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 19:39:00 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:39:00 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:39:00 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 19:39:00 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:39:00 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:39:00 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:39:00 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 19:39:00 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:39:00 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:39:00 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:39:00 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 19:39:00 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:39:00 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:39:00 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 19:39:00 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 19:39:00 --> User Id : 12
INFO - 2017-11-15 19:39:00 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 19:39:00 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 19:39:00 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 19:39:00 --> templates/auth_master_view
INFO - 2017-11-15 19:39:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 19:39:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 19:39:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 19:39:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 19:39:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 19:39:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 19:39:00 --> Final output sent to browser
DEBUG - 2017-11-15 19:39:00 --> Total execution time: 1.9272
INFO - 2017-11-15 19:41:02 --> Config Class Initialized
INFO - 2017-11-15 19:41:02 --> Hooks Class Initialized
DEBUG - 2017-11-15 19:41:02 --> UTF-8 Support Enabled
INFO - 2017-11-15 19:41:02 --> Utf8 Class Initialized
INFO - 2017-11-15 19:41:02 --> URI Class Initialized
INFO - 2017-11-15 19:41:02 --> Router Class Initialized
INFO - 2017-11-15 19:41:02 --> Output Class Initialized
INFO - 2017-11-15 19:41:02 --> Security Class Initialized
DEBUG - 2017-11-15 19:41:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 19:41:02 --> Input Class Initialized
INFO - 2017-11-15 19:41:02 --> Language Class Initialized
INFO - 2017-11-15 19:41:02 --> Loader Class Initialized
INFO - 2017-11-15 19:41:02 --> Helper loaded: url_helper
INFO - 2017-11-15 19:41:02 --> Database Driver Class Initialized
INFO - 2017-11-15 19:41:04 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 19:41:04 --> Controller Class Initialized
DEBUG - 2017-11-15 19:41:04 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 19:41:04 --> Email Class Initialized
INFO - 2017-11-15 19:41:04 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 19:41:04 --> Helper loaded: cookie_helper
INFO - 2017-11-15 19:41:04 --> Helper loaded: language_helper
DEBUG - 2017-11-15 19:41:04 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 19:41:04 --> Model Class Initialized
INFO - 2017-11-15 19:41:04 --> Helper loaded: date_helper
INFO - 2017-11-15 19:41:04 --> Model Class Initialized
INFO - 2017-11-15 19:41:04 --> Model Class Initialized
INFO - 2017-11-15 19:41:04 --> Model Class Initialized
INFO - 2017-11-15 19:41:04 --> Model Class Initialized
INFO - 2017-11-15 19:41:04 --> Helper loaded: form_helper
INFO - 2017-11-15 19:41:04 --> Form Validation Class Initialized
INFO - 2017-11-15 19:41:04 --> is admin? :
DEBUG - 2017-11-15 19:41:04 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 19:41:04 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 19:41:04 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:41:04 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:41:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:41:04 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:41:04 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 19:41:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:41:04 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:41:04 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 19:41:04 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:41:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:41:04 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:41:04 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 19:41:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:41:04 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:41:04 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 19:41:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:41:04 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:41:04 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 19:41:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:41:04 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:41:04 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 19:41:04 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:41:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:41:04 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:41:04 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 19:41:04 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:41:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:41:04 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:41:04 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 19:41:04 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:41:04 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:41:04 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 19:41:04 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 19:41:04 --> User Id : 12
INFO - 2017-11-15 19:41:04 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 19:41:04 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 19:41:04 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 19:41:04 --> templates/auth_master_view
INFO - 2017-11-15 19:41:04 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 19:41:04 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 19:41:04 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 19:41:04 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 19:41:04 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 19:41:04 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 19:41:04 --> Final output sent to browser
DEBUG - 2017-11-15 19:41:04 --> Total execution time: 1.9738
INFO - 2017-11-15 19:41:54 --> Config Class Initialized
INFO - 2017-11-15 19:41:54 --> Hooks Class Initialized
DEBUG - 2017-11-15 19:41:54 --> UTF-8 Support Enabled
INFO - 2017-11-15 19:41:54 --> Utf8 Class Initialized
INFO - 2017-11-15 19:41:54 --> URI Class Initialized
INFO - 2017-11-15 19:41:54 --> Router Class Initialized
INFO - 2017-11-15 19:41:54 --> Output Class Initialized
INFO - 2017-11-15 19:41:54 --> Security Class Initialized
DEBUG - 2017-11-15 19:41:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 19:41:54 --> Input Class Initialized
INFO - 2017-11-15 19:41:54 --> Language Class Initialized
INFO - 2017-11-15 19:41:54 --> Loader Class Initialized
INFO - 2017-11-15 19:41:54 --> Helper loaded: url_helper
INFO - 2017-11-15 19:41:54 --> Database Driver Class Initialized
INFO - 2017-11-15 19:41:55 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 19:41:55 --> Controller Class Initialized
DEBUG - 2017-11-15 19:41:55 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 19:41:55 --> Email Class Initialized
INFO - 2017-11-15 19:41:55 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 19:41:55 --> Helper loaded: cookie_helper
INFO - 2017-11-15 19:41:55 --> Helper loaded: language_helper
DEBUG - 2017-11-15 19:41:55 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 19:41:55 --> Model Class Initialized
INFO - 2017-11-15 19:41:55 --> Helper loaded: date_helper
INFO - 2017-11-15 19:41:55 --> Model Class Initialized
INFO - 2017-11-15 19:41:55 --> Model Class Initialized
INFO - 2017-11-15 19:41:55 --> Model Class Initialized
INFO - 2017-11-15 19:41:55 --> Model Class Initialized
INFO - 2017-11-15 19:41:55 --> Helper loaded: form_helper
INFO - 2017-11-15 19:41:56 --> Form Validation Class Initialized
INFO - 2017-11-15 19:41:56 --> is admin? :
DEBUG - 2017-11-15 19:41:56 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 19:41:56 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 19:41:56 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:41:56 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:41:56 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:41:56 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:41:56 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 19:41:56 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:41:56 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:41:56 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 19:41:56 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:41:56 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:41:56 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:41:56 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 19:41:56 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:41:56 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:41:56 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 19:41:56 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:41:56 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:41:56 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 19:41:56 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:41:56 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:41:56 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 19:41:56 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:41:56 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:41:56 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:41:56 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 19:41:56 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:41:56 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:41:56 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:41:56 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 19:41:56 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:41:56 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:41:56 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 19:41:56 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 19:41:56 --> User Id : 12
INFO - 2017-11-15 19:41:56 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 19:41:56 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 19:41:56 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 19:41:56 --> templates/auth_master_view
INFO - 2017-11-15 19:41:56 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 19:41:56 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 19:41:56 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 19:41:56 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 19:41:56 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 19:41:56 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 19:41:56 --> Final output sent to browser
DEBUG - 2017-11-15 19:41:56 --> Total execution time: 2.0127
INFO - 2017-11-15 19:42:47 --> Config Class Initialized
INFO - 2017-11-15 19:42:47 --> Hooks Class Initialized
DEBUG - 2017-11-15 19:42:47 --> UTF-8 Support Enabled
INFO - 2017-11-15 19:42:47 --> Utf8 Class Initialized
INFO - 2017-11-15 19:42:47 --> URI Class Initialized
INFO - 2017-11-15 19:42:47 --> Router Class Initialized
INFO - 2017-11-15 19:42:47 --> Output Class Initialized
INFO - 2017-11-15 19:42:47 --> Security Class Initialized
DEBUG - 2017-11-15 19:42:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 19:42:47 --> Input Class Initialized
INFO - 2017-11-15 19:42:47 --> Language Class Initialized
INFO - 2017-11-15 19:42:47 --> Loader Class Initialized
INFO - 2017-11-15 19:42:47 --> Helper loaded: url_helper
INFO - 2017-11-15 19:42:47 --> Database Driver Class Initialized
INFO - 2017-11-15 19:42:48 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 19:42:48 --> Controller Class Initialized
DEBUG - 2017-11-15 19:42:48 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 19:42:48 --> Email Class Initialized
INFO - 2017-11-15 19:42:48 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 19:42:48 --> Helper loaded: cookie_helper
INFO - 2017-11-15 19:42:48 --> Helper loaded: language_helper
DEBUG - 2017-11-15 19:42:48 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 19:42:48 --> Model Class Initialized
INFO - 2017-11-15 19:42:48 --> Helper loaded: date_helper
INFO - 2017-11-15 19:42:48 --> Model Class Initialized
INFO - 2017-11-15 19:42:48 --> Model Class Initialized
INFO - 2017-11-15 19:42:48 --> Model Class Initialized
INFO - 2017-11-15 19:42:48 --> Model Class Initialized
INFO - 2017-11-15 19:42:48 --> Helper loaded: form_helper
INFO - 2017-11-15 19:42:48 --> Form Validation Class Initialized
INFO - 2017-11-15 19:42:48 --> is admin? :
DEBUG - 2017-11-15 19:42:48 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 19:42:48 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 19:42:48 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:42:48 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:42:48 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:42:48 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:42:48 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 19:42:48 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:42:48 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:42:48 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 19:42:48 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:42:48 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:42:48 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:42:48 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 19:42:48 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:42:49 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:42:49 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 19:42:49 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:42:49 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:42:49 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 19:42:49 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:42:49 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:42:49 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 19:42:49 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:42:49 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:42:49 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:42:49 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 19:42:49 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:42:49 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:42:49 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:42:49 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 19:42:49 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:42:49 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:42:49 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 19:42:49 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 19:42:49 --> User Id : 12
INFO - 2017-11-15 19:42:49 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 19:42:49 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 19:42:49 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 19:42:49 --> templates/auth_master_view
INFO - 2017-11-15 19:42:49 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 19:42:49 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 19:42:49 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 19:42:49 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 19:42:49 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 19:42:49 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 19:42:49 --> Final output sent to browser
DEBUG - 2017-11-15 19:42:49 --> Total execution time: 1.9702
INFO - 2017-11-15 19:43:24 --> Config Class Initialized
INFO - 2017-11-15 19:43:24 --> Hooks Class Initialized
DEBUG - 2017-11-15 19:43:24 --> UTF-8 Support Enabled
INFO - 2017-11-15 19:43:24 --> Utf8 Class Initialized
INFO - 2017-11-15 19:43:24 --> URI Class Initialized
INFO - 2017-11-15 19:43:24 --> Router Class Initialized
INFO - 2017-11-15 19:43:24 --> Output Class Initialized
INFO - 2017-11-15 19:43:24 --> Security Class Initialized
DEBUG - 2017-11-15 19:43:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 19:43:24 --> Input Class Initialized
INFO - 2017-11-15 19:43:24 --> Language Class Initialized
INFO - 2017-11-15 19:43:24 --> Loader Class Initialized
INFO - 2017-11-15 19:43:24 --> Helper loaded: url_helper
INFO - 2017-11-15 19:43:24 --> Database Driver Class Initialized
INFO - 2017-11-15 19:43:25 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 19:43:25 --> Controller Class Initialized
DEBUG - 2017-11-15 19:43:25 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 19:43:25 --> Email Class Initialized
INFO - 2017-11-15 19:43:25 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 19:43:25 --> Helper loaded: cookie_helper
INFO - 2017-11-15 19:43:25 --> Helper loaded: language_helper
DEBUG - 2017-11-15 19:43:25 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 19:43:25 --> Model Class Initialized
INFO - 2017-11-15 19:43:25 --> Helper loaded: date_helper
INFO - 2017-11-15 19:43:25 --> Model Class Initialized
INFO - 2017-11-15 19:43:25 --> Model Class Initialized
INFO - 2017-11-15 19:43:25 --> Model Class Initialized
INFO - 2017-11-15 19:43:25 --> Model Class Initialized
INFO - 2017-11-15 19:43:25 --> Helper loaded: form_helper
INFO - 2017-11-15 19:43:25 --> Form Validation Class Initialized
INFO - 2017-11-15 19:43:25 --> is admin? :
DEBUG - 2017-11-15 19:43:25 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 19:43:25 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 19:43:25 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:43:25 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:43:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:43:25 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 19:43:25 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 19:43:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:43:25 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 19:43:25 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 19:43:25 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:43:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:43:25 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 19:43:25 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 19:43:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:43:25 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 19:43:25 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 19:43:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:43:25 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 19:43:25 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 19:43:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:43:25 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 19:43:25 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 19:43:25 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:43:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:43:25 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 19:43:25 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 19:43:25 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 19:43:25 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:43:25 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 19:43:25 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 19:43:26 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:43:26 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 19:43:26 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 19:43:26 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 19:43:26 --> User Id : 12
INFO - 2017-11-15 19:43:26 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 19:43:26 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 19:43:26 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 19:43:26 --> templates/auth_master_view
INFO - 2017-11-15 19:43:26 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 19:43:26 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 19:43:26 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 19:43:26 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 19:43:26 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 19:43:26 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 19:43:26 --> Final output sent to browser
DEBUG - 2017-11-15 19:43:26 --> Total execution time: 2.0378
INFO - 2017-11-15 20:18:58 --> Config Class Initialized
INFO - 2017-11-15 20:18:58 --> Hooks Class Initialized
DEBUG - 2017-11-15 20:18:58 --> UTF-8 Support Enabled
INFO - 2017-11-15 20:18:58 --> Utf8 Class Initialized
INFO - 2017-11-15 20:18:58 --> URI Class Initialized
INFO - 2017-11-15 20:18:58 --> Router Class Initialized
INFO - 2017-11-15 20:18:58 --> Output Class Initialized
INFO - 2017-11-15 20:18:58 --> Security Class Initialized
DEBUG - 2017-11-15 20:18:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-11-15 20:18:58 --> Input Class Initialized
INFO - 2017-11-15 20:18:58 --> Language Class Initialized
INFO - 2017-11-15 20:18:58 --> Loader Class Initialized
INFO - 2017-11-15 20:18:58 --> Helper loaded: url_helper
INFO - 2017-11-15 20:18:58 --> Database Driver Class Initialized
INFO - 2017-11-15 20:18:59 --> Session: Class initialized using 'database' driver.
INFO - 2017-11-15 20:18:59 --> Controller Class Initialized
DEBUG - 2017-11-15 20:18:59 --> Config file loaded: D:\Work\Xampp\htdocs\CMS\application\config/ion_auth.php
INFO - 2017-11-15 20:18:59 --> Email Class Initialized
INFO - 2017-11-15 20:18:59 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2017-11-15 20:18:59 --> Helper loaded: cookie_helper
INFO - 2017-11-15 20:18:59 --> Helper loaded: language_helper
DEBUG - 2017-11-15 20:18:59 --> Session class already loaded. Second attempt ignored.
INFO - 2017-11-15 20:18:59 --> Model Class Initialized
INFO - 2017-11-15 20:18:59 --> Helper loaded: date_helper
INFO - 2017-11-15 20:18:59 --> Model Class Initialized
INFO - 2017-11-15 20:18:59 --> Model Class Initialized
INFO - 2017-11-15 20:18:59 --> Model Class Initialized
INFO - 2017-11-15 20:18:59 --> Model Class Initialized
INFO - 2017-11-15 20:18:59 --> Helper loaded: form_helper
INFO - 2017-11-15 20:18:59 --> Form Validation Class Initialized
INFO - 2017-11-15 20:18:59 --> is admin? :
DEBUG - 2017-11-15 20:18:59 --> User Group : Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => members
            [description] => General User
        )

)

DEBUG - 2017-11-15 20:18:59 --> getUsersinstansi: select u.username,p.instansi_name,p.instansi_alias from  users_instansi up , instansi p , users u where u.id=up.users_id and p.instansi_id = up.instansi_id and up.users_id=12
DEBUG - 2017-11-15 20:18:59 --> Query Menu Root :  SELECT menu_order, idMenu, menu_name, menu_link, parent_id FROM menu where parent_id = 0 or parent_id is null  ORDER BY menu_order ASC
DEBUG - 2017-11-15 20:18:59 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=1 ORDER BY menu_order ASC
DEBUG - 2017-11-15 20:18:59 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 20:18:59 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=6 limit 1
DEBUG - 2017-11-15 20:18:59 --> Sub Menu Not Exist For : 6 Data Umum PNS 
DEBUG - 2017-11-15 20:18:59 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 20:18:59 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 limit 1
DEBUG - 2017-11-15 20:18:59 --> Sub Menu Exist For : 4 Referensi 
DEBUG - 2017-11-15 20:18:59 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=4 ORDER BY menu_order ASC
DEBUG - 2017-11-15 20:18:59 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 20:18:59 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=12 limit 1
DEBUG - 2017-11-15 20:18:59 --> Sub Menu Not Exist For : 12 Agama 
DEBUG - 2017-11-15 20:18:59 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 20:18:59 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=13 limit 1
DEBUG - 2017-11-15 20:18:59 --> Sub Menu Not Exist For : 13 Menu 1.1.2 
DEBUG - 2017-11-15 20:18:59 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 20:18:59 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=5 limit 1
DEBUG - 2017-11-15 20:18:59 --> Sub Menu Not Exist For : 5 Menu 1.2 
DEBUG - 2017-11-15 20:18:59 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 20:18:59 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=21 limit 1
DEBUG - 2017-11-15 20:18:59 --> Sub Menu Not Exist For : 21 Kesehatan 
DEBUG - 2017-11-15 20:18:59 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=16 ORDER BY menu_order ASC
DEBUG - 2017-11-15 20:19:00 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 20:19:00 --> Exist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 limit 1
DEBUG - 2017-11-15 20:19:00 --> Sub Menu Exist For : 18 Menu 2.1 
DEBUG - 2017-11-15 20:19:00 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=18 ORDER BY menu_order ASC
DEBUG - 2017-11-15 20:19:00 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 20:19:00 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=20 limit 1
DEBUG - 2017-11-15 20:19:00 --> Sub Menu Not Exist For : 20 Menu 2.1.1 
DEBUG - 2017-11-15 20:19:00 --> CheckSubMenuExist:  SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 20:19:00 --> NotExist SELECT idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=19 limit 1
DEBUG - 2017-11-15 20:19:00 --> Sub Menu Not Exist For : 19 Menu 2.2 
DEBUG - 2017-11-15 20:19:00 --> SubMenu QuerySELECT menu_order,idMenu, menu_name, menu_link, parent_id FROM menu where parent_id=17 ORDER BY menu_order ASC
INFO - 2017-11-15 20:19:00 --> User Id : 12
INFO - 2017-11-15 20:19:00 --> Inside Auth_Controller : auth_master
INFO - 2017-11-15 20:19:00 --> Inside MY_Controller : auth_master
INFO - 2017-11-15 20:19:00 --> inside Else dashboard/profile_pegawai_view
INFO - 2017-11-15 20:19:00 --> templates/auth_master_view
INFO - 2017-11-15 20:19:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\dashboard/profile_pegawai_view.php
INFO - 2017-11-15 20:19:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_header_view.php
INFO - 2017-11-15 20:19:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_topNavBar_view.php
INFO - 2017-11-15 20:19:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_sidebar_view.php
INFO - 2017-11-15 20:19:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/_parts/auth_master_footer_view.php
INFO - 2017-11-15 20:19:00 --> File loaded: D:\Work\Xampp\htdocs\CMS\application\views\templates/auth_master_view.php
INFO - 2017-11-15 20:19:00 --> Final output sent to browser
DEBUG - 2017-11-15 20:19:00 --> Total execution time: 2.0105
