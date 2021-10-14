<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Region;
use App\Entity\Room;
use App\Entity\Owner;

class AppFixtures extends Fixture
{
    // définit un nom de référence pour une instance de Region
    public const IDF_REGION_REFERENCE = 'idf-region';
    public const ALEX_OWNER_REFERENCE = 'alex-owner';
    
    
    
    public function load(ObjectManager $manager)
    {
        //...
        
        $region = new Region();
        $region->setCountry("FR");
        $region->setName("Ile de France");
        $region->setPresentation("La région française capitale");
        $manager->persist($region);
        
        $manager->flush();
        // Une fois l'instance de Region sauvée en base de données,
        // elle dispose d'un identifiant généré par Doctrine, et peut
        // donc être sauvegardée comme future référence.
        $this->addReference(self::IDF_REGION_REFERENCE, $region);
        
        // ...
        $owner = new Owner();
        $owner->setFamilyName("LAFERRERE");
        $owner->setFirstname("Alexandre");
        $owner->setAddress("6 rue Charles Fourier");
        $owner->setCountry("FR");
        $this->addReference(self::ALEX_OWNER_REFERENCE, $owner);
        $manager->persist($owner);
        
        $manager->flush();
        
        $room = new Room();
        $room->setSummary("Beau poulailler ancien à Évry");
        $room->setDescription("très joli espace sur paille");
        $room->setCapacity(3);
        $room->setSuperficy(9.5);
        $room->setPrice(130.99);
        $room->setAddress("12 avenue des Poules de l'INT");
        //$room->addRegion($region);
        // On peut plutôt faire une référence explicite à la référence
        // enregistrée précédamment, ce qui permet d'éviter de se
        // tromper d'instance de Region :
        $room->addRegion($this->getReference(self::IDF_REGION_REFERENCE));
        $room->setOwner($this->getReference(self::ALEX_OWNER_REFERENCE));
        $manager->persist($room);
        
        $manager->flush();
        
        
        //...
    }
    
    //...
}
