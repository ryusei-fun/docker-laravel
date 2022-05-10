<?php

return [

    // Webhook URL
    'public_url' => env('SLACK_PUBLIC_URL'),
    'private_url' => env('SLACK_PRIVATE_URL'),


    // チャンネル設定
    'default' => 'work',

    'channels' => [
        'user' => [
            'from' => 'ユーザ作成報告',
            'icon' => ':bowtie:',
            'message' => 'がアカウントを作成しました'
        ],
        'report' => [
            'from' => '日報作成報告',
            
        ],
        'work' => [
            'username' => 'Funsns通知',
            'icon' => ':ghost:',
            'channel' => '',
        ],
        'error' => [
            'username' => 'エラー通知',
            'icon' => ':scream:',
            'channel' => 'notice-error',
        ],
    ],
];
