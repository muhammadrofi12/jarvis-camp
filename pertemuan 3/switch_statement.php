<?php

$hari = 'sabtu';
$mood;

switch ($hari) {
    case 'senin':
        $mood = 'senin | stress';
        break;
    
    case 'selasa':
        $mood = 'sedikit stress';
        break;
    
    case 'rabu':
        $mood = 'udh gk terlalu stress';
        break;
    
    case 'kamis':
        $mood = 'udh mulai senyum';
        break;
    
    case 'jum at':
        $mood = 'senyum';
        break;
    
    case 'sabtu':
    case 'minggu':
        $mood = 'full senyum';
        break;
    
    default:
        $mood = 'biasa aja';
        break;
}

echo "hari ini saya $mood";