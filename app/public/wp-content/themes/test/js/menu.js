const display_menu = () => {
  console.log("test");
  const menuBtn = document.getElementById("menu_btn");
  
  menuBtn.addEventListener("click", function() {
    console.log("click");
    document.getElementById('menu_id').style.display = 'flex';
    // document.getElementById("body").style.position = 'fixed';
    
    const menuCross = document.getElementById('menu_cross');
    
    menuCross.addEventListener("click", function() {
      console.log("click2");
      document.getElementById('menu_id').style.display = 'none';
      // document.getElementById("body").style.position = 'inherit';
    })
  })
};

// const display_menu = () => {
//   const menuBtn = document.getElementById("menu_btn")
//   menuBtn.addEventListener("click", function(){

//   });
// };

window.addEventListener("load", display_menu);