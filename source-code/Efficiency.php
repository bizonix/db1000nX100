<?php

class Efficiency
{
    private static $valuesArray,
                   $valuesReceivedFromAllConnections;

    public static function constructStatic()
    {
        static::clear();
        Actions::addAction('BeforeTerminateSession',       [static::class, 'clear']);
        Actions::addAction('AfterMainOutputLoopIteration', [static::class, 'actionAfterMainOutputLoopIteration']);
    }

    public static function clear()
    {
        static::$valuesArray = [];
        static::$valuesReceivedFromAllConnections = false;
    }

    public static function actionAfterMainOutputLoopIteration()
    {
        static::$valuesReceivedFromAllConnections = true;
    }

    public static function wereValuesReceivedFromAllConnection()
    {
        return static::$valuesReceivedFromAllConnections;
    }

    public static function addValue($connectionIndex, $value)
    {
        if ($value) {
            static::$valuesArray[$connectionIndex] = $value;
        } else if (isset(static::$valuesArray[$connectionIndex])) {
            unset(static::$valuesArray[$connectionIndex]);
        }
    }

    /*public static function getMessage()
    {
        global $VPN_CONNECTIONS;
        foreach (array_keys(static::$valuesArray) as $connectionIndex) {
            if (! isset($VPN_CONNECTIONS[$connectionIndex])) {
                unset(static::$valuesArray[$connectionIndex]);
            }
        }

        $totalRate = roundLarge(array_sum(static::$valuesArray));
        $viaCount  = count(static::$valuesArray);

        if ($totalRate  &&  static::$valuesReceivedFromAllConnections) {
            return "Summary response rate $totalRate% ⃰ via $viaCount VPN connection(s)  (* in compare to single VPN connection with 100% response rate)";
        }
    }*/
}

Efficiency::constructStatic();