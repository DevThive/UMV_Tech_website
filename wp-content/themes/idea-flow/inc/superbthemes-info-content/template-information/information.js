jQuery(document).ready(function(t){let e=jQuery("#editor"),n=jQuery("#site-editor"),r=n.length>0&&0===e.length,o=r?n:e,i=jQuery("#tmpl-superbthemes-js-information-wrapper").text();function c(t){var e;let n;l(".block-editor-inserter__patterns-category-panel, .block-editor-inserter__category-panel .block-editor-block-patterns-list"),l(".block-editor-inserter__tips"),((n=(e=t).find(".components-item.block-editor-inserter__patterns-category")).length||(n=e.find(".block-editor-inserter__category-tab")).length)&&(n.off("click.superbthemes-information-watcher"),n.on("click.superbthemes-information-watcher",function(){l(".block-editor-inserter__patterns-category-panel, .block-editor-inserter__category-panel .block-editor-block-patterns-list")})),function t(e){let n=e.find(".components-button.block-editor-inserter__patterns-explore-button");n.length&&(n.off("click.superbthemes-information-watcher"),n.on("click.superbthemes-information-watcher",function(){l(".block-editor-block-patterns-explorer__sidebar")}))}(t)}function l(t){setTimeout(function(){let e=jQuery(t);e.length&&(e.find(".superbthemes-js-information-wrapper").remove(),e.children().last().after(i))},100)}window.wp.data.subscribe(function(){setTimeout(function(){let t=o.find(".block-editor-inserter__tabs, .block-editor-tabbed-sidebar");if(!t.length)return;let e=t.find(".components-button.components-tab-panel__tabs-item");(e.length||(e=t.find('button[role="tab"]')).length)&&(c(t),e.off("click.superbthemes-information-watcher"),e.on("click.superbthemes-information-watcher",function(){setTimeout(()=>{c(t)},1)}))},1)})});