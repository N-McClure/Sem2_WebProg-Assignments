//Show that the Files are Connected:
console.log("CONNECTED...");

//The Array of my Images:
let Images = [
    "MultiMedia/GirlOnFire.JPG",
    "MultiMedia/BlueAndYellow.JPG",
    "MultiMedia/Fishing.JPG",
    "MultiMedia/PrimarySun.JPG"
];

//The Paragraph Element:
let p = document.createElement("p");
let pNode = document.createTextNode("Click on Me to Generate a Random Image.");
p.appendChild(pNode);
document.body.appendChild(p);

//The Image Element: 
let img = document.createElement("img");
img.setAttribute("id", "randomImage");

//Function to Manipulate the DOM and Generate a Random Image:
p.addEventListener("click", RandomImage);
function RandomImage(event)
{
    let src = Images[Math.floor(Math.random()*Images.length)];
    img.setAttribute("src", src);
    document.body.appendChild(img);
}
