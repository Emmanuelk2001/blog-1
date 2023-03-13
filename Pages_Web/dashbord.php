<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
    <title>Document</title>
</head>

<body>
    <!-- !-->
    <?php require_once('header_session.php');?>

    <div class="panneau-control">
        <div class="menu-nav">
            <ul>
                <li class="dashbord-link" id="click_addPost">Ajouter un post</li>
                <li class="dashbord-link" id="click_managePost">Gestion des Posts</li>
                <li>Gestion de Profils</li>
                <li>Gestion de Catégories</li>
                <li>Ajouter des Catégories</li>
            </ul>
        </div>

        <div class="menu-contain">

            <div class="manage-post" id="manage-post">
                <h2>Gestion des Posts</h2>
                <table>
                    <tr>
                        <th>Titre(s)</th>
                        <th>Catégorie(s)</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>

                    <tr>
                        <td>Similtudes d'evolution technologique</td>
                        <td>Technologie</td>
                        <td><span class="modif">Modifier</span></td>
                        <td><span class="Supp">Supprimer</span></td>
                    </tr>
                    <tr>
                        <td>Similtudes d'evolution technologique</td>
                        <td>Technologie</td>
                        <td><span class="modif">Modifier</span></td>
                        <td><span class="Supp">Supprimer</span></td>
                    </tr>
                </table>

            </div>

            <div class="add-post active-link" id="add-post">
                <h2>Ajouter un post</h2>
                <form>
                    <input type="text" id="text" name="text" placeholder="Nom de l'article">
                    <select name="" id="select">
                        <option value="1">Technologie</option>
                        <option value="2">Sciences</option>
                        <option value="3">Informatique</option>
                        <option value="4">JavaScript</option>
                    </select>

                     <textarea>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, praesentium quos sunt commodi quod mollitia sit 
                        eius amet tempore nulla, voluptatum accusantium magni culpa laborum consectetur cupiditate placeat perspiciatis provident! </textarea>
                    <input type="checkbox" name="Publish" id="">
                    <label for="Status"
                        style="font-size: 0.8rem; margin: 5px; color: #fff;opacity: 0.7;">Publish</label>
                    <p>Ajouter une image à l'article</p>
                    <input type="file" id="photo-article" name="photo-article" accept="image/png, image/jpeg">
                    <input type="submit" value="Ajouter">
                </form>
            </div>

        </div>


    </div>

</body>

<script src="Pages_Web/index.js"></script>

</html>