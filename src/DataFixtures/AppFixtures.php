<?php

namespace App\DataFixtures;

use App\Entity\TimeMachine;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $timeMachine = new TimeMachine();
        $timeMachine->setName('DeLorean');
        $timeMachine->setUrl('https://en.wikipedia.org/wiki/DeLorean_DMC-12');
        $manager->persist($timeMachine);
        $manager->flush();

        $timeMachine = new TimeMachine();
        $timeMachine->setName('TARDIS');
        $timeMachine->setUrl('https://en.wikipedia.org/wiki/TARDIS');
        $manager->persist($timeMachine);
        $manager->flush();

        $timeMachine = new TimeMachine();
        $timeMachine->setName('Time Machine');
        $timeMachine->setUrl('https://en.wikipedia.org/wiki/Time_Machine_(2002_film)');
        $manager->persist($timeMachine);
        $manager->flush();

        $timeMachine = new TimeMachine();
        $timeMachine->setName('Time Flyer');
        $timeMachine->setUrl('https://en.wikipedia.org/wiki/Time_Flyer');
        $manager->persist($timeMachine);
        $manager->flush();

        $timeMachine = new TimeMachine();
        $timeMachine->setName('Time Train');
        $timeMachine->setUrl('https://en.wikipedia.org/wiki/Time_Train_(The_Time_Traveler%27s_Wife)');
        $manager->persist($timeMachine);
        $manager->flush();

        $timeMachine = new TimeMachine();
        $timeMachine->setName('Time Rover');
        $timeMachine->setUrl('https://en.wikipedia.org/wiki/Time_Rover');
        $manager->persist($timeMachine);
        $manager->flush();

        $timeMachine = new TimeMachine();
        $timeMachine->setName('Time Bubble');
        $timeMachine->setUrl('https://en.wikipedia.org/wiki/Time_Bubble');
        $manager->persist($timeMachine);
        $manager->flush();

        $timeMachine = new TimeMachine();
        $timeMachine->setName('Time Machine');
        $timeMachine->setUrl('https://en.wikipedia.org/wiki/Time_Machine_(1980_film)');
        $manager->persist($timeMachine);
        $manager->flush();

        $timeMachine = new TimeMachine();
        $timeMachine->setName('Time Machine');
        $timeMachine->setUrl('https://en.wikipedia.org/wiki/Time_Machine_(1960_film)');
        $manager->persist($timeMachine);
        $manager->flush();

        $timeMachine = new TimeMachine();
        $timeMachine->setName('Time Machine');
        $timeMachine->setUrl('https://en.wikipedia.org/wiki/Time_Machine_(1978_film)');
        $manager->persist($timeMachine);
        $manager->flush();

        $timeMachine = new TimeMachine();
        $timeMachine->setName('Time Machine');
        $timeMachine->setUrl('https://en.wikipedia.org/wiki/Time_Machine_(1995_film)');
        $manager->persist($timeMachine);
        $manager->flush();

        $timeMachine = new TimeMachine();
        $timeMachine->setName('Time Machine');
        $timeMachine->setUrl('https://en.wikipedia.org/wiki/Time_Machine_(1996_film)');
        $manager->persist($timeMachine);
        $manager->flush();

        $timeMachine = new TimeMachine();
        $timeMachine->setName('12 Monkeys');
        $timeMachine->setUrl('https://en.wikipedia.org/wiki/12_Monkeys');
        $manager->persist($timeMachine);
        $manager->flush();

        $timeMachine = new TimeMachine();
        $timeMachine->setName('Steins;Gate');
        $timeMachine->setUrl('https://en.wikipedia.org/wiki/Steins;Gate');
        $manager->persist($timeMachine);
        $manager->flush();

        $timeMachine = new TimeMachine();
        $timeMachine->setName('Time Machine');
        $timeMachine->setUrl('https://en.wikipedia.org/wiki/Time_Machine_(2002_film)');
        $manager->persist($timeMachine);
        $manager->flush();
    }
}