<?php $a = 2; ?>
<a href="../pages/TuteurAdd.php" class="name"><h3>ajouter nouveau tuteur</h3></a>

<div class="list">
    <?php  
        include ('../class/gestions.php');
        $gestion = new Gestion($conn);        
        $list = $gestion->getTuteur();

        foreach($list as $user) {
            $id = $user['id_users'];
            $name = explode('.', $user['login'])[0];
            $surname = explode('.', $user['login'])[1];
            $promo = $user['name_promotion'];
            $campus= $user['name_campus'];
            $address = $user['address'];
            $country = $user['country'];
            $city = $user['city'];
            $status = $user['status'];
            $image = $user['image_users'];
            include('../components/general/itemListTuteur.php');
        }
    ?>
</div>
