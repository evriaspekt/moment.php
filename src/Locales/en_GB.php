<?php

// locale: great britain english (en-gb)
// author: Chris Gedrim https://github.com/chrisgedrim

return [
    "months" => [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ],
    "monthsNominative" => [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ],
    "monthsShort"   => ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    "weekdays"      => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
    "weekdaysShort" => ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
    "calendar"      => [
        "sameDay"  => '[Today]',
        "nextDay"  => '[Tomorrow]',
        "lastDay"  => '[Yesterday]',
        "lastWeek" => '[Last] l',
        "sameElse" => 'l',
        "withTime" => '[at] H:i',
        "default"  => 'd/m/Y',
    ],
    "relativeTime"  => [
        "future" => 'in %s',
        "past"   => '%s ago',
        "s"      => 'a few seconds',
        "ss"      => '%d seconds',
        "m"      => 'a minute',
        "mm"     => '%d minutes',
        "h"      => 'an hour',
        "hh"     => '%d hours',
        "d"      => 'a day',
        "dd"     => '%d days',
        "M"      => 'a month',
        "MM"     => '%d months',
        "y"      => 'a year',
        "yy"     => '%d years',
    ],
    "ordinal"       => function ($number)
    {
        $n = $number % 100;
        $ends = ['th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th'];

        if ($n >= 11 && $n <= 13)
        {
            return $number . '[th]';
        }

        return $number . '[' . $ends[$number % 10] . ']';
    },
    "week"          => [
        "dow" => 1, // Monday is the first day of the week.
        "doy" => 4, // The week that contains Jan 4th is the first week of the year.
    ],
    "customFormats" => [
        "LT" => "G:i",               // 22:00
        "LTS" => "G:i:s",            // 22:00:00
        "L" => "d/m/Y",              // 12/06/2010
        "l" => "j/n/Y",              // 12/6/2010
        "LL" => "j F Y",             // 12 June 2010
        "ll" => "j M Y",             // 12 Jun 2010
        "LLL" => "j F Y G:i",        // 12 June 2010 22:00
        "lll" => "j M Y G:i",        // 12 Jun 2010 22:00
        "LLLL" => "l, j F F Y G:i",  // Saturday, 12 June June 2010 22:00
        "llll" => "D, j M Y G:i",    // Sat, 12 Jun 2010 22:00
    ],
];
