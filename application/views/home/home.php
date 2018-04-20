<div class="container">
    <div class="row">

        <?php

            if (isset($users))
            {
                foreach ($users as $user)
                {
                    echo '<div class="col-md-3 col-xs-12 box">';
                    echo    '<div class="card" style="width: 100%;">';
                    echo        '<img class="card-img-top" src="'.$this->config->config['base_url'].$user->photo.'">';
                    echo        '<div class="card-body">';
                    echo            '<p>Nome: '.$user->name.'</p>';
                    echo            '<label class="btn btn-success votar" data-id="'.$user->id.'">Votar</label>';
                    echo        '</div>';
                    echo    '</div>';
                    echo '</div>';
                }

                echo '<div class="col-12"><hr></div>';
            }
            
        ?>
    </div>
</div>

<div class="container">
    <?php
        if (isset($userDay))
        {
            echo '<div class="row">';
            echo '<div class="col-12">';
            echo '<h3>Rei do Almoço do dia '.date('d/m/Y').'  <span class="badge badge-primary">'.$userDay->name.'</span></h3>';
            echo '</div>';
            echo '</div>';


            echo '<div class="row">';
            echo '    <div class="col-12">';
            echo '        <img src="'.$this->config->config['base_url'].$userDay->photo.'" class="img-fluid mx-auto d-block">';
            echo '    </div>';
            echo '</div>';

            echo '<hr>';
        }
    ?>
</div>

<div class="container">
    <div class="row">
        <?php

            if (isset($lessLoved))
            {
                echo '<div class="col-12">';
                echo '<h3>Reis menos amadados da semana: </span></h3>';
                echo '</div>';

                foreach ($lessLoved as $user)
                {
                    echo '<div class="col-md-3 col-xs-12 box">';
                    echo '<div class="card" style="width: 100%;">';
                    echo '<img class="card-img-top" src="'.$this->config->config['base_url'].$user->photo.'">';
                    echo '<div class="card-body">';
                    echo '<p>Nome: '.$user->name.'</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }

                echo '<hr class="style-one">';
            }
            
        ?>
    </div>
</div>