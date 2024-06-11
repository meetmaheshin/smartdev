<?php

use Illuminate\Support\Facades\Http;
use App\Models\Conservation;
use App\Models\Message;

// 3 seconda ago, 1 day ago
function TimeChange($time_ago)
{
    $time = strtotime($time_ago);
    // Calculate difference between current
    // time and given timestamp in seconds
    $diff     = time() - $time;
    // Time difference in seconds
    $sec     = $diff;

    // Convert time difference in minutes
    $min     = round($diff / 60);

    // Convert time difference in hours
    $hrs     = round($diff / 3600);

    // Convert time difference in days
    $days     = round($diff / 86400);

    // Convert time difference in weeks
    $weeks     = round($diff / 604800);

    // Convert time difference in months
    $mnths     = round($diff / 2600640);

    // Convert time difference in years
    $yrs     = round($diff / 31207680);

    // Check for seconds
    if ($sec <= 60) {
        return "$sec seconds ago";
    }

    // Check for minutes
    else if ($min <= 60) {
        if ($min == 1) {
            return "1 minute ago";
        } else {
            return "$min minutes ago";
        }
    }
    // Check for hours

    else if ($hrs <= 60) {
        if ($hrs == 1) {
            return "1 hours ago";
        } else {
            return "$hrs hours ago";
        }
    }
    // Check for days
    else if ($days <= 7) {
        if ($days == 1) {
            return "Yesterday";
        } else {
            return "$days days ago";
        }
    }

    // Check for weeks
    else if ($weeks <= 4.3) {
        if ($weeks == 1) {
            return "a week ago";
        } else {
            return "$weeks weeks ago";
        }
    }

    // Check for months
    else if ($mnths <= 12) {
        if ($mnths == 1) {
            return "a month ago";
        } else {
            return "$mnths months ago";
        }
    }

    // Check for years
    else {
        if ($yrs == 1) {
            return "one year ago";
        } else {
            return "$yrs years ago";
        }
    }
}

// date show
function DateChange($time)
{
    $timestamp = strtotime($time);
    $day = date('M', $timestamp);
    $weekDays = date('l', $timestamp);
    $date = date('d', $timestamp);
    return $weekDays . ', ' . $day . ' ' . $date;
}

// date show year wise
function DateYearChange($time)
{
    $timestamp = strtotime($time);
    $day = date('M', $timestamp);
    $year = date('Y', $timestamp);
    $date = date('d', $timestamp);
    return $day . ' ' . $date . ', ' . $year;
}

// greet the user based on time
function Greet()
{
    $dat = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
    $date = $dat->format('H');
    if ($date < 12)
        $greet =  "Good Morning";
    else if ($date < 17)
        $greet =  "Good Afternoon";
    else if ($date < 20)
        $greet =  "Good Evening";
    else
        $greet =  "Good Night";

    return $greet;
}

