      <div class="starter-template">
        <h1>Test Center</h1>
        <p class="lead">CRUD<br></p>
      </div>

      <div class="container">
      <h3>Test List</h3>
		<ul>
			<?php foreach ($userTest as $test) : ?>
			<li> <?php echo $test['name'] . " " . $test['description']; ?> </li>
			<?php endforeach; ?>
		</ul>

  <table class="table">
    <thead>
      <tr>
        <th>Course Name</th>
        <th>Description</th>
        <th>Duration</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td> 
          <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span> Del
          </button>

          <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
          </button>
        </td>
      </tr>
      <tr class="danger">
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>
          <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span> Del
          </button>

          <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
          </button>

        </td>
      </tr>
      <tr class="info">
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>
          <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span> Del
          </button>

          <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
          </button>
        </td>
      </tr>
    </tbody>
  </table>



      </div>

