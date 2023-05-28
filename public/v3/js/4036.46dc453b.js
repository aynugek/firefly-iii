"use strict";(globalThis["webpackChunkfirefly_iii"]=globalThis["webpackChunkfirefly_iii"]||[]).push([[4036],{4036:(e,t,a)=>{a.r(t),a.d(t,{default:()=>$});var i=a(9835),r=a(6970);const n=(0,i.Uk)("Edit"),s=(0,i.Uk)("Delete");function o(e,t,a,o,l,u){const g=(0,i.up)("q-th"),p=(0,i.up)("q-tr"),d=(0,i.up)("router-link"),c=(0,i.up)("q-td"),m=(0,i.up)("q-item-label"),h=(0,i.up)("q-item-section"),w=(0,i.up)("q-item"),f=(0,i.up)("q-list"),b=(0,i.up)("q-btn-dropdown"),y=(0,i.up)("q-table"),q=(0,i.up)("q-fab-action"),_=(0,i.up)("q-fab"),k=(0,i.up)("q-page-sticky"),R=(0,i.up)("q-page"),Z=(0,i.Q2)("close-popup");return(0,i.wg)(),(0,i.j4)(R,null,{default:(0,i.w5)((()=>[(0,i.Wm)(y,{pagination:l.pagination,"onUpdate:pagination":t[0]||(t[0]=e=>l.pagination=e),columns:l.columns,loading:l.loading,rows:l.rows,title:e.$t("firefly.recurring"),class:"q-ma-md","row-key":"id",onRequest:u.onRequest},{header:(0,i.w5)((e=>[(0,i.Wm)(p,{props:e},{default:(0,i.w5)((()=>[((0,i.wg)(!0),(0,i.iD)(i.HY,null,(0,i.Ko)(e.cols,(t=>((0,i.wg)(),(0,i.j4)(g,{key:t.name,props:e},{default:(0,i.w5)((()=>[(0,i.Uk)((0,r.zw)(t.label),1)])),_:2},1032,["props"])))),128))])),_:2},1032,["props"])])),body:(0,i.w5)((e=>[(0,i.Wm)(p,{props:e},{default:(0,i.w5)((()=>[(0,i.Wm)(c,{key:"name",props:e},{default:(0,i.w5)((()=>[(0,i.Wm)(d,{to:{name:"recurring.show",params:{id:e.row.id}},class:"text-primary"},{default:(0,i.w5)((()=>[(0,i.Uk)((0,r.zw)(e.row.name),1)])),_:2},1032,["to"])])),_:2},1032,["props"]),(0,i.Wm)(c,{key:"menu",props:e},{default:(0,i.w5)((()=>[(0,i.Wm)(b,{color:"primary",label:"Actions",size:"sm"},{default:(0,i.w5)((()=>[(0,i.Wm)(f,null,{default:(0,i.w5)((()=>[(0,i.wy)(((0,i.wg)(),(0,i.j4)(w,{to:{name:"recurring.edit",params:{id:e.row.id}},clickable:""},{default:(0,i.w5)((()=>[(0,i.Wm)(h,null,{default:(0,i.w5)((()=>[(0,i.Wm)(m,null,{default:(0,i.w5)((()=>[n])),_:1})])),_:1})])),_:2},1032,["to"])),[[Z]]),(0,i.wy)(((0,i.wg)(),(0,i.j4)(w,{clickable:"",onClick:t=>u.deleteRecurring(e.row.id,e.row.name)},{default:(0,i.w5)((()=>[(0,i.Wm)(h,null,{default:(0,i.w5)((()=>[(0,i.Wm)(m,null,{default:(0,i.w5)((()=>[s])),_:1})])),_:1})])),_:2},1032,["onClick"])),[[Z]])])),_:2},1024)])),_:2},1024)])),_:2},1032,["props"])])),_:2},1032,["props"])])),_:1},8,["pagination","columns","loading","rows","title","onRequest"]),(0,i.Wm)(k,{offset:[18,18],position:"bottom-right"},{default:(0,i.w5)((()=>[(0,i.Wm)(_,{color:"green",direction:"up",icon:"fas fa-chevron-up",label:"Actions","label-position":"left",square:"","vertical-actions-align":"right"},{default:(0,i.w5)((()=>[(0,i.Wm)(q,{to:{name:"recurring.create"},color:"primary",icon:"fas fa-exchange-alt",label:"New recurring transaction",square:""},null,8,["to"])])),_:1})])),_:1})])),_:1})}var l=a(7913),u=a(1569);class g{list(e,t){let a="/api/v1/recurrences";return u.api.get(a,{params:{page:e,cache:t}})}}var p=a(3555);const d={name:"Index",watch:{$route(e){"recurring.index"===e.name&&(this.page=1,this.updateBreadcrumbs(),this.triggerUpdate())}},data(){return{rows:[],pagination:{sortBy:"desc",descending:!1,page:1,rowsPerPage:5,rowsNumber:100},loading:!1,columns:[{name:"name",label:"Name",field:"name",align:"left"},{name:"menu",label:" ",field:"menu",align:"right"}],store:null}},computed:{},created(){this.pagination.rowsPerPage=this.getListPageSize,this.store=(0,p.S)()},mounted(){this.type=this.$route.params.type,null!==this.store.getRange.start&&null!==this.store.getRange.end||this.store.$onAction((({name:e,$store:t,args:a,after:i,onError:r})=>{i((t=>{"setRange"===e&&(this.range=t,this.triggerUpdate())}))})),null!==this.store.getRange.start&&null!==this.store.getRange.end&&(this.range={start:this.store.getRange.start,end:this.store.getRange.end},this.triggerUpdate())},methods:{deleteRecurring:function(e,t){this.$q.dialog({title:"Confirm",message:'Do you want to delete recurring transaction "'+t+'"?',cancel:!0,persistent:!0}).onOk((()=>{this.destroyRecurring(e)}))},destroyRecurring:function(e){new l.Z("recurrences").destroy(e).then((()=>{this.store.refreshCacheKey(),this.triggerUpdate()}))},updateBreadcrumbs:function(){this.$route.meta.pageTitle="firefly.Recurring",this.$route.meta.breadcrumbs=[{title:"Recurring"}]},onRequest:function(e){this.page=e.pagination.page,this.triggerUpdate()},triggerUpdate:function(){if(this.loading)return;if(null===this.range.start||null===this.range.end)return;this.loading=!0;const e=new g;this.rows=[],e.list(this.page,this.getCacheKey).then((e=>{this.pagination.rowsPerPage=e.data.meta.pagination.per_page,this.pagination.rowsNumber=e.data.meta.pagination.total,this.pagination.page=this.page;for(let t in e.data.data)if(e.data.data.hasOwnProperty(t)){let a=e.data.data[t],i={id:a.id,name:a.attributes.title};this.rows.push(i)}this.loading=!1}))}}};var c=a(1639),m=a(9885),h=a(2429),w=a(3532),f=a(1682),b=a(7220),y=a(2045),q=a(3246),_=a(490),k=a(1233),R=a(3115),Z=a(3388),W=a(9361),Q=a(935),P=a(2146),U=a(9984),v=a.n(U);const C=(0,c.Z)(d,[["render",o]]),$=C;v()(d,"components",{QPage:m.Z,QTable:h.Z,QTr:w.Z,QTh:f.Z,QTd:b.Z,QBtnDropdown:y.Z,QList:q.Z,QItem:_.Z,QItemSection:k.Z,QItemLabel:R.Z,QPageSticky:Z.Z,QFab:W.Z,QFabAction:Q.Z}),v()(d,"directives",{ClosePopup:P.Z})}}]);