// timezone array
function Timezone()
{
    return $timezones = array(
        'Pacific/Midway'       => "(GMT-11:00) Midway Island",
        'US/Samoa'             => "(GMT-11:00) Samoa",
        'US/Hawaii'            => "(GMT-10:00) Hawaii",
        'US/Alaska'            => "(GMT-09:00) Alaska",
        'US/Pacific'           => "(GMT-08:00) Pacific Time (US &amp; Canada)",
        'America/Tijuana'      => "(GMT-08:00) Tijuana",
        'US/Arizona'           => "(GMT-07:00) Arizona",
        'US/Mountain'          => "(GMT-07:00) Mountain Time (US &amp; Canada)",
        'America/Chihuahua'    => "(GMT-07:00) Chihuahua",
        'America/Mazatlan'     => "(GMT-07:00) Mazatlan",
        'America/Mexico_City'  => "(GMT-06:00) Mexico City",
        'America/Monterrey'    => "(GMT-06:00) Monterrey",
        'Canada/Saskatchewan'  => "(GMT-06:00) Saskatchewan",
        'US/Central'           => "(GMT-06:00) Central Time (US &amp; Canada)",
        'US/Eastern'           => "(GMT-05:00) Eastern Time (US &amp; Canada)",
        'US/East-Indiana'      => "(GMT-05:00) Indiana (East)",
        'America/Bogota'       => "(GMT-05:00) Bogota",
        'America/Lima'         => "(GMT-05:00) Lima",
        'America/Caracas'      => "(GMT-04:30) Caracas",
        'Canada/Atlantic'      => "(GMT-04:00) Atlantic Time (Canada)",
        'America/La_Paz'       => "(GMT-04:00) La Paz",
        'America/Santiago'     => "(GMT-04:00) Santiago",
        'Canada/Newfoundland'  => "(GMT-03:30) Newfoundland",
        'America/Buenos_Aires' => "(GMT-03:00) Buenos Aires",
        'Greenland'            => "(GMT-03:00) Greenland",
        'Atlantic/Stanley'     => "(GMT-02:00) Stanley",
        'Atlantic/Azores'      => "(GMT-01:00) Azores",
        'Atlantic/Cape_Verde'  => "(GMT-01:00) Cape Verde Is.",
        'Africa/Casablanca'    => "(GMT) Casablanca",
        'Europe/Dublin'        => "(GMT) Dublin",
        'Europe/Lisbon'        => "(GMT) Lisbon",
        'Europe/London'        => "(GMT) London",
        'Africa/Monrovia'      => "(GMT) Monrovia",
        'Europe/Amsterdam'     => "(GMT+01:00) Amsterdam",
        'Europe/Belgrade'      => "(GMT+01:00) Belgrade",
        'Europe/Berlin'        => "(GMT+01:00) Berlin",
        'Europe/Bratislava'    => "(GMT+01:00) Bratislava",
        'Europe/Brussels'      => "(GMT+01:00) Brussels",
        'Europe/Budapest'      => "(GMT+01:00) Budapest",
        'Europe/Copenhagen'    => "(GMT+01:00) Copenhagen",
        'Europe/Ljubljana'     => "(GMT+01:00) Ljubljana",
        'Europe/Madrid'        => "(GMT+01:00) Madrid",
        'Europe/Paris'         => "(GMT+01:00) Paris",
        'Europe/Prague'        => "(GMT+01:00) Prague",
        'Europe/Rome'          => "(GMT+01:00) Rome",
        'Europe/Sarajevo'      => "(GMT+01:00) Sarajevo",
        'Europe/Skopje'        => "(GMT+01:00) Skopje",
        'Europe/Stockholm'     => "(GMT+01:00) Stockholm",
        'Europe/Vienna'        => "(GMT+01:00) Vienna",
        'Europe/Warsaw'        => "(GMT+01:00) Warsaw",
        'Europe/Zagreb'        => "(GMT+01:00) Zagreb",
        'Europe/Athens'        => "(GMT+02:00) Athens",
        'Europe/Bucharest'     => "(GMT+02:00) Bucharest",
        'Africa/Cairo'         => "(GMT+02:00) Cairo",
        'Africa/Harare'        => "(GMT+02:00) Harare",
        'Europe/Helsinki'      => "(GMT+02:00) Helsinki",
        'Europe/Istanbul'      => "(GMT+02:00) Istanbul",
        'Asia/Jerusalem'       => "(GMT+02:00) Jerusalem",
        'Europe/Kiev'          => "(GMT+02:00) Kyiv",
        'Europe/Minsk'         => "(GMT+02:00) Minsk",
        'Europe/Riga'          => "(GMT+02:00) Riga",
        'Europe/Sofia'         => "(GMT+02:00) Sofia",
        'Europe/Tallinn'       => "(GMT+02:00) Tallinn",
        'Europe/Vilnius'       => "(GMT+02:00) Vilnius",
        'Asia/Baghdad'         => "(GMT+03:00) Baghdad",
        'Asia/Kuwait'          => "(GMT+03:00) Kuwait",
        'Africa/Nairobi'       => "(GMT+03:00) Nairobi",
        'Asia/Riyadh'          => "(GMT+03:00) Riyadh",
        'Europe/Moscow'        => "(GMT+03:00) Moscow",
        'Asia/Tehran'          => "(GMT+03:30) Tehran",
        'Asia/Baku'            => "(GMT+04:00) Baku",
        'Europe/Volgograd'     => "(GMT+04:00) Volgograd",
        'Asia/Muscat'          => "(GMT+04:00) Muscat",
        'Asia/Tbilisi'         => "(GMT+04:00) Tbilisi",
        'Asia/Yerevan'         => "(GMT+04:00) Yerevan",
        'Asia/Kabul'           => "(GMT+04:30) Kabul",
        'Asia/Karachi'         => "(GMT+05:00) Karachi",
        'Asia/Tashkent'        => "(GMT+05:00) Tashkent",
        'Asia/Kolkata'         => "(GMT+05:30) Kolkata",
        'Asia/Kathmandu'       => "(GMT+05:45) Kathmandu",
        'Asia/Yekaterinburg'   => "(GMT+06:00) Ekaterinburg",
        'Asia/Almaty'          => "(GMT+06:00) Almaty",
        'Asia/Dhaka'           => "(GMT+06:00) Dhaka",
        'Asia/Novosibirsk'     => "(GMT+07:00) Novosibirsk",
        'Asia/Bangkok'         => "(GMT+07:00) Bangkok",
        'Asia/Jakarta'         => "(GMT+07:00) Jakarta",
        'Asia/Krasnoyarsk'     => "(GMT+08:00) Krasnoyarsk",
        'Asia/Chongqing'       => "(GMT+08:00) Chongqing",
        'Asia/Hong_Kong'       => "(GMT+08:00) Hong Kong",
        'Asia/Kuala_Lumpur'    => "(GMT+08:00) Kuala Lumpur",
        'Australia/Perth'      => "(GMT+08:00) Perth",
        'Asia/Singapore'       => "(GMT+08:00) Singapore",
        'Asia/Taipei'          => "(GMT+08:00) Taipei",
        'Asia/Ulaanbaatar'     => "(GMT+08:00) Ulaan Bataar",
        'Asia/Urumqi'          => "(GMT+08:00) Urumqi",
        'Asia/Irkutsk'         => "(GMT+09:00) Irkutsk",
        'Asia/Seoul'           => "(GMT+09:00) Seoul",
        'Asia/Tokyo'           => "(GMT+09:00) Tokyo",
        'Australia/Adelaide'   => "(GMT+09:30) Adelaide",
        'Australia/Darwin'     => "(GMT+09:30) Darwin",
        'Asia/Yakutsk'         => "(GMT+10:00) Yakutsk",
        'Australia/Brisbane'   => "(GMT+10:00) Brisbane",
        'Australia/Canberra'   => "(GMT+10:00) Canberra",
        'Pacific/Guam'         => "(GMT+10:00) Guam",
        'Australia/Hobart'     => "(GMT+10:00) Hobart",
        'Australia/Melbourne'  => "(GMT+10:00) Melbourne",
        'Pacific/Port_Moresby' => "(GMT+10:00) Port Moresby",
        'Australia/Sydney'     => "(GMT+10:00) Sydney",
        'Asia/Vladivostok'     => "(GMT+11:00) Vladivostok",
        'Asia/Magadan'         => "(GMT+12:00) Magadan",
        'Pacific/Auckland'     => "(GMT+12:00) Auckland",
        'Pacific/Fiji'         => "(GMT+12:00) Fiji",
    );
}


