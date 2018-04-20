<div class="container">
    <div class="row">
    <div class="col">
				<table class="table">
					<thead>
						<tr>
							<th>Data</th>
							<th>Nome</th>
						</tr>
					</thead>

					<tbody>

                        <?php
                        if (isset($ranking))
                        {
                            foreach($ranking as $rk)
                            {
                                echo '<tr>';
                                echo '<td>'.$rk->date.'</td>';
                                echo '<td>'.$rk->name.'</td>';
                                echo '<tr>';
                            }
                        }

                        ?>
					</tbody>
				</table>
			</div>
    </div>

</div>