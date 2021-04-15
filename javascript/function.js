"using strict"

function hidden_noHidden(event)
{
    let li = event['target'];
    let ul = li.children[0];
    if(ul.style.display == "block")
    {
        ul.style.display = "none"
    }
    else
    {
        ul.style.display = "block";
    }
}

function recherchePage(event)
{
    event.preventDefault();
    let minuscule = recherche.value.toLowerCase();
    let spliter = minuscule.split(" ");
    console.log(spliter);
    let rechercher = pages[0];
    console.log(rechercher);
    for(let x = 0; x < spliter.length; x ++)
    {
        rechercher = rechercher[spliter[x]];
        rechercher = rechercher[0];
        console.log(rechercher);
    }
    console.log(rechercher);
    window.location.href = (rechercher["url"]);
}