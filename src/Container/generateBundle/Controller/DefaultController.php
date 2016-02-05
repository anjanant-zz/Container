<?php

namespace Container\generateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ContainergenerateBundle:Default:index.html.twig', array('name' => $name));
    }
    
     public function gestionclientAction(){
          return $this->render('ContainergenerateBundle:Default:gestionclient.html.twig', array());
         
            
}

    public function gestionportuaireAction(){ 
        
           return $this->render('ContainergenerateBundle:Default:gestionclient.html.twig', array());
    }
    
     public function decaissementattribuerAction(){
        
        return $this->render('ContainergenerateBundle:Default:decaissementattribuer.html.twig', array());
           
    }
    
     public function decaissementexporterAction(){
        
        
            return array('decaissementexporter.html.twig');
    }

     }
