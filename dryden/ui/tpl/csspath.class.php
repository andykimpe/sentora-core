<?php

/**
 * Generic template place holder class.
 * @package zpanelx
 * @subpackage dryden -> ui -> tpl
 * @version 1.0.0
 * @author Bobby Allen (ballen@zpanelcp.com)
 * @copyright ZPanel Project (http://www.zpanelcp.com/)
 * @link http://www.zpanelcp.com/
 * @license GPL (http://www.gnu.org/licenses/gpl.html)
 */
class ui_tpl_csspath {

    public function Template() {
        $user = ctrl_users::GetUserDetail();
        if (!fs_director::CheckForEmptyValue(fs_director::CheckForEmptyValue($user['usercss']))) {
            $retval = "etc/styles/" . ui_template::GetUserTemplate() . "/css/default.css";
        } else {
            $retval = "etc/styles/" . ui_template::GetUserTemplate() . "/css/" . $user['usercss'] . ".css";
        }
        return $retval;
    }

}

?>
