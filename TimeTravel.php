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
     *
     */
    const TRAVEL_INFO_FORMAT = 'Il y a %d années, %d mois, %d jours, %d heures, %d minutes et %d secondes 
                                entre les deux dates';

    const STEP_FORMAT = 'M d Y A h:i';

    /**
     * TimeTravel constructor.
     * @param DateTime $start
     * @param DateTime $end
     */
    public function __construct(\DateTime $start, \DateTime $end = null)
    {
        $this->start = $start;
        $this->end = $end;
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


    /**
     * @return string
     */
    public function getTravelInfo(): string
    {
        $interval = $this->start->diff($this->end);
        return sprintf(
            self::TRAVEL_INFO_FORMAT,
            $interval->y,
            $interval->m,
            $interval->d,
            $interval->h,
            $interval->i,
            $interval->s
        );
    }

    /**
     * @param \DateInterval $interval
     * @return DateTime
     */
    public function findDate(\DateInterval $interval) : \DateTime
    {
        $reference = new \DateTime($this->getStart()->format('Y-m-d'));
        $date = $reference->add($interval);
        return $date;
    }

    /**
     * @param DateInterval $step
     * @return array
     */
    public function backToFutureStepByStep(\DateInterval $step) : array
    {
        $steps = [];
        $periods = new \DatePeriod($this->end, $step, $this->start);

        /**
         * @var \DateTime $period
         */
        foreach ($periods as $period) {
            $steps[] = $period->format(self::STEP_FORMAT);
        }

        return $steps;
    }
}
