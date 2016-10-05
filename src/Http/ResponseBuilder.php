<?php
/**
 * Class ResponseBuilder
 *
 * @author Diego Wagner <diegowagner4@gmail.com>
 * http://www.discoverytecnologia.com.br
 */
namespace Dsc\MercadoLivre\Http;

use Dsc\MercadoLivre\Parser\ParserSerializer;
use Dsc\MercadoLivre\Parser\SerializerInterface;
use Psr\Http\Message\StreamInterface;

abstract class ResponseBuilder
{
    /**
     * @var StreamInterface
     */
    protected $response;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * ResponseBuilder constructor.
     * @param StreamInterface $response
     * @param SerializerInterface $serializer
     */
    public function __construct(StreamInterface $response, SerializerInterface $serializer = null)
    {
        $this->response   = $response;
        $this->serializer = $serializer ?: new ParserSerializer();
    }

    /**
     * @return string
     */
    public function json()
    {
        return $this->response->getContents();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->response->getContents();
    }

    /**
     * @return string
     */
    public function __invoke()
    {
        return $this->response->getContents();
    }

    /**
     * @return mixed
     */
    abstract public function getResponse();
}