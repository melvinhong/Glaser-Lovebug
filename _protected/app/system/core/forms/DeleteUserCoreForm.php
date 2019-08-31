<?php
/**
 * @author         Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright      (c) 2012-2019, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Core / Form
 */

namespace PH7;

defined('PH7') or exit('Restricted access');

use PH7\Framework\Url\Header;

/** For "user" and "affiliate" module **/
class DeleteUserCoreForm
{
    public static function display()
    {
        if (isset($_POST['submit_delete_account'])) {
            if (\PFBC\Form::isValid($_POST['submit_delete_account'])) {
                new DeleteUserCoreFormProcess();
            }

            Header::redirect();
        }

        $oForm = new \PFBC\Form('form_delete_account');
        $oForm->configure(['action' => '']);
        $oForm->addElement(new \PFBC\Element\Hidden('submit_delete_account', 'form_delete_account'));
        $oForm->addElement(new \PFBC\Element\Token('delete_account'));
        $oForm->addElement(new \PFBC\Element\Password(t('Your Password:'), 'password', ['required' => 1]));
        $oForm->addElement(new \PFBC\Element\Textarea(t('Your Reason:'), 'message', ['id' => 'str_reason', 'onblur' => 'CValid(this.value, this.id,5,500)', 'description' => t('Please be specific why you want to leave us.') . '<br />' . t('It will hep us to improve our service and make it the best one for you!'), 'required' => 1, 'validation' => new \PFBC\Validation\Str(5, 500)]));
        $oForm->addElement(new \PFBC\Element\HTMLExternal('<span class="input_error str_reason"></span>'));
        $oForm->addElement(new \PFBC\Element\Radio(t('Why:'), 'why_delete', [t("I'm not happy with the service."), t('I met someone.'), t('Other. I said the reason above.')], ['required' => 1]));
        $oForm->addElement(new \PFBC\Element\CCaptcha(t('Captcha'), 'captcha', ['id' => 'ccaptcha', 'onkeyup' => 'CValid(this.value, this.id)', 'description' => t('Enter the below code:')]));
        $oForm->addElement(new \PFBC\Element\HTMLExternal('<span class="input_error ccaptcha"></span>'));
        $oForm->addElement(new \PFBC\Element\Button);
        $oForm->addElement(new \PFBC\Element\HTMLExternal('<script src="' . PH7_URL_STATIC . PH7_JS . 'validate.js"></script>'));
        $oForm->render();
    }
}
