<nav>
    <div class="header">
        
        <div class="avatar">
            <a class="avatar" href="#"><img src="<?=MAIN_PREFIX?>/app/img/icons/avatar.svg"></a>

        </div>
        <div class="menu">
            <a class="menu__item" ><?= Libs\User::getName() ?> </a>
            <a class="menu__item menu__item_active" href="/pahotina/diploma/proj/">Проекты</a>
            <a class="menu__item">Календарь</a>
            <a class="menu__item">Профиль</a>
        </div>

        
        <div class="menu-end">
            <div class="bell icon-bell"></div>
            <a class="menu__item" href="<?= MAIN_PREFIX ?>/reg/logout">Выйти</a>
        </div>
    </div>
</nav>