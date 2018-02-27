<?php

namespace EgVendor;

class EgPlugin extends \Swef\Bespoke\Plugin {


/*
    PROPERTIES
*/



/*
    EVENT HANDLER SECTION
*/

    public function __construct ($page) {
        // Always construct the base class - PHP does not do this implicitly
        parent::__construct ($page,'\EgVendor\EgPlugin');
    }

    public function __destruct ( ) {
        // Always destruct the base class - PHP does not do this implicitly
        parent::__destruct ( );
    }

    public function _on_pluginsSetAfter ( ) {
    }

    public function _on_pushBefore ( ) {
        return SWEF_BOOL_TRUE;
    }

    public function _on_headersBefore ( ) {
        return SWEF_BOOL_TRUE;
    }

    public function _on_pageScriptBefore ( ) {
        return SWEF_BOOL_TRUE;
    }

    public function _on_pageTemplateBefore ( ) {
        return SWEF_BOOL_TRUE;
    }

    public function _on_pullBefore ( ) {
        return SWEF_BOOL_TRUE;
    }

    public function _on_endpointScriptBefore ( ) {
        return SWEF_BOOL_TRUE;
    }

    public function _on_endpointTemplateBefore ( ) {
        return SWEF_BOOL_TRUE;
    }

    public function _on_pullAfter ( ) {
    }

    public function _on_flushBefore ( ) {
        return SWEF_BOOL_TRUE;
    }

    public function _on_flushAfter ( ) {
    }

    public function _on_pushAfter ( ) {
    }

    public function _on_diagnosticAfter ( ) {
    }



/*
    DASHBOARD SECTION
*/


    public function _dashboard ( ) {
        require_once egvendor_egplugin_file_dash;
    }

    public function _info ( ) {
        $info   = __FILE__.SWEF_STR__CRLF;
        $info  .= print_r ($this->config,SWEF_BOOL_TRUE);
        return $info;
    }


}

?>
