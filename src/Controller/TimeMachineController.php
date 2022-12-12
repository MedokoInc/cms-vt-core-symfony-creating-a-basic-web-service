<?php

namespace App\Controller;

use App\Entity\TimeMachine;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TimeMachineController extends AbstractController
{
    #[Route('/time_machine', name: 'add_time_machine', methods: ['POST'])]
    public function index(Request $request, ManagerRegistry $doctrine): JsonResponse
    {
        $entityManger = $doctrine->getManager();
        $content = json_decode($request->getContent(), true);

        $timeMachine = new TimeMachine();
        $timeMachine->setName($content['name']);
        $timeMachine->setUrl($content['url']);
        $entityManger->persist($timeMachine);
        $entityManger->flush();

        return new JsonResponse(['type' => 'Success', 'message' => 'Time machine saved'], 200);
    }

    #[Route('/time_machine', name: 'get_time_machine', methods: ['GET'])]
    public function getTimeMachine(Request $request, ManagerRegistry $doctrine): JsonResponse
    {
        $entityManger = $doctrine->getManager();
        $timeMachines = $entityManger->getRepository(TimeMachine::class)->findAll();

        $rnd = rand(0, count($timeMachines) - 1);
        $timeMachine = $timeMachines[$rnd];

        return new JsonResponse(['type' => 'Success', 'timeMachine' => $timeMachine], 200);
    }
}
