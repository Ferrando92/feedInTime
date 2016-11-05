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
            array('name' => 'El Pais', 'feedUrl' => 'http://ep00.epimg.net/rss/elpais/portada.xml'),
            array('name' => 'El Mundo', 'feedUrl' => 'http://estaticos.elmundo.es/elmundo/rss/portada.xml'),
            array('name' => 'La Razon', 'feedUrl' => 'http://www.larazon.es/rss/portada.xml'),
            array('name' => 'El Confidencial', 'feedUrl' => 'http://rss.elconfidencial.com/espana/'),
            array('name' => 'El Periodico', 'feedUrl' => 'http://www.elperiodico.com/es/rss/rss_portada.xml'),
        );

        foreach ($sources as $source)
        {
            $entidad = new Source($source['name'],$source['feedUrl']);
            $manager->persist($entidad);
        }
        $manager->flush();
    }
}