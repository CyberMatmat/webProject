<html lang="fr">
    <!DOCTYPE html>
<img src= <?php echo $image; ?> alt="image pour montrer l'activité de l'entreprise" class="background">
<div class="itemSolo">
        <div class="itemTitle">
            <h1><?php echo $name ?></h1>
            <?php include('../components/general/stars.php')?>
        </div>
        <div class="itemDomain">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path d="M153.6 29.9l16-21.3C173.6 3.2 180 0 186.7 0C198.4 0 208 9.6 208 21.3V43.5c0 13.1 5.4 25.7 14.9 34.7L307.6 159C356.4 205.6 384 270.2 384 337.7C384 434 306 512 209.7 512H192C86 512 0 426 0 320v-3.8c0-48.8 19.4-95.6 53.9-130.1l3.5-3.5c4.2-4.2 10-6.6 16-6.6C85.9 176 96 186.1 96 198.6V288c0 35.3 28.7 64 64 64s64-28.7 64-64v-3.9c0-18-7.2-35.3-19.9-48l-38.6-38.6c-24-24-37.5-56.7-37.5-90.7c0-27.7 9-54.8 25.6-76.9z"/>
            </svg>
            <span>
                <h3><?php echo $secteur ?></h3>
                <p>
                    <?php if ($nb_accepted != 0) : ?>
                        Déjà <?php echo $nb_accepted ?> candidatures acceptées
                    <?php else : ?>
                        Aucune candidature acceptée pour le moment
                    <?php endif ?>
                </p>
            </span>
        </div>
        <p class="itemDescription">
            <?php echo $description ?>
        </p>
        <div class="itemContact">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M384 192c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192z"/>
                </svg>
                <h3>Contact</h3>
            </span>
            <div>
                <p>
                    Mail : <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                </p>
                <p>
                    Addresss : <?php echo $address . ', ' . $city . ', ' . $country ?>
                </p>
            </div>
        </div>
</div>


    