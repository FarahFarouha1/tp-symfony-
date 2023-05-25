<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;


class IndexController extends AbstractController
{
   //   #[Route('/{name}', name: 'homepage')]
public function home()
{
    $taches = ['tache1', 'tache2','tache 3']; 
    return $this->render('taches/index.html.twig',['taches' => $taches]);

}
}

?>
