<?php
/**
 * @author         Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright      (c) 2012-2019, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / Admin / From
 */

namespace PH7;

defined('PH7') or exit('Restricted access');

use PH7\Framework\Url\Header;
use RuntimeException;

class PublicFileForm
{
    public static function display()
    {
        if (isset($_POST['submit_file'])) {
            if (\PFBC\Form::isValid($_POST['submit_file'])) {
                new PublicFileFormProcess;
            }

            Header::redirect();
        }

        try {
            if (!$rData = @file_get_contents(self::getRealPath())) {
                \PFBC\Form::clearErrors('form_file'); // First, remove the previous error message (if existing) to avoid duplicate error messages
                \PFBC\Form::setError('form_file', t('The following requested file was not found: %0%', escape(PH7_PATH_ROOT . $_GET['file'])));
            }

            $oForm = new \PFBC\Form('form_file');
            $oForm->configure(['action' => '']);
            $oForm->addElement(new \PFBC\Element\Hidden('submit_file', 'form_file'));
            $oForm->addElement(new \PFBC\Element\Token('file'));
            $oForm->addElement(new \PFBC\Element\Textarea(t('File Contents'), 'content', ['value' => $rData, 'style' => 'height:50rem', 'required' => 1]));
            $oForm->addElement(new \PFBC\Element\Button(t('Save')));
            $oForm->render();
        } catch (RuntimeException $oExcept) {
            echo '<p class="col-md-6 col-md-offset-4 red">' . $oExcept->getMessage() . '</p>';
        }
    }

    /**
     * Get the full file path and prevent path traversal and null byte attacks.
     *
     * @return bool|string The canonicalized absolute path, or FALSE on failure.
     */
    private static function getRealPath()
    {
        $sFullPath = PH7_PATH_ROOT . $_GET['file'];
        $mRealPublicPath = realpath(PH7_PATH_ROOT);
        $mRealFullPath = realpath($sFullPath);

        if ($mRealFullPath === false || strpos($mRealFullPath, $mRealPublicPath) !== 0) {
            throw new RuntimeException(
                t('Invalid specified path, not authorized by the system!')
            );
        }

        return $mRealFullPath;
    }
}
