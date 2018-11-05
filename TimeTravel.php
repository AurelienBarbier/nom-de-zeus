<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 05/11/18
 * Time: 17:05
 */

namespace back2TheFutur;

use \DateTime;

/**
 * Class TimeTravel
 * @package back2TheFutur
 */
class TimeTravel
{

    /**
     * @var DateTime
     */
    private $start;



    /**
     * @var DateTime
     */
    private $end;


    /**
     * TimeTravel constructor.
     * @param DateTime $start
     * @param DateTime $end
     */
    public function __construct(\DateTime $start, \DateTime $end)
    {
        $this->start = $start;
        $this->end   = $end;
    }

    /**
     * @return \DateTime
     */
    public function getStart(): \DateTime
    {
        return $this->start;
    }

    /**
     * @param \DateTime $start
     */
    public function setStart(\DateTime $start): void
    {
        $this->start = $start;
    }

    /**
     * @return \DateTime
     */
    public function getEnd(): \DateTime
    {
        return $this->end;
    }

    /**
     * @param \DateTime $end
     */
    public function setEnd(\DateTime $end): void
    {
        $this->end = $end;
    }
}
