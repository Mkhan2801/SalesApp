
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<div class="bg-body-tertiary">


<div class="container z-3 position-fixed top-0 start-50 translate-middle-x bg-body-tertiary" style="max-width: 100vw;">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Simple header</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link {{ Request::path() == '/' ? 'active' : ''}}" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="/sales" class="nav-link  {{ Request::path() == 'sales' ? 'active' : ''}}">Sales</a></li>
        <li class="nav-item"><a href="/purchase" class="nav-link  {{ Request::path() == 'purchase' ? 'active' : ''}}">Bills</a></li>
        <li class="nav-item"><a href="/inventory" class="nav-link {{ Request::path() == 'inventory' ? 'active' : ''}}">Inventory</a></li>
        <li class="nav-item"><a href="/tally" class="nav-link {{ Request::path() == 'tally' ? 'active' : ''}}">Tally</a></li>
        <li class="nav-item"><a href="/singOut" class="nav-link text-danger">Logout</a></li>
      </ul>
    </header>
  </div>

  <div class="b-example-divider"></div>


  {{$slot}}


  <div class="b-example-divider"></div>

  <div class="container z-3 position-fixed bottom-0 start-50 translate-middle-x bg-body-tertiary" style="max-width: 100vw;">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      
	<div id="root"></div>
      <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
    </ul>
  </footer>
</div>
</div>

</div>