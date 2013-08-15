<?PHP
// manifest file for information regarding application of new code
$manifest = array(
  // only install on the following regex sugar versions (if empty, no check)
  'acceptable_sugar_flavors' => array(
          0 => 'CE',
          1 => 'PRO',
          2 => 'ENT',
          3 => 'DEV'
        ),
  'acceptable_sugar_versions' => array(
          'exact_matches' => array(),
    'regex_matches' => array(
            '6|(5\.[1-9])'
          ),
  ),
 // name of new code
  'name' => 'PDF for Sugar Module',

  // description of new code
  'description' => 'Plugin for SugarCRM Studio for population of PDF forms.',

  // author of new code
  'author' => 'David Conorozzo<dave.conorozzo@formrouter.com>',

  // date published
  'published_date' => '2009-10-31',

  // unistallable
  'is_uninstallable' => true,

  // version of code
  'version' => '1.1',

  // type of code (valid choices are: full, langpack, module, patch, theme )
  'type' => 'module',

  // icon for displaying in UI (path to graphic contained within zip package)
  'icon' => ''
);

$installdefs = array(
 'id'       => 'formRouterPDFButton',
 'mkdirs'   => array('include/SugarFields/Fields/FRPDFButton'),
 'copy'     => array(
                array('from'    => '<basepath>/include/SugarFields/Fields/FRPDFButton',
                      'to'      => 'include/SugarFields/Fields/FRPDFButton',
                ),
                array('from'    => '<basepath>/modules/DynamicFields/templates/Fields/Forms/FRPDFButton.tpl',
                      'to'      => 'modules/DynamicFields/templates/Fields/Forms/FRPDFButton.tpl',
                ),
                array('from'    => '<basepath>/modules/DynamicFields/templates/Fields/Forms/FRPDFButton.php',
                      'to'      => 'modules/DynamicFields/templates/Fields/Forms/FRPDFButton.php',
                ),
                array('from'    => '<basepath>/modules/DynamicFields/templates/Fields/Forms/FRPDFButton.tpl',
                      'to'      => 'modules/DynamicFields/templates/Fields/FormsFRPDFButton.tpl',
                ),
                array('from'    => '<basepath>/modules/DynamicFields/templates/Fields/Forms/FRPDFButton.php',
                      'to'      => 'modules/DynamicFields/templates/Fields/FormsFRPDFButton.php',
                ),
                array('from'    => '<basepath>/modules/DynamicFields/templates/Fields/TemplateFRPDFButton.php',
                      'to'      => 'modules/DynamicFields/templates/Fields/TemplateFRPDFButton.php',
                ),
               ),

  'language'=> array(
                array('from'     => '<basepath>/application/app_strings_en_us.php',
                      'to_module'=> 'application',
                      'language' => 'en_us'
                     ),
                array('from'     => '<basepath>/application/mod_strings_en_us.php',
                      'to_module'=> 'ModuleBuilder',
                      'language' => 'en_us'
                     ),
    )
 );

if (!preg_match('/^6|(5\.(?>[2-9]|1\.0[a-z]))/', $GLOBALS['sugar_version']))
    $installdefs['copy'][] =
                   array('from'    => '<basepath>/modules/ModuleBuilder/views/view.modulefield.php',
                      'to'      => 'modules/ModuleBuilder/views/view.modulefield.php',
                );
