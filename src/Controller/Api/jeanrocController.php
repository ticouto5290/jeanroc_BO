<?php

namespace App\Controller\Api;

use App\Entity\Freelancer;
use App\Entity\Skill;
use App\Repository\FreelancerRepository;
use App\Repository\SkillRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse; 
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Validator\ValidatorInterface;


use Doctrine\ORM\EntityManagerInterface;



class jeanrocController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;

    }

    #[Route('/api/jeanroc/freelancers', name: 'app_api_jeanroc')]
    public function index(SerializerInterface $serializer): Response
    {

        $repository = $this->entityManager->getRepository(Freelancer::class);

        $repositorySkill = $this->entityManager->getRepository(Skill::class);
        $Freelancers = $repository->FindAllActiveFreelancers(); 

        foreach ($Freelancers as $freelancer) {
            
            $Skills_array = $freelancer->getSkills();

            if(!empty($Skills_array)){

                $skill_array_Name = [];
                
                foreach($Skills_array as $Skills_id){
                    
                    $skillName = $repositorySkill->findSkillNameByID($Skills_id);
                    $skill_array_Name[] = $skillName;
                    
                }
                $freelancer->setSkills($skill_array_Name);
            }
            else{
                $freelancer->setSkills(null);
            }
            
           
        }

        $data = $serializer->serialize($Freelancers, 'json');

        return new JsonResponse($data, Response::HTTP_OK, [], true);
    }
    

    #[Route('/api/jeanroc/skills', name: 'app_api_jeanroc_skills')]
    public function getSkills(SkillRepository $skillRepository, SerializerInterface $serializer): JsonResponse
    {
        $sections = $skillRepository->findSectionsWithSubsections();
        $structuredSkills = [];

        foreach ($sections as $section) {
            $subsections = $skillRepository->findBy(['parent' => $section->getId(), 'label' => 1]);

            $subsectionsArray = [];
            foreach ($subsections as $subsection) {
                $skills = $skillRepository->findBy(['parent' => $subsection->getId(), 'label' => 0]); // Or null for label, depending on your schema
                $skillNames = array_map(fn($skill) => $skill->getName(), $skills);

                $subsectionsArray[] = [
                    'id' => $subsection->getId(),
                    'name' => $subsection->getName(),
                    'skills' => $skillNames,
                ];
            }

            $structuredSkills[] = [
                'id' => $section->getId(),
                'name' => $section->getName(),
                'subsections' => $subsectionsArray,
            ];
        }

        $data = $serializer->serialize($structuredSkills, 'json');

        return new JsonResponse($data, Response::HTTP_OK, [], true);
    }

    #[Route('/api/jeanroc/freelancers/create', name: 'create_freelancer', methods: ['POST'])]
    public function createFreelancer(Request $request, SerializerInterface $serializer, ValidatorInterface $validator, EntityManagerInterface $entityManager): JsonResponse
    {
        $jsonContent = $request->getContent();
        try {
            $freelancer = $serializer->deserialize($jsonContent, Freelancer::class, 'json');
            
            // Validate the freelancer entity
            $errors = $validator->validate($freelancer);
            if (count($errors) > 0) {
                $errorsArray = [];
                foreach ($errors as $error) {
                    $errorsArray[$error->getPropertyPath()] = $error->getMessage();
                }
                return $this->json(['message' => 'Validation failed', 'errors' => $errorsArray], Response::HTTP_BAD_REQUEST);
            }
    
            $entityManager->persist($freelancer);
            $entityManager->flush();
    
            return $this->json($freelancer, Response::HTTP_CREATED, [], ['groups' => 'freelancer:read']);
        } catch (NotEncodableValueException $e) {
            return $this->json([
                'status' => 400,
                'message' => 'Invalid JSON: ' . $e->getMessage(),
            ], Response::HTTP_BAD_REQUEST);
        }
    }
    


}
