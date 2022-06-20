let anchors = document.querySelectorAll(".anchors")

for(let i=0;i<=anchors.length;i++){
  anchors[i].addEventListener('click',()=>{
    console.log("1")
    setTimeout(()=>{
      document.getElementById("products").scrollIntoView({
        behavior: "smooth",
        block: "start",
      })
    },200)
  })
}