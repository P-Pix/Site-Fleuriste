"using strict"

function hiddenNoHidden(event)
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

function acheter(event)
{
    event.preventDefault();
    panier ++;
    console.log(panier);
}

function prixTotal(event)
{
    event.preventDefault();
    let father_div = event["target"].parentNode;
    let father_child = father_div.parentNode.children;
    let nombre = father_child[1].value;
    let prixT = father_child[0].firstChild.data;
    let prixS = prixT.split(" ");
    let prixU = parseFloat(prixS[3]);
    let p = document.createElement("p");
    p.append(nombre * prixU)
    if(father_div.children.length > 1)
    {
        father_div.lastChild.remove();
    }
    console.log(father_div)
    console.log(p);
    father_child.append(p);
}