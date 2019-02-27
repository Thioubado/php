    <?php
        $parfums = [
            'Fraise' => 4,
            'Chocolat' => 5,
            'Vanille' => 3 
        ];
        $cornets = [
            'pots' => 2,
            'cornet' => 3,
        ];
        $supplements = [
            'Pépite de chocolat' => 1,
            'Chantilly' => 0.5
        ];
        

        require 'header.php';

        function checkbox(string $name, string $value, array $data): string{
            $attributes = '';
            if(isset($data[$name]) && in_array($value, $data[$name])){
                $attributes.= 'checked';
            }
            

            return <<<HTML
                <input type="checkbox" name="{$name}[]" value = "$value" $attributes>
HTML;
        }

        function radio(string $name, string $value, array $data): string{
            $attributes = '';
            if(isset($data[$name]) && ($value === $data[$name])){
                $attributes.= 'checked';
            }
            

            return <<<HTML
                <input type="radio" name="{$name}" value = "$value" $attributes>
HTML;
        }

        $ingredients = [];
        $total = 0;
        if(isset($_GET['parfum'])){
            foreach($_GET['parfum'] as $parfum){
                if(isset($parfums[$parfum])){
                    $ingredients[] = $parfum;
                    $total += $parfums[$parfum];
                }
            }
        }
        if(isset($_GET['supplement'])){
            foreach($_GET['supplement'] as $supplement){
                if(isset($supplements[$supplement])){
                    $ingredients[] = $supplement;
                    $total += $supplements[$supplement];
                }
            }
        }
        if(isset($_GET['cornet'])){
            $cornet = $_GET['cornet'];
                if(isset($cornets[$cornet])){
                    $ingredients[] = $cornet;
                    $total += $cornets[$cornet];
                }
        }
    ?>
    

    <h1>Composer votre glace</h1>
    
   
    <div class="row">
        <div class="col-md-4">
            <h2>Votre glace</h2>
            <ul>
                <?php foreach($ingredients as $ingredient): ?>

                    <li><?php echo $ingredient; ?></li>
                <?php endforeach ?>
            </ul>
            <p>
                <strong>Prix : </strong> <?php echo $total ?> €
            </p>
        </div>
        <div class="col-md-8">
        <form action="traitementDeFormulaire.php" method = "GET">
        <h2>Choississez vos parfums</h2>
        <?php foreach($parfums as $parfum => $prix): ?>
            <div class="checkbox">
                <label>
                    <?php echo checkbox('parfum', $parfum, $_GET) ?>
                    <?php echo $parfum ;?> - <?php echo $prix ?> €
                </label>
            </div>

        <?php endforeach ?>

        <h2>Choisissez vos cornets</h2>

        <?php foreach($cornets as $cornet => $prix): ?>
            <div class="checkbox">
                <label>
                    <?php echo radio('cornet', $cornet, $_GET) ?>
                    <?php echo $cornet ;?> - <?php echo $prix ?> €
                </label>
            </div>

        <?php endforeach ?>
        
        <h2>Choisissez vos suppléments</h2>
        <?php foreach ($supplements as $supplement => $prix): ?>
            <div class="checkbox">
                <label>
                    <?php echo checkbox('supplement', $supplement, $_GET) ?>
                    <?php echo $supplement ?> - <?php echo $prix ?> €
                </label>
            </div>

        <?php endforeach ?>

        <button type="submit" class="btn btn-primary">Composer ma glace</button>

    </form>
        </div>
    </div>
    


    <h1>$_GET</h1>
        <pre>
            <?php var_dump($_GET); ?>
        </pre>

    <h1>$_POST</h1>
        <pre>
            <?php var_dump($_POST); ?>
        </pre>