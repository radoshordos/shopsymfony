<?php
/**
 * Created by PhpStorm.
 * User: Rados
 * Date: 15.2.14
 * Time: 17:22
 */

namespace Admin\Prod\DphBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;


class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');


        $menu->

        $menu->addChild('User')
            ->setAttribute('dropdown', true);
        $menu['User']->addChild('Profile', array('uri' => '#'))
            ->setAttribute('divider_append', true);
        $menu['User']->addChild('Logout', array('uri' => '#'));

        return $menu;


        <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                        </ul>
                    </li>

    }
}


