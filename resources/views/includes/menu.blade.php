<div class="panel panel-primary">
    <div class="panel-heading">Menu</div>
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
         @if(auth()->check())
            <li><a href="#" >Dashboard</a></li>
            <li><a href="#" >Ver Incidencias</a></li>
            <li><a href="#" >Reportar Incidencias</a></li>
            
             <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Administracion <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
               <li><a href="usuarios" >Usuarios</a></li>
               <li><a href="/proyectos" >Proyectos</a></li>
               <li><a href="/config" >Configuracion</a></li>
            </ul>
          </li>
         @else
            <li><a href="#" >Bienvenidos</a></li>
            <li><a href="#" >Instrucciones</a></li>
            <li><a href="#" >Creditos</a></li>
        @endif
         </ul>
        
          </div>
    
</div>




