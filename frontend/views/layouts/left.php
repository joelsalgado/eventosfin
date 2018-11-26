<aside class="main-sidebar">

    <section class="sidebar">
        <?php if(Yii::$app->user->id): ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Usuarios', 'icon' => 'user', 'url' => ['/user'], 'visible' => $user = (Yii::$app->user->identity->role == 30) ? true : false],
                    ['label' => 'Registro', 'icon' => 'dashboard', 'url' => ['/metadato']],
                    ['label' => 'Iniciar Sesión', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>
        <?php endif; ?>

    </section>

</aside>
