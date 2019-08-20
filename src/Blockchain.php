<?php
namespace McCaulay\Blockchain;

class Blockchain extends \Blockchain\Blockchain
{
    /**
     * The blockchain configuration.
     *
     * @var array
     */
    private $config;

    /**
     * Initialise the blockchain class.
     */
    public function __construct($apiCode = null)
    {
        parent::__construct($apiCode);

        // Initalise the config
        $this->config = config('blockchain');

        $this->setServiceUrl($this->getServiceUrl());
    }

    /**
     * Get the service url.
     *
     * @return string
     */
    public function getServiceUrl()
    {
        $protocol = 'http' . $this->config->secure ? 's' : '';
        $port = isset($this->config->port) && $this->config->port != null ? ':' . $this->config->port : '';
        return $protocol . '//' . $this->config->host . $port;
    }

    /**
     * Get the create instance.
     *
     * @return \Blockchain\Create\Create
     */
    public function create()
    {
        return $this->Create;
    }

    /**
     * Get the explorer instance.
     *
     * @return \Blockchain\Explorer\Explorer
     */
    public function explorer()
    {
        return $this->Explorer;
    }

    /**
     * Get the push instance.
     *
     * @return \Blockchain\PushTX\Push
     */
    public function push()
    {
        return $this->Push;
    }

    /**
     * Get the rates instance.
     *
     * @return \Blockchain\Rates\Rates
     */
    public function rates()
    {
        return $this->Rates;
    }

    /**
     * Get the receive instance.
     *
     * @return \Blockchain\V2\Receive\Receive
     */
    public function receive()
    {
        return $this->ReceiveV2;
    }

    /**
     * Get the stats instance.
     *
     * @return \Blockchain\Stats\Stats
     */
    public function stats()
    {
        return $this->Stats;
    }

    /**
     * Get the wallet instance.
     *
     * @return \Blockchain\Wallet\Wallet
     */
    public function wallet()
    {
        return $this->Wallet;
    }
}
