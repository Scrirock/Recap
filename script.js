let h1 = document.querySelector("h1");
let h2 = document.querySelector("h2");
let h3 = document.querySelector("h3");

/**
 * Animation for the title
 */
if (h1 && h2 && h3){
    h1.animate([

        { transform: 'translateX(-300px)' },
        { transform: 'translateX(0px)' }
    ], {

        duration: 1000,
        iterations: 1
    });

    h2.animate([

        { transform: 'rotate(0deg)' },
        { transform: 'rotate(360deg)' }
    ], {

        duration: 1000,
        delay: 1000,
        iterations: 1
    });

    h3.animate([

        { transform: 'rotate(0deg)' },
        { transform: 'rotate(360deg)' }
    ], {

        duration: 1000,
        delay: 1000,
        iterations: 1
    });
}

/**
 *Hide and show section block
 */
let sections = document.querySelectorAll("section ul");
for (let section of sections){
    section.style.height = "0";
    section.style.display = "none";

    let span = document.querySelectorAll(".arrow")
    for (let arrow of span){
        arrow.addEventListener("click", (e)=>{
            let ul = e.target.parentNode.nextSibling.nextSibling
            if (ul.style.display === "block"){
                ul.style.height = "0";
                ul.style.display = "none";
                arrow.innerHTML = " ► ";
            }
            else{
                ul.style.height = "100%";
                ul.style.display = "block";
                arrow.innerHTML = " ▼ ";
            }

        })
    }
}

/**
 *Change the color of the label's letter
 */
let j = 0;
function changeColor(){
    let spanLetter = document.querySelectorAll("form span");
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

let flag = 1;
let colorInterval;
let letterArray = [];
labels = document.querySelectorAll("label");
/**
 * for each label add a listener to check if the user put his cursor on a  label element
 * and a listener to know when his cursor leaves the element
 */
for (let label of labels){
    label.addEventListener("mouseover", ()=>{
        if (flag){
            let letterArraySpan = [];
            letterArray = [];
            for (let i = 0; i < label.innerHTML.length; i++){
                letterArraySpan.push("<span>" + label.innerHTML.charAt(i) + "</span>");
                letterArray.push(label.innerHTML.charAt(i));
            }
            flag = 0;
            label.innerHTML = letterArraySpan.toString().replace(/,/ig, "");
            colorInterval = setInterval(changeColor, 500);
        }
    })

    label.addEventListener("mouseleave", ()=>{
        let spanLetter = document.querySelectorAll("form span");
        for (let i = 0; i < spanLetter.length; i++){
            spanLetter[i].style.color = "black";
            spanLetter[i].style.fontStyle = "initial";
        }
        clearInterval(colorInterval);
        label.innerHTML = letterArray.toString().replace(/,/ig, "");
        flag = 1;
        j = 0;
    });
}

/**
 * Change the css of the figure and figcaption element
 */
let figure = document.querySelector("figure");
let figcaption = document.querySelector("figcaption");

if (figure && figcaption){
    //figure
    figure.style.border = "thin #c0c0c0 solid";
    figure.style.display = "flex";
    figure.style.flexFlow = "column";
    figure.style.padding = "5px";

    //figcaption
    figcaption.style.backgroundColor = "#222";
    figcaption.style.color = "#fff";
    figcaption.style.font = "italic smaller sans-serif";
    figcaption.style.padding = "3px";
    figcaption.style.textAlign = "center";
}

/**
 * Add a flip card effect to the figure element
 */
let card = document.querySelector("#card");
card.addEventListener("click", ()=>{
    card.classList.toggle("flipcard");
})