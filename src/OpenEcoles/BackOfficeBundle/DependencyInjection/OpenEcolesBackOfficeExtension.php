<?php

namespace OpenEcoles\BackOfficeBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class OpenEcolesBackOfficeExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $lists = $config["backbundles"];

        $parametres = array();
        foreach($lists as $list){
            $array = array("name"=>$list["bname"],"menu_name"=> $list["bmenuname"], "accueil"=>$list["baccueil"]);
            $parametres[] = $array;
        }

        $container->setParameter("backbundles",$parametres);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
