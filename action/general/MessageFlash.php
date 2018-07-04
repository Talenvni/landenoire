<?php namespace action\general;

class MessageFlash
{
    /**
     * @return string Request HTML flash before destroy $_SESSION
     */
    public static function getFlash()
    {
        $_SESSION['type']  = $_SESSION['type'] ?? null;
        $_SESSION['flash'] = $_SESSION['flash'] ?? null;

        if (is_null($_SESSION['flash']) && is_null($_SESSION['type'])) :
            return null;
        endif;

	    return self::blockFlash() . self::destroyFlash();
    }

    /**
     * Set the message flash
     *
     * @param string $type
     * @param string $message
     */
    public static function setFlash(string $type, string $message)
    {
        $_SESSION['type']  = $type;
        $_SESSION['flash'] = $message;
    }

    /**
     * Destroy $_SESSION in order to prevent showing again
     */
    private static function destroyFlash()
    {
        unset($_SESSION['type'], $_SESSION['flash']);
    }

    /**
     * @return string Set the HTML flash
     */
    private static function blockFlash()
    {
        return '<span class="text-' . $_SESSION['type'] . '">' . $_SESSION['flash'] . '</span>';
    }
}
