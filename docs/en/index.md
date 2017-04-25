Usage
-----

```php
    use \Galek\Utils\Calendar;

    $date = new Calendar();

    if($date->isWorkday()){
        echo "Today is workday :/";
    }

    if($date->isHoliday()){
        echo "Today is holiday :)";
    }

// Easter
    echo "Easter of this year is: ".$date->getEaster();
    echo "Easter of 2020 year is: ".$date->getEaster(2020);
    echo "Easter Monday of this year is: ".$date->getEasterMonday();
    echo "Easter Big Friday of this year is: ".$date->getBigFriday();

    echo "Today or next workday:".$date->getWorkday()->format('d.m.Y');
    echo "Next workday:".$date->getWorkday(true)->format('d.m.Y');

// Something for e-shops ;)
    echo "Date for shipping:".$date->getShippingTime()->format('d.m.Y');

    echo "Date for shipping to some Hour and minute:".$date->getShippingTime(14,20)->format('d.m.Y');
    /**
    * $date->getShippingTime(14,20)
    * Friday 9:30 < 14:20 = Monday
    * Friday 14:30 > 14:20 = Wednesday (Monday send)
    * etc...
    **/
```

Example #1
```php
    use \Galek\Utils\Calendar;

    $date = new Calendar();
    
    //              Hour, Minute
    $date->timeBellow(14, 20); // check if time is bellow or equal 
    
    //            Hour, Minute
    $date->timeOver(15, 30); // check if time is over or equal 
    
    //           Hour, Minute, Hour, Minute
    $date->timeBetween(14, 20, 15, 30); // check if time is between (or equal) 
```

Example #2
```php
    use \Galek\Utils\Calendar;

    $date = new Calendar();
    
    //         Hour, Minute, Hour, Minute
    $date->setWorkTime(8, 0, 16, 30); // set work time
    
    if ($date->isWorkTime() { // Check if is work time
        // your code ...
    }
```