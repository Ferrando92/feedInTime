<?php
namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Source;

class Sources implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $sources = array(
            array('name' => 'ElPais', 'feedUrl' => 'http://ep00.epimg.net/rss/elpais/portada.xml'),
            array('name' => 'ElMundo', 'feedUrl' => 'http://estaticos.elmundo.es/elmundo/rss/portada.xml'),
            array('name' => 'LaRazon', 'feedUrl' => 'http://www.larazon.es/rss/portada.xml'),
            array('name' => 'ElConfidencial', 'feedUrl' => 'http://rss.elconfidencial.com/espana/'),
            array('name' => 'ElPeriodico', 'feedUrl' => 'http://www.elperiodico.com/es/rss/rss_portada.xml'),
        );

        foreach ($sources as $source)
        {
            $entidad = new Source($source['name'],$source['feedUrl']);
            $manager->persist($entidad);
        }
        $manager->flush();
    }
}