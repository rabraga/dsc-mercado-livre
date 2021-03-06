<?php
/**
 * Class PayerIdentification
 *
 * @author Diego Wagner <diegowagner4@gmail.com>
 * http://www.discoverytecnologia.com.br
 */
namespace Dsc\MercadoLivre\Resources\Payment;

use JMS\Serializer\Annotation as JMS;

class PayerIdentification
{
    /**
     * @var string
     * @JMS\Type("string")
     */
    private $number;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $type;

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return PayerIdentification
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return PayerIdentification
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
