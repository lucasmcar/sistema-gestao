<?php
require('../../vendor/autoload.php');
use App\bean\FuncaoBean;

$bean = new FuncaoBean();
?>
<h1>Visão geral</h1>
<hr>

   <div class="flex-container">

        <div class="card-group">
            <div class="card">
                <div class="card-header">
                    <h3>Titulo 1</h3>
                </div>
                <div class="card-body">
                <p class="text-j">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Etiam eu turpis in nibh condimentum viverra quis non sem. 
                    Mauris pellentesque erat urna, eu dignissim odio varius in. 
                    Donec sit amet suscipit tortor. Quisque imperdiet velit vulputate, finibus dolor ac, 
                    volutpat velit. Sed ullamcorper felis sapien, et commodo enim tristique at. 
                    Aliquam quis turpis ac mauris rhoncus elementum eu in lorem. 
                    In vel porta ante. Sed non augue semper, vulputate magna ut, sollicitudin sapien.
                </p> 
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>Titulo 2</h3>
                </div>
                <div class="card-body">
                <p class="text-j">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Etiam eu turpis in nibh condimentum viverra quis non sem. 
                    Mauris pellentesque erat urna, eu dignissim odio varius in. 
                    Donec sit amet suscipit tortor. Quisque imperdiet velit vulputate, finibus dolor ac, 
                    volutpat velit. Sed ullamcorper felis sapien, et commodo enim tristique at. 
                    Aliquam quis turpis ac mauris rhoncus elementum eu in lorem. 
                    In vel porta ante. Sed non augue semper, vulputate magna ut, sollicitudin sapien.
                </p> 
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>Funções</h3>
                </div>
                <div class="card-body">
                <p class="text-j">
                    Total de funções: <?php echo $bean->recuperaTotalFuncoes(); ?>
                </p> 
                </div>
            </div>
            
        </div>
       
   </div>

