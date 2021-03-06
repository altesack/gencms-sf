<?php

namespace App\Controller;

use App\Entity\Family;
use App\Entity\Person;
use App\Normalizer\FamilyNormalizer;
use App\Normalizer\PersonNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

class ApiController extends AbstractController
{
    /**
     * @Route("api/person/{id}")
     *
     * @param Person $person
     *
     * @throws ExceptionInterface
     *
     * @return JsonResponse
     */
    public function getPersonAction(Person $person): JsonResponse
    {
        $data = (new PersonNormalizer())->normalize($person);

        return $this->json($data);
    }

    /**
     * @Route("api/family/{id}")
     *
     * @param Family $family
     *
     * @throws ExceptionInterface
     *
     * @return JsonResponse
     */
    public function getFamilyAction(Family $family): JsonResponse
    {
        $data = (new FamilyNormalizer())->normalize($family);

        return $this->json($data);
    }
}
