<?php

namespace csvConverter;

use Composer\Script\Event;
use League\Csv\Reader;

class csvConverter
{

    /**
     * @param Event $event
     * @return string
     */
    public static function run(Event $event)
    {
        $args = $event->getArguments();

        $csvPath  = isset($args[0]) ? $args[0] : null;
        $exportTo = isset($args[1]) ? $args[1] : null;
        $template = isset($args[2]) ? $args[2] : 'macpass.html';

        if (is_null($csvPath) || is_null($exportTo)) {
            echo "usage: composer csvConvert -- cvsPath exportTo [template]" . PHP_EOL;
            return 1;
        }

        self::convert($csvPath, $exportTo, $template);

    }

    /**
     * converter
     * @param $csvPath
     * @param $exportTo
     * @param string $template_filename
     */
    public static function convert($csvPath, $exportTo, $template_filename = 'macpass.html')
    {

        $csv      = Reader::createFromPath($csvPath);
        $template = new template();
        $header   = $csv->fetchOne();
        $array    = [];
        $all      = $csv->fetchAssoc(); //fetch with headers

        foreach ($all as $item) {
            $array[] = $all = array_map(function ($key, $value) {
                return ['name' => $key, 'value' => $value];
            }, array_keys($item), $item);
        }

        $rendered = $template->render($template_filename, $array);

        //write to file
        file_put_contents($exportTo, $rendered, LOCK_EX);

    }

}