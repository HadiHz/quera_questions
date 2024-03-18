<?php

namespace Core;

class Logger
{
    private string $filepath;

    public function __construct(string $filepath)
    {
        $this->filepath = $filepath;
    }

    public function writeLog(string $log): void
    {
        $myfile = fopen("../". $this->filepath, "a") or die("Unable to open file!");
        $txt = "{$log}\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    }

    public function getLog(): string
    {
        $myfile = fopen("../". $this->filepath, "r") or die("Unable to open file!");
        $txt = fread($myfile, filesize("../". $this->filepath));
        fclose($myfile);
        return $txt;
    }
}