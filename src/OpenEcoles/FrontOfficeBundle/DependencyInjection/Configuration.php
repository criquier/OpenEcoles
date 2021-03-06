<?php

namespace OpenEcoles\FrontOfficeBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('open_ecoles_front_office');
		
        $rootNode->children()
        			->arrayNode("bundles")
					    ->prototype("array")
                            ->children()
                                ->arrayNode("parametre")
                                    ->children()
                                        ->scalarNode("name")->end()
                                    ->end()
                                ->end()
                                ->arrayNode("menu_horizontal")
                                    ->prototype("array")
                                        ->children()
                                            ->scalarNode("lien")->end()
                                            ->scalarNode("nom")->end()
                                        ->end()
                                    ->end()
                                ->end()
                                ->arrayNode("menu_vertical")
                                    ->prototype("array")
                                        ->children()
                                            ->scalarNode("lien")->end()
                                            ->scalarNode("nom")->end()
                                            ->booleanNode("badge")->end()
                                        ->end()
                                    ->end()
                                ->end()
                                ->arrayNode("contenu_central")
                                    ->prototype("array")
                                        ->children()
                                            ->scalarNode("render")->end()
                                        ->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
        			->end()
        		->end();
        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
