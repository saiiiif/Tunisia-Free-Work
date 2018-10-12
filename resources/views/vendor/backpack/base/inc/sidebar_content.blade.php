<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>gére les Catégories</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('categorie') }}"><i class="fa fa-tag"></i> <span>Catégories</span></a></li>
     
    </ul>
    <li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>gére les utilisateurs</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('membre') }}"><i class="fa fa-tag"></i> <span>Utilisateur</span></a></li>
     
    </ul>
    
    <li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>gére les postes</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('post') }}"><i class="fa fa-tag"></i> <span>Postes</span></a></li>
     
    </ul>