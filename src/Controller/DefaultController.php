<?php declare(strict_types=1);


namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class DefaultController
{
    /**
     * @Route(path="/health")
     * @return JsonResponse
     */
    public function health(): JsonResponse
    {
        return new JsonResponse(['status' => 'OK']);
    }
}
