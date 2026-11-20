# Overview

A simple **weather app** built to learn PHP fundamentals for Laravel. The app uses the WeatherAPI to fetch weather data and display it in the console.

This app was built by following the official Laravel PHP fundamentals course:
https://laravel.com/learn/php-fundamentals/modern-php

What I did differently from the course was to use the WeatherAPI instead of the OpenWeather API, and to display ASCII art in the console.

# Sample
Input: 
`php weather.php Manila` <br>
Output:
```
Getting weather for Manila... 

City: Manila
Region: Manila
Country: Philippines
Timezone: Asia/Manila
Local time: 2026-11-20 19:39

Temperature: 27.5°C 
Condition: Patchy rain nearby
      __   _
    _(  )_( )_
   (_   _    _)
  / /(_) (__)
 / / / / / /
/ / / / / / 
Humidity: 75% 
Chance of rain: 16% 
```

Input: 
`php weather.php Kyoto` <br>
Output:
```
Getting weather for Kyoto... 

City: Kyoto
Region: Kyoto
Country: Japan
Timezone: Asia/Tokyo
Local time: 2026-11-20 20:39

Temperature: 5.5°C 
Condition: Clear
           '
          .      '      .
    .      .     :     .      .
     '.        ______       .'
       '  _.-"`      `"-._ '
        .'                '.
 `'--. /                    \ .--'`
      /                      \
     ;                        ;
- -- |                        | -- -
     |     _.                 |
     ;    /__`A   ,_          ;
 .-'  \   |= |;._.}{__       /  '-.
    _.-""-|.' # '. `  `.-"{}<._
          / 1938  \     \  x   `"
     ----/         \_.-'|--X----
     -=_ |         |    |- X.  =_
    - __ |_________|_.-'|_X-X##
    jgs `'-._|_|;:;_.-'` '::.  `"-
     .:;.      .:.   ::.     '::.
 
Humidity: 57% 
Chance of rain: 3% 
```

Input: 
`php weather.php Auckland` <br>
Output:
```
Getting weather for Auckland... 

City: Auckland
Region: 
Country: New Zealand
Timezone: Pacific/Auckland
Local time: 2026-11-21 00:37

Temperature: 12.6°C 
Condition: Partly Cloudy
              .
               
              |
     .               /
      \       I     
                  /
        \  ,g88R_
          d888(`  ).                   _
 -  --==  888(     ).=--           .+(`  )`.
)         Y8P(       '`.          :(   .    )
        .+(`(      .   )     .--  `.  (    ) )
       ((    (..__.:'-'   .=(   )   ` _`  ) )
`.     `(       ) )       (   .  )     (   )  ._
  )      ` __.:'   )     (   (   ))     `-'.:(`  )
)  )  ( )       --'       `- __.'         :(      ))
.-'  (_.'          .')                    `(    )  ))
                  (_  )                     ` __.:'
                                        
--..,___.--,--'`,---..-.--+--.,,-,,..._.--..-._.-a:f--.
 
Humidity: 85% 
Chance of rain: 15% 
```

Input: 
`php weather.php Yakutsk` <br>
Output:
```
Getting weather for Yakutsk... 

City: Yakutsk
Region: Sakha
Country: Russia
Timezone: Asia/Yakutsk
Local time: 2026-11-20 20:40

Temperature: -26.1°C 
Condition: Moderate snow
                   o       \
      o                     `.   o
 o            o            o  \                      `
-. .-.-. .---. .-.,-.,-. ..-. /
  )| |  `'____\' o _____\||  `
  `' |  |-._--.|  |----.| |        o
     |o ||-.| ||,-.    || |   o
o    |  ||_|| |/ oo\   || |
     |  || || C   ._)o || | o
    o|  || ||o|\`-/    || |      ,. o
     |  ||_|| ,'\,\    || |   _\('')
     |  ||o||/\ \ .:  o|| |    (;  .)
     |  || |(  \_\||___|| | _,.(|___)-.
     | o||_|||`-`,\)----' |   o
   o |  |   ||..|.|  o _  |-.       _.-.
 `.-.|._|_.-:|__|_|-.-' `-'.__    o
          o   '--`-`    o        -  
 
Humidity: 85% 
Chance of rain: 42% 
```
-------------------------------------------------------------------
ASCII artists:
- Joan G. Stark (Spunk)
- Andreas Freise
- Sebastian Stoecker

https://www.asciiart.eu/

</br>

API powered by <a href="https://www.weatherapi.com/" title="Free Weather API">WeatherAPI.com</a>
