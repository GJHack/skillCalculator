window.addEventListener("load",initCalc);

function initCalc() {
  let clickContainers = document.querySelectorAll(".clickCalc");
  for(let click of clickContainers) {
    click.addEventListener("mouseleave", (e) => {
      if(e.target.showed) {
        e.target.showed = false;
        //console.log(document.body.childNodes[1]);
        //console.log(e.target.parentNode);
        document.querySelector(".showedTextCalc").className = "hiddenTextCalc";
        e.target.parentNode.prepend(document.querySelector(".hiddenTextCalc"));
      }
    })
  }
  window.addEventListener("mousemove", (e) => {
    //console.log(e.clientX);
    //console.log(e.clientY);
    hiddenText(e);
  })
  document.addEventListener("click", (e) => {
    if(e.target.className == "clickCalc") {
      //console.log("find");
    }
  })
}

function hiddenText(evt) {
  let elements, hiddenText, parent = evt.target;
  if(parent.className == "clickCalc" ) {
    elements = parent.parentNode.childNodes,
    hiddenText = parent.parentNode.querySelector(".hiddenTextCalc");
    //console.log(parent)
  } else {
    return false;
  }
  console.log(parent.noskill)
    if(!parent.showed) {
      console.log(hiddenText.childNodes[1].innerText);
      if(hiddenText.childNodes[1].innerText){
        parent.showed = true;
        hiddenText.className = "showedTextCalc";
        hiddenText.style.top = `${evt.pageY-hiddenText.offsetHeight}px`;
        hiddenText.style.left = `${evt.pageX-hiddenText.offsetWidth/2}px`;
        console.log("show!")
        document.body.prepend(hiddenText);
      }
    } else {
      document.querySelector(".showedTextCalc").style.top = `${evt.pageY-document.querySelector(".showedTextCalc").offsetHeight}px`;
      document.querySelector(".showedTextCalc").style.left = `${evt.pageX-document.querySelector(".showedTextCalc").offsetWidth/2}px`;
    }
}
