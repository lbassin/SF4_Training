<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class LuckyController
 *
 * @author    Laurent Bassin <laurent@bassin.info>
 */
class LuckyController
{

    /**
     * @return Response
     */
    public function number(): Response
    {
        /** @var int $number */
        $number = mt_rand(0, 100);

        return new Response('<html><body>Number is '.$number.'</body></html>');
    }
}
