<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Contact;

class ContactFixtures extends Fixture
{
    public function load(ObjectManager $manager){
        for($i = 0; $i <10; $i++) {
            $contact = (new Contact())
                ->setFirstname("firstname $i")
                ->setLastname("name $i")
                ->setEmail("email$1@domain.fr")
                ->setPhoneNumber("06 12 12 12 $i$i");
                $manager->persist($contact);
        }
        $manager->flush();
    }
}