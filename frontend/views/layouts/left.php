<aside class="main-sidebar">

    <section class="sidebar">
        <?php if(Yii::$app->user->id): ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Usuarios', 'icon' => 'address-book', 'url' => ['/user'], 'visible' => $user = (Yii::$app->user->identity->role == 30) ? true : false],
                    ['label' => 'Registro', 'icon' => 'user', 'url' => ['/metadato']],
                    ['label' => 'Iniciar Sesión', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Cerrar Sesión', 'icon' => 'power-off', 'url' => ['/site/logout'],
                        'template' => '<a href="{url}" data-method="post"><span class="glyphicon glyphicon-off"></span>{label}</a>'
                    ],
                ],
            ]
        ) ?>
        <?php endif; ?>

    </section>

</aside>
