<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $program = new Program();
        $program->setName('Number 1');
        $program->setTitle('Walking dead');
        $program->setSynopsis('Des zombies envahissent la terre');
        $program->setCategory($this->getReference('category_Horreur'));
        $manager->persist($program);
        $manager->flush();

        $program = new Program();
        $program->setName('Number 2');
        $program->setTitle('Lost');
        $program->setSynopsis('La meilleure série de tous les temps');
        $program->setCategory($this->getReference('category_Dramatique'));
        $manager->persist($program);
        $manager->flush();

        $program = new Program();
        $program->setName('Number 3');
        $program->setTitle('Buffy the Vampire Slayer');
        $program->setSynopsis('Buffy sauve le monde grâce à Willow');
        $program->setCategory($this->getReference('category_Fantastique'));
        $manager->persist($program);
        $manager->flush();

        $program = new Program();
        $program->setName('Number 4');
        $program->setTitle('Malcolm in the Middle');
        $program->setSynopsis('On suit Malcolm et sa famille déjantée');
        $program->setCategory($this->getReference('category_Comedie'));
        $manager->persist($program);
        $manager->flush();

        $program = new Program();
        $program->setName('Number 5');
        $program->setTitle('Fullmetal Alchemist');
        $program->setSynopsis('Edward Elric cherhce à sauver son frère Alphonse');
        $program->setCategory($this->getReference('category_Anime'));
        $manager->persist($program);
        $manager->flush();
    }

    

    public function getDependencies()
    {
        return [
          CategoryFixtures::class,
        ];
    }


}

