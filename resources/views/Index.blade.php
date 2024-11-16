<x-nav2>
<hr>
<x-sidebar>

<div class="mt-5 mb-5">

<div class=" container z-2 position-relative mt-3 mb-5 row row-cols-2 row-cols-md-5 mb-3 text-center" style="width: 70vw;" id="itemDiv">

   






</div>
</div>

<div class="d-flex bg-body-tertiary position-absolute top-50 start-50 translate-middle z-2 invisible"  style="height: 100vh; width:100vw" id="overlay">
<main class="container form-signin w-25 m-auto">
  <form class=" align-middle" method="POST" action="/employeeAdd">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Add Employee</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name='name' placeholder="Name">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name='employee_id' placeholder="Employee Id">
      <label for="floatingInput">Employee Id</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Save</button>
  </form>
</main>
</div>



<div class="d-flex bg-body-tertiary position-absolute top-50 start-50 translate-middle z-2 invisible"  style="height: 100vh; width:100vw" id="linkOverlay">
<main class="container form-signin w-25 m-auto">
  <form class=" align-middle" method="POST" action="/addMenu">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Add Menu</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name='name' placeholder="Item Name">
      <label for="floatingInput">Item Name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name='price' placeholder="Price">
      <label for="floatingInput">Price</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name='link_to' placeholder="Link To">
      <label for="floatingInput">Link To</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Save</button>
  </form>
</main>
</div>

@vite(['resources\js\components\index.js'])


</x-sidebar>

</x-nav2>