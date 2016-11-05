<?php
/*
Получение последних видео для указанных каналов
*/
header('Content-Type:text/plain;charset=utf-8');



// список каналов
$channel_list = array(
    'UCmOpCyZ1j406Qyun7dJgOFg',
    'UCvBGdmck9fnkFa1jWucN87Q',
);

// хэш в виде: array('id_канала-1' => [vid1, vid2, ...], 'id_канала-2' => [vid1, vid2, ...])
$lastvideo = array();

// пробежаться по каналам, получить для них идентификаторы последних видео
foreach ($channel_list as $channel_id) {
    $tarr = getYoutubeDataXml($channel_id);
    $lastvideo[$channel_id] = array();
    
    if ( !empty($tarr['items']) ) {
        foreach ($tarr['items'] as $v) {
            $lastvideo[$channel_id][] = $v['id']['videoId'];
        }
    }
}

// сохранить в текстовой файл, каждая строка: id-канала|id-видео через пробел
$s = '';
foreach ($lastvideo as $channel_id => $video_list) {
    $s .= $channel_id . '|' . implode(' ', $video_list) . "\r\n";
}
// файл создаётся в директории с ЭТИМ скриптом
file_put_contents( __DIR__ . DIRECTORY_SEPARATOR . 'lastvideo.txt', $s );

// вывод результата в браузер, для визуального контроля
print_r($lastvideo);