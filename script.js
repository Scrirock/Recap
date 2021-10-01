/**
 * Animation title element
 */
let h1 = $("h1");
let h2 = $("h2");
let h3 = $("h3");

if (h1 && h2 && h3) {
    h1.animate({fontSize: "100px"}, 5000);
    h2.delay(5000).animate({right: -100}, 5000)
    h3.delay(5000).animate({right: -100}, 5000);
}

/**
 * Hide and show the section block
 */

let sections = $("section ul");
sections.css({"height": "0", "display": "none"});

let span = $(".arrow")
span.click((e)=>{
    let ul = e.target.parentNode.nextSibling.nextSibling
    if (ul.style.display === "block"){
        ul.style.height = "0";
        ul.style.display = "none";
        e.target.innerHTML = " ► ";
        console.log($(this))
    }
    else{
        ul.style.height = "100%";
        ul.style.display = "block";
        e.target.innerHTML = " ▼ ";
    }
});

/**
 *Change the color of the label's letter
 */

let j = 0;
function changeColor(){
    let spanLetter = $("form span");
    if (j < spanLetter.length){
        let red = [15, 155, 78, 35, 250, 46, 98, 50, 3, 245, 65, 150, 20, 97, 46, 31, 158];
        let green = [95, 15, 65, 32, 150, 245, 98, 45, 150, 26, 78, 62, 18, 148, 64, 150, 195];
        let blue = [255, 64, 150, 64, 85, 150, 145, 78, 120, 12, 26, 48, 150, 150, 147, 255, 20];
        spanLetter[j].style.color = "rgb("+ red[j] + ", " + green[j] + ", " + blue[j] +")";
        spanLetter[j].style.fontStyle = "italic";
    }
    else{
        for (let ii = 0; ii < spanLetter.length; ii++){
            spanLetter[ii].style.color = "black";
            spanLetter[ii].style.fontStyle = "initial";
        }
        j = -1;
    }
    j++;
}



let colorInterval;
let letterArray = [];
labels = $("label");
/**
 * for each label add a listener to check if the user put his cursor on a  label element
 * and a listener to know when his cursor leaves the element
 */
labels.mouseenter(function(){
    let letterArraySpan = [];
    letterArray = [];
    for (let i = 0; i < $(this).html().length; i++){
        letterArraySpan.push("<span>" + $(this).html().charAt(i) + "</span>");
        letterArray.push($(this).html().charAt(i));
    }
    $(this).html(letterArraySpan.toString().replace(/,/ig, ""));
    colorInterval = setInterval(changeColor, 500);
});

labels.mouseleave(function(){
    let spanLetter = $("form span");
    spanLetter.css({"color": "black", "font-style": "initial"});
    clearInterval(colorInterval);
    $(this).html(letterArray.toString().replace(/,/ig, ""));
    j = 0;
});

/**
 * Change the css of the figure and figcaption element
 */
let figure = $("figure");
let figcaption = $("figcaption");

if (figure && figcaption){
    figure.css({
        "border": "thin #c0c0c0 solid",
        "display": "flex",
        "flex-flow": "column",
        "padding": "5px",
    });

    figcaption.css({
        "background-color": "#222",
        "color": "#fff",
        "font": "italic smaller sans-serif",
        "padding": "3px",
        "text-align": "center"
    });
}

/**
 * Add a flip card effect to the figure element
 */
let card = $("#card");
if (card){
    card.click(()=>{
        card.toggleClass("flipcard");
    })
}

/**
 * read json + create element dd and ul
 */

let xhrdd = new XMLHttpRequest();
xhrdd.onload = function() {
    let message = JSON.parse(xhrdd.responseText);
    let dlMessage = document.querySelector("dl");

    dlMessage.innerHTML += `
                <dd>${message.content}</dd>
            `;
};

xhrdd.open('GET', '/dd.json');
xhrdd.send();

let xhrul = new XMLHttpRequest();
xhrul.onload = function() {
    let message = JSON.parse(xhrul.responseText);
    let ulMessage = document.querySelector(".container");

    ulMessage.innerHTML += `
                <ul>
                    ${message.content}
                </ul>
            `;

};

xhrul.open('GET', '/ul.json');
xhrul.send();