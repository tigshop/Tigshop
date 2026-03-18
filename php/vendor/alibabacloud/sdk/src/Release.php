<?php

namespace AlibabaCloud;

use Composer\Script\Event;

/**
 * Class Release
 *
 * @codeCoverageIgnore
 * @package AlibabaCloud\Client
 */
class Release
{

    /**
     * Version of the SDK
     */
    const VERSION = '1.8.2198';

    /**
     * @param Event $event
     */
    public static function release(Event $event)
    {
        $arguments = $event->getArguments();
        if (count($arguments) <= 1) {
            die('Missing ChangeLog');
        }
        self::updateChangelogFile($arguments[0], $arguments[1]);
        self::changeVersionInCode($arguments[0]);
    }

    /**
     * @param $version
     * @param $changeLog
     */
    private static function updateChangelogFile($version, $changeLog)
    {
        $content = preg_replace(
            '/# CHANGELOG/',
            '# CHANGELOG'
            . "\n"
            . "\n"
            . "## $version - " . date('Y-m-d')
            . self::log($changeLog),
            self::getChangeLogContent()
        );

        file_put_contents(self::getChangeLogFile(), $content);
    }

    /**
     * @param $changeLog
     *
     * @return string
     */
    private static function log($changeLog)
    {
        $logs   = explode('|', $changeLog);
        $string = "\n";
        foreach ($logs as $log) {
            if ($log) {
                $string .= "- $log." . "\n";
            }
        }

        return $string;
    }

    /**
     * @return string
     */
    private static function getChangeLogContent()
    {
        return file_get_contents(self::getChangeLogFile());
    }

    /**
     * @return string
     */
    private static function getChangeLogFile()
    {
        return __DIR__ . '/../CHANGELOG.md';
    }

    /**
     * @param $version
     */
    private static function changeVersionInCode($version)
    {
        $symbol  = "'";
        $content = preg_replace(
            "/const VERSION = \'(.*)\';/",
            "const VERSION = $symbol$version$symbol;",
            self::getCodeContent()
        );
        file_put_contents(self::getCodeFile(), $content);
    }

    /**
     * @return string
     */
    private static function getCodeContent()
    {
        return file_get_contents(self::getCodeFile());
    }

    /**
     * @return string
     */
    private static function getCodeFile()
    {
        return __DIR__ . '/Release.php';
    }
}
