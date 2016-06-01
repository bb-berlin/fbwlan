    <div class="pure-g centered-row">
        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <p> <?php
                    if (isset($_SESSION['data']->back_to_code_widget->text)) 
                        echo $_SESSION['data']->back_to_code_widget->text;
                    else {
                        echo "If you do not want to check in, you can still use the access code! Just ask our staff about the Wi-Fi.";
                    } 
                ?> <p>
            </div>
        </div>
        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <p>
                    <a href="<?php echo $retry_url; ?>" class="pure-button button-secondary">
                        <i class="fa fa-play fa-lg"></i>
                        <?php 
                            if (isset($_SESSION['data']->back_to_code_widget->buttontext)){ 
                                echo $_SESSION['data']->back_to_code_widget->buttontext; 
                            }
                            else {
                                echo "Back";
                            }
                        ?>    
                    </a>
                </p>
            </div>
        </div>
    </div>
