<?php
if ($_POST['valeur']='') {
    echo 'Le fomulaire est vide';
}
elseif ($_POST['valeur'] == 'toto 1') {
    $tester = './star';
 }
 elseif ($_POST['valeur'] == -1 || $_POST['valeur'] == 1) {
  echo '    * $ <br>'.
        '*** *** $<br>'.
          '*  * $<br>'.
        '*** *** $ <br>'.
           ' * $ <br>';
                 
 }
 elseif ($_POST['valeur'] == 1) {
    echo '

                        *
                        * *<br>
                     *     *<br>
                    *           *<br>
                  *                  *<br>
       ***********                     ***********<br>
        *                                       *<br>
          *                                   *<br>
            *                               *<br>
              *                            *<br>
                *                       *<br>
               *                         *<br>
             *                             *<br>
           *                                 *<br>
        *                                      *<br>
       **********                     ***********<br>
                *                     *<br>
                    *               *<br>
                        *        *<br>
                        *      *<br>

    ';
 }
 else
 echo 'vide';