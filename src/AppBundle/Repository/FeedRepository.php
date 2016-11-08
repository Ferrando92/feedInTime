<?php
namespace AppBundle\Repository;
use Doctrine\ORM\EntityRepository;
class FeedRepository extends EntityRepository
{
    private function findActivasEnPortada()
    {
      $em = $this->getDoctrine()->getManager();
      return $em->getRepository('AppBundle:Feed')->findBy(array('active_at_frontpage' => true));
    }
}

