<x-nav2>
@vite(['resources\js\components\index.js'])
<hr>
<x-sidebar>

<div class="mt-5 mb-5">

<div class=" container z-2 position-relative mt-3 mb-5 row row-cols-2 row-cols-md-5 mb-3 text-center" style="width: 70vw;">

   


    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Chocolate</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Rs. 10</h1>
        
            <button type="button" class="w-100 btn btn-lg btn-primary">Add</button>
          </div>
        </div>
    </div> 


    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Chocolate</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Rs. 10</h1>
        
            <button type="button" class="w-100 btn btn-lg btn-primary">Add</button>
          </div>
        </div>
    </div> 






</div>
</div>

<div class="d-flex bg-body-tertiary position-absolute top-50 start-50 translate-middle z-2 invisible"  style="height: 100vh; width:100vw" id="overlay">
<main class="container form-signin w-25 m-auto">
  <form class=" align-middle" method="POST" action="/employeeAdd">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Add Items</h1>

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
</x-sidebar>

</x-nav2>