<x-nav2>

@vite(['resources\js\components\bills.js'])

<div class="d-flex bg-body-tertiary position-absolute top-50 start-50 translate-middle z-2 invisible"  style="height: 100vh; width:100vw" id="overlay">
<main class="container form-signin w-25 m-auto">
  <form class=" align-middle" method="POST" action="/saleAdd">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Add Items</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name='name' placeholder="Name">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" name='Price' placeholder="Price">
      <label for="floatingInput">Price</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name='linkTo' placeholder="Link To">
      <label for="floatingInput">Link to</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Sale Add</button>
  </form>
</main>
</div>
</x-nav2>