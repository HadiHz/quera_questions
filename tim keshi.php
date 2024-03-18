<?php

$n = 6;
$list = [];
$answer = 0;
for ($i = 0; $i < $n; $i++){
    $a = intval(readline());
    array_push($list, $a);
}

$a1 = $list[0] > $list[1] ? $list[1] : $list[0];
$a2 = $list[2] > $list[3] ? $list[3] : $list[2];
$a3 = $list[4] > $list[5] ? $list[5] : $list[4];

echo $a1 + $a2 + $a3;

/*
 * query for activity log to find out bad users and their requests
     $bad_users = Activity::query()->where('properties', 'like', '%wp-login%')
            ->get()->pluck('properties')->toArray();
        $wid = [];
        foreach ($bad_users as $user){
            if (isset($wid[$user['WID']])){
                $user_ip = $user['WID'];
                unset($user['WID']);
//                $wid[$user_ip] = array_merge($wid[$user_ip], $user);
                $wid[$user_ip] = 1;
            }else{
                $user_ip = $user['WID'];
                unset($user['WID']);
                $wid[$user_ip] = 1;
            }
        }
        $bad_urls = [];
        foreach ($wid as $key => $value){
            $bad_users = Activity::query()->where('properties', 'like', "%$key%")
                ->get()->pluck('properties')->toArray();
            foreach ($bad_users as $user){
                if (strpos($user['URL'], 'wp-login') === false and
                    strpos($user['Referrer'], 'wp-login') === false ){
                    $bad_urls[] = [
                        'URL' => $user['URL'],
                        'Referrer' => $user['Referrer']
                    ];
                }
            }
        }
        dd($bad_urls);
 */