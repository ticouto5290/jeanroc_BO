<?php 


namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Freelancer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class FreelancerApiController extends AbstractController
{
    #[Route('/api/admin/freelancers', methods: ['POST'])]
    public function create(Request $request, SerializerInterface $serializer, ValidatorInterface $validator, EntityManagerInterface $entityManager): Response
    {

        $jsonData = json_decode($request->getContent(), true);

        // Manually parse the 'data' field if it's a stringified array
        if (isset($jsonData['data']) && is_string($jsonData['data'])) {
            $jsonData['data'] = json_encode($jsonData['data']);
            print_r($jsonData['data']);
        }
    
        // Re-encode the JSON data with the 'data' field parsed as an array
        $data = json_encode($jsonData);
    
        $freelancer = $serializer->deserialize($data, Freelancer::class, 'json');
        
        // $data = $request->getContent();
        $freelancer = $serializer->deserialize($data, Freelancer::class, 'json');

        // print_r($freelancer);
        // Validate the request data
        $errors = $validator->validate($freelancer);
        if (count($errors) > 0) {
            return $this->json($errors, Response::HTTP_BAD_REQUEST);
        }

        // Persist the new freelancer
        $entityManager->persist($freelancer);
        $entityManager->flush();

        return $this->json($freelancer, Response::HTTP_CREATED);
    }
}