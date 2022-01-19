<?php

namespace App\Services;

//use Illuminate\Support\Facades\Cache; -> Previous one
use Illuminate\Contracts\Cache\Factory as Cache;// equivalent interface of the facade
use Illuminate\Contracts\Session\Session;// equivalent interface of the facade

class Counter
{
    private $timeout;
    public function __construct(Cache $cache, Session $session, int $timeout)
    {
        $this->cache = $cache;
        $this->session = $session;
        $this->timeout = $timeout;
    }
    public function increment(string $key): int
    {
        $cache=$this->cache;
        $sessionId = $this->session->getId();
        $counterKey = "{$key}-counter";
        $usersKey = "{$key}-users";

        $users = $cache->get($usersKey, []);
        $usersUpdate = [];
        $diffrence = 0;
        $now = now();

        foreach ($users as $session => $lastVisit) {
            if ($now->diffInMinutes($lastVisit) >= $this->timeout) {
                $diffrence--;
            } else {
                $usersUpdate[$session] = $lastVisit;
            }
        }

        if(
            !array_key_exists($sessionId, $users)
            || $now->diffInMinutes($users[$sessionId]) >= $this->timeout
        ) {
            $diffrence++;
        }

        $usersUpdate[$sessionId] = $now;
        $cache->forever($usersKey, $usersUpdate);

        if (!$cache->has($counterKey)) {
            $cache->forever($counterKey, 1);
        } else {
            $cache->increment($counterKey, $diffrence);
        }

        $counter = $cache->get($counterKey);

        return $counter;
    }
} 