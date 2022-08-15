<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Hello\App;

/**
 */
class HelloClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Hello\App\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Hello\App\Response
     */
    public function say(\Hello\App\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/hello.app.Hello/say',
        $argument,
        ['\Hello\App\Response', 'decode'],
        $metadata, $options);
    }

}
