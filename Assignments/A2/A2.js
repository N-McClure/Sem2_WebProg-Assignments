console.log("CONNECTED...");

//The Title Header:
let h1 = document.createElement("h1");
let h1Node = document.createTextNode("GLASS ONION: A KNIVES OUT MYSTERY");
h1.appendChild(h1Node);
document.body.appendChild(h1);

//Span of Tomato Rating:
let span = document.createElement("span");
let spanNode = document.createTextNode("93");
span.appendChild(spanNode);
document.body.appendChild(span);

//Actors Header:
let h2 = document.createElement("h2");
let h2Node = document.createTextNode("Actors");
h2.appendChild(h2Node);
document.body.appendChild(h2);

//List of Actors:
let actors = [
    "Daniel Craig",
    "Edward Norton",
    "Dave Bautista",
    "Kate Hudson"
];
let ul = document.createElement("ul");
for (let i = 0; i < actors.length; i++)
{
    let li = document.createElement("li");
    let liNode = document.createTextNode(actors[i]);
    li.appendChild(liNode);
    ul.appendChild(li);
    document.body.appendChild(ul);
}

//Director:
let p = document.createElement("p");
let pNode = document.createTextNode("Directed By: Rian Johnson");
p.appendChild(pNode);
document.body.appendChild(p);

//Link to Rotten Tomato Rating:
let a = document.createElement("a");
a.setAttribute("href", "https://www.rottentomatoes.com/m/glass_onion_a_knives_out_mystery");
let aNode = document.createTextNode("GLASS ONION: A KNIVES OUT MYSTERY on Rotten Tomatoes");
a.appendChild(aNode);
document.body.appendChild(a);
