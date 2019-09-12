# onesignal
A simple onesignal php wrapper

### send a push notification
 
```php
$onesignal = new abgit\onesignal( 'app_id', 'app_key' );

$notification = [
            'headings' => [
                'en' => 'Title'
            ],
            'contents' => [
                'en' => 'Notification message'
            ],
            'subtitle' => [
                'en' => 'subtitle'
            ],
            'channel_for_external_user_ids' => 'push',
            'include_external_user_ids' => ['xpto-12345-6780'],
            'data' => ['foo' => 'bar']
        ];

if( $onesignal->send( $result, $notification ){
   // ... do something with $result
}
```

### send an email
 
```php
$onesignal = new abgit\onesignal( 'app_id', 'app_key' );

$notification = [
            'email_subject' => 'hello',
            'template_id' => '77ca0b25-13b8-....',
            'channel_for_external_user_ids' => 'email',
            'include_external_user_ids' => ['xpto-12345-6780']
        ];

if( $onesignal->send( $result, $notification ){
   // ... do something with $result
}
```
