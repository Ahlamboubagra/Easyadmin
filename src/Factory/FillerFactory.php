<?php

namespace App\Factory;

use App\Entity\Filler;
use App\Repository\FillerRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Filler>
 *
 * @method        Filler|Proxy create(array|callable $attributes = [])
 * @method static Filler|Proxy createOne(array $attributes = [])
 * @method static Filler|Proxy find(object|array|mixed $criteria)
 * @method static Filler|Proxy findOrCreate(array $attributes)
 * @method static Filler|Proxy first(string $sortedField = 'id')
 * @method static Filler|Proxy last(string $sortedField = 'id')
 * @method static Filler|Proxy random(array $attributes = [])
 * @method static Filler|Proxy randomOrCreate(array $attributes = [])
 * @method static FillerRepository|RepositoryProxy repository()
 * @method static Filler[]|Proxy[] all()
 * @method static Filler[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Filler[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Filler[]|Proxy[] findBy(array $attributes)
 * @method static Filler[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Filler[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class FillerFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'nom' => self::faker()->realText(10),
           
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Filler $filler): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Filler::class;
    }
}
