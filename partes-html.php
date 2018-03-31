<?php
   
    function crear_menu(){
        $menu_sistema="
        <div id='menu_principal' >
            
            <a href='#'>
                <div id='menu_icono' class='infoglobo'>
                    <span class='infotexto'>Click para abrir y cerrar el menú</span>
                </div>
            </a>
            <div id='menu_items'>
                <a href='#'>
                    <div class='menu_item'>
                        <div class='menu_item_icon'></div>
                        <div class='menu_item_texto'>
                            Administrar Sistema
                        </div>
                    </div>
                </a>
            </div>
        </div>
    ";

        echo "$menu_sistema";
        return 1;
    }
    
    
?>