<?php
session_start();

if(!isset($_SESSION['panier']))
{
    $ajout = false;
    
    if(!isset($_SESSION['panier']['verrouille']) || $_SESSION['panier']['verrouille'] == false)
    {
        $_SESSION['panier'] = array();

        $_SESSION['panier']['id_article'] = array();
        $_SESSION['panier']['qte'] = array();
        $_SESSION['panier']['taille'] = array();
        $_SESSION['panier']['prix'] = array();
    }
}

function verif_panier($ref_article) // == id de l'article
{
    $present = false;
    
    if(count($_SESSION['panier']['id_article']) > 0 && array_search($ref_article,$_SESSION['panier']['id_article']) !== false)
    {
        $present = true;
    }
    return $present;
} 

function ajout_panier($id, $qte, $taille, $prix)
{
    $select = array();
    $select['id'] = $id; //string
    $select['qte'] = $qte; //number
    $select['taille'] = $taille; //number
    $select['prix'] = $prix; //number

    $ajout = false;

    if(!isset($_SESSION['panier']['verrouille']) || $_SESSION['panier']['verrouille'] == false)
    {
        if(!verif_panier($select['id']))
        {
            array_push($_SESSION['panier']['id_article'],$select['id']);
            array_push($_SESSION['panier']['qte'],$select['qte']);
            array_push($_SESSION['panier']['taille'],$select['taille']);
            array_push($_SESSION['panier']['prix'],$select['prix']);
            $ajout = true;
        } else {
            $ajout = modif_qte($select['id'],$select['qte']);
        }
    }
    return $ajout;
}

function montant_panier()
{
    $montant = 0;

    $nb_articles = count($_SESSION['panier']['id_article']);

    for($i = 0; $i < $nb_articles; $i++)
    {
        $montant += $_SESSION['panier']['qte'][$i] * $_SESSION['panier']['prix'][$i];
    }

    return $montant;
}

function modif_qte($ref_article, $qte)
{
    $nb_articles = count($_SESSION['panier']['id_article']);

    $ajoute = false;

    for($i = 0; $i < $nb_articles; $i++)
    {
        if($ref_article == $_SESSION['panier']['id_article'][$i])
        {
            $_SESSION['panier']['qte'][$i] = $qte;
            $ajoute = true;
        }
    }

    return $ajoute;
}

function supprim_article($ref_article)
{
    $suppression = false;

    $panier_tmp = array("id_article"=>array(),"qte"=>array(),"taille"=>array(),"prix"=>array());

    $nb_articles = count($_SESSION['panier']['id_article']);

    for($i = 0; $i < $nb_articles; $i++)
    {
        if($_SESSION['panier']['id_article'][$i] != $ref_article)
        {
            array_push($panier_tmp['id_article'],$_SESSION['panier']['id_article'][$i]);
            array_push($panier_tmp['qte'],$_SESSION['panier']['qte'][$i]);
            array_push($panier_tmp['taille'],$_SESSION['panier']['taille'][$i]);
            array_push($panier_tmp['prix'],$_SESSION['panier']['prix'][$i]);
        }
    }

    $_SESSION['panier'] = $panier_tmp;

    unset($panier_tmp);

    $suppression = true;

    return $suppression;
}

function vider_panier()
{
    $vide = false;

    unset($_SESSION['panier']);

    if(!isset($_SESSION['panier']))
    {
        $vide = true;
    }

    return $vide;
}

function preparerPaiement()
{
    $_SESSION['panier']['verrouille'] = true;
    header("location: URL_DU_SITE_DE_BANQUE");
}
?>

<pre>
<?php
var_dump($_SESSION['panier']);
?>
</pre>