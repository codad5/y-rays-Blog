<?php

    if (!isset($_POST['themeMode'])) {
        # code...

            header('Content-Type: application/');

    }

     switch ($_POST['themeMode']) {
            case 'dark':
                $theme = 'dark';
                break;
                case 'light':
                $theme = 'light';
                    
                    break;
            
            default:
                # code...
                $theme = 'light';
                    

                break;
        }

    if (isset($_COOKIE['theme'])) {
        # code...
        
        setcookie("theme", $theme, time() + (259400 * 30), "../footer.php");
        
       
        
       
        

       


    }
    else{
       

        $_COOKIE['theme'] = $theme;
        
       
        // unset($_COOKIE['theme']);


    }

   

?>