// APi for jwt token
function JwtToken()
{
    $response = Http::withHeaders([
        'AccessKey' => 'lw3py3qGQnYSEEHLEZJTP7KnRi2uDyQA',
        'SecretKey' => 'gQPUFNiRlVeSPwak0djQDRFuH3W9iOWL',
    ])->get('https://pgapi.smartdev3.com/rest/smart-dev3/jwt-token');

    $jsonData = $response->json();
    return $jsonData;
}

// APi for deploy contract
function DeployContract($token, $client_address, $freelancer_address)
{
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer ' . $token,
    ])->post('https://pgapi.smartdev3.com/rest/smart-dev3/deploy-contract', [
        'buyer' => $client_address,
        'seller' => $freelancer_address,
    ]);

    $jsonData = $response->json();
    return $jsonData;
}

// api for milestone
function addMilestone($token, $contractAddress, $milestoneData)
{
    $response = Http::withHeaders([
        'Contract-Address' => $contractAddress,
        'Authorization' => 'Bearer ' . $token,
    ])->post('https://pgapi.smartdev3.com/rest/smart-dev3/add-milestone', ["milestones" => json_decode($milestoneData)]);

    $jsonData = $response->json();
    return $jsonData;
}

// api for updatemilestone
function updateMilestone($token, $contractAddress, $milestoneId, $amount)
{
    $response = Http::withHeaders([
        'Contract-Address' => $contractAddress,
        'Authorization' => 'Bearer ' . $token,
    ])->post('https://pgapi.smartdev3.com/rest/smart-dev3/update-amount', [
        'milestoneId' => $milestoneId,
        'amount' => $amount,
    ]);
    $jsonData = $response->json();
    return $jsonData;
}

// count unread message
function getUnreadMessageCount()
{
    $conversations = Conservation::where('sender_id', auth()->user()->id)->orWhere('receiver_id', auth()->user()->id)->pluck('id');
    $unreadMessageCount = Message::whereIn('conservation_id', $conversations)->where('sender_id','!=',auth()->user()->id)->where('is_read', '0')->count();
    return $unreadMessageCount;
}
