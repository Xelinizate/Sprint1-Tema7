<?php

declare(strict_types=1);

namespace Src;


class GrauEstudiant{

        function verificaGrau ($nota){
            if ($nota == 100 || $nota >= 60):
                return "Primera Divisió";

            elseif($nota <= 59 || $nota >=45):
                return "Segona Divisió";

            elseif($nota <= 44 || $nota >= 33):
                return "Tercera Divisó";

            else:
                return "L'estudiant reprovarà";
            endif;
        }

    }
    

?>