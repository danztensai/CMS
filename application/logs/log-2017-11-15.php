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
