<?php

namespace onesignal;

use \Requests;

class notification{

    private $id;
    private $key;

    public function __construct( $id, $key ){
        $this->id  = $id;
        $this->key = $key;
    }

    public function send( &$output, $notification ){

        $headers = array(
            'Authorization' => 'Basic ' . $this->key,
            'Content-Type'  => 'application/json; charset=utf-8'
        );

        $notification[ 'app_id' ] = $this->id;

        $req = Requests::post( 'https://onesignal.com/api/v1/notifications', $headers, $notification );

        $output = $req->body;

        return $req->status_code == 200;
    }

}
