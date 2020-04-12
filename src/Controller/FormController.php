<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/form", name="form")
     */
    public function index(Request $request)
    {
        $post = new Post();

        $form = $this->createForm(PostType::class, $post);

        //handle request
        $form->handleRequest($request);
        
        $tablica=[];
        //if
        if ($form->isSubmitted() ) {
            
            $post = $form->getData();
            
            for($i=1; $i<=10; $i++){ 
                $n = $post->geti($i);
                $tablica[] = [$n, $this->number($n)];
            }
        }
        return $this->render('form/index.html.twig', [
            'post_form' => $form->createView(),
            'tablica' => $tablica
        ]);
    }

    private function number($a) {
        $numbers = [];
        for($i=0; $i<=$a; $i++){
            if ($i < 2) {
                $numbers[] = $i;
            } 
            elseif ($i%2 == 0) {
                $x = $numbers[$i/2];
                $numbers[] = $x;
            } 
            else {
                $y = $numbers[($i-1)/2];
                $z = $numbers[($i+1)/2];
                $numbers[] = $y + $z;
            }
        }
        #printowanie ludzkich wartości, key-> index
        #print_r(array_values($numbers));
        #$key = array_search($value, $numbers);
        #echo $key;
        $value = max($numbers);
        return $value;
    }
}