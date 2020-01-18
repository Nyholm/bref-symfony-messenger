<?php declare(strict_types=1);

namespace Bref\Messenger\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('bref_messenger');

        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('sns')->canBeEnabled()->end()
                ->arrayNode('sqs')->canBeEnabled()->end()
            ->end()
        ->end();

        return $treeBuilder;
    }
}
