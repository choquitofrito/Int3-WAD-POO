<?php

namespace Bagwaa\ReallyFunnyJokes;

class JokeFactory
{
    /**
     * A silo of brilliant jokes, non are stale here
     *
     * @var array
     */
    protected $jokes = [
        'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
        'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
        'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
        'Chuck Norris counted to infinity... Twice.',
        'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.',
    ];

    /**
     * JokeFactory - The Madness Starts Here!
     *
     * @param array $jokes
     */
    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    /**
     * Return a random joke to the caller.
     */
    public function getRandomJoke(): string
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
