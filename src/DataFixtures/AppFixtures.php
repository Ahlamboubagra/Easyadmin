<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\EnseignentFactory;
use App\Factory\EtudiantFactory;
use App\Factory\FillerFactory;
use App\Factory\ModuleFactory;
use App\Factory\NoteFactory;
use App\Factory\SemestreFactory;
use App\Factory\UserFactory;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        FillerFactory::createMany(10);
        EnseignentFactory::createMany(10);
        EtudiantFactory::createMany(10);
       
        ModuleFactory::createMany(10);
        NoteFactory::createMany(10);
        SemestreFactory::createMany(10);
        UserFactory::createMany(1);
        $manager->flush();
    }
}
