@component('components.nav-link', [
    'icon' => 'fa fa-book',
    'title' => 'Agenda General',
    'link' => route('eventoA.index')
])
@endcomponent
@component('components.nav-link', [
    'icon' => 'fa fa-book',
    'title' => 'Calificaciones',
    'link' => route('calificacionDocente.index')
])
@endcomponent
@component('components.nav-dropdown', ['icon' => 'fa fa-comments', 'title' => 'Noticias'])

    @component('components.nav-link', [
        'icon' => 'fa fa-commenting-o',
        'link' => route('noticiasA.index'),
        'title' => 'Noticias'
    ])
    @endcomponent
    @component('components.nav-link', [
        'icon' => 'fa fa-comment-o',
        'title' => 'Nueva Noticia',
        'link' => route('noticiasA.create')
    ])
    @endcomponent
@endcomponent
@component('components.nav-link', [
    'icon' => 'fa fa-address-book-o',
    'title' => 'Observaciones',
    'link' => route('observacionDocente.index')
])
@endcomponent
@component('components.nav-link',[
    'icon' => 'fa fa-file',
    'title' => 'Reportes',
    'link' => route('reportes.index')
])
@endcomponent
<li class="nav-item">
    <a href="https://wennec.com/wennecaulas/" target="_blank" class="nav-link">
        <i class="fa fa-window-restore"></i>
        <span class="mini-click-non">Aula Virtual</span>
    </a>
</li>
