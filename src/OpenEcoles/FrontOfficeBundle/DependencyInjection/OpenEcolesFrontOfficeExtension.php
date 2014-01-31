<?php

namespace OpenEcoles\FrontOfficeBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class OpenEcolesFrontOfficeExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $lists = $config["bundles"];

        $contenuCentral = array();
        $menuVertical = array();
        $menuHorizontal = array();

        foreach($lists as $list){
            foreach($list["menu_horizontal"] as $menuH){
                $menuHorizontal[] = array("lien"=>$menuH["lien"],"nom"=>$menuH["nom"]);
            }
           foreach($list["menu_vertical"] as $menuV){
                $menuVertical[] = array("lien"=>$menuV["lien"],"nom"=>$menuV["nom"],"badge"=>$menuV["badge"]);
            }
            foreach($list["contenu_central"] as $contenuC){
                $contenuCentral[] = array("action"=>$contenuC["render"]);
            }
/*        	$array = array("name"=>$list["name"],"menu_name"=> $list["menuname"], "accueil"=>$list["accueil"]);
        	$parametres[] = $array;	
*/        }

  //      $container->setParameter("bundles",$parametres);

        $container->setParameter("menu_horizontal",$menuHorizontal);
        $container->setParameter("menu_vertical",$menuVertical);
        $container->setParameter("contenu_central",$contenuCentral);


        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
