function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function _defineProperties(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function _createClass(e,t,n){return t&&_defineProperties(e.prototype,t),n&&_defineProperties(e,n),e}(window.webpackJsonp=window.webpackJsonp||[]).push([[25],{XWda:function(e,t,n){"use strict";n.r(t);var r=n("ofXK"),i=n("TEn/"),a=n("tyNb"),o=n("z+xu"),s=n("mrSG"),l=n("5RJW"),c=n("Q1LM"),d=n("bhBx"),u=n("fXoL");function g(e,t){if(1&e&&(u["\u0275\u0275elementStart"](0,"div",5),u["\u0275\u0275elementStart"](1,"div",6),u["\u0275\u0275elementStart"](2,"span"),u["\u0275\u0275text"](3,"S\xc9ANCE EN COURS"),u["\u0275\u0275elementEnd"](),u["\u0275\u0275elementEnd"](),u["\u0275\u0275elementStart"](4,"div",7),u["\u0275\u0275elementStart"](5,"span",8),u["\u0275\u0275text"](6),u["\u0275\u0275elementEnd"](),u["\u0275\u0275elementStart"](7,"span",9),u["\u0275\u0275text"](8),u["\u0275\u0275elementEnd"](),u["\u0275\u0275elementEnd"](),u["\u0275\u0275elementEnd"]()),2&e){var n=u["\u0275\u0275nextContext"]();u["\u0275\u0275advance"](6),u["\u0275\u0275textInterpolate2"]("",null==n.data?null:n.data.seance.classe," - ",null==n.data?null:n.data.seance.matiere,""),u["\u0275\u0275advance"](2),u["\u0275\u0275textInterpolate"](null==n.data?null:n.data.seance.periode)}}var h,f=((h=function(){function e(t,n,r,i,a,o){_classCallCheck(this,e),this.logger=t,this.homePrv=n,this.router=r,this.modalCtrl=i,this.reservationStrg=a,this.countdown=o,this.TAG="HomePage",this.scrollDepthTriggered=!1,this.reservationStorage={}}return _createClass(e,[{key:"ngOnInit",value:function(){var e=this;this.logger.log(this.TAG,"init"),this.reservationStorage=this.reservationStrg.load(),this.homePrv.data(this.reservationStorage.seance_id).subscribe((function(t){return Object(s.a)(e,void 0,void 0,regeneratorRuntime.mark((function e(){return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:this.logger.log(this.TAG,"home data",t),this.data=t,this.data.seance&&(this.reservationStorage.seance_id=this.data.seance.id,this.reservationStrg.save(this.reservationStorage));case 1:case"end":return e.stop()}}),e,this)})))}),(function(e){return console.log(JSON.stringify(e))}))}},{key:"ngOnDestroy",value:function(){this.logger.log(this.TAG,"destroy")}},{key:"page_categorie",value:function(e){this.router.navigate(["/tabs/home/categorie",{id:e}])}},{key:"page_specifique",value:function(){this.router.navigate(["/prestation"],{state:{demande_specifique:!0}})}},{key:"page_prestation",value:function(e){this.router.navigate(["/tabs/home/prestation",{id:e.id}])}},{key:"page_giveaway",value:function(e){this.router.navigate(["/tabs/home/giveaway",{id:e.id}])}},{key:"logScrolling",value:function(e){return Object(s.a)(this,void 0,void 0,regeneratorRuntime.mark((function t(){return regeneratorRuntime.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:this.scrollDepthTriggered=e.detail.scrollTop>10;case 1:case"end":return t.stop()}}),t,this)})))}}]),e}()).\u0275fac=function(e){return new(e||h)(u["\u0275\u0275directiveInject"](l.a),u["\u0275\u0275directiveInject"](c.g),u["\u0275\u0275directiveInject"](a.g),u["\u0275\u0275directiveInject"](i.O),u["\u0275\u0275directiveInject"](d.b),u["\u0275\u0275directiveInject"](o.a))},h.\u0275cmp=u["\u0275\u0275defineComponent"]({type:h,selectors:[["app-home"]],decls:7,vars:3,consts:[["mode","md"],["class","toolbar-home",4,"ngIf"],[3,"fullscreen","scrollEvents","ionScroll"],[1,"tbi-padding","logo-container"],["src","assets/boti-logo.svg","alt",""],[1,"toolbar-home"],[1,"title"],[1,"content"],[1,"matiere"],[1,"date"]],template:function(e,t){1&e&&(u["\u0275\u0275elementStart"](0,"ion-header",0),u["\u0275\u0275elementStart"](1,"ion-toolbar"),u["\u0275\u0275elementStart"](2,"ion-title"),u["\u0275\u0275template"](3,g,9,3,"div",1),u["\u0275\u0275elementEnd"](),u["\u0275\u0275elementEnd"](),u["\u0275\u0275elementEnd"](),u["\u0275\u0275elementStart"](4,"ion-content",2),u["\u0275\u0275listener"]("ionScroll",(function(e){return t.logScrolling(e)})),u["\u0275\u0275elementStart"](5,"div",3),u["\u0275\u0275element"](6,"img",4),u["\u0275\u0275elementEnd"](),u["\u0275\u0275elementEnd"]()),2&e&&(u["\u0275\u0275advance"](3),u["\u0275\u0275property"]("ngIf",null==t.data?null:t.data.seance),u["\u0275\u0275advance"](1),u["\u0275\u0275property"]("fullscreen",!0)("scrollEvents",!0))},directives:[i.p,i.K,i.J,r.l,i.k],styles:["ion-header[_ngcontent-%COMP%]   ion-toolbar[_ngcontent-%COMP%]{--background:#fff}ion-header[_ngcontent-%COMP%]   img[_ngcontent-%COMP%]{border-radius:0!important}ion-content[_ngcontent-%COMP%]{--background:#fff}ion-grid[_ngcontent-%COMP%]{--ion-grid-padding:0}.logo-container[_ngcontent-%COMP%]{display:flex;align-items:center;justify-content:center;height:100%}.logo-container[_ngcontent-%COMP%]   img[_ngcontent-%COMP%]{width:35%}"]}),h);n.d(t,"HomePageModule",(function(){return p}));var m,v=[{path:"",component:f}],p=((m=function e(){_classCallCheck(this,e)}).\u0275mod=u["\u0275\u0275defineNgModule"]({type:m}),m.\u0275inj=u["\u0275\u0275defineInjector"]({factory:function(e){return new(e||m)},imports:[[r.b,i.L,o.c,a.i.forChild(v)]]}),m)}}]);