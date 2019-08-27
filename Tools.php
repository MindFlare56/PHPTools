<?php

class Tools
{
    public static $DATE_TIME = "Y-m-d H:i:s";
    public static $DATE = "Y-m-d";
    public static $TIME = "H:i:s";
    public static $secondMilliseconds = 1000;
    public static $minuteMilliseconds = 60000;
    public static $hourMilliseconds = 3.6e+6;
    public static $dayMilliseconds = 8.64e+7;
    public static $weekMilliseconds = 6.048e+8;
    public static $monthMilliseconds = 2.628e+9;
    public static $yearMilliseconds = 3.154e+10;

    public static function alert($message)
    {
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    public static function redirect(string $url)
    {
        header("Location: $url");
        exit;
    }

    public static function br($repeat) {
        if ($repeat > 0) {
            for ($i = 0; $i < $repeat; ++$i) {
                echo "<br/>";
            }
        }
    }

    public static function now($format)
    {
        return date($format);
    }

    public static function next_day()
    {
        $datetime = null;
        try {
            $datetime = new DateTime(Tools::now(Tools::$DATE));
        } catch (Exception $e) {
        }
        $datetime->modify('+1 day');
        return $datetime->format(Tools::$DATE);
    }

    public static function next_day_time()
    {
        $datetime = null;
        try {
            $datetime = new DateTime(Tools::now(Tools::$DATE));
        } catch (Exception $e) {
        }
        $datetime->modify('+1 day');
        return $datetime->getTimestamp();
    }

    public static function next_month_time()
    {
        $datetime = null;
        try {
            $datetime = new DateTime(Tools::now(Tools::$DATE));
        } catch (Exception $e) {
        }
        $datetime->modify('+1 month');
        return $datetime->getTimestamp();
    }

    public static function next_year_time()
    {
        $datetime = null;
        try {
            $datetime = new DateTime(Tools::now(Tools::$DATE));
        } catch (Exception $e) {
        }
        $datetime->modify('+1 year');
        return $datetime->getTimestamp();
    }

    public static function echo(string $string, int $int = 1)
    {
        echo $string;
        self::br($int);
    }
}