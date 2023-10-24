<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="/">
            <img src="{$images}/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                {if $id_nivel eq 1}
                <li class="{if $activePage eq 'pendentes'}active{/if}{if $activePage eq ""}active{/if} has-sub">
                        <a class="js-arrow" href="{$pendentes}">
                            <i class="fa fa-tasks"></i>Pendentes</a>
                    </li>
                {/if}
                {if $id_nivel neq 1}
                <li class="{if $activePage eq 'viagem'}active{/if}{if $activePage eq ""}active{/if} has-sub">
                    <a class="js-arrow" href="{$viagem}">
                        <i class="fa fa-road"></i>Viagem</a>
                </li>
                {else}
                    <li class="{if $activePage eq 'viagem'}active{/if} has-sub">
                    <a class="js-arrow" href="{$viagem}">
                        <i class="fa fa-road"></i>Viagem</a>
                </li>
                {/if}
                <li class="{if $activePage eq 'aluguer'}active{/if} has-sub">
                    <a class="js-arrow" href="{$aluguer}">
                        <i class="fa fa-briefcase"></i>Aluguer</a>
                </li>
                <li class="has-sub">
                    <a href="#" onclick="event.preventDefault();">
                        <i class=""></i>
                    </a>
                </li>
                <li class="{if $activePage eq 'carga'}active{/if} has-sub">
                    <a class="js-arrow" href="{$carga}">
                        <i class="fa fa-archive"></i>Carga</a>
                </li>
                <li class="{if $activePage eq 'carro'}active{/if} has-sub">
                    <a class="js-arrow" href="{$carro}">
                        <i class="fa fa-truck"></i>Carros</a>
                </li>
                <li class="{if $activePage eq 'motorista'}active{/if} has-sub">
                    <a class="js-arrow" href="{$motorista}">
                        <i class="fa fa-user"></i>Motoristas</a>
                </li>
                <li class="{if $activePage eq 'equipamentos'}active{/if} has-sub">
                    <a class="js-arrow" href="{$equipamentos}">
                        <i class="fa fa-cogs"></i>Equipamentos</a>
                </li>
                {if $id_nivel eq 1}
                    <li class="{if $activePage eq 'funcionarios'}active{/if} has-sub">
                        <a class="js-arrow" href="{$funcionarios}">
                            <i class="fa fa-group"></i>Funcionários</a>
                    </li>
                {/if}
                <li class="{if $activePage eq 'clientes'}active{/if} has-sub">
                    <a class="js-arrow" href="{$clientes}">
                        <i class="fa fa-group"></i>Clientes</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

