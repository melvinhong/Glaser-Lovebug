<?php
/**
 * This file has been made by pH7 (Pierre-Henry SORIA).
 */

namespace PFBC\Validation;

use PH7\Framework\Layout\Form\Form as FormMessage;
use PH7\Framework\Security\CSRF\Token as SecurityToken;

class Token extends \PFBC\Validation
{
    /** @var string */
    private $sName;

    /**
     * @param string $sName
     */
    public function __construct($sName)
    {
        $this->message = FormMessage::errorTokenMsg();
        $this->sName = $sName;
    }

    /**
     * @return bool Returns TRUE if the token is validated, FALSE otherwise.
     */
    public function isValid($sValue)
    {
        return (new SecurityToken)->check($this->sName, $sValue);
    }
}
