; ----------------
; Generated makefile from http://drushmake.me
; Permanent URL: http://drushmake.me/file.php?token=096fe6ed2285
; ----------------
;
; This is a working makefile - try it! Any line starting with a `;` is a comment.
  
; Core version
; ------------
; Each makefile should begin by declaring the core version of Drupal that all
; projects should be compatible with.
  
core = 7.x
  
; API version
; ------------
; Every makefile needs to declare its Drush Make API version. This version of
; drush make uses API version `2`.
  
api = 2
  
; Core project
; ------------
; In order for your makefile to generate a full Drupal site, you must include
; a core project. This is usually Drupal core, but you can also specify
; alternative core projects like Pressflow. Note that makefiles included with
; install profiles *should not* include a core project.
  
; Drupal 7.x. Requires the `core` property to be set to 7.x.

projects[drupal][version] = 7

; Defaults
; --------

defaults[projects][subdir] = "contrib"
  
; Modules
; --------
; projects[admin_menu][version] = 3
projects[admin_menu][type] = "module"
; projects[module_filter][version] = 2
projects[module_filter][type] = "module"
; projects[ctools][version] = 1.4
projects[ctools][type] = "module"
; projects[date][version] = 2.7
projects[date][type] = "module"
; projects[features][version] = 2
projects[features][type] = "module"
; projects[email][version] = 1.2
projects[email][type] = "module"
; projects[mimemail][version] = 1.0-beta3
projects[mimemail][type] = "module"
; projects[imce][version] = 1.8
projects[imce][type] = "module"
; projects[backup_migrate][version] = 2.8
projects[backup_migrate][type] = "module"
; projects[captcha][version] = 1.0
projects[captcha][type] = "module"
; projects[custom_breadcrumbs][version] = 2.0-alpha3
projects[custom_breadcrumbs][type] = "module"
; projects[elements][version] = 1.4
projects[elements][type] = "module"
; projects[entity][version] = 1.3
projects[entity][type] = "module"
; projects[entityreference][version] = 1.1
projects[entityreference][type] = "module"
; projects[globalredirect][version] = 1.5
projects[globalredirect][type] = "module"
; projects[google_analytics][version] = 1.4
projects[google_analytics][type] = "module"
; projects[html5_tools][version] = 1.2
projects[html5_tools][type] = "module"
; projects[libraries][version] = 2.2
projects[libraries][type] = "module"
; projects[menu_block][version] = 2.3
projects[menu_block][type] = "module"
; projects[modernizr][version] = 3.2
projects[modernizr][type] = "module"
; projects[pathauto][version] = 1.2
projects[pathauto][type] = "module"
; projects[securepages][version] = 1.0-beta2
projects[securepages][type] = "module"
; projects[site_map][version] = 1.2
projects[site_map][type] = "module"
; projects[smtp][version] = 1.0
projects[smtp][type] = "module"
; projects[strongarm][version] = 2.0
projects[strongarm][type] = "module"
; projects[token][version] = 1.5
projects[token][type] = "module"
; projects[rules][version] = 2.6
projects[rules][type] = "module"
; projects[ckeditor][version] = 1.13
projects[ckeditor][type] = "module"
; projects[jquery_update][version] = 2.3
projects[jquery_update][type] = "module"
; projects[views][version] = 3.7
projects[views][type] = "module"
; projects[webform][version] = 3.20
projects[webform][type] = "module"
; projects[xmlsitemap][version] = 2.0-rc2
projects[xmlsitemap][type] = "module"
; projects[fpa][version] = 2.3
projects[fpa][type] = "module"
; projects[twitter][version] = 5.8
projects[twitter][type] = "module"
; projects[oauth][version] = 3.2
projects[oauth][type] = "module"
; projects[linkit][version] = 3.1
projects[linkit][type] = "module"
; projects[imce_crop][version] = 1.1
projects[imce_crop][type] = "module"
; projects[imce_mkdir][version] = 1.0
projects[imce_mkdir][type] = "module"
; projects[title][version] = 1.0-alpha7
projects[title][type] = "module"
; projects[filefield_sources][version] = 1.9
projects[filefield_sources][type] = "module"
; projects[adaptive_image][version] = 1.4
projects[adaptive_image][type] = "module"
; projects[block_class][version] = 2.1
projects[block_class][type] = "module"
; projects[imagecrop][version] = 1.0-rc3
projects[imagecrop][type] = "module"
; projects[shortcutperrole][version] = 1.1
projects[shortcutperrole][type] = "module"
; projects[metatag][version] = 1.0-beta9
projects[metatag][type] = "module"
;projects[redirect][version] = 1.0-rc1
projects[redirect][type] = "module"
;projects[pathologic][version] = 2.12
projects[pathologic][type] = "module"
;projects[workbench][version] = 1.2
projects[workbench][type] = "module"
;projects[workbench_access][version] = 1.2
projects[workbench_access][type] = "module"
;projects[workbench_moderation][version] = 1.2
projects[workbench_moderation][type] = "module"
;projects[edit][version] = 1.0
projects[edit][type] = "module"
; projects[search_api][version] = 1.11
projects[search_api][type] = "module"
; projects[search_api_db][version] = 1.2
projects[search_api_db][type] = "module"
; projects[search_api_page][version] = 1.0
projects[search_api_page][type] = "module"
; projects[storage_api][version] = 1.5
projects[storage_api][type] = "module"
; projects[better_exposed_filters][version] = 3.0-beta4
projects[better_exposed_filters][type] = "module"
; projects[adminimal_admin_menu][version] = 1.5
projects[adminimal_admin_menu][type] = "module"
  

; Themes
; --------
; projects[mothership][version] = 2.10
projects[mothership][type] = "module"
; projects[adminimal_theme][version] = 1.2
projects[adminimal_theme][type] = "module"

  
; Libraries
; ---------
libraries[jquery][type] = "libraries"
libraries[jquery][download][type] = "get"
libraries[jquery][download][url] = "https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"
libraries[backbonejs][type] = "libraries"
libraries[backbonejs][download][type] = "get"
libraries[backbonejs][download][url] = "http://backbonejs.org/backbone.js"
libraries[underscorejs][type] = "libraries"
libraries[underscorejs][download][type] = "get"
libraries[underscorejs][download][url] = "http://underscorejs.org/underscore-min.js"
libraries[ckeditor][type] = "libraries"
libraries[ckeditor][download][type] = "get"
libraries[ckeditor][download][url] = "http://download.cksource.com/CKEditor/CKEditor/CKEditor%203.6.6.1/ckeditor_3.6.6.1.tar.gz"


