<li style="font-size: 12px;" class="dropdown">
    <a href="#" class="sub-menu-toggle">
        {{ __('Generalidades ') }}
        <span class="caret">
            <i class="fas fa-cogs"></i>
        </span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="/procedimientoTecnico/PDF" style="cursor: pointer">{{ __('Procedimiento Técnico ') }}</a>
        </li>
        <li>
            <a href="/diagnostico/PDF" style="cursor: pointer">{{ __('Diagnóstico ') }}</a>
        </li>
        <li>
            <a href="/mapaProcesos/PDF" style="cursor: pointer">{{ __('Mapa de Procesos ') }}</a>
        </li>
    </ul>
</li>


<li style="font-size: 12px;" class="dropdown">
    <a href="#" class="sub-menu-toggle">
        {{ __('Resumen Técnico ') }} <span class="caret"><i class="fas fa-indent"></i></span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="/informes" style="cursor: pointer">{{ __('Informes ') }}<i class="fas fa-paste"></i></a>
        </li>
        <li>
            <a href="/horometro" style="cursor: pointer">{{ __('Horómetros ') }}<i class="fas fa-paste"></i></a>
        </li>
    </ul>
</li>



<li style="font-size: 12px;" class="dropdown">
    <a href="#" class="sub-menu-toggle"></i> {{ __('Operación ') }} <span class="caret"><i
                class="fas fa-user-plus"></i></span></a>
    <ul class="sub-menu">
        <li>
            <a href="/horometro/create" style="cursor: pointer">{{ __('Horómetro ') }}<i
                    class="fas fa-stopwatch"></i></a>
        </li>
        <li>
            <a href="/servicio/create" style="cursor: pointer">{{ __('Usuarios ') }}<i
                    class="fas fa-plus-circle"></i></a>
        </li>
    </ul>
</li>

<li style="font-size: 12px;" class="dropdown">
    <a href="#" class="sub-menu-toggle">
        {{ __('Supervisión ') }} <span class="caret"><i class="fas fa-clipboard-check"></i></span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="/checkListOperativa/create" style="cursor: pointer">{{ __('Operativa ') }}</a>
            <a href="/checkListProceso/create" style="cursor: pointer">{{ __('Proceso ') }}<i
                    class="fas fa-user-plus"></i></a>
            <a href="/checkListSeguridad/create" style="cursor: pointer">{{ __('Seguridad de Higiene ') }}<i
                    class="fas fa-hand-sparkles"></i></a>
            <!-- <a href="/" style="cursor: pointer">{{ __('Mantenimiento    ') }}<i class="fas fa-tools"></i></a> -->
        </li>
    </ul>
</li>
<li style="font-size: 12px;" class="dropdown">
    <a href="#" class="sub-menu-toggle">
        {{ __('Mantenimiento ') }} <i class="fas fa-tools"></i></span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="/cartaCuarentaHoras" style="cursor: pointer">{{ __('Mantenimiento 40 Hrs ') }}<i
                    class="fas fa-business-time"></i></a>
            <a href="/cartaCientoVeinteHoras" style="cursor: pointer">{{ __('Mantenimiento 120 Hrs ') }}<i
                    class="fas fa-business-time"></i></a>
            <a href="/cartaCartaMilHoras" style="cursor: pointer">{{ __('Mantenimiento 1000 Hrs ') }}<i
                    class="fas fa-business-time"></i></a>
            <a href="/cartaCartaDosMilHoras" style="cursor: pointer">{{ __('Mantenimiento 2000 Hrs ') }}<i
                    class="fas fa-business-time"></i></a>
        </li>
    </ul>
</li>