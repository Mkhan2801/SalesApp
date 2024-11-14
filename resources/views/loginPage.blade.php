
    

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<div class="d-flex align-items-center py-4 bg-body-tertiary"  style="height: 100vh;">
<main class="container form-signin w-25 m-auto">
  <form class=" align-middle" method="POST" action="/singIn">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name='username'>
      <label for="floatingInput">User Name</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name='password'>
      <label for="floatingPassword">Password</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
  </form>
</main>



















</div>