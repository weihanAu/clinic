document.addEventListener("DOMContentLoaded",(function(){document.querySelectorAll(".wp-block-hudsonblocks-secondblock").forEach((e=>{e.querySelectorAll(".pagination a").forEach((t=>{t.addEventListener("click",(function(t){t.preventDefault();const n=this.getAttribute("data-page");fetch(`/wp-json/wp/v2/posts?page=${n}&&per_page=2&&offset=2`,{method:"GET",headers:{"Content-Type":"application/json"}}).then((e=>{if(!e.ok)throw new Error("Network response was not ok");return e.json()})).then((t=>{e.innerHTML="",t.forEach((t=>{const n=document.createElement("div");n.innerHTML=`<h2>${t.title.rendered}</h2><div>${t.content.rendered}</div>`,e.appendChild(n)}))})).catch((e=>{console.error("Error fetching posts:",e)}))}))}))}))}));