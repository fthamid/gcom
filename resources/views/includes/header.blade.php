<h4 class="alert-heading">Unimatel  <span class="badge badge-secondary">GCOM</span></h4>

<ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" 
role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
  <li class="nav-item" role="presentation">
    <button class="nav-link  {{ request()->is('/') ? 'active' : '' }} rounded-5" id="home"  onClick="window.location.href='/'" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Accueil</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link {{ request()->is('clients') ? 'active' : '' }} rounded-5" id="clients" onClick="window.location.href='/clients'" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Clients</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link {{ request()->is('produits') ? 'active' : '' }} rounded-5" id="produits" onClick="window.location.href='/produits'" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Produits</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link {{ request()->is('factures') ? 'active' : '' }} rounded-5" id="factures" onClick="window.location.href='/factures'" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Factures</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link {{ request()->is('contact') ? 'active' : '' }} rounded-5" id="contact" onClick="window.location.href='/contact'" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Contact</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link {{ request()->is('test') ? 'active' : '' }} rounded-5" id="test" onClick="window.location.href='/test'" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Test</button>
  </li>
</ul>

