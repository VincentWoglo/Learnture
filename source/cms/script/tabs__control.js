let tabs = document.querySelectorAll ('.menu__list > li')
let panel = document.querySelectorAll ('.panel')

function ShowTabs(index, color){
    tabs.forEach((node)=>{
        node.style.backgroundColor = ""
        node.style.color = ""
    })
    tabs[index].style.backgroundColor = color
    tabs[index].style.color="black"
    panel.forEach((node)=>{
        node.style.display= "none"
    })
    panel[index].style.display="block"
    panel[index].style.backgroundColor=color
    
}

ShowTabs(0,"#fff")