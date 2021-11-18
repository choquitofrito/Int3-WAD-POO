<?php

namespace Bagwaa\ReallyFunnyJokes\Tests;

use Bagwaa\ReallyFunnyJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class JokeFactoryTest extends TestCase
{
    /** @test */
    public function itReturnsARandomJoke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function itReturnsAPredefinedJoke()
    {
        $jokes = [
            'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
            'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
            'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
            'Chuck Norris counted to infinity... Twice.',
            'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.',
        ];

        $jokeFactory = new JokeFactory();
        $joke = $jokeFactory->getRandomJoke();

        $this->assertContains($joke, $jokes);
    }
}
