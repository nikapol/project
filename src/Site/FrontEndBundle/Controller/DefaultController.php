<?php

namespace Site\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SiteFrontEndBundle:Default:index.html.twig', array('name' => $name));
    }
    public function homeAction()
    {
        return $this->render('SiteFrontEndBundle::home.html.twig');
    }
    public function adminAction()
    {
        $a=array(0,1,2,3,4);
        dump($a);
        return $this->render('SiteFrontEndBundle::admin.html.twig');
    }
    public function aboutUsAction()
    {
        return $this->render('SiteFrontEndBundle::aboutUs.html.twig');
    }
    public function featuresAction()
    {
        return $this->render('SiteFrontEndBundle::features.html.twig');
    }
    public function gymnastsAction()
    {
        return $this->render('SiteFrontEndBundle::gymnasts.html.twig');
    }
    public function testimonialAction()
    {
        return $this->render('SiteFrontEndBundle::testimonial.html.twig');
    }
    public function contactsAction()
    {
        return $this->render('SiteFrontEndBundle::contacts.html.twig');
    }
        public function newsAction()
    {
        $em=$this->get('doctrine.orm.entity_manager');
//        dump($em);
//        $paginator=$this->get('knp_paginator'):
//        $date=$paginator->paginate($post,$page,5)
//        $qb=$em->getRepository('SiteFrontEndBundle:Repository')
//                ->counter();
        $posts=$em->getRepository('SiteFrontEndBundle:Site')
                  ->findAll();
        $tags=$em->getRepository('SiteFrontEndBundle:Sania')
                  ->findAll();
        return $this->render('SiteFrontEndBundle::news.html.twig', array('post'=>$posts));
//        return $this->render('SiteFrontEndBundle::news.html.twig');
    } 
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('create');
        $em=$this->get('doctrine.orm.entity_manager');
        $posts=$em->getRepository('SiteFrontEndBundle:Site')
                  ->findAll();
        return $this->return('SiteFrontEndBundle:news.html.twig');
    }
}
