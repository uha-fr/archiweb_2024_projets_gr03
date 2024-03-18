<?php include 'components/Sidebare.php';?>
<div class="p-4 sm:ml-64">
        <div class="p-4 mt-14"> 

            <table id="myTable">
                <thead>
                    <td>Identifiant</td>
                    <td>Nom</td>
                    <td>Prenom</td>
                    <td>Email</td>
                    <td>Genre</td>
                    <td>Operation</td>
                </thead>

                <tbody>

              
            <?php
            foreach ($users as $user) :
            ?>
                    <tr>

                        <td><?= $user['id_user'] ?></td>
                        <td><?= $user['firstname'] ?></td>
                        <td><?= $user['lastname'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['sexe'] ?></td>
                        <td> <a class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" href="deleteuser/<?= $user['id_user'] ?>"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>


        <?php

         endforeach
            
        ?>
          </tbody>
         </table>
        </div>

   
</div>
<script>

let table = new DataTable('#myTable');

</script>
