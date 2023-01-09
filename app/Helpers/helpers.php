<?php

use Carbon\Carbon;
use Illuminate\Support\Str;

if (! function_exists('get_month_num')) {
    /**
     * Returns no zero trailing month like 1 2 3 not 01 02
     * @param string $month
     * @return string
     */
    function get_month_num(string $month = 'january'): string
    {
        return date("n",strtotime($month));
    }
}

if (! function_exists('convertToStringDateCarbonDate')) {
    /**
     * Converts dates format like this to carbon "2000-january-1"
     *
     * @param int $year
     * @param string $month
     * @param int $day
     * @return Carbon
     */
    function convertToStringDateCarbonDate(string $year, string $month, string $day): Carbon
    {
        $get_month_num = get_month_num($month);
        $y = convertStringToInt($year) == 0 ? 1800 : convertStringToInt($year);
        $d = convertStringToInt($day) == 0 ? 1: convertStringToInt($day);
        return  Carbon::createFromFormat(  "Y-n-j",  "$y-$get_month_num-$d");
    }
}

if (! function_exists('convertStringToInt')) {
    /**
     * Returns no zero trailing month like 1 2 3 not 01 02
     * @param string $value
     * @return int
     */
    function convertStringToInt(string $val=''): int
    {
        return intval($val);
    }
}

if (! function_exists('convertDateFormatMYD')) {
    /**
     * Converts dates format like this to carbon "2000-10-15"
     *
     * @param string date 
     * @return string
     */
    function convertDateFormatMYD(string $date): string
    {
       
        return  Carbon::parse($date)->format('M d, Y');
    }
}

if (! function_exists('convertDateFormatMY')) {
    /**
     * Converts dates format like this to carbon "2000-10-15"
     *
     * @param string date 
     * @return string
     */
    function convertDateFormatMY(string $date): string
    {
       
        return  Carbon::parse($date)->format('M d');
    }
}

if (! function_exists('generateS3FileUrl')) {
    function generateS3FileUrl(string $relPath): string
    {
       
        return  env('AWS_URL').$relPath;
    }
}

if (! function_exists('getFileExtFromFileName')) {
    function getFileExtFromFileName(string $filename): string
    {
       
        $n = strrpos($filename, '.');
        return ($n === false) ? '' : strtoupper(substr($filename, $n+1));
    }
}

if (! function_exists('getFirstLetterOfEachWord')) {
    function getFirstLetterOfEachWord(string $stringData=''): string
    {
        $words = explode(" ", $stringData);
        $acronym = "";
        foreach ($words as $w) {
            $acronym .= mb_substr($w, 0, 1);
        }
        return $acronym;
    }
}

if (! function_exists('convertDateForFrontend')) {
    /**
     * Converts dates format like this to carbon "2000-10-15"
     *
     * @param string date 
     * @return array
     */
    function convertDateForFrontend(string $date): array
    {
        $formatedDate =  Carbon::parse($date)->format('Y-F-d');
        // Convert the period to an array of dates
        $dates = explode('-',$formatedDate);
        return ['dobY' =>$dates[0],'dobM' =>$dates[1],'dobD' =>$dates[2]];
    }
}


if (! function_exists('textTruncate')) {
    /**
     * Converts dates format like this to carbon "2000-10-15"
     *
     * @param string date 
     * @return array
     */
    function textTruncate(string $dateString, int $length=10): string
    {
        return Str::limit($dateString, $length, ' ...');
    }
}


if (! function_exists('message')) {
    /**
     * converts a message to array with message name
     * @param string|null $data
     * @return array
     */
    #[ArrayShape(["message" => "null|string"])] function message(?string $data = null): array
    {
        return array("message"=>$data);
    }
}

if (! function_exists('isAppInDebugMode')) {
    /**
     * Check if application is in Debug Mode
     * @return bool
     */
    function isAppInDebugMode()
    {
        return (bool) env('APP_DEBUG', false);
    }
}

