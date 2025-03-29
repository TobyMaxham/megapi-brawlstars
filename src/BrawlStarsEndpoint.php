<?php

namespace TobyMaxham\MegApiBrawlStars;

use Illuminate\Support\Str;
use Zhylon\MegapiClient\Exceptions\InvalidApiEndpointException;
use Zhylon\MegapiClient\Exceptions\InvalidApiEndpointParametersException;
use Zhylon\MegapiClient\MegApiClient;
use Zhylon\MegapiClient\MegApiEndpoint;

class BrawlStarsEndpoint implements MegApiEndpoint
{
    /**
     * @throws InvalidApiEndpointParametersException
     * @throws InvalidApiEndpointException
     */
    public function handle(MegApiClient $client, ...$parameters): mixed
    {
        if (! isset($parameters[1])) {
            throw new InvalidApiEndpointParametersException('Invalid API endpoint parameters');
        }

        switch ($parameters[0]) {
            case 'player':
            case '/player':
            case 'players':
            case '/players':
                return $this->players($client, $parameters[1]);
            case 'club':
            case '/club':
            case 'clubs':
            case '/clubs':
                return $this->clubs($client, $parameters[1]);
            case 'clubMember':
            case 'clubMembers':
            case 'clubsMembers':
            case '/clubMember':
            case '/clubMembers':
            case '/clubsMembers':
                return $this->clubsMembers($client, $parameters[1]);
            case 'battlelog':
            case 'playersBattlelog':
            case '/battlelog':
            case '/playersBattlelog':
                return $this->playersBattlelog($client, $parameters[1]);
        }

        throw new InvalidApiEndpointException('Invalid API endpoint: '.$parameters[0]);
    }

    protected function players(MegApiClient $client, string $playerTag): ?object
    {
        $playerTag = Str::replace('#', '', $playerTag);

        return $client->http()->get(
            config('services.megapi.endpoint').'/brawlstars/players/'.$playerTag
        )->object();
    }

    protected function clubs(MegApiClient $client, string $clubTag): ?object
    {
        $clubTag = Str::replace('#', '', $clubTag);

        return $client->http()->get(
            config('services.megapi.endpoint').'/brawlstars/clubs/'.$clubTag
        )->object();
    }

    public function clubsMembers(MegApiClient $client, string $clubTag): ?object
    {
        $clubTag = Str::replace('#', '', $clubTag);

        return $client->http()->get(
            config('services.megapi.endpoint').'/brawlstars/clubs/'.$clubTag.'/members'
        )->object();
    }

    public function playersBattlelog(MegApiClient $client, string $playerTag, bool $noCache = false): ?object
    {
        $playerTag = Str::replace('#', '', $playerTag);

        $query = [];
        if ($noCache) {
            $query['force-invalidate-cache'] = true;
        }

        return $client->http()->get(
            config('services.megapi.endpoint').'/brawlstars/players/'.$playerTag.'/battlelog',
            $query
        )->object();
    }
}
