      <?php
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        switch ($lang){
            case "en":
                //echo "PAGE EN";
                include("index_en.php");
                break;
            case "ru":
              include("index_ru.php");
              break;
            default:
                //echo "PAGE EN - Setting Default";
                include("index_en.php");//include EN in all other cases of different lang detection
                break;
        }
?>
