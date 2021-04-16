<script>
    "using strict"
        
    let liste = document.querySelectorAll("#liste > li");
    let recherche = document.getElementById("recherche");
    let send = document.getElementById("recherche_exe");
    let panier = <?php echo $_SESSION['panier']?>;
    let achat = document.getElementsByClassName("achat");
    let totos = document.getElementsByClassName("total")
    let prix = 0;

    console.log(liste);
    console.log(totos)

    for(let fleur = 0; fleur < liste.length; fleur ++)
    {
        liste[fleur].addEventListener("click", hiddenNoHidden);
    }
    for(let total = 0; total < totos.length; total ++)
    {
        totos[total].addEventListener("click", prixTotal);
        achat[total].addEventListener("click", acheter);
    }
    send.addEventListener("click", recherchePage);
</script>