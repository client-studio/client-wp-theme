import Menu from "./menu";

class Index {
   init() {
      this.menu();
   }

   menu () {
      const menu = new Menu();

      let btn = document.querySelector(".menu-btn")
      if (btn) {
         menu.toggle_nav(btn);
         menu.toggle_menu(btn);
      }

      let info = document.querySelector(".infobar")
      if (info) {
         menu.toggle_info(info);
      }
   }

   go(fn, div) {
      let items = document.querySelectorAll(div)
      if (items[0]){
         items.forEach(item => {
            fn(item)
         })
      }
   }
}

window.addEventListener("load", () => {
   const index = new Index();
   index.init();
});
