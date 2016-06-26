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


      </div>

