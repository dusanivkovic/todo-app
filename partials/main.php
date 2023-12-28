<div class="container">
    <form action="newtodo.php" method="post" class="row align-items-end">
            <div class="input-group mb-3">
                <input type="text" name="todo-task" class="form-control" placeholder="Add tasks" >
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Submit</button>
            </div>
    </form>
    <div class="row justify-content-around">
        <div class="card text-center col-md-4">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer text-body-secondary">
                <input name="completed" type="checkbox" class="mx-2" value="">Completed
            </div>
        </div>
    </div>

</div>