<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The dark night');
        $movie->setReleaseYear(2008);
        $movie->setDescription('This is the description of the Dark knight');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2021/05/22/04/27/batman-6272544_960_720.jpg');

        //Add data reference
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));

        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Avengers: Endgame');
        $movie2->setReleaseYear(2019);
        $movie2->setDescription('This is the description of the Avengers: end game');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2022/06/05/11/06/action-figures-7243788_960_720.jpg');

        //Add data reference
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));

        $manager->persist($movie2);

        $manager->flush();

    }
}
