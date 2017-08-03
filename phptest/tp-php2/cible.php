<!-- isabelle, yoan, christophe, pascal -->


<?php
    
    require 'fonctions.php';
    var_dump( $_POST );
    //var_dump( $_SERVER );

    // if( isset($_POST['truc-muche-youpi'])  ) {
    //     $post = explode('-', 'truc-muche-youpi' );
    //     var_dump( $post ) ; exit;  
         
    // }

    

    if( !empty($_POST) ) {
        $formulaire = array();
        $erreurs = array();
    }

    if( !empty( $_POST ) ) foreach ( $_POST as $key => $value ) {
        $post = explode('-', $key );

        if( $post[0] == 'etat_civil' ) {

            if( $post[1] == 'conjoint' ) {

                $valeur = test_etat_civil_conjoint($key, $value, $post);  

                $valeur = test_etat_civil_conjoint($key, $value, $post);
                if( is_array($valeur) ) {
                    $erreurs[$post[0]][$post[1]][$post[2]] = $valeur['erreur'];
                }
                elseif( !is_null($valeur)) {
                    $formulaire[$post[0]][$post[1]][$post[2]] = $valeur; 
                }

                
                
            }
            elseif( $post[1] == 'enfant' ) {


                $valeur = test_etat_civil_enfant($key, $value, $post);

                if( is_array($valeur) ) {
                    $erreurs[$post[0]][$post[1]][$post[2]][$post[3]] = $valeur['erreur'];
                }
                elseif( !is_null($valeur)) {
                    $formulaire[$post[0]][$post[1]][$post[2]][$post[3]] = $valeur; 
                }   



            }    
            else {
                $valeur = test_etat_civil_vous($key, $value, $post);
                if( is_array($valeur) ) {
                    $erreurs[$post[0]]['vous'][$post[1]] = $valeur['erreur'];
                }
                elseif( !is_null($valeur)) {
                    $formulaire[$post[0]]['vous'][$post[1]] = $valeur; 
                }
                
                
                    
            }

            
        }
        elseif( $post[0] == 'credit' ) {
            $valeur = test_credit($key, $value, $post);  

            if( is_array($valeur) ) {
                $erreurs[$post[0]][$post[1]][$post[2]] = $valeur['erreur'];
            }
            elseif( !is_null($valeur)) {
                 $formulaire[$post[0]][$post[1]][$post[2]] = $valeur;
            }
            
        }

        elseif( $post[0] == 'fiscalite' ) {

            if( $post[1] == 'conjoint' ) {

                $valeur = test_fiscalite_conjoint($key, $value, $post);  

                if( is_array($valeur) ) {
                    $erreurs[$post[0]][$post[1]][$post[2]] = $valeur['erreur'];
                }
                elseif( !is_null($valeur)) {
                    $formulaire[$post[0]][$post[1]][$post[2]] = $valeur;
                }
               
            }
            else {
                
                $valeur = test_fiscalite_vous($key, $value, $post);  

                if( is_array($valeur) ) {
                    $erreurs[$post[0]]['vous'][$post[1]] = $valeur['erreur'];
                }
                elseif( !is_null($valeur)) {
                    $formulaire[$post[0]]['vous'][$post[1]] = $valeur;
                }
                    
            }
        }
        

    }

    if( !empty($_POST) ) {

    

        //if( count($formulaire['etat_civil']['vous'] ) != 15 ) $erreurs['etat_civil']['vous']['general'] = 'Il manque un champs';
        //if( isset($formulaire['etat_civil']['conjoint']) && count($formulaire['etat_civil']['conjoint'] ) != 15 ) $erreurs['etat_civil']['conjoint']['general'] = 'Il manque un champs';
        
        $array_client_luxembourg = false;
        $array_client_france = false;

        if( empty( $erreurs) ) {
            if( $formulaire['etat_civil']['vous']['nationalite'] == 'france' )  {
            $array_client_luxembourg = $formulaire;
            }
            elseif( $formulaire['etat_civil']['vous']['nationalite'] == 'luxembourg' ) {
                $array_client_france = $formulaire;
            }
            var_dump( $array_client_france, $array_client_luxembourg );
        }
        else {
            var_dump( $formulaire, $erreurs );
        }

        
        
    }
?>