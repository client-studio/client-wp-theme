import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

export default class Menu {
   constructor() {
      this.menu_is_open = false;
   }

   toggle_nav(btn) {
      let direction = -1;
      let anim = gsap.to("noheader", {
         y: -50,
         autoAlpha: 0,
         duration:0.5,
         ease: "power1.inOut",
         paused: true,
         onStart: () => {
            if (this.menu_is_open === true){
               btn.click();
            }
         }
      });

      ScrollTrigger.create({
         start: 100,
         end: "max",
         onUpdate: (self) => {
            if (self.direction !== direction) {
               self.direction === 1
                  ? anim.play(0)
                  : anim.reverse();
               direction = self.direction;
            }
         },
      });
   }

   toggle_info(bar) {
      let anim = gsap.to(bar, {
         duration:0.4,
         height:0,
         ease: "power1.inOut",
         paused: true,
      });

      ScrollTrigger.create({
         start: 0,
         end: 100,
         onLeave: () => {
            anim.play(0);
         },
         onEnterBack: () => {
            anim.reverse();
         }
      });
   }

   toggle_menu(btn) {
      btn.addEventListener("click", () => {
         let anim_menu = gsap.fromTo("#mobile-menu", {
            autoAlpha:0,
            height: 0,
         }, {
            autoAlpha: 1,
            height: "auto",
            ease: "power1.inOut",
            paused: true
         })

         let icons = btn.querySelectorAll("svg")
         icons.forEach(icon => {
            icon.classList.toggle("opacity-0")
         });

         this.menu_is_open ? anim_menu.reverse(0) : anim_menu.play(0);
         this.menu_is_open = !this.menu_is_open
      })
   }
}
