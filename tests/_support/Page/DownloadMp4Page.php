<?php
namespace Page;

class DownloadMp4Page extends AbstractFolderPage
{
    // include url of current page
    public static $URL = '/download-mp4/{folder}';

    /**
     * @var string
     */
    public static $Title = 'Katcher - Download .mp4';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }
}
